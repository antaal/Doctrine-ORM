<?php
use libs\system\Controller;
use src\model\ProprietaireDb;



class ProprietaireController extends Controller
{

    // public function create()
    // {
    //     return $this->view->load("proprietaire/create");

    // }

    // public function liste()
    // {
    //     $propo = new Proprietaire();
    //     $owner= $propo->findAll() ;
    //     return $this->view->load("proprietaire/liste", $owner);
    // }

    // public function delete($id)
    // {
    //     echo $id;

    // }
   private $proprietairedao;
   public function __construct() {
       parent::__construct();
       $this->proprietairedao = new ProprietaireDb();
   }
   public function liste(){
        
      $listes = $this->proprietairedao->findAll();
      
      return $this->view->load("proprietaire/liste",$listes);
      }
   public function ajout(){

      $proprietaire = new Proprietaire();
      $proprietaire->setNom($_POST['Nom']);
      $proprietaire->setPrenom($_POST['Prenom']);
      $proprietaire->setEmail($_POST['Email']);
      $proprietaire->setMot_passe($_POST['Mot_passe']);
      $proprietaire->setCivilite($_POST['Civilite']);
      $proprietaire->setNumero($_POST['Numero']);
      $proprietaire->setSexe($_POST['Sexe']);
      $proprietaire->setDate_naissance($_POST['Date_naissance']);
      $proprietaire->setLieu_naissance($_POST['Lieu_naissance']);
      $proprietaire->setCode_identite_national($_POST['Code_identite_national']);
      $proprietaire->setNumero_identite_national($_POST['Numero_identite_national']);

       $this->proprietairedao->insert($proprietaire);
      return $this->liste();
    }

    public function form(){
      return $this->view->load("proprietaire/ajout");
    }

  
   public function edit($id) {
      $proprio = $this->proprietairedao->editBd($id);
      
      return $this->view->load("proprietaire/editer",$proprio);
   }

   public function detail($id) {
      $proprio = $this->proprietairedao->editBd($id);
      
      return $this->view->load("proprietaire/detail",$proprio);
   }

   public function modifier($id) {
      $data = $this->proprietairedao->editBd($id);
      $data->setNom($_POST['Nom']);
      $data->setPrenom($_POST['Prenom']);
      $data->setEmail($_POST['Email']);
      $data->setMot_passe($_POST['Mot_passe']);
      $data->setCivilite($_POST['Civilite']);
      $data->setNumero($_POST['Numero']);
      $data->setSexe($_POST['Sexe']);
      $data->setDate_naissance($_POST['Date_naissance']);
      $data->setLieu_naissance($_POST['Lieu_naissance']);
      $data->setCode_identite_national($_POST['Code_identite_national']);
      $data->setNumero_identite_national($_POST['Numero_identite_national']);
      $this->proprietairedao->modifierBd();
      return $this->liste();
   }
   
   public function delete($id) {
      $this->proprietairedao->deleteBd($id);
      return $this->liste();
   }

}




?>