<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>

</head>
<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Detail Propriétaire</h1>
                    <div class="form-group">
                        <label><h4>Prénom & Nom:</h4></label>
                        <td><?=  $data->getPrenom()." ". $data->getNom() ?></td>
                    </div>
                    <div class="form-group">
                        <label><h4>Mot de Passe:</h4></label>
                        <td><?=  $data->getMot_passe()?></td>
                    </div>
                    <div class="form-group">
                        <label><h4>Sexe:</h4></label>
                        <td><?= 
                         $data->getSexe() ? "Feminin" : "Masculin"
                        ?></td>
                    </div>
                    <div class="form-group">
                        <label><h4>Date de Naissance:</h4></label>
                        <td><?= $data->getDate_naissance()?></td>
                    </div>
                    <div class="form-group">
                        <label><h4>Lieu de Naissance:</h4></label>
                        <td><?= $data->getLieu_naissance()?></td>
                    </div>
                    <div class="form-group">
                        <label><h4>Code d'Identité National:</h4></label>
                        <td><?= $data->getCode_identite_national()?></td>
                    </div>
                    <div class="form-group">
                        <label><h4>Numéro d'Identité National:</h4></label>
                        <td><?= $data->getNumero_identite_national()?></td>
                    </div>

                    <p class="mt-5"><a href="http://doctrine-brief.test/Proprietaire/liste" class="btn btn-primary">Retourner</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
