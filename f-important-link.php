 <!-- <div id="preloader"></div> -->
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
 <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->

 <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


 <script>
$(document).ready(function() {

    $('#itemslider').carousel({
        interval: 3000
    });

    $('.carousel-showmanymoveone .item').each(function() {
        var itemToClone = $(this);

        for (var i = 1; i < 3; i++) {
            itemToClone = itemToClone.next();

            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-" + (i))
                .appendTo($(this));
        }
    });
});


$(document).ready(function() {

$('#itemslider2').carousel({
    interval: 3000
});

$('.carousel-showmanymoveone2 .item').each(function() {
    var itemToClone = $(this);

    for (var i = 1; i < 3; i++) {
        itemToClone = itemToClone.next();

        if (!itemToClone.length) {
            itemToClone = $(this).siblings(':first');
        }

        itemToClone.children(':first-child').clone()
            .addClass("cloneditem-" + (i))
            .appendTo($(this));
    }
});
});



$(document).ready(function() {

$('#itemslider2').carousel({
    interval: 3000
});

$('.carousel-showmanymoveone4 .item').each(function() {
    var itemToClone = $(this);

    for (var i = 1; i < 4; i++) {
        itemToClone = itemToClone.next();

        if (!itemToClone.length) {
            itemToClone = $(this).siblings(':first');
        }

        itemToClone.children(':first-child').clone()
            .addClass("cloneditem-" + (i))
            .appendTo($(this));
    }
});
});




 </script>