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
                  <div id="block-festival-success">

                      <div class="mt-50"></div>

                      <?php if (!isset($_SESSION['admin'])): ?>
        
                          <div style="color:red;font-weight: bold"><p>Vous n'êtes pas connecté ! Connectez vous sur la page d'accueil</p></div>
                 
                      <?php else: ?>

                          <div id="festiv-modif-text" style="color:green;font-weight: bold"><p>Festival numéro <?= $id ?> modifié : <br>Date début : <?= $newdatebegin ?><br>Date fin : <?= $newdateend ?><br>Nom : <?= $newname ?><br>Ville : <?= $newtown ?><br>Département : <?= $newdepart ?><br>Site web : <?= $newwebsite ?><br>Latitude : <?= $newlat ?><br>Longitude : <?= $newlon ?><br></p></div>

                          <div id="festiv-delete-text" style="color:green;font-weight: bold"><p>Festival numéro <?= $idDelete ?> a bien été supprimé.</p></div>
                      
                      <?php endif; ?>

                      <div class="mt-50"></div>

                  </div>>    
              </div>
          </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
