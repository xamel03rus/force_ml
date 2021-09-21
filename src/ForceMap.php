<?php
/**
 * Created by Insane.
 */

namespace ForceML;


use ForceML\Entity\Catalog;
use ForceML\Entity\Classificator;
use ForceML\Entity\Offer;
use ForceML\Entity\OffersPackage;
use ForceML\Entity\Price;
use ForceML\Entity\Product;
use ForceML\Entity\Property;
use ForceML\Entity\Section;
use ForceMl\Entity\Storage;


class ForceMap
{

    public $products = [];
    public $offers = [];
    public $sections = [];
    public $storages = [];
    public $properties = [];
    public $warehouses = [];
    public $fields = [];
    public $rests = [];
    public $prices = [];

    public function map($data){

        foreach($data as $item)
        {
            if(($classificator = $item['value']) instanceof Classificator) {

                if(isset($classificator->Группы))
                    $this->groups($classificator->Группы);
                if(isset($classificator->Склады))
                    $this->storages($classificator->Склады);
                if(isset($classificator->Свойства))
                    $this->properties($classificator->Свойства);
                if(isset($classificator->ТипыЦен))
                    $this->prices($classificator->ТипыЦен);

            }
            if(($catalog = $item['value']) instanceof Catalog)
            {
                if(isset($catalog->Товары))
                    $this->products($catalog->Товары);
            }
            if(($offers = $item['value']) instanceof OffersPackage)
            {
                if(isset($offers->ТипыЦен))
                    $this->prices($offers->ТипыЦен);
                if(isset($offers->Предложения))
                    $this->offers($offers->Предложения);
            }
        }

        return $this;
    }

    public function groups($groups)
    {
        $groups = Section::transform($groups, ['parent_id' => null]);

        $this->push('sections', $groups);
    }

    public function products($products)
    {
        $products = Product::transform($products);
        $this->push('products', $products);
    }

    public function offers($offers)
    {
        $offers = Offer::transform($offers);
        $this->push('offers', $offers);
    }

    public function prices($prices)
    {
        $prices = Price::transform($prices);
        $this->push('prices', $prices);
    }

    public function properties($props)
    {
        $props = Property::transform($props);
        $this->push('properties', $props);
    }

    public function storages($storages)
    {
        $storages = Storage::transform($storages);
        $this->push('storages', $storages);
    }

    public function push($place,$data)
    {
        foreach ($data as $item)
            $this->{$place}[] = $item->format();
    }

}