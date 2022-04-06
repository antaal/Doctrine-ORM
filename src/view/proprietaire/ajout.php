<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
     
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>
<body>
  <h1 class="text-center">Formulaire D'enregistrement</h1>
<div class="col-6 m-5 mx-auto">
        <form method="POST" action="http://doctrine-brief.test/Proprietaire/ajout" >
            <div class="mb-3">
              <label for="Nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="Nom" name="Nom" >
            </div>
            <div class="mb-3">
                <label for="Prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" >
              </div>
              <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text"  class="form-control" id="Email" name="Email" >
              </div>
              <div class="mb-3">
                <label for="Mot_passe" class="form-label">Mot de Passe</label>
                <input type="text"  class="form-control" id="Mot_passe" name="Mot_passe" >
              </div>
              <div class="mb-3">
                <label for="Civilite" class="form-label">Civilite</label>
                <input type="text" class="form-control" id="Civilite" name="Civilite" >
              </div>
              <div class="mb-3">
                <label for="Numero" class="form-label">Numéro</label>
                <input type="number"  class="form-control" id="Numero" name="Numero" >
              </div>
              <div class="mb-3">
                <label for="Sexe" class="form-label">Sexe</label>
                <input type="text"  class="form-control" id="Sexe" name="Sexe" >
              </div>
              <div class="mb-3">
                <label for="Date_naissance" class="form-label">Date de Naissance</label>
                <input type="datetime" class="form-control" id="Date_naissance"  name="Date_naissance" >
              </div>
              <div class="mb-3">
                <label for="Lieu_naissance" class="form-label">Lieu de Naissance</label>
                <input type="text" class="form-control" id="Lieu_naissance" name="Lieu_naissance" >
              </div>
              <div class="mb-3">
                <label for="Code_identite_national" class="form-label">Code d'Identité National</label>
                <input type="number" class="form-control" id="Code_identite_national"  name="Code_identite_national" >
              </div>
              <div class="mb-3">
                <label for="Numero_identite_national" class="form-label">Numéro d'Identité National</label>
                <input type="number"  class="form-control" id="Numero_identite_national" name="Numero_identite_national" >
              </div>
              
              
             
              
              <input type="submit" class="button" value="Ajouter" name="add">
          </form>
      </div>
      <div class="col-6">
</body>
</html>