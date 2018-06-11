<?php

namespace ZhuDeSheng\Tool;

/**
 * Created by PhpStorm.
 * User: joy
 * Date: 2018/6/11
 * Time: 上午10:41
 */

class Writer {


    private $messages = [];

    private $config = null;


    /**
     * Writer constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }


    public function out($message){
        array_push($this->messages,$message);
    }

    /**
     * @return bool|int
     * @throws PAException
     */
    public function flushAll(){

       $byte_int = file_put_contents($this->config->getOUtFile(),implode('',$this->messages),FILE_APPEND);
       if($byte_int === false){
           throw new PAException("write to {$this->config->getOUtFile()} have some problem,please make sure you have write privilege");
       }
        return $byte_int;
    }

    /**
     * @throws PAException
     */
    public function __destruct()
    {
        $this->flushAll();
    }


}

