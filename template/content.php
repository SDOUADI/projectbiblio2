<button type="button" class="btn btn-success" id="livrein">livre in</button>                   
<marquee><p>Née dans la ville d’Enugu, elle grandit dans la ville universitaire de Nsukka au sud-est du Nigeria, où est implantée l’université du Nigeria (UNN, University of Nigeria, Nsukka) depuis 1960. Elle est la cinquième d'une famille igbo de six enfants1. Durant son enfance, son père enseignait à l’UNN comme professeur de statistiques, et sa mère était la responsable du bureau de la scolarité2. Sa famille est originaire du village Abba, dans l'État d'Anambra3.

Pendant un an et demi, elle étudie la médecine et la pharmacologie à l'université du Nigeria. À l’âge de 19 ans, elle quitte le Nigeria pour les États-Unis pour étudier la communication et les sciences politiques à l'université Drexel de Philadelphie en Pennsylvanie, Chimamanda Ngozi Adichie opte pour </p></marquee>


<div class="row" >
    
<?php
    
    include "includes/connexiondb.php";
    
    try{
        
        
$sth = $dbco->prepare(
                    "SELECT livre.titre,
                            livre.id_livre,
                            livre.genre,
                            livre.logo_livre,
                            auteur.nom as auteur_name,
                            editeur.nom as editeur_name FROM livre,
                            publier,auteur,editeur WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur AND
                            publier.id_editeur=editeur.id_editeur"
                );
                
                $sth->execute();
                
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				foreach ($result as $row => $livre) {
                    
                    
                    
      
                    echo '<div class="col-4">';
						echo '<div class="card livrecard">';
						echo '<img class="card-img-top" src="uploads/'.$livre['logo_livre'].
                             '" alt="Card image cap">';
                    
				        echo '<div class="card-body">';
						echo '<h5 class="card-title">'.$livre['titre'].'</h5>';
						echo '<p class="card-text"> '.$livre['genre'].'.</p>';
						echo '<p class="card-text"><small class="text-muted">livre</small></p>';
                        echo '<a class="btn btn-success" href="?id='.$livre['id_livre'].
                             '&page=livre">details</a>';
						echo ' </div>';
						echo '</div>';
						echo '</div>';
             	}
        
        }         
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
   
      
</div>



    
