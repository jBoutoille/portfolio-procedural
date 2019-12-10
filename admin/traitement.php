<?php
	session_start();
    include 'bdd.inc.php';

    $_SESSION["notification"] = "Un problème est survenu!";

  
	if (isset($_POST['submit_connection'])) 
	{
		
        $query=$pdo->prepare('SELECT * FROM user  WHERE user = :user');
        $query->bindValue(':user',$_POST['user'], PDO::PARAM_STR);
        $query->execute();
    
            $data=$query->fetch();

           
        if($_POST['mdp'] === $data['mdp'])
        {
        
            header('Location: dashboard/parametres/index.php');
        }
		else
		{
			require "404.php";
		}

	}

?>
