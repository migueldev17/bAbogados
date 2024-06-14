document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const navMenu = document.querySelector('nav ul');
    const menuToggle = document.getElementById('mobile-menu');

    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-theme');
        themeToggle.textContent = document.body.classList.contains('dark-theme') ? 'dark_mode' : 'wb_sunny';
    });

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('show');
    });
});
