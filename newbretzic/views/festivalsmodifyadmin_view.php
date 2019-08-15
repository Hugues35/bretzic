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
                <p><h1 class="admin-title">Gestion des Festivals en Bretagne <i class="fas fa-user-cog"></i></h1></p>
                <div class="row">   
                    <table id="festivals-admin">         
                        <thead>
                            <tr> 
                                <th>Num</th>
                                <th>Dates</th> 
                                <th>Nom / Site web</th> 
                                <th>Lieu / Dpt</th> 
                                <th>lat long</th>
                                <th>Màj</th>
                                <th>Suppr</th>
                            </tr>
                        </thead>
                        <?php foreach ($allFestivals as $index => $article): ?>
                            <form method="POST" action="./festivalmodifysuccess">  
                                <tbody> 
                                    <tr> 
                                        <td><input type="int"
                                                   name="id"
                                                   value="<?= $article['id'] ?>"></td>
                                        <td><input type="date"
                                                   name="datebegin-modify"
                                                   value="<?= $article['date_beginning'] ?>"><br>
                                            <input type="date"
                                                   name="dateend-modify"
                                                   value="<?= $article['date_end'] ?>"></td> 
                                        <td><input type="text"
                                                   name="name-modify"
                                                   value="<?= $article['name'] ?>"><br>
                                            <input type="url"
                                                   name="site-modify"
                                                   value="<?= $article['site_link'] ?>"></td>
                                        <td><input type="text"
                                                   name="town-modify"
                                                   value="<?= $article['town'] ?>"><br>
                                            <input type="text"
                                                   name="depart-modify"
                                                   value="<?= $article['department'] ?>"></td>
                                        <td><input type="text"
                                                   name="lat-modify"
                                                   value="<?= $article['lat'] ?>"><br>
                                            <input type="text"
                                                   name="lon-modify"
                                                   value="<?= $article['lon'] ?>"></td>
                                        <td><button name="btn-festivalmodify"
                                                    id="btn-festivalmodify" 
                                                    type="submit"><i class="fas fa-check-circle"></i></button></td>
                                        <td><button name="btn-festivaldelete"
                                                    id="btn-festivaldelete" 
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
