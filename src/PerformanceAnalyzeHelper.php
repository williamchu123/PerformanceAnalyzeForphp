<?php
/**
 * Copyright (c) 2018.
 * @author zhudesheng
 *
 */

namespace ZhuDeSheng\Tool;


class PerformanceAnalyzeHelper {

    private $className = '';
    private $methodName = '';
    private $points = [];


    /**
     * PerformamceAnalyzeHelper constructor.
     * @param $class
     * @param $method
     */
    public function __construct($class,$method){
        $this->methodName = $method;
        $this->className = $class;
    }

    /**
     * marker a start
     * @param string $name
     */
    public function markStartTime($name='marker_start'){
        array_unshift($this->points,new Point($name,$this->now()));
    }

    /**
     * get now millisecond
     * @return mixed
     */
    private static function now(){
        return microtime(true)*1000;
    }

    /**
     * marker a end
     *
     * @param string $name
     */
    public function markEndTime($name='marker_end'){
        array_push($this->points,new Point($name,$this->now()));
    }


    /**
     * @param string $name
     * @return $this
     */
    public function markPoint($name=''){
        if(empty($name)){
            $name = 'marker_'.count($this->points);
        }
        array_push($this->points,new Point($name,$this->now()));
        return $this;
    }

    /**
     * @throws PAException
     */
    public function __destruct()
    {
        $len = count($this->points);

        if($len > 1){
            $writer = new Writer(new Config());
            $start = $this->points[0];
            $end = $this->points[$len-1];
            $total_consume = $end->getTime() - $start->getTime();
            $total_memory_consume = ($end->getMemory() - $start->getMemory())/1024;

            $writer->out("\n\n".str_repeat('~ ~ ',25)."\n");
            $writer->out("class = {$this->className} method={$this->methodName} total consumed {$total_consume} milliseconds and total used {$total_memory_consume} kb\n");

            for($i=0;$i < $len;$i++){
                if(!isset($this->points[$i+1])){
                    break;
                }
                $temp_a = $this->points[$i];
                $temp_b = $this->points[$i+1];
                $used_time = $temp_b->getTime() - $temp_a->getTime();
                $used_memory = ($temp_b->getMemory() - $temp_a->getMemory())/1024;
                $writer->out("between \"{$temp_a->getName()}\" and \"{$temp_b->getName()}\"\nused time {$used_time} milliseconds \nused memory {$used_memory} kb");
                $writer->out("\n".str_repeat('-',100)."\n");
            }
        }else{
            throw new PAException("start point is null");
        }



    }


}