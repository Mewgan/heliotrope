<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadMedia extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        [
            'title' => 'Theme balsamine thumbnail',
            'path' => '/public/media/thumbnail/theme-balsamine-thumbnail.png',
            'type' => 'image/png',
            'size' => 137577,
            'access_level' => 2,
            'alt' => 'Theme aster thumbnail'
        ],
        [
            'title' => 'Logo theme balsamine',
            'path' => '/src/Themes/Balsamine/Resources/public/img/logo.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo aster'
        ],
        [
            'title' => 'Logo light theme balsamine',
            'path' => '/src/Themes/Balsamine/Resources/public/img/logo_light.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo aster'
        ],
        [
            'title' => 'Background video image',
            'path' => '/src/Themes/Balsamine/Resources/public/img/video-poster.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background video image'
        ],
        [
            'title' => 'Subheader 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Subheader'
        ],
        [
            'title' => 'Subheader 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Subheader'
        ],
        [
            'title' => 'Subheader 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Subheader'
        ],
        [
            'title' => 'Subheader 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Subheader'
        ],
        [
            'title' => 'Subheader 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Subheader'
        ],
        [
            'title' => 'Subheader 6',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Subheader'
        ],
        [
            'title' => 'Slider 7',
            'path' => '/src/Themes/Balsamine/Resources/public/img/images-slider/wide7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Slider image'
        ],
        [
            'title' => 'Slider 8',
            'path' => '/src/Themes/Balsamine/Resources/public/img/images-slider/wide8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Slider image'
        ],
        [
            'title' => 'Background 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 7',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 8',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 9',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-9.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 10',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background 11',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-11.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'About us',
            'path' => '/src/Themes/Balsamine/Resources/public/img/background/bg-side-9.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'About us'
        ],
        [
            'title' => 'Balsamine service 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ], [
            'title' => 'Balsamine service 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine service 6',
            'path' => '/src/Themes/Balsamine/Resources/public/img/services/service-big-6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine service'
        ],
        [
            'title' => 'Balsamine actu 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine actu 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine actu 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine actu 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine actu'
        ],
        [
            'title' => 'Balsamine team 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/team/team_pic_1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine equipe'
        ],
        [
            'title' => 'Balsamine team 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/team/team_pic_2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine equipe'
        ],
        [
            'title' => 'Balsamine team 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/team/team_pic_3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine equipe'
        ],
        [
            'title' => 'Balsamine team 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/team/team_pic_4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine equipe'
        ],
        [
            'title' => 'Balsamine gallery 1',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 2',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 3',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 4',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 5',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 6',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 7',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
        [
            'title' => 'Balsamine gallery 8',
            'path' => '/src/Themes/Balsamine/Resources/public/img/gallery/gal_8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Balsamine gallery'
        ],
    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}