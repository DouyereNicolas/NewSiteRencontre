  <?php require('../controllers/lovers_controller.php'); 
    $ArrayMembersNEW = CreatTabMembers();
    $arrayCurrentUser = unserialize($_COOKIE["arrayInfoUser"]);
    $lastNameUser = $arrayCurrentUser["lastname"];
    $firstNameUser = $arrayCurrentUser["firstname"];
    include("../utilitaires/header.php");
  ?>
  <body class="ndBody">
  <?php include("../utilitaires/navBar.php");?>
  <div class="container">
      <div class="row">
        <div class="col-12 text-center"><br><br><br>
          <h1>Nos gentils membres </h1>
        </div>
      </div> <!-- fermeture row -->
      <div class="row">
        <div class="col-6 d-flex col-lg-3">

          <?php
          for ($indMember = 0; $indMember < 20; $indMember++) {
            // $indMember = 15;
            //for ($indMember= 0;$indMember<20; $indMember++){
            $value = extractMember($ArrayMembersNEW, $indMember); //array

            $lastname = ucfirst($value['lastname']);
            $firstname = ucfirst($value['firstname']);
            $picture = $value['picture'];
            $age = $value['age'];
            $gender = $value['gender'];
            $mail = $value['mail'];
            $zipCode = $value['zipCode'];
            $description = $value['description'];
            $genderSearch = $value['genderSearch'];
            $match = $value['match'];
            //}
            if (($indMember % 4) == 0) {
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3 d-flex ">
        <?php
            } else {
        ?>
        </div>
        <div class="col-sm-6 col-lg-3 d-flex">
        <?php
            }
        ?>

        <!-- affichage des infos -->
        <div class="card mt-3 ndCardMembers">
          <!-- When you need equal height, add .h-100 to the cards-->
          <div class=" text-center">
            <img class="VbPictMember mt-3" src="../assets/img/<?= $picture ?>" alt="photo du membre" class="card-img-top" />
          </div>
          <div class="card-body mt-3">
            <div class="test">
            <h5 class="card-title"><?= $lastname ?> <?= $firstname ?>, <?= $age ?> </h5>
            <p class="card-text"><?= $gender ?> <br>
              <?= $mail ?> <br>
              <?= $zipCode ?> <br>
              Recherche <?= $genderSearch ?>
              <!-- <?= $match ?> <br> <?= $description ?> -->
            </p>
            <button type="button" data-toggle="modal" data-target="#infos<?= $indMember ?>" class="btn">Description</button>
            </div>
          </div>
        </div> <!-- fermeture div Card  -->
        <!--   fenetre modale liée à <a> ou  par <button> par son id -->

        <div class="modal fade" id="infos<?= $indMember ?>">
          <div class="modal-dialog">
            <div class="modal-content ">
              <!-- Contenu de la fenêtre modale  -->
              <div class="modal-header text-center">
                <p class="modal-title w-100"><?= $firstname ?></p>
              </div>
              <div class="modal-body ">
                <?= $description ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>
      <?php
          }
      ?>
        </div> <!-- fermeture derniere col -->
      </div> <!-- fermeture dernier row -->     
    </div><!-- fermeture container  -->
    <?php require('../utilitaires/footer.html'); ?>

  
   <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>
 </html>