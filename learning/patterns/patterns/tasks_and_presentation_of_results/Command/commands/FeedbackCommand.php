<?php

namespace Command;

class FeedbackCommand extends Command{
    public function execute(CommandContext $context) {
        $msgSystem = Registry::getMessageSystem();
        $email = $context->get('email');
        $msg = $context->get('msg');
        $topic = $context->get('topic');
        $result = $msgSystem->send($email, $msg, $topic);
        if (!$result) {
            $context->setError($msgSystem->getError());
            return false;
        } else {
            return true;
        }
    }
}