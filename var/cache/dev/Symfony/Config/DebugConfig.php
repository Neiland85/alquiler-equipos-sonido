<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DebugConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $maxItems;
    private $minDepth;
    private $maxStringLength;
    private $dumpDestination;
    private $theme;
    private $_usedProperties = [];

    /**
     * Set the maximum number of displayed items past the first level.
     * 
     * -1 means no limit.
     * 
     * @default 2500
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxItems(ParamConfigurator|int $value): static
    {
        $this->_usedProperties['maxItems'] = true;
        $this->maxItems = $value;

        return $this;
    }

    /**
     * Set the minimum tree depth to clone all the items.
     * 
     * 1 is the default.
     * 
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function minDepth(ParamConfigurator|int $value): static
    {
        $this->_usedProperties['minDepth'] = true;
        $this->minDepth = $value;

        return $this;
    }

    /**
     * Set the maximum length of displayed strings.
     * 
     * -1 means no limit.
     * 
     * @default -1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxStringLength(ParamConfigurator|int $value): static
    {
        $this->_usedProperties['maxStringLength'] = true;
        $this->maxStringLength = $value;

        return $this;
    }

    /**
     * Set the stream URL where dumps should be written to.
     * 
     * Examples: php://stderr, tcp://%env(VAR_DUMPER_SERVER)% (for "server:dump" command)
     * 
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dumpDestination(ParamConfigurator|mixed $value): static
    {
        $this->_usedProperties['dumpDestination'] = true;
        $this->dumpDestination = $value;

        return $this;
    }

    /**
     * Set the color theme for the dump() output.
     * 
     * Options: "dark" (default) or "light"
     * 
     * @example dark
     * @default 'dark'
     * @param ParamConfigurator|'dark'|'light' $value
     * @return $this
     */
    public function theme(ParamConfigurator|string $value): static
    {
        $this->_usedProperties['theme'] = true;
        $this->theme = $value;

        return $this
