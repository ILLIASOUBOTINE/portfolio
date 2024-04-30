<?php
    include 'data/veilletechno_content_data.php';
?>
<div class="container">
    <div class="d-flex flex-column justify-content-between mt-3 my-sm-3">
        <?php foreach($veilleTechnoContentData[$lang]  as $value):?>
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$value['title']?></h5>
                    <p class="card-text"> <?=$value['description']?></p>

                </div>
            </div>
        
        <?php endforeach ?> 

    </div>
</div>