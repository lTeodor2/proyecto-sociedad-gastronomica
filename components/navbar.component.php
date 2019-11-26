<?php
    $nav_items = explode('/', $_SERVER['REQUEST_URI']);
?>
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo $MAIN_URL;?>">Zapardiente</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item <?php if($nav_items[count($nav_items) - 1] == 'index.php'){echo "active";}?>">
                <a class="nav-link" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item <?php if($nav_items[count($nav_items) - 1] == 'noticias.php'){echo "active";}?>">
                <a class="nav-link" href="./noticias.php">Noticias</a>
            </li>
            <li class="nav-item <?php if($nav_items[count($nav_items) - 1] == 'about.php'){echo "active";}?>">
                <a class="nav-link" href="./about.php">Sobre nosotros</a>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Usuario">
        <input class="form-control mr-sm-2" type="password" placeholder="Contraseña">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
    </nav>
</div>