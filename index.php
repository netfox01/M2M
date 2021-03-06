<?php
require_once 'vendor/autoload.php';

$mysql = "CREATE TABLE `zbo_visits` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `cms_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `user_id` INT(10) UNSIGNED NULL DEFAULT NULL,
    `http_url` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
    `http_method` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
    `http_path` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
    `ip` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
    `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
    `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id`),
    INDEX `zbo_visits_cms_id_foreign` (`cms_id`),
    INDEX `zbo_visits_user_id_foreign` (`user_id`),
    CONSTRAINT `zbo_visits_cms_id_foreign` FOREIGN KEY (`cms_id`) REFERENCES `cms_lang` (`id_cms_lang`) ON DELETE CASCADE,
    CONSTRAINT `zbo_visits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `zbo_users` (`id`) ON DELETE CASCADE
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=117
;
CREATE TABLE `logs` (
    `ts` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `evt` MEDIUMINT(16) UNSIGNED NOT NULL,
    `err` MEDIUMINT(16) UNSIGNED NULL DEFAULT '0',
    `uid` INT(10) UNSIGNED NULL DEFAULT '0',
    `ip` VARCHAR(48) NULL DEFAULT NULL,
    `data` VARCHAR(256) NULL DEFAULT NULL,
    INDEX `uid` (`uid`)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM
;
create table `langs` (
    `id` TINYINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
    `label` VARCHAR(32) NOT NULL,
    `locale` VARCHAR(20) NOT NULL,
    `enabled` TINYINT(1) UNSIGNED NULL DEFAULT '0',
    PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=4;classes;
SELECT * FROM logs WHERE id = 1;
";

// $mysql_array =preg_split("/(CREATE +(?:TEMPORARY +)?TABLE +(?:IF +NOT +EXISTS)?)/is", $mysql, null ,PREG_SPLIT_DELIM_CAPTURE);
// $mysql_array = explode('CREATE TABLE', $mysql);
// var_dump($mysql_array);
// exit();
/*echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";*/
$mysql_to_migration = New MySqlToMigration($mysql);
// $migration_code = $mysql_to_migration->getMigrationCode();
// $created_files = $mysql_to_migration->createMigrationFiles();
/*test git*/
