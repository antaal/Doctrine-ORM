<?php

namespace src\model;
use libs\system\Model;

class ProprietaireDb extends Model
{
    
  // public function __construct()
  // {
  //     parent::__construct();
      
  // }

    public function findAll(){
      
         
        return $this->entityManager
        ->createQuery("SELECT p FROM Proprietaire  p")
        ->getResult();
          
      }

      
    public function insert($proprietaire){

        
      $this->entityManager->persist($proprietaire);
      $this->entityManager->flush();
  }
  public function editBd($id) {

      return $owner = $this->entityManager->find("Proprietaire",$id);
   }

   public function modifierBd(){

      $this->entityManager->flush();
   }

   public function deleteBd($id){
      $owner = $this->entityManager->find("Proprietaire",$id);
      $this->entityManager->remove($owner);
      $this->entityManager->flush();
   }
}
