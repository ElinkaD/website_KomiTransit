document.addEventListener('DOMContentLoaded', function() {
    // Получение текущего URL
    const currentPage = window.location.href.split('?')[0];
    
    // Получение всех ссылок в навигации
    const links = document.querySelectorAll('.nav-links a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            // Получение URL ссылки без параметров
            const linkHref = link.href.split('?')[0];
            
            // Если ссылка указывает на текущую страницу
            if (linkHref === currentPage) {
                event.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
    });
});
