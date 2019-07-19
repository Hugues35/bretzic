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
          <p><i class="fas fa-user"></i><?php echo ($_SESSION['pseudo']); ?></p>
      </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="h1-custom">Bretzic.com connecte les musiciens de Bretagne !</h1>
            <h1 class="h1-custom"><i class="fas fa-bolt"></i> Festivals <i class="fas fa-plug"></i>Concerts <i class="fas fa-plug"></i>Annonces <i class="fas fa-plug"></i>Portraits &nbsp;<i class="fas fa-bolt"></i></h1>
        
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                      <div class="element">  
                        <h4><i class="fas fa-heartbeat"></i>FESTIVALS</h4>
                        <a href="./festivals"><input class="btn btn-couleur" type="button" value="GO !"></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="element">
                        <h4><i class="far fa-eye"></i>CONCERTS</h4> 
                        <a href=""><input class="btn btn-couleur" type="button" value="GO !"></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="element">
                        <h4><i class="fas fa-microphone-alt"></i>MUSICIENS</h4>
                        <a href="./home"><input class="btn btn-couleur" type="button" value="GO !"></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="element">
                      <br>
                        <h4><i class="fas fa-drum"></i>MATERIEL</h4>
                        <a href=""><input class="btn btn-couleur" type="button" value="GO !"></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="element">
                      <br>
                        <h4><i class="fas fa-users"></i>FORUM</h4>
                        <a href=""><input class="btn btn-couleur" type="button" value="GO !"></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="element">
                        <br>
                        <h4><i class="far fa-envelope"></i>CONTACT </h4>
                        <a href=""><input class="btn btn-couleur" type="button" value="GO !"></a>
                      </div>
                    </div>
                  </div>
                  
            </div>
              <div class="col-md-3">
                <div class="row">
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
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4">   
              <?php if (isset($_SESSION['pseudo'])): ?>
                  <a id="connect_link" href="./profiluser" class="btn btn-connect" type="button"><i class="far fa-hand-point-right"></i> Mon profil <i class="fas fa-user"></i></a>
                  <a id="connect_link" href="./userconnection" class="btn btn-connect" type="button"><i class="far fa-hand-point-right"></i> Déconnexion <i class="fas fa-sign-out-alt"></i></a>
              <?php else: ?>
                  <a id="connect_link" href="./registration" class="btn btn-connect" type="button"><i class="far fa-hand-point-right"></i> S'enregistrer ~ Passer une annonce<i class="fas fa-plug"></i></a>
                  <a id="connect_link" href="./userconnection" class="btn btn-connect" type="button">Déjà membre ?... &nbsp;<i class="far fa-hand-point-right"></i> Connexion<i class="fas fa-plug"></i></a>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
        
            <h1 id="title-table"><i class="fas fa-microphone-alt"></i> Annonces musiciens</h1> 
            <div class="row">
              <div class="col-md-9">
                <table>
                  <thead>
                    <tr> 
                      <th>Membre &nbsp;<i class="fas fa-user"></i></th> 
                      <th>Profil &nbsp;<i class="fas fa-id-card"></i></th>
                      <th>Recherche &nbsp;<i class="fas fa-search"></i></th> 
                    </tr>
                  </thead>
                  <?php foreach ($allAnnounces as $index => $item): ?>
                   
                  <tbody id="announces-list"> 
                  
                    <tr> 
                      <td>
                        <ul>
                         <li><strong><?php echo $item['pseudo']; ?></strong></li>                        
                          <li><?php echo $item['town'] ?></li>
                          <li><?php echo $item['sex'] ?></li>
                          <li>Contact : <?php echo $item['email'] ?></li>
                        </ul>
                      </td> 
                      <td>
                        <ul>
                          <li><strong><?php echo $item['instrument'] ?></strong></li>
                          <li>Style : <?php echo $item['style'] ?></li>
                          <li>Expérience : <?php echo $item['experience'] ?> ans</li>
                          <li>Nom groupe : <?php echo $item['groupname'] ?></li>
                          <li><a href="<?php echo $item['weblink']; ?>"title="Lien web" target="_blank">Lien web</a></li>
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

          </div>
        </div>
      </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
