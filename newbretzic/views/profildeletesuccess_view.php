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

                   <?php if (!isset($_SESSION['admin'])): ?>

                    <div style="color:red;font-weight: bold"><p>Vous n'êtes pas connecté ! Connectez-vous sur la page d'accueil SVP.</p></div>
             
                <?php else: ?>

                    <div style="color:green;font-weight: bold"><p>La suppression de votre profil a bien été effectuée ! Nous espérons à bientôt :-)</p></div>

                <?php endif; ?>

                <div class="mt-50"></div>
                
              </div>
          </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
