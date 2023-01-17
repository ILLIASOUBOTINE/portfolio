<?php
    include 'data/realisation_data.php';
?>
<section class="d-flex flex-column justify-content-between align-items-center align-self-center">
    <h3 class="my-3">Mes réalisations</h3>
    <?php foreach($arr as $value):?>
    <div class="card mb-3" style="max-width: 1000px;" onmouseover="this.style.backgroundColor='rgb(183, 183, 183)';"
        onmouseout="this.style.backgroundColor='rgb(255, 255, 255)';">
        <div class=" row g-0">
            <div class="col-md-4 my-auto">
                <img src="<?=$value['img'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$value['title'] ?></h5>
                    <p class="card-text"><?=$value['discription'] ?></p>
                    <p class="card-text">Technologies utilisées: <b><?=$value['technologies'] ?></b>.</p>
                    <p class="card-text"><a href="<?=$value['lien_site'] ?>">lien
                            vers le site web
                        </a> .</p>
                    <p class="card-text"><a href="<?=$value['lien_github'] ?>">lien
                            vers le github
                        </a> .</p>

                    <p class="card-text"><small class="text-muted">réalisé le <?=$value['realiser'] ?>.</small></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach?>
</section>