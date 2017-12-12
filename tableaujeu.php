<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon tableau</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="pstyle.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
    <div  style="margin-left: 400px;  margin-right:200px; margin-top: 100px; margin-bottom: 200px; ">
    <div class="jumbotron text-center">
        <a href="deconnection.php">Deconnection</a>
        <h3>Profil :    <?php include"connexion.php";?></h3>
        <h1>Tableau - Jeu</h1>
    </div>
    <div class="jumbotron " style="padding-left:200px">
            <form method="post" action="#">
            Entrer une valeur :
            <select name="choisissez"  >
                <option value=""></option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" name="generer" value="Générer" required>
        </form>
      
        <?php
        if(isset($_POST['generer']) && isset($_POST['choisissez']))
        extract($_POST);
        {
            if($choisissez=="")
            {
                echo"Veuillez choisir une valeur.";
            }
            else
            {
            echo"<br/><br/><br/><br/><table border='1' width='500' height='500'>";
            $CG=0; $CY=$choisissez-1;
            for($i=0;$i<$choisissez;$i++)
            {
                echo"<tr>";
                for($j=0;$j<$choisissez;$j++)
                {
                    if ($j==$CG && $j==$CY)
                    {
                        echo"<td style='background-color: gren;'></td>";
                    }
                    elseif ($j==$CY)
                    {
                        echo"<td style='background-color: yellow;'></td>";
                    }
                    elseif ($j==$CG)
                    {
                        echo"<td style='background-color: green;'></td>";
                    }
                    else
                    {
                        echo"<td style='background-color: white;'></td>";
                    }
                }
                $CG++; $CY--;
                echo"</tr>";
                 }

            }
        }
        ?>
    </div>

    </body>
</html>
</div>