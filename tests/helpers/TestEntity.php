<?php
/**
 * Created by Insane.
 */

namespace Tests\Helpers;

use ForceML\Entity;

class TestEntity extends Entity
{

    public $Ид;
    public $Артикул;
    public $Наименование;
    public $Описание;
    public $Группы;

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
            'sections' => $this->Группы
        ];
    }

}