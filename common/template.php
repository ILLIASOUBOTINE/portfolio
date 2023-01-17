<!-- <?php
    // $page = $_GET['page'];
    // // echo $page;
    // var_dump($_GET);
?> -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ILLIA PORTFOLIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="container d-flex flex-column justify-content-between align-items-center min-vh-100">

        <?php
        
         
        include 'common/header.php';
        // <!-- Navigation-->
        
        
      
        if (!isset($page) ) {
           include './content/accueil_content.php';
        }else {
            
            switch ($page) {
                case 'accueil':
                    include './content/accueil_content.php';
                    break;
                case 'realisations':
                    include './content/realisations_content.php';
                    break;
                case 'cv':
                    include './content/cv_content.php';
                    break;  
                case 'veilletechnologique':
                    include './content/veilletechno_content.php';
                    break;    
                default:
                    // include './error.php';
                    header('Location: 404.html');
                    die();
                    break;
            }
        }
        
        include 'common/footer.php';
    ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
    </div>
</body>

</html>