<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symfony\Component\Config\Exception\LoaderLoadException;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    /**
     * Configures the service container.
     *
     * @param ContainerBuilder $containerBuilder
     * @param LoaderInterface $loader
     */
    protected function configureContainer(ContainerBuilder $containerBuilder, LoaderInterface $loader): void
    {
        $configDir = $this->getProjectDir() . '/config';

        try {
            // Load global configuration
            $loader->load("$configDir/packages/*.{php,yaml}", 'glob');
            $loader->load("$configDir/services.yaml");
            
            // Load environment-specific configuration
            $loader->load("$configDir/packages/{$this->environment}/*.{php,yaml}", 'glob');
        } catch (LoaderLoadException $e) {
            fwrite(STDERR, "Error loading configuration: " . $e->getMessage() . "\n");
            exit(1);
        }
    }

    /**
     * Configures the application routes.
     *
     * @param RoutingConfigurator $routes
     */
    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $configDir = $this->getProjectDir() . '/config';

        try {
            // Load global routes
            $routes->import("$configDir/routes/*.{php,yaml}", 'glob');
            
            // Load environment-specific routes
            $routes->import("$configDir/routes/{$this->environment}/*.{php,yaml}", 'glob');
        } catch (LoaderLoadException $e) {
            fwrite(STDERR, "Error loading routes: " . $e->getMessage() . "\n");
            exit(1);
        }
    }

    /**
     * Returns the project directory.
     *
     * @return string
     */
    public function getProjectDir(): string
    {
        return dirname(__DIR__);
    }

    /**
     * Returns the cache directory.
     *
     * @return string
     */
    public function getCacheDir(): string
    {
        return $this->getProjectDir() . "/var/cache/{$this->environment}";
    }

    /**
     * Returns the log directory.
     *
     * @return string
     */
    public function getLogDir(): string
    {
        return $this->getProjectDir() . '/var/log';
    }
}
