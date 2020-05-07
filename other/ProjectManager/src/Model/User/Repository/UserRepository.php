<?php

declare(strict_types=1);

namespace other\ProjectManager\src\Model\User\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;
use other\ProjectManager\src\Infrastructure\Exception\EntityNotFoundException;
use other\ProjectManager\src\Model\User\Entity\Email;
use other\ProjectManager\src\Model\User\Entity\Network;
use other\ProjectManager\src\Model\User\Entity\User;
use Ramsey\Uuid\UuidInterface;

class UserRepository implements IUserRepository
{

    private EntityManagerInterface $em;
    private ObjectRepository $repository;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repository = $em->getRepository(User::class);
    }

    public function get(string $id): User
    {
        /** @var User $user */
        $user = $this->repository->find($id);
        if ($user === null) {
            throw new EntityNotFoundException(User::class, ["id = {$id}"]);
        }
        return $user;
    }
    public function getByEmail(Email $email): User
    {
        /** @var User $user */
        $user = $this->repository->findOneBy(['email' => $email]);
        if ($user === null) {
            throw new EntityNotFoundException(User::class, ["email = `{$email->getValue()}`"]);
        }
        return $user;
    }

    public function hasByEmail(Email $email): bool
    {
        return $this->repository->createQueryBuilder('u')
                ->select('COUNT(u.id)')
                ->andWhere('u.email = :email')
                ->setParameter(':email', $email->getValue())
                ->getQuery()
                ->getSingleScalarResult() > 0;
    }

    public function findByEmail(Email $email): ?User
    {
        /** @var User $user */
        $user = $this->repository->findOneBy(['email' => $email]);
        return $user;
    }

    public function hasByNetworkIdentity(string $networkName, string $identity): bool
    {
        return $this->repository->createQueryBuilder('u')
                ->select('COUNT(u.id)')
                ->innerJoin('u.networks', 'n')
                ->andWhere('n.name = :network and n.identity = :identity')
                ->setParameters([
                    ':network' => $networkName,
                    ':identity' => $identity
                ])
                ->getQuery()->getSingleScalarResult() > 0;
    }

    public function findByNetworkIdentity(string $networkName, string $identity): ?User
    {
        /** @var Network $network */
        $network = $this->em->getRepository(Network::class)->findOneBy([
            'name' => $networkName,
            'identity' => $identity
        ]);
        return $network !== null ? $network->getUser() : null;
    }

    public function findByConfirmToken(string $token): ?User
    {
        /** @var User $user */
        $user = $this->repository->findOneBy(['confirmToken' => $token]);
        return $user;
    }
    public function findByResetToken(string $token): ?User
    {
        /** @var User $user */
        $user = $this->repository->findOneBy(['resetToken.token' => $token]);
        return $user;
    }
    public function add(User $user): void
    {
        $this->em->persist($user);
    }
}
