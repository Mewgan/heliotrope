<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadMedia extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        [
            'title' => 'Theme heliotrope thumbnail',
            'path' => '/public/media/thumbnail/theme-heliotrope-thumbnail.png',
            'type' => 'image/png',
            'size' => 137577,
            'access_level' => 2,
            'alt' => 'Theme heliotrope thumbnail'
        ],
        [
            'title' => 'Logo theme heliotrope',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/logo-wide-white.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo heliotrope'
        ],
        [
            'title' => 'Sub logo theme heliotrope',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/logo-wide.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo heliotrope'
        ],
        [
            'title' => 'Background image 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background image 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background image 3',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background image 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Background image 9',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg9.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Background image'
        ],
        [
            'title' => 'Service 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Service 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Service 3',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Service 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Service 5',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],[
            'title' => 'Service 6',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Service 7',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Service 8',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/services/8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Service image'
        ],
        [
            'title' => 'Actualité 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/blog/1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Actualité image'
        ],
        [
            'title' => 'Actualité 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/blog/2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Actualité image'
        ],
        [
            'title' => 'Actualité 3',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/blog/3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Actualité image'
        ],
        [
            'title' => 'Actualité 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/blog/4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Actualité image'
        ],
        [
            'title' => 'Actualité 5',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/blog/5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Actualité image'
        ],
        [
            'title' => 'Actualité 6',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/blog/6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Actualité image'
        ],
        [
            'title' => 'Equipe 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/team/1.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Equipe image'
        ],
        [
            'title' => 'Equipe 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/team/2.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Equipe image'
        ],
        [
            'title' => 'Equipe 3',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/team/3.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Equipe image'
        ],
        [
            'title' => 'Equipe 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/team/4.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Equipe image'
        ],
        [
            'title' => 'Equipe 5',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/team/5.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Equipe image'
        ],
        [
            'title' => 'Partenaire',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image partenaire'
        ],
        [
            'title' => 'Gallerie 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Gallerie 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/h2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Gallerie 3',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Gallerie 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Gallerie 5',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Gallerie 6',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Gallerie 7',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/portfolio/7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Gallerie'
        ],
        [
            'title' => 'Tarif 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/pricing/s1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/pricing/s2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/pricing/s3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif 4',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/pricing/s4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif Homme 1',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/gallery/m1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif Homme 2',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/gallery/m2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif Homme 3',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/gallery/m3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],
        [
            'title' => 'Tarif Enfant',
            'path' => '/src/Themes/Heliotrope/Resources/public/img/products/1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Tarif'
        ],

    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}