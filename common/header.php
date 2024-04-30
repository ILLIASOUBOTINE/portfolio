<?php 
    include 'data/header_content_data.php';
?>
<header class="site-header container" style="background-color: rgb(184, 184, 185);">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                
                 
                    <li class="nav-item">
                        <a class="nav-link fs-5 mx-md-2 text-uppercase" href="index.php?page=accueil"><?=$headerContentData[$lang]['home']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 mx-md-2 text-uppercase"
                            href="index.php?page=realisations"><?=$headerContentData[$lang]['projects']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 mx-md-2 text-uppercase"
                            href="index.php?page=veilletechnologique"><?=$headerContentData[$lang]['technology']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 mx-md-2 text-uppercase" href="index.php?page=cv"><?=$headerContentData[$lang]['cv']?></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>