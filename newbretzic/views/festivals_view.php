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
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div id="festivalslist-title"><h2><i class="fas fa-heartbeat"></i>&nbsp; Annuaire des festivals<span><a href="./concerts">&nbsp; <i class="fas fa-hand-point-right"></i>&nbsp; Annuaire des concerts &nbsp;<i class="fab fa-itunes-note"></i></a></span></h2></div>
                        <table id="festivals-list">         
                          <thead>
                              <tr> 
                                  <th>Dates &nbsp;<i class="far fa-calendar-alt"></i></th> 
                                  <th>Festival &nbsp;<i class="fas fa-flag-checkered"></i></th>        
                              </tr>
                          </thead>
                          <?php foreach ($allFestivals as $index => $article): ?>
                          <tbody> 
                              <tr> 
                                  <td>
                                      Du <?= date_format(date_create($article['date_beginning']), "d/m/Y")?><br> 
                                      Au <?= date_format(date_create($article['date_end']), "d/m/Y")?>
                                  </td>
                                  <td>
                                      <strong><?php echo $article['name']?></strong><br>
                                      <i class="fas fa-globe-americas"></i>&nbsp;Lien web <a href="<?php echo $article['site_link']; ?>"title="Lien vers le site web du festival" target="_blank"><i class="fas fa-link"></i></a><br>
                                      <i class="fas fa-map-marked-alt"></i>&nbsp;<?php echo $article['town']?>&nbsp;(<?php echo $article['department']?>)
                                  </td> 
                              </tr>
                          </tbody>
                          <?php endforeach; ?>  
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3" id="right-block">
                <div class="row">   
                    <div class="col-md-12">
                        <div class="poster-title1"><i class="fas fa-info-circle"></i>&nbsp;A ne pas manquer !</div>
                        <div class="slider">
                    <div class="slides">
                        <div class="slide"><img src="./assets/images/festival_bretagne1.jpg" alt="festival_bretagne" /></div>
                        <div class="slide"><img src="./assets/images/festival_bretagne2.jpg" alt="festival_bretagne" /></div>
                        <div class="slide"><img src="./assets/images/festival_bretagne3.jpg" alt="festival_bretagne" /></div>
                    </div>
                </div>
                <div class="row"> 
                    
                <div class="poster-title2">Toujours à l'affiche...</div>
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
            <div class="mt-20"></div> 
        </div>              
    </div>
    <div class="mt-20"></div>

    <?php foreach ($allFestivals as $index => $article): 
              
        $data[] = [
            'datebegin' => date_format(date_create($article['date_beginning']), "d/m/Y"),
            'dateend' => date_format(date_create($article['date_end']), "d/m/Y"),
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
