<?php

namespace Esprit\NaoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author ASUS-PC
 */
class UserController extends Controller
{
    public function AddAction(){
         $team=new Equipe();
        $request=$this->get('request');
        if ($request->getMethod()=='POST' ){
            $team->setPays($request->get('1'));
            $team->setCapitaine($request->get('2'));
            $team->setContinent($request->get('3'));
            $team->setCoach($request->get('4'));
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($team) ;
            $em->flush() ;
            return $this->render('ExamenCoupedumondeBundle:Equipe:layout.html.twig');
         }
        return $this->render("ExamenCoupedumondeBundle:Equipe:layout.html.twig"); 
        
    }
     public function UpdateAction(){
        
    }
     public function DeleteAction(){
        
    }
     public function ListAction(){
          $em=$this->getDoctrine()->getManager();
         $teams=$em->getRepository("ExamenCoupedumondeBundle:Equipe")
                 ->findAll();
         return $this->render("ExamenCoupedumondeBundle:Equipe:list.html.twig",array('teams'=>$teams));
    }
        
    }
    //put your code here

