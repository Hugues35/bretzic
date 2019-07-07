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

                <h1 class="h1-custom">Administration des profils <i class="fas fa-user-cog"></i></h1> 

               <?php if (!isset($_SESSION['admin'])): ?>

                    <div style="color:red;font-weight: bold"><p>Page inaccessible, connnectez-vous ou enregistrez-vous.</p></div>
                
                <?php else: ?>

                    <table>
                        <thead>
                            <tr> 
                                <th>Membre</th> 
                                <th>Profil</th>
                                <th>Recherche</th>
                                <th>Action</th>
                            </tr>
                        </thead>
              
                    <?php foreach ($allAnnounces as $index1 => $allarticles): ?>

                        <form action="./profilsdeleteadminsuccess" method="post" id="inscription-form">
                            
                            <div id="inscrip-form-datas">

                                <tbody id="announces-list"> 

                                    <tr> 
                                        <td>
                                            <ul>
                                                <li>Numéro<br>
                                                <input type="num" name="number" id="id-inscrip" value="<?php echo($allarticles['id']); ?>" required /></li>

                                                <li>Pseudo<br>
                                                <input type="text" name="pseudo" id="pseudo-inscrip" value="<?php echo($allarticles['pseudo']); ?>" required /></li>

                                                <li>Mot de passe<br>
                                                <input type="password" name="password" id="pass-inscrip" value="<?php echo($allarticles['password']); ?>" required /></li>

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

                                                <li> 
                                                <input type="radio" name="sex" id="man" value="<?php if(($allarticles['sex'])=="man") echo "selected"; ?>" ><label for="homme"> Homme</label>
                                                <input type="radio" name="sex" id="woman" value="<?php if(($allarticles['sex'])=="woman") echo "selected"; ?>"  ><label for="femme"> Femme</label></li>
                                            </ul>
                                        </td> 

                                        <td>
                                            <ul>
                                                <li>Je me présente (facultatif)<br>
                                                <input type="textarea" name="message" rows="8" cols="45" id="mess-inscrip" value="<?php echo($allarticles['presentation']); ?>"></li>

                                                <li>Je suis<br>
                                                <select name="instrument" id="instrument-inscrip">
                                                <!-- Lecture de chaque ligne du tableau -->
                                                <?php foreach ($allInstruments as $value): ?>
                                                    <option value="<?= $value['instrument'] ?>"><?php echo($allarticles['instrument']); ?></option>
                                                <?php endforeach; ?>
                                                </select></li>

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

                                                <li>
                                                <input type="radio" name="status" value="amateur" id="amateur" /> label for="amateur">Amateur</label>
                                                <input type="radio" name="status" value="pro" id="pro" /><label for="pro">Pro</label></li>

                                                <li>
                                                <input type="radio" name="situation" value="group" id="group" /><label for="group">Groupe</label>
                                                <input type="radio" name="situation" value="solo" id="solo" /><label for="solo">Solo</label></li>

                                            </ul>
                                        </td>

                                        <td>
                                            <ul>
                                                <li>Titre de l'annonce<br>
                                                <input type="text" name="title-announce" id="title-announce" value="<?php echo($allarticles['title_announce']); ?>" /></li>       

                                                <li>Annonce<br>
                                                <input type="textarea" name="mess-announce" rows="8" cols="45" id="mess-announce" value="<?php echo($allarticles['message']); ?>" ></li>

                                                <li>Je cherche<br>
                                                <input type="radio" name="status-announce" value="amateur" id="amateur-announce" /> <label for="amateur">Amateur uniquement</label>
                                                <input type="radio" name="status-announce" value="pro" id="pro-announce" /> <label for="pro">Pro uniquement</label></li>
                                                <input type="radio" name="status-announce" value="amateurpro" id="amateurpro-announce" /> <label for="amateurpro">Amateur ou pro</label></li>

                                                <li>Je cherche<br>
                                                <input type="radio" name="situation-announce" value="group" id="group-announce" /> <label for="group">Groupe uniquement</label>
                                                <input type="radio" name="situation-announce" value="solo" id="solo-announce" /> <label for="solo">Solo uniquement</label></li>
                                                <input type="radio" name="situation-announce" value="sologroup" id="sologroup-announce" /> <label for="sologroup">Solo ou groupe</label></li>
                                            </ul> 
                                        </td>

                                        <td>
                                            <ul>
                                                <input type="hidden" name="id" value="<?= $allarticles['id'] ?>">

                                                <li><input type="submit" name="btn-modifyuser" id="btn-modifyuser" style="color:green" value="Mise à jour"></li>
                                                <!-- </form>

                                                <form method="POST" action="./profilsdeleteadminsuccess"> -->
                                                <button id="btn-deleteprofil" name="btn-deleteprofil" type="submit"
                                                        title="Suppression de ce profil" value="<?= $allarticles['id'] ?>"
                                                        style="color:red">
                                                        <i class="fas fa-trash-alt"></i></button>
                                            </ul>
                                        </td>      

                                    </tr>
                                </tbody>
                            </form>
                        </div>   

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>    

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
