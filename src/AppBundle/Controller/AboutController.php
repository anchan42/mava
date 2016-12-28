<?php
// mava/src/AppBundle/Controller/AboutController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class AboutController extends Controller{
  public function detailsAction($name)
  {
  $user=$this->getDoctrine()
         ->getRepository('AppBundle:User')
         ->findOneByName($name);
  return $this->render(
             'AppBundle:about:more.html.twig',
             array('user' => $user)
             );
  }
}

