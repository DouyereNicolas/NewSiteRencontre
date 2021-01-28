<?php 
  include("../controllers/lovers_controller.php"); 
  $arrayMembers = CreatTabMembers();
  $arrayCurrentUser = unserialize($_COOKIE["arrayInfoUser"]);
  $lastNameUser = ucfirst($arrayCurrentUser['lastname']);
  $firstNameUser = ucfirst($arrayCurrentUser['firstname']);
  $age = ucfirst($arrayCurrentUser['age']);
  $gender = ucfirst($arrayCurrentUser['gender']);
  $mail = $arrayCurrentUser['mail'];
  $zipCode = $arrayCurrentUser['zipCode'];
  $genderSearch = $arrayCurrentUser['genderSearch'];

  include("header.php")
?> 

<body class="ndBody">
  
<?php include("navBar.php");?>

  <div class="test  d-flex w-100 mt-4">
    <div class="row w-100 my-auto mx-auto">
      <div class="col-12 d-flex ">
        <div class="card mx-auto ndColorCarUser" style="width: 60% ;">
          <div class="card-body">
            <div class="texteCard p-4">
              <p class="w-100 mb-4"style="text-align : center; font-size : 25px;">Votre Profil :</p>
              <p class="card-text">Votre Nom : <?=$lastNameUser;?></p>
              <p class="card-text">Votre prénom : <?=$firstNameUser;?></p>
              <p class="card-text">votre age : <?=$age;?></p>
              <p class="card-text">Vous etes : <?=$gender;?> et vous recherchez : <?=$genderSearch;?></p>
              <p class="card-text">Votre adresse mail : <?=$mail;?></p>
              <p class="card-text">Votre code postal : <?=$zipCode;?></p>
            </div>    
          </div>
            <div class="container ndDestroy text-center mb-4">
              <a href="../index.php?btonDelete=true"><button class="btn mr-4" type="submit">Se déconnecter</button></a>
              <a href="https://www.meetic.fr/"><button class="btn" type="submit">TAKE MY MONEY</button></a>
            </div>
        </div>
        
</div>

    <div class="col-12 mt-4">
    <div class="container text-center" style="height : 100%;">
    <p class="mb-4 ndTextPret">Ces prétendantes pourrais vous intéréssez :</p>
    <?php 
            $item = 0;
            foreach($arrayMembers as $key => $value){
                if($value["gender"] == $genderSearch){
                    $lastName = $value['lastname'];    
                    $firstName = $value['firstname'];
                    $age = $value['age'];
                    $picture = $value['picture'];
                    $match = $value['match'];
                    if($item == 0 || $item == 3 || $item == 6 || $item == 9){
                      ?> <div class="row w-100 text-center"> <?php
                    }
                    ?><div class="col-6 col-lg-4 ">
                        <img src="../assets/img/<?=$picture;?>" class="testImage" style="width : 120px;height : 120px;"/>
                        <p class="mt-2"><?=ucfirst($lastName);?> <?=ucfirst($firstName);?></p>
                        <p><?=$age;?></p>
                      </div>

                  <?php
        
        if($item == 2 || $item == 5 || $item == 8 || $item == 9){
          ?> </div> <?php
        }
        $item = $item + 1;
        };
        };
            
        ?>
    </div>
  </div> 
</div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>