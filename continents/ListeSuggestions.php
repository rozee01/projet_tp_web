<?php include_once('../Repositories/DemandeRepository.php');
            $DemandeRepository= new DemandeRepository();
             $Demandes = $DemandeRepository->findAll(['continent' => $continentName]);

    foreach ($Demandes as $Demande) {
    $Demande_elements = ['continent',
        'name', 'description', 'image'];
    foreach ($Demande_elements as $element) {
        //on associe chaque element l colonne mteeou 
        ${$element} = $Demande->{$element};
    } ?>
    
    <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src=<?=$image ?>
                        class="img-fluid" id="animation-img">
                        <div class="descriptions bg-light">
                            <h1>
                                <?= $name ?>
                            </h1>
                            <p>
                                <?= $description ?>
                            </p>
                            <button style="top: 20px;" class="button-to-details">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href=<?php
                                    $reference="../pays/pays.php?name=" . $name."&demande=true"; echo $reference; ?>> Check
                                    <?php if ($name == 'The Great Barrier Reef') {echo 'this country';                                                                                                                        } else { echo $name;} ?>
                                </a>
                            </button>
                            <form method="POST" action="ReponseAdmin.php">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                                     <div class="button-verif-container">
                                   <button type="submit" name="validate" value="validate">
                              <img src="../pics/verify-icon.png" alt="verify">
                                      </button>
                                     <button type="submit" name="cancel" value="cancel">
                            <img src="../pics/cancel-icon.png" alt="cancel">
                                 </button>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>