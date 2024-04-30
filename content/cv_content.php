<?php
include('data/competences_data.php');

?>
<?php

include 'content/extramenu_content.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-5 d-flex flex-column justify-content-between mb-3 my-sm-3  order-2">
            <div class="card my-3 order-2 order-sm-1">
                <div class="card-body">
                    <h5 class="card-title text-center" id="coordonnees">Coordonnées</h5>
                    <p class=" card-text d-flex justify-content-around">
                        <img src="imgs/envelope_coordonne.svg" alt="">
                        <a href="semenuk1991311@gmail.com">@gmail</a>
                    </p>
                    <p class="card-text d-flex justify-content-around">
                        <img src="imgs/phone_coordonne.svg" alt="">
                        <span>07 53 63 34 86</span>
                    </p>
                    <p class="card-text d-flex justify-content-around">
                        <img src="imgs/linkedin_coordonne.svg" alt="">
                        <a href="https://www.linkedin.com/in/illia-soubotine-8a898922b/">linkedin</a>
                    </p>
                    <p class="card-text d-flex justify-content-around">
                        <img src="imgs/position_coordonne.svg" alt="">
                        <span>Montpellier</span>
                    </p>
                    <p class="card-text d-flex justify-content-around">
                        <img src="imgs/git_coordonne.svg" alt="">
                        <a href="https://github.com/ILLIASOUBOTINE">github</a>
                    </p>

                </div>
            </div>
            <div class="card my-3 order-1">
                <div class="card-body">
                    <h5 class="card-title text-center" id="formation">Formation</h5>
                    <p class=" card-text ">
                        <b>2022 - en cours</b> Développeur Web/Web Mobile – GRETA (Montpellier).
                    </p>
                    <p class=" card-text ">
                        <b>2009 - 2014</b> Ingénieur civil – Université Nationale Technique de Biélorussie.
                    </p>
                </div>
            </div>
            <div class=" card my-3 order-1">
                <div class="card-body">
                    <h5 class="card-title text-center" id="parcours">Parcours professionnel</h5>
                    
                    <p class="card-text ">
                        <b>2014 - 2017</b> Ingénieur civil – Biélorussie.
                    </p>
                </div>
            </div>
            <div class="card my-3 order-1">
                <div class="card-body">
                    <h5 class="card-title text-center" id="infocomp">Informations Complémentaires</h5>
                    <p class="card-text ">
                        <b>Langues:</b> Russe (courant), Français(B2), Anglais (A2).
                    </p>
                    <p class="card-text ">
                        <b>Mobilité:</b> permis B, véhiculé.
                    </p>
                    <p class="card-text ">
                        <b>Loisirs:</b> tennis, échecs.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-7 d-flex flex-column justify-content-between mt-3 my-sm-3 order-1 order-sm-2">
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title text-center">Développeur Web/Web Mobile</h5>
                    <p class="card-text"> J'assume l'entière responsabilité de mon travail et je suis également
                        orienté
                        vers
                        les
                        objectifs. Par conséquent, je m'efforce de bien faire mon travail et de me développer
                        professionnellement.
                        Je peux me plonger dans de nouveaux apprentissages et acquérir rapidement les connaissances
                        et
                        les
                        compétences nécessaires. Il est facile de travailler avec moi. Je suis amical et plein de
                        tact.
                        J'apprécie
                        le travail en équipe et j'ai un bon sens de l'humour.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title text-center" id="competences">Compétences</h5>
                    <?php foreach($arrCompetences as $key => $value): ?>
                    <p class="card-text d-flex justify-content-between border-bottom border-secondary">
                        <span><b>
                                <?=$key ?>
                            </b></span>
                        <span> <?=$value ?></span>
                    </p>
                    <?php endforeach ?>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title text-center" id="autoeduc">Auto-éducation</h5>
                    <p class="card-text"> JS - https://www.youtube.com/watch?v=Bluxbh9CaQ0
                        https://www.youtube.com/playlist?list=PLM6XATa8CAG7DDIBjNVd78Fv5Ueo930IV</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>
</div>