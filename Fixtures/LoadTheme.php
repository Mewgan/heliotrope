<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTheme extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Heliotrope',
            'profession' => 'barber',
            'thumbnail' => '/public/media/default/thumbnail/theme-heliotrope-thumbnail.png',
            'state' => 1,
        ],
        [
            'name' => 'Heliotrope Slider',
            'profession' => 'barber',
            'thumbnail' => '/public/media/default/thumbnail/theme-heliotrope-slider-thumbnail.png',
            'state' => 1,
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTheme($manager);
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
            'Jet\DataFixtures\LoadProfession',
            'Jet\Themes\Heliotrope\Fixtures\LoadMedia'
        ];
    }
}