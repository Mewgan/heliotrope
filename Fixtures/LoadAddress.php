<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAddress extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        'heliotrope-address' => [
            'alias' => 'Adresse de la société',
            'address' => '17 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'country' => 'FRANCE',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        'heliotrope-slider-address' => [
            'alias' => 'Adresse de la société',
            'address' => '29 Rue Jean Jeaures',
            'city' => 'Champigny Sur Marne',
            'postal_code' => '94500',
            'country' => 'FRANCE',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        'sanji-address' => [
            'alias' => 'Adresse de la société',
            'address' => '86 Avenue Henri Barbusse',
            'city' => 'Clamart',
            'postal_code' => '92140',
            'country' => 'FRANCE',
            'account' => 'sanji@onepiece.com'
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
            'Jet\DataFixtures\LoadAccount',
        ];
    }
}