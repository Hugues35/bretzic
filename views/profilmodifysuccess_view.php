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
              <div id="profildelete-block" class="col-md-12">

                  <div class="mt-50"></div>

                  <?php if (!isset($_SESSION['pseudo'])): ?>

                     <div style="color:red;font-weight: bold"><p>Vous n'êtes pas connecté ! Connectez vous sur la page d'accueil</p></div>
             
                  <?php else:

                      if ($modify = 0): ?>

                          <div style="color:green;font-weight: bold"><p>La suppression du profil a bien été effectuée ! Nous espérons à bientôt :-)</p></div>

                      <?php else: ?>

                          <div style="color:green;font-weight: bold"><p><?php echo ($_SESSION['pseudo']) ?>, votre profil a bien été modifié !<br><br><i class="far fa-thumbs-up"></i></p></div>

                      <?php endif; ?>

                  <?php endif; ?>

                  <div class="mt-50"></div>
                
              </div>
          </div>
      </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
