<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "views/includes/head.php"?>
    <title>Connexion administrateur</title>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <?php include_once "views/includes/header.php"?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="connection-form">
                
                    <div class="mt-50"></div>
                    <h2><i class="fas fa-user-cog"></i></h2>
                    <div class="mt-20"></div>
                    <h2>Connexion administrateur</h2>
                    <div class="mt-20"></div>

                    <?php if (!isset($_SESSION['admin'])): ?>
                        <div id="form">
                            <form method="POST" action="">
                                <ul>
                                    <li>Identifiant<br>
                                    <input type="text" name="username" id="admin-ident" placeholder="Identifiant" required></li>
                                    <span id="pseudoHelp"></span>

                                    <li>Mot de passe<br>
                                    <input type="password" name="password" id="admin-pass" placeholder="Mot de passe" required></li>
                                    <span id="passwordHelp"></span>  
                                </ul>
                                <div class="mt-20"></div>
                                <p><label><input type="checkbox" name="connect" checked> Connexion automatique</label></p>
                                <div class="mt-20"></div>
                                <div id="button">
                                    <button type="submit" name="btnConnexion" style="color:green">Connexion  &nbsp;<i class="fas fa-sign-in-alt"></i></button>
                                </div>
                                <div class="mt-20"></div>
                            </form>
                        </div>

                    <?php else: ?>
                        <p id="confirm_connect">Bonjour <?= $_SESSION['admin']['username'] ?> , vous êtes déjà connecté &nbsp;<i class="far fa-thumbs-up"></i></p>
                        <div class="mt-50"></div>
                        <a id="chaptersadmin-btn" href="./festivalsmodifyadmin" title="Gestion des festivals">Gestion des festivals</a>
                        <div class="mt-50"></div>
                        <a id="chaptersadmin-btn" href="./festivalsadmin" title="Ajout d'un festival">Ajout d'un festival</a>
                        <div class="mt-50"></div>
                        <a id="chaptersadmin-btn" href="./concertsmodifyadmin" title="Gestion des concerts">Gestion des concerts</a>
                        <div class="mt-50"></div>
                        <a id="chaptersadmin-btn" href="./concertsadmin" title="Ajout d'un concert">Ajout d'un concert</a>
                        <div class="mt-50"></div>
                        <a id="messagesadmin-btn" href="./profilsadmin" title="Administration des profils">Administration des profils</a>
                        <div class="mt-50"></div>
                        <form method="POST" action="">
                            <button type="submit" name="btnDisconnec" style="color:red">Déconnexion &nbsp;<i class="fas fa-sign-out-alt"></i></button>
                        </form>
                        <div class="mt-20"></div>
                    <?php endif; ?>

                    <?php if (isset($error)): ?>
                        <div class="mt-50"></div>
                        <p id="error" style="color:red"><?= $error ?></p>
                    <?php elseif (isset($success)): ?>
                        <div class="mt-50"></div>
                        <p id="success" style="color:green;font-weight: bold"><?= $success ?></p>
                    <?php endif; ?>
                    <div class="mt-20"></div>
                
                </div>     
            </div>
        </div>
    </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
