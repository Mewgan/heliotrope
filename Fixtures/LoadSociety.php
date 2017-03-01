<?php
namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Heliotrope Society',
            'email' => 'contact@heliotrope.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Heliotrope Slider Society',
            'email' => 'contact@heliotrope-slider.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Sanji Society',
            'email' => 'contact@sanji.com',
            'phone' => '0123456789',
            'account' => 'sanji@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
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
            'Jet\DataFixtures\LoadAccount'
        ];
    }
}