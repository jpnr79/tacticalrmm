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
        $values = Plugin::getConfigurationValues('tacticalrmm');
        return $values["url"] ?? null;
    }

    /**
     * Set TacticalRMM URL
     * @param string $value
     * @return void
     */
    public static function setUrl(string $value): void
    {
        Plugin::setConfigurationValues('tacticalrmm', ["url" => $value]);
    }

    /**
     * Get field used for TacticalRMM
     * @return string|null
     */
    public static function getField(): ?string
    {
        $values = Plugin::getConfigurationValues('tacticalrmm');
        return $values["field"] ?? null;
    }

    /**
     * Set field for TacticalRMM
     * @param string $value
     * @return void
     */
    public static function setField(string $value): void
    {
        Plugin::setConfigurationValues('tacticalrmm', ["field" => $value]);
    }
}

?>