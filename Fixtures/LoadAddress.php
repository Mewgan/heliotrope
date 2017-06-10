<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAddress extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        'heliotrope-address' => [
            'address' => '17 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'society' => 'Heliotrope Society', //name from LoadSociety class
            'country' => 'FRANCE',
        ],
        'heliotrope-slider-address' => [
            'address' => '29 Rue Jean Jeaures',
            'city' => 'Champigny Sur Marne',
            'postal_code' => '94500',
            'society' => 'Heliotrope Slider Society', //name from LoadSociety class
            'country' => 'FRANCE',
        ],
        'sanji-address' => [
            'address' => '86 Avenue Henri Barbusse',
            'city' => 'Clamart',
            'postal_code' => '92140',
            'society' => 'Sanji Society',
            'country' => 'FRANCE',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->loadAddress($manager);
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\Themes\Heliotrope\Fixtures\LoadSociety'
        ];
    }
}