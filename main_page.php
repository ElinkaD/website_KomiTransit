<head>
    <link rel="stylesheet" href="css/main_page.css" />
</head>

<section class="hero">
    <div class="container">
        <div class="text-block">
            <h1>ООО<br>Коми</h1>
            <h2>Транзит</h2>
            <div class="Motto">
                <p>Гарантируем вам достойный <br/>уровень обслуживания по лучшей цене.</p>
            </div>
        </div>
    </div>
</section>

<div class="page">

<?php 
    require 'advatages.php'; 
    echo '<link rel="stylesheet" href="css/advatages.css">';
?>

<?php 
    require 'history.php';
    echo '<link rel="stylesheet" href="css/history.css">'; 
?>

<?php 
    require 'serveces.php';
    echo '<link rel="stylesheet" href="css/serveces.css">'; 
?>

<?php 
    require 'photobank.php';
    echo '<link rel="stylesheet" href="css/photobank.css">'; 
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">'; 
?>

</div>


