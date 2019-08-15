<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "views/includes/head.php" ?>
    <title>Bretzic</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <?php include_once "views/includes/header.php" ?>

    <div id="scrolltop-block">
        <a href="#page-top"><i class="fas fa-chevron-circle-up"></i></a>
    </div>

    <?php if (isset($_SESSION['pseudo'])): ?>
	    <div id="user-identity-block">
	        <p><i class="fas fa-user"></i>&nbsp;<?php echo ($_SESSION['pseudo']); ?></p>
	    </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
          	<div id="picturehome-block" class="col-md-12">

	          	<div  class="container">
			        <div class="row">
				        <div class="col-md-4">   
			              	<?php if (isset($_SESSION['pseudo'])): ?>
				                <a id="connect_link1" href="./profiluser" class="btn btn-connect" type="button">Mon profil &nbsp;<i class="fas fa-user"></i></a>
				                <a id="connect_link2" href="./userconnection" class="btn btn-connect" type="button">Déconnexion &nbsp;<i class="fas fa-sign-out-alt"></i></a>
			              	<?php else: ?>
			                  	<a id="connect_link3" href="./registration" class="btn btn-connect" type="button">Passer une annonce &nbsp;<i class="fas fa-bullhorn"></i></a>
			                  	<a id="connect_link4" href="./userconnection" class="btn btn-connect" type="button">Connexion &nbsp;<i class="fas fa-plug"></i></a>
			              	<?php endif; ?>
				        </div>
			        </div>
			    </div>

	            <img src="./assets/images/bretzic_picture.jpg" class="bretzic_picture" alt="Bretzic picture"/>
	            <div id="home-titles">
	            	<div class="bretagne"><img src="./assets/images/bretagne.png" alt="Drapeau Bretagne" /></div>
		            <div class="home-titles1"><i class="fab fa-creative-commons-sampling"></i>&nbsp;Annonces de musiciens</div>
		            <div class="home-titles2"><i class="fab fa-creative-commons-sampling"></i>&nbsp;Festivals</div>
		            <div class="home-titles3"><i class="fab fa-creative-commons-sampling"></i>&nbsp;Concerts</div>
		        </div>
	            <h1 class="h1-custom">Bretzic.com connecte les musiciens de Bretagne <i class="fas fa-plug"></i></h1>
	               
	            <div id="homelinks-block" class="row">
		            <div class="col-md-9">
		                					        
			            <h1 id="title-table"><i class="fas fa-microphone-alt"></i> Annonces musiciens</h1>   
		                <table>
			                <thead>
			                    <tr> 
				                    <th>Membre &nbsp;<i class="fas fa-id-card"></i></th> 
				                    <th>Recherche &nbsp;<i class="fas fa-search"></i></th> 
			                    </tr>
			                </thead>

		                  	<?php foreach ($allAnnounces as $index => $item): ?>
		                   
			                  	<tbody id="announces-list"> 
				                    <tr> 
					                    <td>
					                        <ul>
						                        <li><i class="fas fa-user"></i>&nbsp;<strong><?php echo $item['pseudo']; ?>&nbsp;[<?php echo $item['instrument'] ?>]</strong></li> 
						                        <li><?php echo $item['town'] ?></li>
						                        <li><?php echo $item['sex'] ?></li> 
						                        <li>Style : <?php echo $item['style'] ?></li>
						                        <li>Expérience : <?php echo $item['experience'] ?> ans</li>
						                        <li>Groupe : <?php echo $item['groupname'] ?></li>
						                        <li><i class="fas fa-globe-americas"></i>&nbsp;<a href="<?php echo $item['weblink']; ?>"title="Lien web" target="_blank">Lien web</a></li>
						                        <li><i class="far fa-envelope"></i>&nbsp;<?php echo $item['email'] ?></li>
					                        </ul>
					                    </td>
					                    <td>
					                        <ul>
					                          <li><strong>Annonce : <?php echo $item['title_announce'] ?></strong></li>
					                          <li><?php echo $item['message'] ?></li>
					                          <li>Statut : <?php echo $item['status_announce'] ?></li>
					                          <li>Situation : <?php echo $item['situation_announce'] ?></li>
					                        </ul> 
					                    </td>
				                    </tr>
			                 	</tbody>

		                	<?php endforeach; ?> 

		                </table>
		            </div>
				                  
		            <div class="col-md-3" id="right-block">
		                <div class="row">
		                	
		                	<div class="col-md-12">
		                		<div class="poster-title1">A ne pas manquer&nbsp;<i class="fas fa-thumbs-up"></i></div>
			                	<div class="slider">
									<div class="slides">
										<div class="slide"><img src="./assets/images/festival_bretagne1.jpg" alt="festival_bretagne" /></div>
										<div class="slide"><img src="./assets/images/festival_bretagne2.jpg" alt="festival_bretagne" /></div>
										<div class="slide"><img src="./assets/images/festival_bretagne3.jpg" alt="festival_bretagne" /></div>
									</div>
								</div>
				            </div>

				            <div class="poster-title2">Toujours à l'affiche&nbsp;<i class="fas fa-hand-point-down"></i></div>
			                <div class="col-md-6">
			                    <div id="affiche1">
			                      <img src="./assets/images/affiche_petite0.jpg" class="affiche_petite0" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche2">
			                      <img src="./assets/images/affiche_petite1.jpg" class="affiche_petite1" alt="Affiche"/>
			                    </div> 
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche3">
			                      <img src="./assets/images/affiche_petite2.jpg" class="affiche_petite2" alt="Affiche"/>
			                	</div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche4">
			                      <img src="./assets/images/affiche_petite3.gif" class="affiche_petite3" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche1">
			                      <img src="./assets/images/affiche_petite0.jpg" class="affiche_petite0" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche2">
			                      <img src="./assets/images/affiche_petite1.jpg" class="affiche_petite1" alt="Affiche"/>
			                    </div> 
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche3">
			                      <img src="./assets/images/affiche_petite2.jpg" class="affiche_petite2" alt="Affiche"/>
			                	</div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche4">
			                      <img src="./assets/images/affiche_petite3.gif" class="affiche_petite3" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche1">
			                      <img src="./assets/images/affiche_petite0.jpg" class="affiche_petite0" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche2">
			                      <img src="./assets/images/affiche_petite1.jpg" class="affiche_petite1" alt="Affiche"/>
			                    </div> 
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche3">
			                      <img src="./assets/images/affiche_petite2.jpg" class="affiche_petite2" alt="Affiche"/>
			                	</div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche4">
			                      <img src="./assets/images/affiche_petite3.gif" class="affiche_petite3" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche1">
			                      <img src="./assets/images/affiche_petite0.jpg" class="affiche_petite0" alt="Affiche"/>
			                    </div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche2">
			                      <img src="./assets/images/affiche_petite1.jpg" class="affiche_petite1" alt="Affiche"/>
			                    </div> 
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche3">
			                      <img src="./assets/images/affiche_petite2.jpg" class="affiche_petite2" alt="Affiche"/>
			                	</div>
			                </div>
			                <div class="col-md-6">
			                    <div id="affiche4">
			                      <img src="./assets/images/affiche_petite3.gif" class="affiche_petite3" alt="Affiche"/>
			                    </div>
			                </div>
		                </div>
		            </div>          
		        </div>    
		    </div>
		</div>
	</div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
