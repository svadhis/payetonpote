<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.I8xMv0Y' shared service.

return $this->privates['.service_locator.I8xMv0Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'participant' => ['privates', '.errored..service_locator.I8xMv0Y.App\\Entity\\Participant', NULL, 'Cannot autowire service "debug.argument_resolver.not_tagged_controller.inner": it references class "App\\Entity\\Participant" but no such service exists.'],
], [
    'participant' => 'App\\Entity\\Participant',
]);
