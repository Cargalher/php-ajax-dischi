<?php 
include __DIR__.'/php-ajax-dischi/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/app.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
    integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    
            <!-- header -->
            <header class="site_header">
                <div class="container">
                   <img src="./dist/img/logo_spoti.png" alt="">
                </div>

            </header>
            
            <!-- container with discs -->
            <main class="discs_container container">
            
                <?php foreach ($databases as  $database) {
                ?>
                <div class="discs_lis">
                    <!-- printing all the posters -->
                    <img src="<?php echo $database['posters'] ?>" alt="">
                    <!-- printing all the titles -->
                    <h3><?php echo $database['title'] ?></h3> 
                    <!-- printing all the authors -->
                    <span class="author"><?php echo $database['author'] ?></span>
                    <!-- printing all the years -->
                    <span  class="year"> <?php echo $database['year'] ?></span>
                </div>
                <?php 
                }
                ?>

            </main>
    
   
</body>
</html>