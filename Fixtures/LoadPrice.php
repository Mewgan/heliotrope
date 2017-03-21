<?php
namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Price\Services\LoadServiceFixture;

class LoadPrice extends AbstractFixture implements DependentFixtureInterface
{
    use LoadServiceFixture;

    protected $data = [
        'heliotrope-woman-price-1' => [
            'title' => 'WOMAN\'S HAIRCUT',
            'price' => '80€',
            'position' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'woman-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-woman-price-2' => [
            'title' => 'WOMAN\'S HAIRCUT',
            'price' => '45€',
            'position' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'woman-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-woman-price-3' => [
            'title' => 'WOMAN\'S HAIRCUT',
            'price' => '80€',
            'position' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'woman-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-woman-price-4' => [
            'title' => 'WOMAN\'S HAIRCUT',
            'price' => '55€',
            'position' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'category' => 'woman-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-woman-price-5' => [
            'title' => 'WOMAN\'S HAIRCUT',
            'price' => '100€',
            'position' => 4,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'woman-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-woman-price-6' => [
            'title' => 'WOMAN\'S HAIRCUT',
            'price' => '60€',
            'position' => 5,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'woman-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-man-price-1' => [
            'title' => 'MAN\'S HAIRCUT',
            'price' => '20€',
            'position' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'man-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-man-price-2' => [
            'title' => 'MAN\'S HAIRCUT',
            'price' => '35€',
            'position' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'man-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-man-price-3' => [
            'title' => 'MAN\'S HAIRCUT',
            'price' => '45€',
            'position' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'man-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-other-price-1' => [
            'title' => 'CHILD\'S HAIRCUT',
            'price' => '8€',
            'position' => 0,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'other-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-other-price-2' => [
            'title' => 'CHILD\'S HAIRCUT',
            'price' => '12€',
            'position' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'other-service-category',
            'website' => 'heliotrope-society'
        ],
        'heliotrope-other-price-3' => [
            'title' => 'CHILD\'S HAIRCUT',
            'price' => '14€',
            'position' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
            'category' => 'other-service-category',
            'website' => 'heliotrope-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadService($manager);
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
            'Jet\Themes\Heliotrope\Fixtures\LoadMedia',
            'Jet\Modules\Price\Fixtures\LoadServiceCategory',
        ];
    }
}