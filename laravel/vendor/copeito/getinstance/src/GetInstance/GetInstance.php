<?php
namespace copeito;

trait getInstance
{
    public static function getInstance($args){
        return new static($args);
    }
}
