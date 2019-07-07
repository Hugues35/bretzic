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

                <?php if (!isset($_SESSION['pseudo']) OR !isset($_SESSION['admin'])): ?>

                    <div style="color:red;font-weight: bold"><p>Vous n'êtes pas connecté ! Connectez vous sur la page d'accueil</p></div>
             
                <?php else: ?>

                    <div style="color:green;font-weight: bold"><p><?php $_SESSION['pseudo'] ?>, vous êtes bien connecté !</p></div>

                    <a id="connect_link" href="./profiluser" class="btn btn-connect" type="button"><i class="far fa-hand-point-right"></i>Votre profil<i class="fas fa-plug"></i></a>

                <?php endif; ?>
  
                <div class="mt-50"></div>
              
            </div>
        </div>

    <?php include_once 'views/includes/footer.php '?>

</body>
</html>
