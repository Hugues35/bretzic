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

    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <p><h1 class="festivalsconcerts-title" ><a style= "color:white" href="./festivals">Festivals <img src="./assets/images/green_marker.png" class="festivals-icon" alt="Icone festival"/></a> &nbsp; &nbsp; <a style= "color:white" href="./concerts">Concerts <img src="./assets/images/yellow_marker.png" class="festivals-icon" alt="Icone festival"/></a></h1></p>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                  <div id="mapid"></div>               
              </div>
            </div>  
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
         
            <div class="row">
              <div class="col-md-12">
                <div id="festivalslist-title"><h2><i class="fab fa-itunes-note"></i>&nbsp; Annuaire des concerts<span><a href="./festivals"><i class="fas fa-hand-point-right"></i>&nbsp; Annuaire des festivals &nbsp; <i class="fas fa-heartbeat"></i></a></span></h2></div>
                <table id="festivals-list">         
                  <thead>
                    <tr> 
                      <th>Groupe &nbsp;<i class="fas fa-users"></i></th> 
                      <th>Date &nbsp;<i class="far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Lieu &nbsp;<i class="fas fa-map-marked-alt"></i></th>
                    </tr>
                  </thead>
                  <?php foreach ($allConcerts as $index => $article): ?>
                  <tbody> 
                    <tr> 
                      <td>
                          <i class="fas fa-users"></i>&nbsp;<strong><?php echo $article['groupname']?></strong>
                          <p>Style : <?php echo $article['style']?></p>
                          <p>Site web : <a href="<?php echo $article['groupsite']; ?>"title="Lien du groupe" target="_blank"><i class="fas fa-link"></i></a></p>
                      </td> 
                      <td>
                          <?= date_format(date_create($article['day']), "d/m/Y")?><br>
                          <i class="fas fa-hotel"></i>&nbsp;<strong><?php echo $article['establishment']?></strong><br>
                          <?php echo $article['address']?><br>
                          <?php echo $article['town']?>&nbsp;(<?php echo $article['department']?>)
                      </td> 
                  </tbody>
                  <?php endforeach; ?>  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-50"></div>

      <?php foreach ($allConcerts as $index => $article): 
                
          $data[] = [
              'date' => date_format(date_create($article['day']), "d/m/Y"),
              'groupname' => $article['groupname'],
              'town' => $article['town'],
              'style' => $article['style'],
              'lat' => $article['lat'],
              'lon' => $article['lon']
          ];
      endforeach;
     
      $contenu_json =json_encode($data);

      // Nom du fichier à créer
      $nom_du_fichier = 'concertsjson.json';

      // Ouverture du fichier
      $fichier = fopen($nom_du_fichier, 'w+');

      // Ecriture dans le fichier
      fwrite($fichier, $contenu_json);

      // Fermeture du fichier
      fclose($fichier);

      ?>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
