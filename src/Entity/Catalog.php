<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;


use ForceML\Entity;

class Catalog extends Entity
{
	public $placeholder = 'Catalog';

    public $Ид;
    public $Товары;

    public function format()
    {
        return [
            'id' => $this->Ид,
            'products' => $this->Товары
        ];
    }

}