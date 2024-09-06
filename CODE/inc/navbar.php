<?php
require_once "./CODE/bdr/main.php";
if ($_SESSION['nombre']==""){
?>
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <div class="row">
            <div class="navbar">
                <img src="/CODE/img/pixelcut-export.ico" alt="Logo" width="70" height="40" class="icon d-inline-block align-text-top">
                <span class="text navbar-brand mb-0 h1">EVERYWHERE TRAVEL</span>
            </div>
        </div>
    </div>

</nav>
<?php
}else{
    $nom = limpiar_cadena($_SESSION['puesto']);
    
    ?>
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <div class="row">
            <div class="navbar">
                <img src="/CODE/img/pixelcut-export.ico" alt="Logo" width="70" height="40" class="icon d-inline-block align-text-top">
                <span class="text navbar-brand mb-0 h1">EVERYWHERE TRAVEL</span>
            </div>
        </div>
        <div class="row">
            <div class="navbar">
            <label class="text h1"><?php echo $nom;?></label>
            <img src="/CODE/img/user.ico" alt="Logo" width="60" height="40" class="icon d-inline-block align-text-top">
            </div>
        </div>
    </div>

</nav>
<?php
}
?>