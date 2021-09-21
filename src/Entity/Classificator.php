<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;


use ForceML\Entity;

class Classificator extends Entity
{
	public $placeholder = 'Classificator';
	
    public $Ид;
    public $Группы;
    public $Свойства;
    public $Склады;
    public $ТипыЦен;
    public $Каталог;

    public function format()
    {
        return [];
    }
}