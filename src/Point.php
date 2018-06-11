<?php
/**
 * Copyright (c) 2018.
 * @author zhudesheng
 *
 */
namespace ZhuDeSheng\Tool;


class Point
{
    private $name='';
    private $time=null;
    private $memory=null;

    /**
     * Point constructor.
     * @param string $name
     * @param null $time
     * @param null $memory
     */
    public function __construct($name, $time, $memory=null)
    {
        $this->name = $name;
        $this->time = $time;
        $this->memory = memory_get_usage(false);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param null $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return null
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param null $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }


}