<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WorkspaceController extends Controller
{
  /**
   * @Route("/workspace/{name}", name="workspace_show")
   * @param $name
   * @return Response
   */
  public function showAction($name)
  {
    // ToDo:find available projects in the given workspace
    return $this->render('workspace/show.html.twig', array('project' => 'Symfony book'));
  }
}