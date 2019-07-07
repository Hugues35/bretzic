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

                <?php if (isset($_SESSION['admin']) || isset($_SESSION['pseudo'])): ?>

                    <?php foreach ($Announcebyuser as $index1 => $allarticles): ?>

                        <form action="./registrationsuccess" method="post" id="inscription-form">
                        <p>
                            <h3>Fiche profil</h3>

                            <div id="inscrip-form-datas">
                                <ul>
                                    
                                    <li>Pseudo<br>
                                    <input type="text" name="pseudo" id="pseudo-inscrip" value="<?php echo($allarticles['pseudo']); ?>" required /></li>
                                     
                                    <li>Mot de passe<br>
                                    <input type="password" name="password" id="pass-inscrip" value="<?php echo($allarticles['pseudo']); ?>" required /></li>

                                    <li>Confirmer le mot de passe<br>
                                    <input type="password" name="password-confirm" id="passconfirm-inscrip" value="<?php echo($allarticles['password']); ?>" required /></li>

                                    <li>Email<br>
                                    <input type="email" name="email" id="email-inscrip" value="<?php echo($allarticles['email']); ?>" required /></li>
                                    
                                    <li>Année de naissance<br>
                                    <input type="number" id="birth-inscrip" name="birthyear" value="<?php echo($allarticles['birthyear']); ?>" required /></li>

                                    <li>Ville<br>
                                    <select name="location" id="town-inscrip" required >
                                    <!-- Lecture de chaque ligne du tableau -->
                                    <?php foreach ($allTowns as $value): ?>
                                        <option value="<?= $value['town'] ?>"><?= $value['town'] ?></option>
                                    <?php endforeach; ?>
                                    </select></li>
                                   
                                    <li>Je suis<br>
                                    <select name="instrument" id="instrument-inscrip">
                                    <!-- Lecture de chaque ligne du tableau -->
                                    <?php foreach ($allInstruments as $value): ?>
                                        <option value="<?= $value['instrument'] ?>"><?php echo($allarticles['instrument']); ?></option>
                                    <?php endforeach; ?>
                                    </select></li>

                                    <li> 
                                    <input type="radio" name="sex" value="<?php echo($allarticles['sex']); ?>" id="man" /> <label for="homme">Homme</label>
                                    <input type="radio" name="sex" value="<?php echo($allarticles['sex']); ?>" id="woman" /> <label for="femme">Femme</label></li>
                                    
                                    <li>
                                    <input type="radio" name="status" value="amateur" id="amateur" /> <label for="amateur">Amateur</label>
                                    <input type="radio" name="status" value="pro" id="pro" /> <label for="pro">Pro</label></li>

                                    <li>
                                    <input type="radio" name="situation" value="group" id="group" /> <label for="group">Groupe</label>
                                    <input type="radio" name="situation" value="solo" id="solo" /> <label for="solo">Solo</label></li>

                                    <li>Style<br>
                                    <select name="style" id="instrument-inscrip">
                                    <!-- Lecture de chaque ligne du tableau -->
                                    <?php foreach ($allStylezic as $value): ?>
                                        <option value="<?= $value['style'] ?>"><?= $value['style'] ?></option>
                                    <?php endforeach; ?>
                                    </select></li>

                                    <li>Années d'expérience<br>
                                    <input type="number" name="experience" id="exper-inscrip" value="<?php echo($allarticles['experience']); ?>" /></li>

                                    <li>Nom du groupe (facultatif)<br>
                                    <input type="text" name="groupname" id="group-inscrip" value="<?php echo($allarticles['groupname']); ?>" /></li>
                                    
                                    <li>Lien web (faculatif)<br>
                                    <input type="url" name="weblink" id="link-inscrip" value="<?php echo($allarticles['weblink']); ?>" /></li>

                                    <li>Je me présente (facultatif)<br>
                                    <textarea name="message" rows="8" cols="45" id="mess-inscrip" value="<?php echo($allarticles['presentation']); ?>"></textarea></li>

                                    <div id="announceform">
                                        <li>Titre de l'annonce<br>
                                        <input type="text" name="title-announce" id="title-announce" value="<?php echo($allarticles['title_announce']); ?>" /></li>       

                                        <li>Annonce<br>
                                        <textarea name="mess-announce" rows="8" cols="45" id="mess-announce" value="<?php echo($allarticles['message']); ?>" ></textarea></li>

                                        <li>Je cherche<br>
                                        <input type="radio" name="status-announce" value="amateur" id="amateur-announce" /> <label for="amateur">Amateur uniquement</label>
                                        <input type="radio" name="status-announce" value="pro" id="pro-announce" /> <label for="pro">Pro uniquement</label></li>
                                        <input type="radio" name="status-announce" value="amateurpro" id="amateurpro-announce" /> <label for="amateurpro">Amateur ou pro</label></li>

                                        <li>Je cherche<br>
                                        <input type="radio" name="situation-announce" value="group" id="group-announce" /> <label for="group">Groupe uniquement</label>
                                        <input type="radio" name="situation-announce" value="solo" id="solo-announce" /> <label for="solo">Solo uniquement</label></li>
                                        <input type="radio" name="situation-announce" value="sologroup" id="sologroup-announce" /> <label for="sologroup">Solo ou groupe</label></li>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $allarticles['id'] ?>">

                                    <li><input type="submit" name="btn-modifyuser" id="btn-modifyuser" style="color:green" value="Mise à jour profil"></li>

                                </ul>
                            </div>

                        </p>
                        </form>

                        <form method="POST" action="./profildeletesuccess">
                            <button id="btn-deleteprofil" name="btn-deleteprofil" type="submit"
                                    title="Suppression de ce profil" value="<?= $allarticles[0] ?>"
                                    style="color:red">
                                    <i class="fas fa-trash-alt"></i></button>
                            <div class="mt-20"></div>
                            <div class="red-divider"></div>
                            <div class="mt-20"></div>
                        </form>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div style="color:red;font-weight: bold"><p>Page inaccessible, connnectez-vous ou enregistrez-vous.</p></div>

                <?php endif; ?>

            </div>
        </div>
    </div>    

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
