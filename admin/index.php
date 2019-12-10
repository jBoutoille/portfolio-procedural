<?php

    session_start();
    if(!isset($_SESSION['user_id']))
    {

?>


    <!DOCTYPE html>
    <html lang="fr">



    <head>
        <title>Admin</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="../css/libs/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../admin/admin.css">

    </head>
    <body></body>
        <div class="container overlay">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header text-center">
                        <p>Administrateur</p>
                        
                    </div>
                    <div class="card-body">
                        <form action="traitement.php" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="user" type="text" class="form-control" placeholder="Utilisateur">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input name="mdp" type="password" class="form-control" placeholder="Mot de passe"> 
                            </div>

                            <div class="form-group">
                                <button name="submit_connection" type="submit" class="btn btn-dark">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>

<?php

    }

    else{
        
        header('Location: ' . $_SERVER['SERVER_NAME']);
    }
?>