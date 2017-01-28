<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Balsamine Specific Global' => [
            'title' => 'Données spécifique au thème',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website'
        ],
        'Balsamine Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global_rule',
            'operation' => '=',
            'value' => null,
            'website' => 'Balsamine Website'
        ],
        'Balsamine Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-home',
            'website' => 'Balsamine Website'
        ],
        'Balsamine Team Page' => [
            'title' => 'Equipe',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-team',
            'website' => 'Balsamine Website'
        ],
        'Balsamine Gallery Page' => [
            'title' => 'Galerie',
            'rule' => 'page_rule',
            'operation' => '=',
            'reference' => 'society-balsamine-gallery',
            'website' => 'Balsamine Website'
        ],
        'Balsamine Page' => [
            'title' => 'Page',
            'rule' => 'publication_type_rule',
            'operation' => '=',
            'value' => 'page',
            'website' => 'Balsamine Website'
        ],
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