<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- Nav bar -->
    <?php include "./components/navbar.component.php";?>
    <!-- Nav bar -->

    <!-- Todas las noticias publicas -->
    <div class="container">
        <div class="row text-center">
            <?php
                include "./models/noticia.php";
                for($i=1;$i<10;$i++) {
                    $noticia = new Noticia("titulo", "body", "10-10-2000", "pepito grillo");
                    $noticia->verModal();
                    if($i%2==0) {
                        echo '<div class="w-100"></div>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>