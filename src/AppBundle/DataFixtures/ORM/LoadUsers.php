<?php

// mava/src/AppBundle/DataFixtures/ORM/LoadUsers.php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUsers extends AbstractFixture implements FixtureInterface {

    public function load(ObjectManager $manager) {
        $user1 = new User();
        $user1->setName('John');
        $user1->setBio('He is a cool guy');
        $user1->setEmail('john@mava.info');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('Jack');
        $user2->setBio('He is a cool guy too');
        $user2->setEmail('jack@mava.info');
        $manager->persist($user2);

        $manager->flush();

        $this->addReference('user-john', $user1);
        $this->addReference('user-jack', $user2);
    }

    public function getOrder() {
        return 30; // the order in which fixtures will be loaded
    }

}
