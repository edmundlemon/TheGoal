document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category-btn');
    const carItems = document.querySelectorAll('.car-item');
    const returnDifferentLocationCheckbox = document.getElementById('return-different-location');
    const returnLocationGroup = document.getElementById('return-location-group');
    const carTab = document.getElementById('car-tab');
    const chauffeurTab = document.getElementById('chauffeur-tab');
    const carForm = document.getElementById('car-rental-form');
    const chauffeurForm = document.getElementById('chauffeur-rental-form');

    carTab.addEventListener('click', function() {
        carTab.classList.add('active');
        chauffeurTab.classList.remove('active');
        carForm.classList.add('active');
        chauffeurForm.classList.remove('active');
    });

    chauffeurTab.addEventListener('click', function() {
        chauffeurTab.classList.add('active');
        carTab.classList.remove('active');
        chauffeurForm.classList.add('active');
        carForm.classList.remove('active');
    });

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const category = button.getAttribute('data-category');
            carItems.forEach(item => {
                if (item.getAttribute('data-category') === category || category === 'all') {
                    item.style.display = 'flex'; // Change to flex to maintain button inside the container
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Set default active category
    categoryButtons[0].classList.add('active');
    carItems.forEach(item => {
        if (item.getAttribute('data-category') !== 'compact') {
            item.style.display = 'none';
        }
    });

    // Show/hide return location input based on checkbox
    returnDifferentLocationCheckbox.addEventListener('change', function() {
        if (this.checked) {
            returnLocationGroup.style.display = 'block';
        } else {
            returnLocationGroup.style.display = 'none';
        }
    });
});

// Toggle navbar menu
document.getElementById('navbar-toggle').addEventListener('click', function() {
    const menu = document.getElementById('navbar-menu');
    menu.classList.toggle('show');
});

    document.getElementById('car-rental-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        