<?php

namespace Jet\Themes\Heliotrope\Fixtures;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadPost extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;

    protected $data = [
        /* Heliotrope website posts */
        'heliotrope-about-us' => [
            'title' => 'A propos de nous',
            'slug' => 'a-propos-de-nous',
            'short_description' => 'Consectetur adipisicing elit. In blanditiis consequuntur, doloremque, nisi temporibus ipsum sed cum expedita omnis. Modi dolore sit excepturi eligendi perferendis, nam odio totam quaerat repellendus.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/1.jpg',
            'categories' => [],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-1' => [
            'title' => 'Hair',
            'slug' => 'hair',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/1.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-2' => [
            'title' => 'Make Up',
            'slug' => 'make-up',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/2.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-3' => [
            'title' => 'Facial',
            'slug' => 'facial',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/3.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-4' => [
            'title' => 'Massage',
            'slug' => 'massage',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/4.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-5' => [
            'title' => 'Nail',
            'slug' => 'nail',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/5.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-6' => [
            'title' => 'Waxing',
            'slug' => 'waxing',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/6.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-7' => [
            'title' => 'Nails Design',
            'slug' => 'nails-design',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/7.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-service-8' => [
            'title' => 'Hair Dring',
            'slug' => 'hair-dring',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">ipsum fugit </span>
                  <h4 class="text-uppercase letter-space-3">adipisicing elit</h4>
                  <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                </div>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/services/8.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-actu-1' => [
            'title' => 'How to Make Your Hair Grow Faster',
            'slug' => 'how-to-make-your-hair-grow-faster',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/blog/1.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-actu-2' => [
            'title' => '5 Ways to Make Hair Look Gorgeous',
            'slug' => '5-ways-to-make-hair-look-gorgeous',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/blog/2.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-actu-3' => [
            'title' => '14 Easy Ways to Get Standout Eyes',
            'slug' => '14-easy-ways-to-get-standout-eyes',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/blog/3.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-actu-4' => [
            'title' => 'An Owner’s Guide to Naturally Wavy Hair',
            'slug' => 'an-owner-s-guide-to-naturally-wavy-hair',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/blog/4.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-actu-5' => [
            'title' => 'We make your hair very stylist',
            'slug' => 'we-make-your-hair-very-stylist',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/blog/5.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-actu-6' => [
            'title' => 'Actu 6',
            'slug' => 'actu-6',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'thumbnail' => '/src/Themes/Heliotrope/Resources/public/img/blog/6.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'heliotrope-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPost($manager);
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
            'Jet\Modules\Post\Fixtures\LoadPostCategory',
            'Jet\Themes\Heliotrope\Fixtures\LoadWebsite',
            'Jet\Themes\Heliotrope\Fixtures\LoadMedia',
        ];
    }
}