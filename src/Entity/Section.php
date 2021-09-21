<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;


use ForceML\Entity;

class Section extends Entity
{
    public $placeholder = 'Section';

    public $Ид;
    public $Наименование;
    public $Группы;
    public $parent;

    protected $required = [
        'Ид','Наименование'
    ];

    public static function transform($entities,$parent = [])
    {
        $res = [];

        if($entities)
            foreach ($entities as $entity)
                if(isset($entity['value']) && $entity['value'] instanceof Section) {
                    $en = Entity::normalize($entity);
                    $en->parent = $parent['parent_id'];

                    $res[] = $en;
                    $groups = self::transform($en->Группы,['parent_id' => $en->Ид]);

                    if(is_array($groups))
                        $res = array_merge($res,$groups);
                }

        if(empty($res))
            return null;
        else
            return $res;
    }

    public function format()
    {
        return [
            'id' => $this->Ид,
            'name' => $this->Наименование,
            'parent' => $this->parent
        ];
    }

}