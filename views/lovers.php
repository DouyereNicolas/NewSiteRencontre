<?php 
  include("../controllers/lovers_controller.php"); 
  $arrayMembers = CreatTabMembers();
  $arrayCurrentUser = unserialize($_COOKIE["arrayInfoUser"]);
  $lastNameUser = $arrayCurrentUser["lastname"];
  $firstNameUser = $arrayCurrentUser["firstname"];
  $genderSearch = $arrayCurrentUser['genderSearch'];
?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>3D Carousel</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
</head>
<body class="ndBody">
<?php include("navBar.php");?>
<div class="carousel js-flickity">
  <!-- images from unsplash.com -->
  <?php 
            foreach($arrayMembers as $key => $value){
                if($value["gender"] == $genderSearch){
                    $lastName = $value['lastname'];    
                    $firstName = $value['firstname'];
                    $age = $value['age'];
                    $picture = $value['picture'];
                    $match = $value['match']; ?>
                
                  <div class="carousel-cell">
                    <img src="../assets/img/<?=$picture;?>" alt="submerged" />
                    <div class="ndPosTextCarou text-center">
                      <p><?=ucfirst($lastName);?> <?=ucfirst($firstName);?></p>
                      <p>j'ai <?=$age;?></p>
                      <form action="lovers.php" method="post">
                        <input type="image" value="1" id="match" alt="Match" src="../assets/img/coeurVide.png">
                    </form>
                    </div>    
                  </div>
               <?php };}; ?>
</div>
<script src="../assets/js/script.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>