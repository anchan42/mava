<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Workcpace;
/**
 * Description of LoadWorkspaces
 *
 * @author anchan
 */
class LoadWorkspaces extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $workspace1 = new Workcpace();
    $workspace1->setName('Writing');
    $workspace1->setDescription('info for writing Workspace');
    $manager->persist($workspace1);
    $manager->flush();
    $this->addReference('workspace-writing', $workspace1);
  }

  public function getOrder()
  {
    return 10; // the order in which fixtures will be loaded
  }
}