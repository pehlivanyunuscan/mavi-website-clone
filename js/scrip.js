document.querySelector('.dropdown-btn').addEventListener('click', function () {
    const container = this.parentElement;
    container.classList.toggle('open');
});

document.addEventListener('click', function (e) {
    const dropdown = document.querySelector('.dropdown-container');
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('open');
    }
});