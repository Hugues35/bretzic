<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php '?>
    <title>Bretzic</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <?php include_once 'views/includes/header.php '?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <p><h1 class="h1-custom">Festivals en Bretagne</h1></p>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1366004.7566642815!2d-4.106197282964047!3d48.02887227290308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811ca61ae7e8eaf%3A0x10ca5cd36df24b0!2sBretagne!5e0!3m2!1sfr!2sfr!4v1560148007353!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>-->
                  <div id="mapid"></div>
                
              </div>
            </div>


                        
            <!--<div class="col-md-3">
              <div class="row">
                <div class="col-md-6">
                  <div id="affiche">
                    <img src="./assets/images/affiche_petite0.jpg" class="affiche_petite0" alt="Affiche"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="affiche">
                    <img src="./assets/images/affiche_petite1.jpg" class="affiche_petite1" alt="Affiche"/>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div id="affiche">
                    <img src="./assets/images/affiche_petite2.jpg" class="affiche_petite2" alt="Affiche"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="affiche">
                    <img src="./assets/images/affiche_petite3.gif" class="affiche_petite3" alt="Affiche"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="affiche">
                    <img src="./assets/images/affiche_petite4.jpg" class="affiche_petite4" alt="Affiche"/>
                  </div>
                </div>
              </div>
            </div>-->
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
                      <th>lat</th>
                      <th>long</th>
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
                      <td><div id="latvalue"><?php echo $article['lat']?></div></td>
                      <td><div id="lonvalue"><?php echo $article['lon']?></div></td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>  
                </table>
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
                
                  <?php foreach ($allFestivalsJson as $index => $article): ?>
                
                  <?php 
                  $data = [
                      'name' => $article['name'],
                      'town' => $article['town'],
                      'lat' => $article['lon'],
                      'lon' => $article['lon']
                  ];
                      
                      echo json_encode($data);?> 

                 <?php      

                          $contenu_json =json_encode($data);

                          // Nom du fichier à créer
                          $nom_du_fichier = 'fichier.json';

                          // Ouverture du fichier
                          $fichier = fopen($nom_du_fichier, 'w+');

                          // Ecriture dans le fichier
                          fwrite($fichier, $contenu_json);

                          // Fermeture du fichier
                          fclose($fichier);

                  ?>
                      
                  <?php endforeach; ?>  


                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php include_once 'views/includes/footer.php '?>

</body>
</html>
