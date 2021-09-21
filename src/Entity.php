<?php
/**
 * Created by Insane.
 */

namespace ForceML;

abstract class Entity {

    public $placeholder;
    
    protected $required = [];

    public static function normalize($entity)
    {
        if($entity instanceof Entity)
            return $entity;
        else
            return $entity['value'];
    }

    public static function transform($entities,$props = [])
    {
        $res = [];

        if(is_array($entities))
            foreach ($entities as $entity)
            {
                if(isset($entity['value']))
                    $res[] = $entity['value'];
            }

        return $res;
    }

    public function validate()
    {
        foreach($this->required as $require) {
            if (!isset($this->{$require}))
                return false;
        }
        return true;
    }

    public abstract function format();

}