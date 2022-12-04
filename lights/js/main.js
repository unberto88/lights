document.addEventListener('DOMContentLoaded', function() {


    // search toggle
    const searchToggleButton = document.getElementById('search-toggle');
    searchToggleButton.addEventListener('click', () => {
        const searchWrp = document.getElementById('search-wrp');
        searchWrp.classList.toggle('open');
    })


    // menu    
    const menuToggleButton = document.getElementById('menu-toggle');
    menuToggleButton.addEventListener('click', () => {
        const el = document.body;
        el.classList.toggle('menu-open');
    })




    // swiper 

    var paymentTypes = new Swiper(".home-slider", {
        // loop: true,
        pagination: {
            el: ".home-slider-pagination",
        },
        navigation: {
            nextEl: '.home-slider--button-next',
            prevEl: '.home-slider--button-prev',
        },
        
    });

    
});