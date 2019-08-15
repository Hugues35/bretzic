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
                <div class="mt-20"></div>
                <p><h1 class="admin-title">Gestion des concerts en Bretagne <i class="fas fa-user-cog"></i></h1></p>
                <div class="row">   
                    <table id="festivals-admin">         
                        <thead>
                            <tr> 
                                <th>Num</th>
                                <th>Dates / Qui</th> 
                                <th>Lieu</th>  
                                <th>Màj</th>    
                            </tr>
                        </thead>
                        <?php foreach ($allConcerts as $index => $article): ?>
                            <form method="POST" action="./concertmodifysuccess">  
                                <tbody> 
                                    <tr> 
                                        <td><input type="int"
                                                   name="id"
                                                   value="<?= $article['id'] ?>"></td>
                                        <td><input type="date"
                                                   name="day-modify"
                                                   value="<?= $article['day'] ?>"><br>
                                            <input type="text"
                                                   name="groupname-modify"
                                                   value="<?= $article['groupname'] ?>"><br>
                                             
                                            <select name="style-modify" id="style-modify">
                                            <option value="<?php echo($article['style']); ?>"><?= $article['style'] ?></option>   
                                                    <?php foreach ($allStylezic as $value): ?>
                                                        <?php if ($article['style'] !== $value['style']) : ?>
                                                            <option value="<?= $value['style'] ?>"><?= $value['style'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                            </select>

                                            <input type="url"
                                                   name="groupsite-modify"
                                                   value="<?= $article['groupsite'] ?>"></td>

                                        <td><input type="text"
                                                   name="establishment-modify"
                                                   value="<?= $article['establishment'] ?>"><br>
                                            <input type="text"
                                                   name="address-modify"
                                                   value="<?= $article['address'] ?>"><br>
                                            
                                            <input type="text"
                                                   name="town-modify"
                                                   value="<?= $article['town'] ?>"><br>
                                            <input type="text"
                                                   name="depart-modify"
                                                   value="<?= $article['department'] ?>">
                                            <input type="text"
                                                   name="lat-modify"
                                                   value="<?= $article['lat'] ?>"><br>
                                            <input type="text"
                                                   name="lon-modify"
                                                   value="<?= $article['lon'] ?>"></td>

                                        <td><button name="btn-concertmodify"
                                                    id="btn-concertmodify" 
                                                    type="submit"><i class="fas fa-check-circle"></i></button>
                                            <button name="btn-concertdelete"
                                                    id="btn-concertdelete" 
                                                    type="submit"
                                                    value="<?= $article[0] ?>"><i class="fas fa-trash-alt"></i></button></td> 
                                    </tr>                                      
                                </tbody>  
                            </form> 
                        <?php endforeach; ?>  
                    </table>
              </div>
        </div>
    </div>

    <?php include_once "views/includes/footer.php" ?>

</body>
</html>
