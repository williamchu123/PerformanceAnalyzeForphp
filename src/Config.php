<?php
/**
 * Copyright (c) 2018.
 * @author zhudesheng
 *
 */

namespace ZhuDeSheng\Tool;

/**
 * all config is in here
 *
 * Class Config
 */
class Config{

    private $outDirection='/tmp';
    private $outFileName = null;


    /**
     * Config constructor.
     * @param string $dir
     * @param string $outFileName
     */
    public function __construct($dir='tmp',$outFileName='performance_analyze')
    {
        $this->outFileName = $outFileName . date('Y-m-d');
        $this->outDirection = DIRECTORY_SEPARATOR . $dir;
    }


    /**
     * @return string
     */
    public function getOutDirection()
    {
        return $this->outDirection;
    }

    /**
     * @param string $outDirection
     */
    public function setOutDirection($outDirection)
    {
        $this->outDirection = $outDirection;
    }

    /**
     * @return string
     */
    public function getOutFileName()
    {
        return $this->outFileName;
    }

    /**
     * @param string $outFileName
     */
    public function setOutFileName($outFileName)
    {
        $this->outFileName = $outFileName;
    }

    /**
     * get out file
     * @return string
     */
    public function getOUtFile(){
        return $this->outDirection . DIRECTORY_SEPARATOR . $this->outFileName;
    }


}


