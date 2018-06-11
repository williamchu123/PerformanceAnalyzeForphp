<?php
/**
 * Copyright (c) 2018.
 * @author zhudesheng
 *
 */

require_once __DIR__."/../vendor/autoload.php";

use ZhuDeSheng\Tool\PAFactory;
class Demo
{

    public function calculate(){
        $pa = PAFactory::getPA(__CLASS__,__METHOD__);
        $pa->markStartTime();

        //do yourself business

        for($i = 0;$i< 1000;$i++){
            $tmp = new stdClass();

        }
        $pa->markPoint('do loop');


        //do yourself business

        for($i = 0;$i< 5;$i++){
           sleep(1);
        }

        $pa->markPoint('do sleep');



        //do your self business

        if(true){
            echo "cool";
        }else{
            echo "ugly";
        }

        $pa->markEndTime();
    }

}

$demo = new Demo();
$demo->calculate();