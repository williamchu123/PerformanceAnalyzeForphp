<?php
/**
 * Copyright (c) 2018.
 * @author zhudesheng
 *
 */

namespace ZhuDeSheng\Tool;

/**
 * Class PAFactory
 * @package ZhuDeSheng\Tool
 */
class PAFactory
{
    /**
     * @param $class
     * @param $method
     * @return PerformanceAnalyzeHelper
     */
    public static function getPA($class,$method){
        return new PerformanceAnalyzeHelper($class,$method);
    }



}