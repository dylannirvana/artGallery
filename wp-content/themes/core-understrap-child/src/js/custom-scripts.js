// // Smooth scrolling by Devin Stugeon
jQuery(function($){
  // this part intializes jQuery you a-holes

   $('a[href*=#]:not([href=#])').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
     || location.hostname == this.hostname) {

       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
       if (target.length) {
         $('html,body').animate({
           scrollTop: target.offset().top
         }, 1000);
         return false;
       }
     }
   }); // END Smooth scroll
/////////////

/////////////
}); // END jQuery
