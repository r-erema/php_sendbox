<?php
/**
 * Test-related English Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['test_config_file'] = 'Controleren of <span class="mono">[[+file]]</span> bestaat en schrijfbaar is: ';
$_lang['test_config_file_nw'] = 'Voor nieuwe Linux/Unix installaties, maak een nieuw leeg bestaand aan met de naam <span class="mono">[[+key]].inc.php</span> in de MODX core <span class="mono">config/</span> map, waarbij PHP schrijfrechten heeft.';
$_lang['test_db_check'] = 'Verbinding met database opzetten:';
$_lang['test_db_check_conn'] = 'Controleer de verbinding details en probeer het opnieuw.';
$_lang['test_db_failed'] = 'Database verbinding niet gelukt!';
$_lang['test_db_setup_create'] = 'De installer zal proberen de database aan te maken.';
$_lang['test_dependencies'] = 'PHP controleren voor de zlib dependency: ';
$_lang['test_dependencies_fail_zlib'] = 'De "zlib" extensie is niet geïnstalleerd met PHP. Deze extensie is nodig om MODX te gebruiken. Activeer deze en probeer het opnieuw.';
$_lang['test_directory_exists'] = 'Controleren of de <span class="mono">[[+dir]]</span> map bestaat: ';
$_lang['test_directory_writable'] = 'Controleren of de <span class="mono">[[+dir]]</span> map schrijfbaar is: ';
$_lang['test_memory_limit'] = 'Controleren of de memory_limit instelling tenminste 24M is:';
$_lang['test_memory_limit_fail'] = 'De memory_limit instelling is ingesteld op [[+memory]], wat lager is dan de aanbevolen instelling van 24M. MODX heeft geprobeerd dit limiet te verhogen maar dat is niet gelukt. Pas je php.ini aan om de memory_limit instelling tenminste 24M te geven voordat je doorgaat met de installatie. Mocht je daarna nog steeds problemen hebben (zoals een leeg wit scherm), probeer dan 32M, 64M of hoger.';
$_lang['test_memory_limit_success'] = 'OKE! Ingesteld op [[+memory]]';
$_lang['test_mysql_version_5051'] = 'MODX zal problemen hebben met de geïnstalleerde MySQL versie [[+version]], omdat hier verschillende bugs in zitten gerelateerd aan de PDO drivers. Upgrade MySQL om deze problemen te verhelpen. Ook als je besluit om niet MODX te gebruiken is het aan te raden voor de veiligheid en stabiliteit van je website deze versie te upgraden.';
$_lang['test_mysql_version_client_nf'] = 'Kon de MySQL Client versie niet detecteren.';
$_lang['test_mysql_version_client_nf_msg'] = 'MODX kon niet detecteren welke MySQL Client versie geïnstalleerd is via mysql_get_client_info(). Zorg er voor dat de geïnstalleerde versie minstens 4.1.20 is voordat je doorgaat met de installatie. ';
$_lang['test_mysql_version_client_old'] = 'MODX kan mogelijk problemen ondervinden doordat er een erg oude MySQL Client versie is geïnstalleerd ([[+version]]).';
$_lang['test_mysql_version_client_old_msg'] = 'MODX staat installaties met deze MySQL Client versie toe, maar kan niet garanderen dat alle functionaliteiten beschikbaar zijn of correct werken wanner oudere versies in gebruik zijn.';
$_lang['test_mysql_version_client_start'] = 'MySQL Client versie controleren:';
$_lang['test_mysql_version_fail'] = 'De server gebruikt MySQL [[+version]], en MODX Revolution heeft tenminste MySQL 4.1.20 of later nodig. Upgrade de MySQL versie naar tenminste 4.1.20. ';
$_lang['test_mysql_version_server_nf'] = 'Kon de MySQL Server versie niet detecteren!';
$_lang['test_mysql_version_server_nf_msg'] = 'MODX kon niet detecteren welke MySQL Server versie geïnstalleerd is via mysql_get_server_info(). Zorg er voor dat de geïnstalleerde versie minstens 4.1.20 is voordat je doorgaat met de installatie. ';
$_lang['test_mysql_version_server_start'] = 'MySQL Server versie controleren:';
$_lang['test_mysql_version_success'] = 'OKE! Versie: [[+version]]';
$_lang['test_nocompress'] = 'Controleren of CSS/JS compressie moet worden uitgeschakeld: ';
$_lang['test_nocompress_disabled'] = 'OK! Uitgeschakeld.';
$_lang['test_nocompress_skip'] = 'Niet geselecteerd, test overgeslagen.';
$_lang['test_php_version_fail'] = 'De server draait op PHP [[+version]], en MODX Revolution heeft tenminste PHP 5.1.1 of later nodig. Upgrade PHP naar tenminste 5.1.1, maar bij voorkeur naar 5.3.2 of hoger.';
$_lang['test_php_version_516'] = 'MODX zal problemen hebben met de geïnstalleerde PHP versie ([[+version]]), omdat hier veel bugs in zitten gerelateerd aan de PDO drivers. Upgrade PHP naar versie 5.3.0 of hoger, welke deze problemen verhelpen. MODX raadt versie 5.3.2 of hoger aan. Ook als je besluit geen MODX te gebruiken is het voor de veiligheid en stabiliteit van je website aan te raden de versie te upgraden.';
$_lang['test_php_version_520'] = 'MODX zal problemen hebben met de geïnstalleerde PHP versie ([[+version]]), omdat hier veel bugs in zitten gerelateerd aan de PDO drivers. Upgrade PHP naar versie 5.3.0 of hoger, welke deze problemen verhelpen. MODX raadt versie 5.3.2 of hoger aan. Ook als je besluit geen MODX te gebruiken is het voor de veiligheid en stabiliteit van je website aan te raden de versie te upgraden.';
$_lang['test_php_version_start'] = 'PHP Versie controleren:';
$_lang['test_php_version_success'] = 'OKE! Versie: [[+version]]';
$_lang['test_safe_mode_start'] = 'Controleren of safe_mode uitgeschakeld is:';
$_lang['test_safe_mode_fail'] = 'MODX heeft gedetecteerd dat safe_mode ingeschakeld is. Om door te gaan met de installatie dien je safe_mode uit te zetten in de PHP configuratie.';
$_lang['test_sessions_start'] = 'Controleren of sessies juist zijn geconfigureerd.';
$_lang['test_simplexml'] = 'Controleren of SimpleXML is geïnstalleerd:';
$_lang['test_simplexml_nf'] = 'Kon SimpleXML niet vinden!';
$_lang['test_simplexml_nf_msg'] = 'MODX kon SimpleXML niet vinden in de PHP configuratie. Package Management en andere functionaliteit in MODX zal niet werken zonder deze PHP extensie. Je kan doorgaan met de installatie, maar om gebruik te maken van deze functies dien je SimpleXML aan te zetten.';
$_lang['test_suhosin'] = 'Suhosin configuratie controleren:';
$_lang['test_suhosin_max_length'] = 'Suhosin GET max value te laag!';
$_lang['test_suhosin_max_length_err'] = 'De suhosin PHP extensie wordt op dit moment gebruikt, en de suhosin.get.max_value_length is te laag ingesteld om in de manager javascript bestanden te comprimeren. MODX raadt aan om deze waarde in te stellen op 4096; tot die tijd zal MODX automatisch javascript compressie (compress_js instelling) uitschakelen om fouten te voorkomen.';
$_lang['test_table_prefix'] = 'Tabel prefix `[[+prefix]]` controleren:';
$_lang['test_table_prefix_inuse'] = 'De tabel prefix is al in gebruik in deze database!';
$_lang['test_table_prefix_inuse_desc'] = 'Setup kon de geselecteerde database niet gebruiken aangezien deze al tabellen bevat met de prefix welke was ingegeven. Kies een nieuwe tabel prefix en probeer dan opnieuw.';
$_lang['test_table_prefix_nf'] = 'Tabel prefix bestaat nog niet in deze database!';
$_lang['test_table_prefix_nf_desc'] = 'Setup kon niet naar de geselecteerde database installeren, omdat deze geen bestaande tabellen met de ingegeven prefix bevat. Kies de juiste tabel prefix en probeer dan opnieuw.';
$_lang['test_zip_memory_limit'] = 'Controleren of het geheugen limiet op tenminste 24M is ingesteld voor zip extensies:';
$_lang['test_zip_memory_limit_fail'] = 'MODX heeft geconstateerd dat de memory_limit instelling lager is dan de aanbevolen instelling van 24M. MODX heeft geprobeerd dit te veranderen maar dat is niet gelukt. Pas de instelling in je php.ini bestand aan voordat je doorgaat, zodat de zip extensies juist kunnen werken.';