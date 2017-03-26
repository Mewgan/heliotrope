<?php
namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Team\Services\LoadTeamFixture;

class LoadTeam extends AbstractFixture implements DependentFixtureInterface
{

    use LoadTeamFixture;
    
    protected $data = [
        'heliotrope-briana-team' => [
            'full_name' => 'Briana',
            'photo' => '/src/Themes/Heliotrope/Resources/public/img/team/1.png',
            'gender' => 0,
            'position' => 0,
            'description' => 'Hair Expert',
            'roles' => ['owner-role'],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-jessica-team' => [
            'full_name' => 'Jessica',
            'photo' => '/src/Themes/Heliotrope/Resources/public/img/team/2.png',
            'gender' => 0,
            'position' => 1,
            'description' => 'Hair Expert',
            'roles' => ['barber-role'],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-rachel-team' => [
            'full_name' => 'Rachel',
            'photo' => '/src/Themes/Heliotrope/Resources/public/img/team/3.png',
            'gender' => 0,
            'position' => 2,
            'description' => 'Hair Expert',
            'roles' => ['barber-role'],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-emma-team' => [
            'full_name' => 'Emma',
            'photo' => '/src/Themes/Heliotrope/Resources/public/img/team/4.png',
            'gender' => 0,
            'position' => 3,
            'description' => 'Hair Expert',
            'roles' => ['barber-role'],
            'website' => 'heliotrope-society'
        ],
        'heliotrope-delphine-team' => [
            'full_name' => 'Delphine',
            'photo' => '/src/Themes/Heliotrope/Resources/public/img/team/5.png',
            'gender' => 0,
            'position' => 4,
            'description' => 'Hair Expert',
            'roles' => ['barber-role'],
            'website' => 'heliotrope-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
       $this->loadTeam($manager);
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
            'Jet\Modules\Team\Fixtures\LoadTeamRole',
        ];
    }
}