<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaires")
 */

class Proprietaire 
{

        /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private  $id_proprietaire;
       /**
     * @ORM\Column(type="string")
     */
    private  $Nom;
       /**
     * @ORM\Column(type="string")
     */
    private  $Prenom;
     /**
     * @ORM\Column(type="string")
     */
    private  $Email;
     /**
     * @ORM\Column(type="string",unique=true)
     */
    private  $Mot_passe;
     /**
     * @ORM\Column(type="string")
     */
    private  $Civilite;
     /**
     * @ORM\Column(type="integer", unique=true)
     */
    private  $Numero;
     /**
     * @ORM\Column(type="boolean")
     */
    private  $Sexe;
     /**
     * @ORM\Column(type="string")
     */
    private  $Date_naissance;
     /**
     * @ORM\Column(type="string")
     */
    private  $Lieu_naissance;
     /**
     * @ORM\Column(type="integer",unique=true)
     */
    private  $Code_identite_national;
     /**
     * @ORM\Column(type="integer", unique=true)
     */
    private  $Numero_identite_national;


    public function __construct()
    {
                
    }


    public  function getId(){
        return $this->id_proprietaire;
    }
    public  function setId($id_proprietaire){
        $this->id_proprietaire=$id_proprietaire;
    }

    public  function getNom(){
        return $this->Nom;
    }
    public  function setNom($Nom){
        $this->Nom=$Nom;
    }
   
    public  function getPrenom(){
        return $this->Prenom;
    }
    public  function setPrenom($Prenom){
        $this->Prenom=$Prenom;
    }


    public  function getEmail(){
        return $this->Email;
    }
    public  function setEmail($Email){
        $this->Email=$Email;
    }


    public  function getMot_passe(){
        return $this->Mot_passe;
    }
    public  function setMot_passe($Mot_passe){
        $this->Mot_passe=$Mot_passe;
    }

    
    public  function getCivilite(){
        return $this->Civilite;
    }
    public  function setCivilite($Civilite){
        $this->Civilite=$Civilite;
    }
    

    public  function getNumero(){
        return $this->Numero;
    }
    public  function setNumero($Numero){
        $this->Numero=$Numero;
    }
  

    public  function getSexe(){
        return $this->Sexe;
    }
    public  function setSexe($Sexe){
        $this->Sexe=$Sexe;
    }
    

    public  function getDate_naissance(){
        return $this->Date_naissance;
    }
    public  function setDate_naissance($Date_naissance){
        $this->Date_naissance=$Date_naissance;
    }
   

    public  function getLieu_naissance(){
        return $this->Lieu_naissance;
    }
    public  function setLieu_naissance($Lieu_naissance){
        $this->Lieu_naissance=$Lieu_naissance;
    }


    public  function getCode_identite_national(){
        return $this->Code_identite_national;
    }
    public  function setCode_identite_national($Code_identite_national){
        $this->Code_identite_national=$Code_identite_national; 
    }
   

    public  function getNumero_identite_national(){
        return $this->Numero_identite_national;
    }
    public  function setNumero_identite_national($Numero_identite_national){
        $this->Numero_identite_national=$Numero_identite_national;
    }
}

?>