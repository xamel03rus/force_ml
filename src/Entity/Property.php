<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;

use ForceML\Entity;

class Property extends Entity
{
    public $placeholder = 'Property';

    public $Ид;
    public $Наименование;
    public $ТипЗначений;
    public $ВариантыЗначений;

    protected $required = [
        'Ид','Наименование'
    ];

    public function format()
    {
        return [
            'id' => $this->Ид,
            'name' => $this->Наименование,
            'type' => $this->ТипЗначений,
            'values' => Entity::transform($this->ВариантыЗначений,[])
        ];
    }

}