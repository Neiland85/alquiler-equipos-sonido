<?php

namespace Symfony\Config;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'GlobalConfig.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'DateConfig.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'NumberFormatConfig.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'MailerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $formThemes;
    private $globals;
    private $autoescapeService;
    private $autoescapeServiceMethod;
    private $baseTemplateClass;
    private $cache;
    private $charset;
    private $debug;
    private $strictVariables;
    private $autoReload;
    private $optimizations;
    private $defaultPath;
    private $fileNamePattern;
    private $paths;
    private $date;
    private $numberFormat;
    private $mailer;
    private $_usedProperties = [];

    /**
     * Sets the form themes.
     *
     * @param ParamConfigurator|array $value
     * @return $this
     */
    public function formThemes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['formThemes'] = true;
        $this->formThemes = $value;

        return $this;
    }

    /**
     * Configures global variables for Twig.
     *
     * @param mixed $value
     * @return \Symfony\Config\Twig\GlobalConfig|$this
     * @throws InvalidConfigurationException
     */
    public function global(string $key, mixed $value = []): \Symfony\Config\Twig\GlobalConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['globals'] = true;
            $this->globals[$key] = $value;

            return $this;
        }

        if (!isset($this->globals[$key]) || !$this->globals[$key] instanceof \Symfony\Config\Twig\GlobalConfig) {
            $this->_usedProperties['globals'] = true;
            $this->globals[$key] = new \Symfony\Config\Twig\GlobalConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "global()" has already been initialized. You cannot pass values the second time you call global().');
        }

        return $this->globals[$key];
    }

    /**
     * Sets the service for autoescaping.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoescapeService($value): static
    {
        $this->_usedProperties['autoescapeService'] = true;
        $this->autoescapeService = $value;

        return $this;
    }

    /**
     * Sets the method for the autoescape service.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoescapeServiceMethod($value): static
    {
        $this->_usedProperties['autoescapeServiceMethod'] = true;
        $this->autoescapeServiceMethod = $value;

        return $this;
    }

    /**
     * Sets the base template class.
     *
     * @param ParamConfigurator|mixed $value
     * @deprecated This property is deprecated.
     * @return $this
     */
    public function baseTemplateClass($value): static
    {
        $this->_usedProperties['baseTemplateClass'] = true;
        $this->baseTemplateClass = $value;

        return $this;
    }

    /**
     * Sets the cache directory.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): static
    {
        $this->_usedProperties['cache'] = true;
        $this->cache = $value;

        return $this;
    }

    /**
     * Sets the character set.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function charset($value): static
    {
        $this->_usedProperties['charset'] = true;
        $this->charset = $value;

        return $this;
    }

    /**
     * Enables or disables debugging.
     *
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): static
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;

        return $this;
    }

    /**
     * Enables or disables strict variables.
     *
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function strictVariables($value): static
    {
        $this->_usedProperties['strictVariables'] = true;
        $this->strictVariables = $value;

        return $this;
    }

    /**
     * Enables or disables auto-reloading.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoReload($value): static
    {
        $this->_usedProperties['autoReload'] = true;
        $this->autoReload = $value;

        return $this;
    }

    /**
     * Sets the optimization level.
     *
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function optimizations($value): static
    {
        $this->_usedProperties['optimizations'] = true;
        $this->optimizations = $value;

        return $this;
    }

    /**
     * Sets the default path for templates.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultPath($value): static
    {
        $this->_usedProperties['defaultPath'] = true;
        $this->defaultPath = $value;

        return $this;
    }

    /**
     * Sets the file name pattern.
     *
     * @param ParamConfigurator|array|string $value
     * @return $this
     */
    public function fileNamePattern(ParamConfigurator|array|string $value): static
    {
        $this->_usedProperties['fileNamePattern'] = true;
        $this->fileNamePattern = $value;

        return $this;
    }

    /**
     * Adds a path for templates.
     *
     * @param string $paths
     * @param mixed $value
     * @return $this
     */
    public function path(string $paths, mixed $value): static
    {
        $this->_usedProperties['paths'] = true;
        $this->paths[$paths] = $value;

        return $this;
    }

    /**
     * Configures the default date format.
     *
     * @param array $value
     * @return \Symfony\Config\Twig\DateConfig
     * @throws InvalidConfigurationException
     */
    public function date(array $value = []): \Symfony\Config\Twig\DateConfig
    {
        if (null === $this->date) {
            $this->_usedProperties['date'] = true;
            $this->date = new \Symfony\Config\Twig\DateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "date()" has already been initialized. You cannot pass values the second time you call date().');
        }

        return $this->date;
    }

    /**
     * Configures the default number format.
     *
     * @param array $value
     * @return \Symfony\Config\Twig\NumberFormatConfig
     * @throws InvalidConfigurationException
     */
    public function numberFormat(array $value = []): \Symfony\Config\Twig\NumberFormatConfig
    {
        if (null === $this->numberFormat) {
            $this->_usedProperties['numberFormat'] = true;
            $this->numberFormat = new \Symfony\Config\Twig\NumberFormatConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "numberFormat()" has already been initialized. You cannot pass values the second time you call numberFormat().');
        }

        return $this->numberFormat;
    }

    /**
     * Configures the mailer options for Twig.
     *
     * @param array $value
     * @return \Symfony\Config\Twig\MailerConfig
     * @throws InvalidConfigurationException
     */
    public function mailer(array $value = []): \Symfony\Config\Twig\MailerConfig
    {
        if (null === $this->mailer) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = new \Symfony\Config\Twig\MailerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mailer()" has already been initialized. You cannot pass values the second time you call mailer().');
        }

        return $this->mailer;
    }

    /**
     * Gets the extension### Script Mejorado: `TwigConfig.php`

```php
<?php

namespace Symfony\Config;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'GlobalConfig.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'DateConfig.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'NumberFormatConfig.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Twig' . DIRECTORY_SEPARATOR . 'MailerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $formThemes;
    private $globals;
    private $autoescapeService;
    private $autoescapeServiceMethod;
    private $baseTemplateClass;
    private $cache;
    private $charset;
    private $debug;
    private $strictVariables;
    private $autoReload;
    private $optimizations;
    private $defaultPath;
    private $fileNamePattern;
    private $paths;
    private $date;
    private $numberFormat;
    private $mailer;
    private $_usedProperties = [];

    /**
     * Set the form themes.
     *
     * @param ParamConfigurator|array $value
     * @return $this
     */
    public function formThemes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['formThemes'] = true;
        $this->formThemes = $value;

        return $this;
    }

    /**
     * Set global variables for Twig.
     *
     * @param mixed $value
     * @return \Symfony\Config\Twig\GlobalConfig|$this
     * @throws InvalidConfigurationException
     */
    public function global(string $key, mixed $value = []): \Symfony\Config\Twig\GlobalConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['globals'] = true;
            $this->globals[$key] = $value;

            return $this;
        }

        if (!isset($this->globals[$key]) || !$this->globals[$key] instanceof \Symfony\Config\Twig\GlobalConfig) {
            $this->_usedProperties['globals'] = true;
            $this->globals[$key] = new \Symfony\Config\Twig\GlobalConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "global()" has already been initialized. You cannot pass values the second time you call global().');
        }

        return $this->globals[$key];
    }

    /**
     * Set the autoescape service.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoescapeService($value): static
    {
        $this->_usedProperties['autoescapeService'] = true;
        $this->autoescapeService = $value;

        return $this;
    }

    /**
     * Set the method for the autoescape service.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoescapeServiceMethod($value): static
    {
        $this->_usedProperties['autoescapeServiceMethod'] = true;
        $this->autoescapeServiceMethod = $value;

        return $this;
    }

    /**
     * Set the base template class.
     *
     * @param ParamConfigurator|mixed $value
     * @deprecated This property is deprecated.
     * @return $this
     */
    public function baseTemplateClass($value): static
    {
        $this->_usedProperties['baseTemplateClass'] = true;
        $this->baseTemplateClass = $value;

        return $this;
    }

    /**
     * Set the cache directory.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): static
    {
        $this->_usedProperties['cache'] = true;
        $this->cache = $value;

        return $this;
    }

    /**
     * Set the character set.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function charset($value): static
    {
        $this->_usedProperties['charset'] = true;
        $this->charset = $value;

        return $this;
    }

    /**
     * Enable or disable debugging.
     *
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): static
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;

        return $this;
    }

    /**
     * Enable or disable strict variables.
     *
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function strictVariables($value): static
    {
        $this->_usedProperties['strictVariables'] = true;
        $this->strictVariables = $value;

        return $this;
    }

    /**
     * Enable or disable auto-reloading.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoReload($value): static
    {
        $this->_usedProperties['autoReload'] = true;
        $this->autoReload = $value;

        return $this;
    }

    /**
     * Set the optimization level.
     *
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function optimizations($value): static
    {
        $this->_usedProperties['optimizations'] = true;
        $this->optimizations = $value;

        return $this;
    }

    /**
     * Set the default path for templates.
     *
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultPath($value): static
    {
        $this->_usedProperties['defaultPath'] = true;
        $this->defaultPath = $value;

        return $this;
    }

    /**
     * Set the file name pattern.
     *
     * @param ParamConfigurator|array|string $value
     * @return $this
     */
    public function fileNamePattern(ParamConfigurator|array|string $value): static
    {
        $this->_usedProperties['fileNamePattern'] = true;
        $this->fileNamePattern = $value;

        return $this;
    }

    /**
     * Add a path for templates.
     *
     * @param string $paths
     * @param mixed $value
     * @return $this
     */
    public function path(string $paths, mixed $value): static
    {
        $this->_usedProperties['paths'] = true;
        $this->paths[$paths] = $value;

        return $this;
    }

    /**
     * Configure the default date format.
     *
     * @param array $value
     * @return \Symfony\Config\Twig\DateConfig
     * @throws InvalidConfigurationException
     */
    public function date(array $value = []): \Symfony\Config\Twig\DateConfig
    {
        if (null === $this->date) {
            $this->_usedProperties['date'] = true;
            $this->date = new \Symfony\Config\Twig\DateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "date()" has already been initialized. You cannot pass values the second time you call date().');
        }

        return $this->date;
    }

    /**
     * Configure the default number format.
     *
     * @param array $value
     * @return \Symfony\Config\Twig\NumberFormatConfig
     * @throws InvalidConfigurationException
     */
    public function numberFormat(array $value = []): \Symfony\Config\Twig\NumberFormatConfig
    {
        if (null === $this->numberFormat) {
            $this->_usedProperties['numberFormat'] = true;
            $this->numberFormat = new \Symfony\Config\Twig\NumberFormatConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "numberFormat()" has already been initialized. You cannot pass values the second time you call numberFormat().');
        }

        return $this->numberFormat;
    }

    /**
     * Configure the mailer options for Twig.
     *
     * @param array $value
     * @return \Symfony\Config\Twig\MailerConfig
     * @throws InvalidConfigurationException
     */
    public function mailer(array $value = []): \Symfony\Config\Twig\MailerConfig
    {
        if (null === $this->mailer) {
            $this->_usedProperties['mailer'] = true;
            $this->mailer = new \Symfony\Config\Twig\MailerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mailer()" has already been initialized. You cannot pass values the second time you call mailer().');
        }

        return $this->mailer;
    }

    /**
     * Get the extension alias.
     *
     * @return string
     */
    public function getExtensionAlias(): string
    {
        return 'twig';
    }

    /**
     * Constructor.
     *
     * @param array $value
     * @throws InvalidConfigurationException
