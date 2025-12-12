<?php
declare(strict_types=1);
/****************************************************************************************
 **
 **      GLPI Plugin for TacticalRMM - Developed by JP Ros
 **
 ****************************************************************************************/

/**
 * Config handler for TacticalRMM plugin
 */
class PluginTacticalrmmConfig
{
    /**
     * Get TacticalRMM URL
     * @return string|null
     */
    public static function getUrl(): ?string
    {
        return Config::getConfigurationValues('plugin:tacticalrmm')["url"] ?? null;
    }

    /**
     * Set TacticalRMM URL
     * @param string $value
     * @return void
     */
    public static function setUrl(string $value): void
    {
        Config::setConfigurationValues('plugin:tacticalrmm', ["url" => $value]);
    }

    /**
     * Get field used for TacticalRMM
     * @return string|null
     */
    public static function getField(): ?string
    {
        return Config::getConfigurationValues('plugin:tacticalrmm')["field"] ?? null;
    }

    /**
     * Set field for TacticalRMM
     * @param string $value
     * @return void
     */
    public static function setField(string $value): void
    {
        Config::setConfigurationValues('plugin:tacticalrmm', ["field" => $value]);
    }
}

?>