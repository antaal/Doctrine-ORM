<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
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

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">liste des Proprietaires</h2>
                        <a href="http://doctrine-brief.test/Proprietaire/form" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Ajouter nouveau proprietaire</a>
                    </div>
                    

                           <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Civilite</th>
                                        <th>Prenom & Nom</th>
                                        <th>Numero</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data as $proprietaire){
                                    echo "<tr>";
                                        echo "<td>" . $proprietaire->getId() . "</td>";
                                        echo "<td>" . $proprietaire->getCivilite() . "</td>";
                                        echo "<td>" . $proprietaire->getPrenom()." ".$proprietaire->getNom()  . "</td>";
                                        echo "<td>" . $proprietaire->getNumero(). "</td>";
                                        echo "<td>" . $proprietaire->getEmail(). "</td>";
                                        echo "<td>";
                                            echo '<a href="http://doctrine-brief.test/Proprietaire/detail/'.$proprietaire->getId().'" class="mr-3" title="Detail Proprietaire" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="http://doctrine-brief.test/Proprietaire/edit/'.$proprietaire->getId().'" class="mr-3" title="Modification" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="http://doctrine-brief.test/Proprietaire/delete/'.$proprietaire->getId().'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                                               ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>