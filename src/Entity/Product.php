<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;

use ForceML\Entity;

class Product extends Entity
{
    public $placeholder = 'Product';
    
    public $Ид;
    public $Артикул;
    public $Наименование;
    public $Описание;
    public $Группы;
    public $ЗначенияСвойств;

    protected $required = [
        'Ид','Наименование'
    ];

    public function format()
    {
        return [
            'id' => $this->Ид,
            'articul' => $this->Артикул,
            'name' => $this->Наименование,
            'description' => $this->Описание,
            'sections' => Entity::transform($this->Группы,[]),
            'properties' => Entity::transform($this->ЗначенияСвойств,[])
        ];
    }

}