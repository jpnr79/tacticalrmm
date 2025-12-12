<?php
declare(strict_types=1);

use Glpi\Config;
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
    Config::setConfigurationValues('plugin:tacticalrmm', ['url' => '', 'field' => 'serial']);
    return true;
}

/**
 * Uninstall plugin TacticalRMM
 * @return bool
 */
function plugin_tacticalrmm_uninstall(): bool
{
    $config = new Config();
    $config->deleteConfigurationValues('plugin:tacticalrmm', ['url']);
    $config->deleteConfigurationValues('plugin:tacticalrmm', ['field']);
    return true;
}