<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsiteReplace extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Heliotrope Slider Website' => [
            'data' => [
                'parent_exclude' => [
                    'pages' => ['society-heliotrope-home']
                ],
                'parent_replace' => [],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->replaceWebsiteData($manager);
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
            'Jet\Themes\Heliotrope\Fixtures\LoadPage',
            'Jet\Themes\Heliotrope\Fixtures\LoadAdminCustomField',
        ];
    }
}