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




