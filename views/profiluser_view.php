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

                <?php if (isset($_SESSION['pseudo'])): ?>

                    <?php foreach ($Announcebyuser as $index1 => $allarticles): ?>
                        <form action="./profilmodifysuccess" method="post" id="inscription-form">
                            
                            <h3>Mon profil "<?php echo ($_SESSION['pseudo']) ?>"</h3>

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
                                    <option value="<?php echo($allarticles['town']); ?>"><?= $allarticles['town'] ?></option>
                                    <?php foreach ($allTowns as $value): ?>
                                        <?php if ($allarticles['town'] !== $value['town']) : ?>
                                            <option value="<?= $value['town'] ?>"><?= $value['town'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    </select></li>
                                   
                                    <li>Je suis<br>
                                    <select name="instrument" id="instrument-inscrip">
                                    <option value="<?php echo($allarticles['instrument']); ?>"><?= $allarticles['instrument'] ?></option>   
                                    <?php foreach ($allInstruments as $value): ?>
                                        <?php if ($allarticles['instrument'] !== $value['instrument']) : ?>
                                            <option value="<?= $value['instrument'] ?>"><?= $value['instrument'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    </select></li>

                                    <li> 
                                    <input type="radio" name="sex" id="man" <?php if($allarticles['sex']=='Homme') echo "checked"; ?> value="Homme"> Homme
                                    <input type="radio" name="sex" id="woman" <?php if($allarticles['sex']=='Femme') echo "checked"; ?> value="Femme"> Femme</li>
                                    
                                    <li>
                                    <input type="radio" name="status" id="amateur" <?php if($allarticles['status']=='amateur') echo "checked"; ?> value="amateur"> Amateur
                                    <input type="radio" name="status" id="pro" <?php if($allarticles['status']=='pro') echo "checked"; ?> value="pro"> Pro</li>

                                    <li>
                                    <input type="radio" name="situation" id="group" <?php if($allarticles['situation']=='group') echo "checked"; ?> value="group"> Groupe
                                    <input type="radio" name="situation" id="solo" <?php if($allarticles['situation']=='solo') echo "checked"; ?> value="solo"> Solo</li>

                                    <li>Style<br>
                                    <select name="style" id="style-inscrip">
                                    <option value="<?php echo($allarticles['style']); ?>"><?= $allarticles['style'] ?></option>   
                                    <?php foreach ($allStylezic as $value): ?>
                                        <?php if ($allarticles['style'] !== $value['style']) : ?>
                                            <option value="<?= $value['style'] ?>"><?= $value['style'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    </select></li>

                                    <li>Années d'expérience<br>
                                    <input type="number" name="experience" id="exper-inscrip" value="<?php echo($allarticles['experience']); ?>" /></li>

                                    <li>Nom du groupe (facultatif)<br>
                                    <input type="text" name="groupname" id="group-inscrip" value="<?php echo($allarticles['groupname']); ?>" /></li>
                                    
                                    <li>Lien web (faculatif)<br>
                                    <input type="url" name="weblink" id="link-inscrip" value="<?php echo($allarticles['weblink']); ?>" /></li>

                                    <li>Je me présente (facultatif)<br>
                                    <input type="textarea" name="message" rows="8" cols="45" id="mess-inscrip" value="<?php echo($allarticles['presentation']); ?>"></li>

                                    <div class="mt-20"></div>
                                    <div class="white-divider"></div> 

                                    <div id="announce-block">

                                        <h4>Annonce passée</h4>

                                        <li>Titre de l'annonce<br>
                                        <input type="text" name="title-announce" id="title-announce" value="<?php echo($allarticles['title_announce']); ?>" /></li>       

                                        <li>Annonce<br>
                                        <input type="textarea" name="mess-announce" rows="8" cols="45" id="mess-announce" value="<?php echo($allarticles['message']); ?>" ></li>

                                        <li>Je cherche<br>
                                         <input type="radio" name="status-announce" id="amateur-announce" <?php if($allarticles['status_announce']=='amateur') echo "checked"; ?> value="amateur"> Amateur
                                        <input type="radio" name="status-announce" id="pro-announce" <?php if($allarticles['status_announce']=='pro') echo "checked"; ?> value="pro"> Pro
                                        <input type="radio" name="status-announce" id="amateurpro-announce" <?php if($allarticles['status_announce']=='amateurpro') echo "checked"; ?> value="amateur"> Amateur ou pro</li>

                                        <li>Je cherche<br>
                                        <input type="radio" name="situation-announce" id="group-announce" <?php if($allarticles['situation_announce']=='group') echo "checked"; ?> value="group"> Groupe uniquement
                                        <input type="radio" name="situation-announce" id="solo-announce" <?php if($allarticles['situation_announce']=='solo') echo "checked"; ?> value="solo"> Solo uniquement
                                        <input type="radio" name="situation-announce" id="sologroup-announce" <?php if($allarticles['situation_announce']=='sologroup') echo "checked"; ?> value="sologroup"> Solo ou groupe</li>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $allarticles['id'] ?>">

                                    <div class="mt-20"></div>
                                    <div class="white-divider"></div> 

                                    <div class="mt-20"></div>

                                    <li>
                                    <button id="btn-deleteprofil" name="btn-deleteprofil" type="submit"
                                            title="Suppression de ce profil" value="<?= $allarticles[0] ?>"
                                            style="color:red">
                                            <i class="fas fa-trash-alt"></i></button>
                                    </li>

                                </ul>
                            </div>
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
