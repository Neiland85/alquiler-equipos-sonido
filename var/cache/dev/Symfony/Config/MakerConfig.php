<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MakerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $rootNamespace;
    private $_usedProperties = [];

    /**
     * Set the root namespace for the Maker bundle.
     *
     * @default 'App'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootNamespace($value): static
    {
        $this->_usedProperties['rootNamespace'] = true;
        $this->rootNamespace = $value;

        return $this;
    }

    /**
     * Get the extension alias for the Maker bundle.
     *
     * @return string
     */
    public function getExtensionAlias(): string
    {
        return 'maker';
    }

    /**
     * Constructor for the MakerConfig class.
     *
     * @param array $value
     * @throws InvalidConfigurationException
     */
    public function __construct(array $value = [])
    {
        if (array_key_exists('root_namespace', $value)) {
            $this->_usedProperties['rootNamespace'] = true;
            $this->rootNamespace = $value['root_namespace'];
            unset($value['root_namespace']);
        }

        if (!empty($value)) {
            throw new InvalidConfigurationException(sprintf(
                'The following keys are not supported by "%s": %s',
                __CLASS__,
                implode(', ', array_keys($value))
            ));
        }
    }

    /**
     * Convert the configuration to an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['rootNamespace'])) {
            $output['root_namespace'] = $this->rootNamespace;
        }

        return $output;
    }
}
