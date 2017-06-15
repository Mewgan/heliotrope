<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Models\PostCategory;

class LoadPostCategory extends AbstractFixture implements DependentFixtureInterface
{
    protected $data = [
        'heliotrope-partner' => [
            'name' => 'Partenaire',
            'slug' => 'partenaire',
            'website' => 'Heliotrope Website'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        foreach($this->data as $key => $data) {
            $website = (isset($data['website'])) ? $this->getReference($data['website']) : null;
            $count = is_null($website)
                ? PostCategory::where('name',$data['name'])->count()
                : PostCategory::where('name',$data['name'])->where('website', $website)->count();
            $postCategory = ($count == 0)
                ? new PostCategory()
                : PostCategory::findOneByName($data['name']);
            $postCategory->setName($data['name']);
            $postCategory->setSlug($data['slug']);
            $postCategory->setWebsite($website);
            $this->setReference($key, $postCategory);
            $manager->persist($postCategory);
        }
        $manager->flush();
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
            'Jet\Themes\Heliotrope\Fixtures\LoadWebsite',
        ];
    }
}