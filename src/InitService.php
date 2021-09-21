<?php
/**
 * Created by Insane.
 */

namespace ForceML;

use ForceML\Entity\Catalog;
use ForceML\Entity\Classificator;
use ForceML\Entity\Offer;
use ForceML\Entity\OfferPrice;
use ForceML\Entity\OffersPackage;
use ForceML\Entity\Price;
use ForceML\Entity\Product;
use ForceML\Entity\ProductProperties;
use ForceML\Entity\Property;
use ForceML\Entity\PropertyValue;
use ForceML\Entity\Section;
use Sabre\Xml\Service;

trait InitService
{
    protected function createService($rewrites = [])
    {
        $valueObjectsMap = [
            'Классификатор' => Classificator::class,
            'Каталог' => Catalog::class,
            'ПакетПредложений' => OffersPackage::class,
            'Товар' => Product::class,
            'Предложение' => Offer::class,
            'Группа' => Section::class,
            'Цена' => OfferPrice::class,
            'Свойство' => Property::class,
            'Справочник' => PropertyValue::class,
            'ТипЦены' => Price::class,
            'ЗначенияСвойства' => ProductProperties::class
        ];

        $namespaces = [
            'urn:1C.ru:commerceml_3',
            'urn:1C.ru:commerceml_2',
            ''
        ];

        $service = new Service();

        $valueObjectsMap = array_merge($valueObjectsMap,$rewrites);
        foreach ($namespaces as $namespace) {
            foreach ($valueObjectsMap as $section => $valueObjectClass) {
                $service->mapValueObject('{' . $namespace . '}' . $section, $valueObjectClass);
            }
        }

        return $service;
    }

}