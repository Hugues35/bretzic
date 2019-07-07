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
            <div class="col-md-12" id="userconnection-block">
                <div class="mt-50"></div>

                <?php if (isset($_SESSION['pseudo']) || isset($_SESSION['admin'])): ?>

                    <div style="color:green;font-weight: bold"><p><?php echo ($_SESSION['pseudo']) ?>, vous êtes connecté.</p></div>

                    <a id="connect_link" href="./profiluser" class="btn btn-connect" type="button"><i class="far fa-hand-point-right"></i>Votre profil<i class="fas fa-plug"></i></a>

                    <form method="POST" action="./userdisconnectionsuccess" style="color:red;font-weight: bold">
                        <button type='submit' name="btn-userdisconnect">Déconnexion <i class="fas fa-sign-out-alt"></i></button></div>
                        <div class="mt-50"></div>
                    </form>

                 <?php else: ?>

                    <form method="POST" action="./userconnectionsuccess" >
                        <h3>Connexion</h3>
                        <div id="inscrip-form-datas">
                            <ul>                        
                                <li>Pseudo<br>
                                <input type="text" name="pseudo" placeholder="pseudo" required></li>                               
                            
                                <li>Mot de passe<br>
                                <input type="password" name="password" placeholder="Ex : ********" required ></li>

                                <div id="btn-userconnect">
                                <button type='submit' name="btn-userconnect" style="color:green;font-weight: bold">Connexion <i class="fas fa-plug"></i></button></div>
                            </ul>
                        </div>
                    </form>                

                <?php endif; ?>               

            </div>
        </div>
    </div>

    <?php include_once 'views/includes/footer.php '?>

</body>
</html>
