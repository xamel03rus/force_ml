<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;

use ForceML\Entity;

class Storage extends Entity
{
    public $placeholder = 'Storage';

    public $Ид;
    public $Наименование;

    protected $required = [
        'Ид','Наименование'
    ];

    public function format()
    {
        return [
            'id' => $this->Ид,
            'name' => $this->Наименование
        ];
    }

}