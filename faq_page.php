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
.page{
    margin: 100px 0 200px 0;
}
</style>

<section class="hero">
    <div class="hero-text">
        <a href="index.php?page=main_page"><h4>Главная</h4></a>
        <h1>Вопросы</h1>
    </div>
</section>

<div class="page">
<?php 
    require 'faq.php';
    echo '<link rel="stylesheet" href="css/faq.css">'; 
?>
</div>




