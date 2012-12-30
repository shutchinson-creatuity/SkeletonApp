<?php

namespace Bones\Di;

class Di
{

    private $objects = array();

    public function set($alias, $instance)
    {
        if(!array_key_exists($alias, $this->objects)) {
            $this->objects[$alias] = $instance;
        }
    }

    public function get($alias)
    {
        return (array_key_exists($alias, $this->objects)) ? $this->objects[$alias] : null;
    }

    public function __get($alias)
    {
        return $this->get($alias);
    }
}
