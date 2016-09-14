<?php

namespace mindplay\unbox;

/**
 * This abstract base-class defines the internal state of `Container` and `ContainerFactory`
 */
abstract class Configuration
{
    /**
     * @var mixed[] map where component name => value
     */
    protected $values = [];

    /**
     * @var callable[] map where component name => factory function
     */
    protected $factory = [];

    /**
     * @var array map where component name => mixed list/map of parameter names
     */
    protected $factory_map = [];

    /**
     * @var callable[][] map where component name => list of configuration functions
     */
    protected $config = [];

    /**
     * @var callable[][] map where component name => mixed list/map of parameter names
     */
    protected $config_map = [];

    /**
     * Internally copy configuration state, e.g. from `ContainerFactory` to `Container`
     *
     * @param Configuration $target
     */
    protected function copyTo(Configuration $target)
    {
        $target->values = $this->values;
        $target->factory = $this->factory;
        $target->factory_map = $this->factory_map;
        $target->config = $this->config;
        $target->config_map = $this->config_map;
    }
}
