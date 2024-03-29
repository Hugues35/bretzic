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
              
                <form action="./registrationsuccess" method="post" id="inscription-form">
                
                    <h3>Inscription&nbsp;<i class="fas fa-user-plus"></i></h3>

                    <div id="inscrip-form-datas">
                        <ul>
                            
                            <li>Pseudo<br>
                            <input data-complete="false" type="text" name="pseudo" id="pseudo-inscrip" placeholder="Pseudo" required /></li>
                            <span id="pseudoHelp"></span>

                            <li>Mot de passe<br>
                            <input data-complete="false" type="password"  name="password" id="pass-inscrip" placeholder="motdepasse" required /></li>
                            <span id="passwordHelp"></span>
                            
                            <li>Confirmer le mot de passe<br>
                            <input type="password" name="password-confirm" id="passconfirm-inscrip" placeholder="motdepasse" required /></li>

                            <li>Email<br>
                            <input type="email" name="email" id="email-inscrip" placeholder="email@email.fr" required /></li>
                            
                            <li>Année de naissance<br>
                            <input type="number" id="birth-inscrip" name="birthyear" placeholder=0000 required /></li>
                            <span id="birthHelp"></span>

                            <li>Ville<br>
                            <select name="location" id="town-inscrip" required >
                            <?php foreach ($allTowns as $value): ?>
                                <option value="<?= $value['town'] ?>"><?= $value['town'] ?></option>
                            <?php endforeach; ?>
                            </select></li>
                           
                            <li>Je suis<br>
                            <select name="instrument" id="instrument-inscrip">
                            
                            <?php foreach ($allInstruments as $value): ?>
                                <option value="<?= $value['instrument'] ?>"><?= $value['instrument'] ?></option>
                            <?php endforeach; ?>
                            </select></li>

                            <li> 
                            <input type="radio" name="sex" value="Homme" id="man" /> <label for="man">Homme</label>
                            <input type="radio" name="sex" value="Femme" id="woman" /> <label for="woman">Femme</label></li>
                            
                            <li>
                            <input type="radio" name="status" value="amateur" id="amateur" /> <label for="amateur">Amateur</label>
                            <input type="radio" name="status" value="pro" id="pro" /> <label for="pro">Pro</label></li>

                            <li>
                            <input type="radio" name="situation" value="group" id="group" /> <label for="group">Groupe</label>
                            <input type="radio" name="situation" value="solo" id="solo" /> <label for="solo">Solo</label></li>

                            <li>Style<br>
                            <select name="style" id="instrument-inscrip">
                            
                            <?php foreach ($allStylezic as $value): ?>
                                <option value="<?= $value['style'] ?>"><?= $value['style'] ?></option>
                            <?php endforeach; ?>
                            </select></li>

                            <li>Années d'expérience<br>
                            <input type="number" name="experience" id="exper-inscrip" placeholder=0 /></li>
                            <span id="experHelp"></span>

                            <li>Nom du groupe (facultatif)<br>
                            <input type="text" name="groupname" id="group-inscrip" placeholder="Nom" /></li>
                            <span id="groupHelp"></span>
                            
                            <li>Lien web (faculatif)<br>
                            <input type="url" name="weblink" id="link-inscrip" placeholder="http://www.bretzic.com" /></li>

                            <li>Je me présente (facultatif)<br>
                            <textarea name="message" rows="8" cols="45" id="mess-inscrip" placeholder="Message"></textarea></li>

                            <div class="mt-20"></div>
                            <div class="white-divider"></div>  

                            <div id="announce-block">

                                <h4>Je passe une annonce... &nbsp;<i class="fas fa-bullhorn"></i>&nbsp;(facultatif)</h4>

                                <li>Titre de l'annonce<br>
                                <input type="text" name="title-announce" id="title-announce" placeholder="Texte" /></li>       

                                <li>Annonce<br>
                                <textarea name="mess-announce" rows="8" cols="45" id="mess-announce" placeholder="Message" ></textarea></li>

                                <li>Je cherche<br>
                                <input type="radio" name="status-announce" value="amateur" id="amateur-announce" /> <label for="amateur">Amateur uniquement</label>
                                <input type="radio" name="status-announce" value="pro" id="pro-announce" /> <label for="pro">Pro uniquement</label></li>
                                <input type="radio" name="status-announce" value="amateurpro" id="amateurpro-announce" /> <label for="amateurpro">Amateur ou pro</label></li>

                                <li>Je cherche<br>
                                <input type="radio" name="situation-announce" value="group" id="group-announce" /> <label for="group">Groupe uniquement</label>
                                <input type="radio" name="situation-announce" value="solo" id="solo-announce" /> <label for="solo">Solo uniquement</label></li>
                                <input type="radio" name="situation-announce" value="sologroup" id="sologroup-announce" /> <label for="sologroup">Solo ou groupe</label></li>
                            </div>

                            <div class="mt-20"></div>
                            <div class="white-divider"></div> 
                            <div class="mt-20"></div>

                            <li><input type="submit" data-complete="false" name="btn-inscrip" id="btn-inscrip" value="Envoyer" /></li>

                            <div class="mt-20"></div>

                        </ul>
                    </div>            
                </form>
            </div>
        </div>
    </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
