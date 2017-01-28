<?php

namespace Jet\Themes\Balsamine\Fixtures;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadPost extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;

    protected $data = [
        /* Balsamine website posts */
        'balsamine-service-1' => [
            'title' => 'Hair',
            'slug' => 'hair',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<p>Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.</p>
                            <div class="padding40">
                                <div class="sub-item-service">
                                    <div class="c1">Braids &amp; Twist</div>
                                    <div class="c2"></div>
                                    <div class="c3">$35</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Clipper Cut</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Color Rinse</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Corrective Color</div>
                                    <div class="c2"></div>
                                    <div class="c3">$15</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Extension Per Track</div>
                                    <div class="c2"></div>
                                    <div class="c3">$10</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1"><span class="disc">10% Off</span>Full Foil</div>
                                    <div class="c2"></div>
                                    <div class="c3">$38</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Haircolor</div>
                                    <div class="c2"></div>
                                    <div class="c3">$15</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Haircut</div>
                                    <div class="c2"></div>
                                    <div class="c3">$9</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1"><span class="disc">5% Off</span>Hair Extension</div>
                                    <div class="c2"></div>
                                    <div class="c3">$45</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Kids Haircut</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Partial Foil</div>
                                    <div class="c2"></div>
                                    <div class="c3">$25</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Thermal Add On</div>
                                    <div class="c2"></div>
                                    <div class="c3">$20</div>
                                </div>
                            </div>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-1.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-2' => [
            'title' => 'Make Up',
            'slug' => 'make-up',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<p>Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.</p>
                            <div class="padding40">
                                <div class="sub-item-service">
                                    <div class="c1">Braids &amp; Twist</div>
                                    <div class="c2"></div>
                                    <div class="c3">$35</div>
                                </div>
                                <div class="sub-item-service">
                                    <div class="c1">Clipper Cut</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>
                                <div class="sub-item-service">
                                    <div class="c1">Color Rinse</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>
                            </div>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-2.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-3' => [
            'title' => 'Facial',
            'slug' => 'facial',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<p>Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.</p>
                            <div class="padding40">
                                <div class="sub-item-service">
                                    <div class="c1">Braids &amp; Twist</div>
                                    <div class="c2"></div>
                                    <div class="c3">$35</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Clipper Cut</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>
                            </div>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-3.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-4' => [
            'title' => 'Massage',
            'slug' => 'massage',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<p>Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-4.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-5' => [
            'title' => 'Nail',
            'slug' => 'nail',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<p>Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.</p>
                            <div class="padding40">
                                <div class="sub-item-service">
                                    <div class="c1">Braids &amp; Twist</div>
                                    <div class="c2"></div>
                                    <div class="c3">$35</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Clipper Cut</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>


                                <div class="sub-item-service">
                                    <div class="c1">Color Rinse</div>
                                    <div class="c2"></div>
                                    <div class="c3">$5</div>
                                </div>
                            </div>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-5.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-service-6' => [
            'title' => 'Waxing',
            'slug' => 'waxing',
            'short_description' => 'Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.',
            'content' => '<p>Our commitment to quality and services ensure our clients happy. With years of experiences, our dedicated staff is ready to serve your beauty needs.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-6.jpg',
            'categories' => [
                'service'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-1' => [
            'title' => 'How to Make Your Hair Grow Faster',
            'slug' => 'how-to-make-your-hair-grow-faster',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-1.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-2' => [
            'title' => '5 Ways to Make Hair Look Gorgeous',
            'slug' => '5-ways-to-make-hair-look-gorgeous',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-2.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-3' => [
            'title' => '14 Easy Ways to Get Standout Eyes',
            'slug' => '14-easy-ways-to-get-standout-eyes',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-3.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
        ],
        'balsamine-actu-4' => [
            'title' => 'An Owner’s Guide to Naturally Wavy Hair',
            'slug' => 'an-owner-s-guide-to-naturally-wavy-hair',
            'short_description' => 'Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.',
            'content' => '<p>Hair care is an overall term for parts of hygiene and cosmetology involving the hair on the human head. Hair care will differ according to one\'s hair type and according to various processes that can be applied to hair. All hair is not the same; hair is a manifestation of human diversity.</p>',
            'thumbnail' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-4.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'balsamine-society'
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
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadMedia',
        ];
    }
}