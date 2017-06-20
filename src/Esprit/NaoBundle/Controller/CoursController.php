<?php

namespace Esprit\NaoBundle\Controller;

use Esprit\NaoBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoursController
 *
 * @author ASUS-PC
 */
class CoursController extends Controller {
    //put your code here
    public function AddAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:Add.html.twig"); 
        
    }
     public function HomeAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:home.html.twig"); 
        
    }
       public function QcmAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:Qcm.html.twig"); 
        
    }
           public function CreationAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:creation.html.twig"); 
        
    }
    public function EnseignantAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:espaceenseignant.html.twig"); 
        
    }
     public function ControlAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:naocontrol.html.twig"); 
        
    }
       public function IpAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:ip.html.twig"); 
        
    }
    public function AbsenceAction(){
     //    $cour=new Cours();
    //    $request=$this->get('request');
      //  if ($request->getMethod()=='POST' ){
          /* 
            $cour->setDescription($request->get('1'));
            $cour->setUrl($request->get('2'));
        
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($cour) ;
            $em->flush() ;*/
        //    return $this->render('EspritNaoBundle:Cours:Add.html.twig');
        // }
        return $this->render("EspritNaoBundle:Cours:absence.html.twig"); 
        
    }
    
    
    
    
    
     public function UpdateAction($id){
          
        
    }
     public function SignupAction(){
         return $this->render("EspritNaoBundle:Cours:signup.html.twig");
    }
    
     public function ListAction(){
         /* $em=$this->getDoctrine()->getManager();
         $cours=$em->getRepository("EspritNaoBundle:Cours")
                 ->findAll();*/
         $cours=null ;
         return $this->render("EspritNaoBundle:Cours:List.html.twig",array('cours'=>$cours));
    }
        
    }

