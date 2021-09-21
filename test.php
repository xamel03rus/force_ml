<?php
/**
 * Created by Insane.
 */

class ProductRewrite extends \ForceML\Entity\Product {

    public $Тэги;

    public function format()
    {
        return [
            'id' => $this->Ид,
            'articul' => $this->Артикул,
            'name' => $this->Наименование,
            'description' => $this->Описание,
            'sections' => \ForceML\Entity::transform($this->Группы),
            'tags' => \ForceML\Entity::transform($this->Тэги)
        ];
    }

}