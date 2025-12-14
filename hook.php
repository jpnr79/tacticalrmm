<?php
declare(strict_types=1);

/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/


/**
 * Install plugin TacticalRMM
 * @return bool
 */




function plugin_tacticalrmm_install(): bool
{
    global $DB;
    $table = "glpi_plugin_tacticalrmm_configs";
    $query = "CREATE TABLE IF NOT EXISTS `$table` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `url` varchar(255) NOT NULL DEFAULT '',
        `field` varchar(255) NOT NULL DEFAULT 'serial',
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    $DB->doQuery($query);
    $insert = "INSERT IGNORE INTO `$table` (`id`, `url`, `field`) VALUES (1, '', 'serial');";
    $DB->doQuery($insert);
    return true;
}

/**
 * Uninstall plugin TacticalRMM
 * @return bool
 */



function plugin_tacticalrmm_uninstall(): bool
{
    global $DB;
    $table = "glpi_plugin_tacticalrmm_configs";
    $DB->doQuery("DROP TABLE IF EXISTS `$table`;");
    return true;
}

/**
 * Handle plugin database schema and data migrations
 * REQUIRED for GLPI 11+
 *
 * @return array
 */
function plugin_version_tacticalrmm_modifications() {
    return [
        // Example: [ 'version' => '1.0.0', 'query' => 'CREATE TABLE ...' ]
        // Add migration steps here as needed for future versions
    ];
}