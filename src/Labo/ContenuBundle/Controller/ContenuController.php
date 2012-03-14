<?php

namespace Labo\ContenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ContenuController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LaboContenuBundle:Default:index.html.twig');
    }
    
    public function presentationAction()
    {
        return $this->render('LaboContenuBundle:Default:presentation.html.twig');
    }
    
    public function technologieswebAction()
    {
        return $this->render('LaboContenuBundle:Default:technologiesweb.html.twig');
    }
    
    public function projetequipeAction()
    {
        return $this->render('LaboContenuBundle:Default:projetequipe.html.twig');
    }
    
    public function communauteAction()
    {
        return $this->render('LaboContenuBundle:Default:communaute.html.twig');
    }
    
    public function nosprojetsAction(){
        return $this->render('LaboContenuBundle:Default:nosprojets.html.twig');
    }
}
