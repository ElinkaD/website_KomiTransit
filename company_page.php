<head>
    <link rel="stylesheet" href="css/company_page.css" />
</head>

<section class="hero">
    <img src="img/background_company@3x.png" alt="Background Image" class="hero-image">
    <div class="hero-text">
        <a href="index.php?page=main_page"><h4>Главная</h4></a>
        <h1>ООО Коми Транзит</h1>
        <p>Компания предоставляет механизированные услуги железнодорожного тупика по&nbsp;приему и&nbsp;переработке груза (в&nbsp;том числе негабаритного), приходящего железнодорожным транспортом на&nbsp;станцию Усинск Северной железной дороги.</p>    
    </div>
</section>

<div class="page">
<?php 
    require 'history.php';
    echo '<link rel="stylesheet" href="css/history.css">'; 
?>

<?php 
    require 'advatages.php'; 
    echo '<link rel="stylesheet" href="css/advatages.css">';
?>
</div>


