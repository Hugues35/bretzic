<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "views/includes/head.php" ?>
    <title>Bretzic - Gestion des festivals</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <?php include_once "views/includes/header.php" ?>

    <div class="container">
        <div class="row">
          <div class="col-md-12">
              
              <form action="" method="post" id="festival-form">
                <p>
                    <h3>Saisie d'un nouveau festival</h3>

                    <?php if (!isset($_SESSION['admin'])): ?>
        
                          <div style="color:red;font-weight: bold"><p>Vous n'êtes pas connecté ! Connectez vous en tant qu'administrateur</p></div>
                 
                      <?php else: ?>

                        <div id="inscrip-form-datas">
                          <ul>
                            
                            <li>Nom du festival<br>
                            <input type="text" name="festival-name" id="festival-name" class="input-width" placeholder="Nom du festival" required /></li>
                             
                            <li>Date début<br>
                            <input type="date" name="festival-beginning" id="festival-beginning" class="input-width" placeholder="00/00/0000" required /></li>

                            <li>Date fin<br>
                            <input type="date" name="festival-end" id="festival-end" class="input-width" placeholder="00/00/0000" required /></li>
                            
                            <li>Ville<br>
                            <input type="text" name="festival-town" id="festival-town" class="input-width" placeholder="Ville" required /></li>

                            <li>Département<br>
                            <input type="text" name="festival-dpt" id="festival-dpt" class="input-width" placeholder="00" required /></li>  

                            <li>Lien web<br>
                            <input type="url" name="festival-link" id="festival-link" class="input-width" placeholder="http://www.bretzic.com" required /></li>

                            <li>Localisation latitude<br>
                            <input type="text" name="festival-lat" id="festival-lat" class="input-width" placeholder=00 required="" /></li>

                            <li>Localisation longitude<br>
                            <input type="text" name="festival-lon" id="festival-lon" class="input-width" placeholder=00 required="" /></li>

                            <li>
                            <input type="submit" name="btn-newfestival" id="btn-newfestival" value="Valider" /></li>

                          </ul>
                        </div>

                        <div id="inscrip-form-validation">
                          <?php if (isset($validation)): ?>
                              <div style="color:green;font-weight: bold"><?= $validation ?></div>
                          <?php endif; ?>
                        </div>
                    
                    <?php endif; ?>
                </p>
              </form>
          </div>
        </div>
    </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
