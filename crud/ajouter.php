<?php
require 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form method="post">
    <label>Nom</label>
    <input type="text" name="nom"><br>

    <label>Email</label>
    <input type="email" name="email"><br>

    <label>Téléphone</label>
    <input type="number" name="telphon"><br>
    <label>Age</label>
    <input type="number" name="age"><br>
    <button type="submit" name="ok">ok</button>
</form>

</body>
</html>
    </form>
    <?php
    if(isset($_POST['ok'])){
      $nom=$_POST['nom'];
      $email=$_POST['email'];
      $telphon=$_POST['telphon'];
      $age=$_POST['age'];
      if(empty($nom)||empty($email)||empty($telphon)||empty($age)){
        echo"les champs vide ";
      }else
        if(18>$age){
            echo"age non valide";
        }else{
              $sql=$pdo->prepare("INSERT INTO user(nom,email,telphon,age) Value(:nom,:email,:telphon,:age)");
              $sql->execute([
         'nom'=>$nom,
        'email'=>$email,
        'telphon'=>$telphon,
        'age'=>$age,

              ]);
            header('Location: select.php');
            exit();
            }
        }
    ?>
</body>
</html>

</html>
