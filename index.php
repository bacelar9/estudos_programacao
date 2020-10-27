<?php 
    require __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <! -- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./themes/assets/css/style.css">

        <title>Estudando Programação </title>
</head>

<body>
    <div class="container">
        <header class="page-header">
            <h1>Guia Bootstrap</h1>
        </header>
        <div class="row">
            <div role="main" class="col-md-12">
                <h2>Galeria</h2>
                <div id="destaque" class="row">
                    <div class="col-md-12">
                        <img src="http://placehold.it/1200x300" class="img-responsive" />
                    </div>
                </div>
                <div id="miniaturas" class="row">
                    <div class="col-md-12">
                        <h3>Veja Mais</h3>
                    </div>
                    <div class="col-md-4">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/300x150" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/300x150" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/300x150" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div role="main" class="col-md-8">
                <h2>Sobre</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis similique, officiis earum delectus debitis beatae, error deleniti ipsum accusantium voluptas, possimus pariatur rem voluptates ab? Inventore placeat quidem similique accusamus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis similique, officiis earum delectus debitis beatae, error deleniti ipsum accusantium voluptas, possimus pariatur rem voluptates ab? Inventore placeat quidem similique accusamus.
                </p>
            </div>
            <aside role="complementary" class="col-md-4">
                <div id="widget-about" class="panel panel-default">
                    <h4>Info</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsam accusamus exercitationem culpa voluptatibus. Harum, commodi est voluptate dolor ut autem sunt provident maiores, minima earum in consectetur id a!</p>
                </div>

                <div id="widget-links" class="panel panel-default">
                    <h4>Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Github </li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </div>
            </aside>
        </div>
        
        <footer>
            <p class="text-muted">
                &copy; 2020 - H9Web Sistemas
            </p>
        </footer>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>