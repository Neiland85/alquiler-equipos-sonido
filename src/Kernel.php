<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerBuilder $containerBuilder, LoaderInterface $loader)
    {
        $loader->load($this->getProjectDir() . '/config/packages/*.{php,yaml}', 'glob');
        $loader->load($this->getProjectDir() . '/config/services.yaml');
        $loader->load($this->getProjectDir() . '/config/packages/' . $this->environment . '/*.{php,yaml}', 'glob');
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->import($this->getProjectDir() . '/config/routes/*.{php,yaml}', '/', 'glob');
        $routes->import($this->getProjectDir() . '/config/routes/' . $this->environment . '/*.{php,yaml}', '/', 'glob');
    }

    public function getProjectDir(): string
    {
        return dirname(__DIR__);
    }

    public function getCacheDir(): string
    {
        return $this->getProjectDir() . '/var/cache/' . $this->environment;
    }

    public function getLogDir(): string
    {
        return $this->getProjectDir() . '/var/log';
    }
}
