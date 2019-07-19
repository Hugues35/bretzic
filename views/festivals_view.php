<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "views/includes/head.php" ?>
    <title>Bretzic</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <?php include_once "views/includes/header.php" ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <p><h1 class="h1-custom">Festivals en Bretagne</h1></p>
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
                <table id="festivals-list">         
                  <thead>
                    <tr> 
                      <th>Dates</th> 
                      <th>Festival</th> 
                      <th>Lieu</th>
                      <th>Dpt</th> 
                      <th>Site web</th>
                    </tr>
                  </thead>
                  <?php foreach ($allFestivals as $index => $article): ?>
                  <tbody> 
                    <tr> 
                      <td><?= date_format(date_create($article['date_beginning']), "d/m/Y")?><br> 
                      <?= date_format(date_create($article['date_end']), "d/m/Y")?></td>
                      <td><strong><?php echo $article['name']?></strong></td> 
                      <td><?php echo $article['town']?></td> 
                      <td><?php echo $article['department']?></td> 
                      <td><a href="<?php echo $article['site_link']; ?>"title="Lien vers le site web du festival" target="_blank">Lien</a></td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php foreach ($allFestivals as $index => $article): 
                
          $data[] = [
              'name' => $article['name'],
              'town' => $article['town'],
              'lat' => $article['lat'],
              'lon' => $article['lon']
          ];
      endforeach;
     
      $contenu_json =json_encode($data);

      // Nom du fichier à créer
      $nom_du_fichier = 'fichierjson.json';

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
