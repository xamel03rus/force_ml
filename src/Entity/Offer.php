<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;


use ForceML\Entity;

class Offer extends Entity
{

    public $placeholder = 'Offer';

    public $Ид;
    public $Наименование;
    public $Количество;
    public $Цены;

    public function format()
    {
        return [
            'id' => $this->Ид,
            'name' => $this->Наименование,
            'total' => $this->Количество,
            'prices' => array_map(function($item){return $item->format();},Entity::transform($this->Цены))
        ];
    }

}