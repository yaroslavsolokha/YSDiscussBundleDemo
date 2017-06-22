<?php

namespace YS\DiscussBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use YS\DiscussBundle\Entity\Discuss;
use YS\DiscussBundle\Form\DiscussType;

class DefaultController extends Controller
{
  public function indexAction()
  {
    $discuss = new Discuss();
    $form = $this->createForm(DiscussType::class, $discuss);
    return $this->render('YSDiscussBundle:Default:index.html.twig', array (
      'form' => $form->createView()
    ));
  }
}
