<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;

use ForceML\Entity;

class PropertyValue extends Entity
{
    public $placeholder = 'Property';

    public $ИдЗначения;
    public $Значение;

    protected $required = [
        'Ид','Значение'
    ];

    public function format()
    {
        return [
            'id' => $this->ИдЗначения,
            'value' => $this->Значение,
        ];
    }

}