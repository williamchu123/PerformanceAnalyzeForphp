<?php
/**
 * Copyright (c) 2018.
 * @author zhudesheng
 *
 */

/**
 * Created by PhpStorm.
 * User: joy
 * Date: 2018/6/11
 * Time: 下午12:30
 */

namespace ZhuDeSheng\Tool;

use \Exception;
class PAException extends Exception{

    /**
     * PAException constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message = "", $code = 0);
    }
}