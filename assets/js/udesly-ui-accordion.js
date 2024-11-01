(function( $ ) {
    'use strict';

    $(document).ready(function () {

        // ---------------------------------------- ACCORDION ------------------------------------------

        $('.cdg-woo-kit-custom-meta-box').on('click', '.cdg-woo-kit-accordion-btn', function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('.cdg-woo-kit-accordion-btn-active');
            $(this).next().toggle();
        });

        // var acc = document.getElementsByClassName("cdg-woo-kit-accordion-btn");
        // var i;
        //
        // for (i = 0; i < acc.length; i++) {
        //     acc[i].addEventListener("click", function() {
        //         this.classList.toggle("cdg-woo-kit-accordion-btn-active");
        //         var panel = this.nextElementSibling;
        //         if (panel.style.display === "block") {
        //             panel.style.display = "none";
        //         } else {
        //             panel.style.display = "block";
        //         }
        //     });
        // }

    });

})( jQuery );
