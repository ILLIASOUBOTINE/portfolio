<?php
    include 'data/accueil_content_data.php';
?>
<section class="d-flex flex-column align-items-center">
    <img class="my-3" src="imgs/photo.png" alt="">
    
        <h4><?=$accueilContentData[$lang] ?></h4>
   
    <div class="container_lang">
        <a class="a_lang" id="en" title="English" href="index.php?page=accueil&lang=en">EN</a>
        <a class="a_lang" id="rus" href="index.php?page=accueil&lang=rus">RUS</a>
        <a class="a_lang" id="fr" href="index.php?page=accueil&lang=fr">FR</a>
    </div>
</section>