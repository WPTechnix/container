<?php

declare(strict_types=1);

namespace WPTechnix\Container;

/**
 * ContainerAwareInterface Interface
 *
 * @package WPTechnix\Container
 */
interface ContainerAwareInterface
{
    /**
     * Set the container.
     *
     * @param ContainerInterface $container The container to set.
     */
    public function setContainer(ContainerInterface $container): void;
}
