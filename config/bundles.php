<?php

return [
    // Core framework bundle for the Symfony application.
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    
    // Doctrine ORM bundle for database management.
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    
    // Bundle for managing database migrations.
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    
    // Debug bundle for development environment.
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    
    // Twig bundle for templating.
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    
    // Web profiler bundle for debugging in development and test environments.
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    
    // Stimulus bundle for enhancing front-end interactivity.
    Symfony\UX\StimulusBundle\StimulusBundle::class => ['all' => true],
    
    // Turbo bundle for fast navigation and minimal page reloads.
    Symfony\UX\Turbo\TurboBundle::class => ['all' => true],
    
    // Extra Twig functionality bundle.
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    
    // Security bundle for managing authentication and authorization.
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    
    // Monolog bundle for logging.
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    
    // Maker bundle for code generation in the development environment.
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    
    // Sensio framework extra bundle for additional framework functionality.
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true], // Added for additional framework functionality
    
    // Swiftmailer bundle for email support.
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true], // Added for email support
];
