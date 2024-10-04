// sidebar.js

document.querySelector('.sidebarBtn button').onclick = function() {
    const sidebar = document.querySelector('.sidebar'),
    toggleButton = document.querySelector('.sidebarBtn'),
    toggleIconOpen = document.querySelector('.fa-solid.fa-bars'),
    toggleIconClose = document.querySelector('.fa-solid.fa-xmark');

    if (sidebar.style.left === '0px') {
        sidebar.style.left = '-350px';
        toggleIconOpen.style.display = 'block';
        toggleIconClose.style.display ='none';
    } else {
        sidebar.style.left = '0';
        toggleIconOpen.style.display = 'none';
        toggleIconClose.style.display ='block';
    }
};

