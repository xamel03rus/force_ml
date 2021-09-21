<?php
/**
 * Created by Insane.
 */

namespace ForceML\Entity;

use ForceML\Entity;

class OfferPrice extends Entity
{

    public $placeholder = 'OfferPrice';

    public $ИдТипаЦены;
    public $ЦенаЗаЕдиницу;

    public function format()
    {
        return [
            'id' => $this->ИдТипаЦены,
            'value' => $this->ЦенаЗаЕдиницу
        ];
    }

}