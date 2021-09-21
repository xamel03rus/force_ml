<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;

use ForceML\Entity;

class ProductProperties extends Entity {

    public $placeholder = 'ProductProperties';

    public $Ид;
    public $Значение;

    protected $required = [
        'Ид'
    ];

    public function format()
    {
        return [
            'id' => $this->Ид,
            'value' => $this->Значение,
        ];
    }

}