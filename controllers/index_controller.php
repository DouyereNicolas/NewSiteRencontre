<?php
//var_dump($_POST);
function setUserCookie(){
// création du tableau infos user depuis page index.php  pour le cookie
$arrayInfoUser= array(
  'lastname' => ucfirst(htmlspecialchars($_POST['lastname'])), 
  'firstname' => htmlspecialchars($_POST['firstname']), 
  'age' => htmlspecialchars($_POST['age']),
  'gender' => htmlspecialchars($_POST['gender']), 
  'mail' => htmlspecialchars($_POST['mail']), 
  'zipCode' => htmlspecialchars($_POST['zipCode']),  
  'genderSearch' => htmlspecialchars($_POST['genderSearch'])
);
//echo 'arrayInfoUser = ';
//var_dump($arrayInfoUser);
//echo 'dans user_controller : '. $arrayInfoUser['firstname'] . '<br>';
setcookie('arrayInfoUser', serialize($arrayInfoUser), time() + 24 * 3600); 
//  ** pour 2 jours

};
  //echo 'formulaire rempli <br>';
   // recup des valeurs  


    //initialiser les cookies
    //setcookie('login', $login, time()+24*60*60); // en sec.
   // setcookie('pwd', $pwd, time()+24*60*60);
    //header("Location: index.php");
      //affichage résultat en html


?>