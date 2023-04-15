<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>GENSHIN DLE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/css.css">
        <link rel="shortcut icon" href="image/5899473-middle_low.png">
    </head>
    
    <body>

    	<div class ="co">  <!-- DIV CO = EST LA JUSTE POUR VERIFIER QU'ON EST BIEN CONNECTER A LA BASE DE DONNES SINON IL AFFICHE L'ERREUR -->
    		<p>
    			<?php
    				//On se connecte juste a la base de données avec le login par default
					$source = "mysql:host=localhost;dbname=genshincharacter"; 
					$login = "root";
					$mdp = "";
					try{
						$db = new PDO($source,$login,$mdp);
										echo "ça marche !";

					}

					// si ça marche on echo ça marche
					catch(PDOException $e){
						$error_message = $e->getMessage();
						echo $error_message;
						exit();
					}
					//sinon on echo l'erreur c'est un try catch commme en C++
					//en fait tout ressemble au c++ c'est fou
				?>
			</p>
    	</div>

    	<!-- Apres la div acc on s'enfout c'est juste l'acceuil ya rien dedans mdr -->


    	<div class ="acc">

    		<div class ="titre">

    			<h1>Genshin DLE</h1>

    		</div>

    	</div>



    	<!-- Ok c'est la c'est la div test ou j'ai essayer de faire un bail -->

    	<div class ="test">


				    	
		
			<!-- action="action.php"   c'est le fichier auquel on va étre redirigé -->
			<form method="post" action="" accept-charset="utf-8">
				<p>Donner le nom du personnage : <input type="text" name="nom"/></p>
				<p><input type="submit" value="OK"></p>
			</form>
				
				<?php 

				$nomchara = htmlspecialchars($_POST['nom']);

				echo $nomchara; 

				

				
	    			if ($nomchara == 'Albedo'){
	    				$req = $db->prepare('SELECT * FROM `character`');
	                    $req->execute();
	                    $r = $req->fetchAll();

	                    foreach ($r as $r) {
	                    ?><p> <?php echo $r['nomCharacter']; echo $r['elementalPower']; ?></p>
	                    <?php 
						}
					}
				?>

    	</div>

    </body>

</html>