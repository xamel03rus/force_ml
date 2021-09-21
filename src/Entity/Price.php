<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;


use ForceML\Entity;

class Price extends Entity
{

    public $placeholder = 'Price';

    public $Ид;
    public $Наименование;
    public $Валюта;

    public function format()
    {
        return [
            'id' => $this->Ид,
            'name' => $this->Наименование,
            'currency' => $this->Валюта,
        ];
    }

}