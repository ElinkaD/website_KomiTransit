<style>
/* header */
.menu-main a {
    color: #140C9C;
}
.menu-main a:hover {
    color: #D8315B;
}
.menu-main a:after {
    color: #D8315B;
}
.menu-main a:hover:after {
    color: #D8315B;
}
/* inner title */
.hero {
    position: relative;
    text-align: left;

    width: 100vw;
    height: 65vh;
}
.hero-text {
    position: absolute;
    top: 45vh;
    left: 5vw;
    width: 90vw;

    display: flex;
    flex-direction: column;
    height: 100%;
    gap: 5px;
}
.hero-text p {
    width: 60vw;
    color: #FEFEFE;
}
.hero-text h4{
    color: rgba(2, 13.60, 118, 0.60);
}
.inner-page{
    width: 66vw;
    margin: 100px 5vw 200px 0;
    margin-left: auto;
}
</style>

<section class="hero">
    <div class="hero-text">
        <a href="index.php?page=main_page"><h4>Главная</h4></a>
        <h1>Услуги</h1>
    </div>
</section>

<div class="inner-page">
<?php 
    require 'serveces.php';
    echo '<link rel="stylesheet" href="css/serveces.css">'; 
?>
</div>




