<?php

/**
 * ParamParser short summary.
 *
 * ParamParser description.
 *
 * @version 1.0
 * @author William
 */
class ParamParser
{
    private $ParamArr = array();

    public function __construct($params)
    {
        $this->ParamArr = $params;
    }

    public function getParams()
    {
        return $this->ParamArr;
    }

    public function setParams($params)
    {
        $this->ParamArr = $params;
    }

}