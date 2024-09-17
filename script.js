document.addEventListener('DOMContentLoaded', function() {
    const menuContainer = document.getElementById('menu_container');
    const menuLink = document.querySelector('.menu_link');

    menuContainer.addEventListener('change', function() {
        if (this.checked) {
            menuLink.classList.add('show_menu');
        } else {
            menuLink.classList.remove('show_menu');
        }
    });
});
