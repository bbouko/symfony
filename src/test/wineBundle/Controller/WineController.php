<?php

namespace test\wineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WineController extends Controller
{
    public function indexAction()
    {
       
       return $this->render('testwineBundle:wine:index.html.twig', array( 'bouteilles' => array()));
    }
    
    public function voirAction($id){
       $bouteille = array(
    'id'      => 1,
    'nom'   => 'bouteile XXXXXX',
    
  );   
  
  return $this->render('testwineBundle:Wine:voir.html.twig', array(
    'bouteille' => $bouteille
  ));
    }
    public function ajouterAction()
  {
 
    
    if( $this->get('request')->getMethod() == 'POST' )    {  
      
      $this->get('session')->getFlashBag()->add('notice', 'bouteille bien enregistrée');       
      return $this->redirect( $this->generateUrl('testwine_voir', array('id' => 5)) );
    }    
    return $this->render('testwineBundle:Wine:ajouter.html.twig');
  }
  
  public function modifierAction($id) {

    return $this->render('testwineBundle:Wine:modifier.html.twig');
  }

  public function supprimerAction($id)
  {
   
    return $this->render('testwineBundle:Wine:supprimer.html.twig');
  }
  
    public function menuAction()
  {
    
    $liste = array(
      array('id' => 2, 'nom' => 'Vin 1'),
      array('id' => 5, 'nom' => 'Vin 2'),
      array('id' => 9, 'nom' => 'Vin 3')
    );
        
    return $this->render('testwineBundle:Wine:menu.html.twig', array(
      'liste_bouteilles' => $liste
    ));
  }
}
