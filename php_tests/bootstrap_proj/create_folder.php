<?php

echo "variables ";
//var_dump($_POST)

//C:\\Users\\VALLET-03846\\Documents\\temp\\


foreach ($_POST as $key => $value) {
    //do something
    echo $key . ' has the value of ' . $value."<br>";
}
// $path="C:\\Users\\VALLET-03846\\Documents\\temp\\".$_POST["nom"];
// echo $path;
//
// if (!file_exists($path)) {
//   echo "<br>le repertoire ".$_POST['nom']." est pas là je le crée";
//   mkdir("C:\\Users\\VALLET-03846\\Documents\\temp\\".$_POST['nom'], 0777, true);
// }
// else {
//   echo "repertoire existant !";
// }

$path2="W:\\DRHM\\PINF\\SDI\\Commun\\Luc\\".$_POST["nom"];
 if (!file_exists($path2)) {
   echo "<br>le repertoire ".$_POST['nom']." est pas là je le crée";
   mkdir("W:\\DRHM\\PINF\\SDI\\Commun\\Luc\\".$_POST['nom'], 0777, true);
 }
 else {
   echo "repertoire existant !";
 }

/*if (!file_exists('C:\Users\VALLET-03846\Documents\temp\'.$_POST['nom'])) {
  mkdir('C:\Users\VALLET-03846\Documents\temp\'.$_POST['nom'], 0777, true);
}*/

 ?>
