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

                    <div class="mt-50"></div>
                    <h2><i class="fas fa-user-cog"></i></h2>
                    <div class="mt-20"></div>
                    <h3>Saisie d'un nouveau concert</h3>

                    <?php if (!isset($_SESSION['admin'])): ?>
        
                          <div style="color:red;font-weight: bold"><p>Vous n'êtes pas connecté ! Connectez vous en tant qu'administrateur</p></div>
                 
                      <?php else: ?>

                        <div id="inscrip-form-datas">
                          <ul>
                             
                            <li>Date du concert<br>
                            <input type="date" name="concert-day" id="concert-day" class="input-width" placeholder="00/00/0000" required /></li>
                           
                            <li>Etablissement<br>
                            <input type="text" name="concert-establishment" id="concert-establishment" class="input-width" placeholder="Nom de l'établissement" required /></li>

                            <li>Ville<br>
                            <input type="text" name="concert-town" id="concert-town" class="input-width" placeholder="Ville" required /></li>

                            <li>Adresse<br>
                            <textarea name="concert-address" id="concert-address" class="input-width" placeholder="Adresse"  required></textarea></li>

                            <li>Département<br>
                            <input type="text" name="concert-dpt" id="concert-dpt" class="input-width" placeholder="00" required /></li>

                            <li>Non du groupe<br>
                            <input type="text" name="concert-groupname" id="concert-groupname" class="input-width" placeholder="Nom" required /></li>

                            <li>Lien web du groupe<br>
                            <input type="url" name="concert-link" id="concert-link" class="input-width" placeholder="http://www.bretzic.com" required /></li>

                            <li>Style de musique<br>
                            <select name="concert-style" id="concert-style">
                            <?php foreach ($allStylezic as $value): ?>
                                <option value="<?= $value['style'] ?>"><?= $value['style'] ?></option>
                            <?php endforeach; ?>
                            </select></li>

                            <li>Localisation latitude<br>
                            <input type="text" name="concert-lat" id="concert-lat" class="input-width" placeholder=00 required="" /></li>

                            <li>Localisation longitude<br>
                            <input type="text" name="concert-lon" id="concert-lon" class="input-width" placeholder=00 required="" /></li>

                            <li>
                            <input type="submit" name="btn-newconcert" id="btn-newconcert" value="Valider" /></li>

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
    <div class="mt-50"></div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
