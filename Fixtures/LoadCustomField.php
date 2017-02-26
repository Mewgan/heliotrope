<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Heliotrope Seo' => [
            'title' => 'SEO',
            'rule' => 'everywhere_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Heliotrope Website',
        ],
        'Heliotrope Specific Global' => [
            'title' => 'Données spécifique au thème',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Heliotrope Website'
        ],
        'Heliotrope Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Heliotrope Website'
        ],
        'Heliotrope Page' => [
            'title' => 'Header',
            'rule' => 'publication_type_rule',
            'operation' => '=',
            'value' => 'page',
            'website' => 'Heliotrope Website'
        ],
        'Heliotrope Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-heliotrope-home',
            'website' => 'Heliotrope Website'
        ],
        'Heliotrope Home Page Slider' => [
            'title' => 'Page d\'accueil avec slider',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-heliotrope-home-slider',
            'website' => 'Heliotrope Website'
        ],
        'Heliotrope Price Page' => [
            'title' => 'Tarif',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-heliotrope-price',
            'website' => 'Heliotrope Website'
        ],
        'Heliotrope Gallery Page' => [
            'title' => 'Galerie',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-heliotrope-gallery',
            'website' => 'Heliotrope Website'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadCustomField($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadPage',
            'Jet\DataFixtures\LoadCustomFieldRule',
        ];
    }
}