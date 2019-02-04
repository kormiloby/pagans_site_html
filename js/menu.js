var menu = document.querySelector('.menu-main'),
    closeButton = document.querySelector('.mobile-close-button'),
    menuButton = document.querySelector('.mobile-menu-button');

function showMenu() {
    menu.style.display = 'block';
    menuButton.style.display = 'none';
    closeButton.style.display = 'block';
}

function closeMenu() {
    menu.style.display = 'none';
    menuButton.style.display = 'block';
    closeButton.style.display = 'none';
}