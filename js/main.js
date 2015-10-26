// navigation and scroll functions
// ==========================================================================

$(document).ready(function() {
  // run test on initial page load
  checkSize();

  // run test on resize of the window
  $(window).resize(checkSize);
});

// bind functions to the css rule
function checkSize(){
  if ($("#mobile").css("display") == "none" ){ // begin scripts that only fire when not in 'mobile' mode (above 700px width)

    if(window.location.href.substr(-2) == "?m") { // if we were in mobile display mode, remove the indicator
      window.location = window.location.href = "?d"; // and add the desktop display mode indicator
    }

    (function() { // any attempt to scroll will take one to next section (up or down)
      var delay = false;

      $(document).on('mousewheel DOMMouseScroll scrollstart', function(event) {
        event.preventDefault();
        if(delay) return;

        delay = true;
        setTimeout(function(){delay = false},1100)

        var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

        var a= document.getElementsByClassName('anchorlink');
        if(wd < 0) {
          for(var i = 0 ; i < a.length ; i++) {
            var t = a[i].getClientRects()[0].top;
            if(t >= 40) break;
          }
        }
        else {
          for(var i = a.length-1 ; i >= 0 ; i--) {
            var t = a[i].getClientRects()[0].top;
            if(t < -20) break;
          }
        }
        $('html,body').animate({
          scrollTop: a[i].offsetTop
        });
      });
    })();

    $(document).ready(function($) {

      var $win = $(window); // set the win var
      var winvh = $win.height(); // Get the window height.

      $('#content-information').on('mouseenter', '#gallery1', function( event ) {
        //console.log('gallery1 is being hovered over');
        $("#gallery1 .touchme").css("visibility", "visible");
        $("#gallery1").css("width", "40%");
        $("#gallery2").css("width", "20%");
        $("#gallery3").css("width", "20%");
        $("#gallery4").css("width", "20%");
      }).on('mouseleave', '#gallery1', function( event ) {
        //console.log('gallery1 is no longer being hovered over');
        $("#gallery1 .touchme").css("visibility", "hidden");
        $("#gallery1").css("width", "25%");
        $("#gallery2").css("width", "25%");
        $("#gallery3").css("width", "25%");
        $("#gallery4").css("width", "25%");
      });

      $('#content-information').on('mouseenter', '#gallery2', function( event ) {
        //console.log('gallery2 is being hovered over');
        $("#gallery2 .touchme").css("visibility", "visible");
        $("#gallery1").css("width", "20%");
        $("#gallery2").css("width", "40%");
        $("#gallery3").css("width", "20%");
        $("#gallery4").css("width", "20%");
      }).on('mouseleave', '#gallery2', function( event ) {
        //console.log('gallery2 is no longer being hovered over');
        $("#gallery2 .touchme").css("visibility", "hidden");
        $("#gallery1").css("width", "25%");
        $("#gallery2").css("width", "25%");
        $("#gallery3").css("width", "25%");
        $("#gallery4").css("width", "25%");
      });

      $('#content-information').on('mouseenter', '#gallery3', function( event ) {
        //console.log('gallery3 is being hovered over');
        $("#gallery3 .touchme").css("visibility", "visible");
        $("#gallery1").css("width", "20%");
        $("#gallery2").css("width", "20%");
        $("#gallery3").css("width", "40%");
        $("#gallery4").css("width", "20%");
      }).on('mouseleave', '#gallery3', function( event ) {
        //console.log('gallery3 is no longer being hovered over');
        $("#gallery3 .touchme").css("visibility", "hidden");
        $("#gallery1").css("width", "25%");
        $("#gallery2").css("width", "25%");
        $("#gallery3").css("width", "25%");
        $("#gallery4").css("width", "25%");
      });

      $('#content-information').on('mouseenter', '#gallery4', function( event ) {
        //console.log('gallery4 is being hovered over');
        $("#gallery4 .touchme").css("visibility", "visible");
        $("#gallery1").css("width", "20%");
        $("#gallery2").css("width", "20%");
        $("#gallery3").css("width", "20%");
        $("#gallery4").css("width", "40%");
      }).on('mouseleave', '#gallery4', function( event ) {
        //console.log('gallery4 is no longer being hovered over');
        $("#gallery4 .touchme").css("visibility", "hidden");
        $("#gallery1").css("width", "25%");
        $("#gallery2").css("width", "25%");
        $("#gallery3").css("width", "25%");
        $("#gallery4").css("width", "25%");
      });
      

      // Nav button content
        // ================================================================================================================
        $('#section1navitem1').click(function(){ // if #section1navitem1 clicked 

          $('#tablemenu').addClass('section1');
          $('#section1').addClass('section1');
          $('#section1navitem').addClass('on');

          $('#tablemenu').removeClass('section2');
          $('#section2').removeClass('section2');
          $('#section2navitem').removeClass('on');

          $('#tablemenu').removeClass('section3');
          $('#section3').removeClass('section3');
          $('#section3navitem').removeClass('on');

          $('#section1navitem').addClass('on');
          $('#section1-navitem1').removeClass('on');
          $('#section1-navitem2').removeClass('on');
          $('#section1navitem2').removeClass('on');
          $('#section1navitem3').removeClass('on');

          $('#up_arrow').removeClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').addClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').addClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').addClass('on');

          document.getElementById("table").style.display="block";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="none";
          document.getElementById("gallery").style.display="none";
          document.getElementById("contact").style.display="none";
        });

        $('#up_arrow').click(function(){ // if #up_arrow clicked
          
          if ( $(this).hasClass("goto1") ) { // and if it has the goto1 class appended

            $('#up_arrow').removeClass('on');
            $('#up_arrow').removeClass('goto1');
            $('#up_arrow').removeClass('goto1a');
            $('#up_arrow').removeClass('goto1b');

            $('#down_arrow').addClass('on');
            $('#down_arrow').removeClass('goto1');
            $('#down_arrow').addClass('goto1a');
            $('#down_arrow').removeClass('goto1b');

            $('#dig_deeper').addClass('on');

            $('#section1-navitem1').removeClass('on');
            $('#section1-navitem2').removeClass('on');
            $('#section1navitem2').removeClass('on');
            $('#section1navitem3').removeClass('on');

            document.getElementById("table").style.display="block";
            document.getElementById("latest-in-touch").style.display="none";
            document.getElementById("key-features").style.display="none";

          } 

          else if ( $(this).hasClass("goto1a") ) {// and if it has the goto1a class appended

            $('#up_arrow').addClass('on');
            $('#up_arrow').addClass('goto1');
            $('#up_arrow').removeClass('goto1a');
            $('#up_arrow').removeClass('goto1b');

            $('#down_arrow').addClass('on');
            $('#down_arrow').removeClass('goto1');
            $('#down_arrow').removeClass('goto1a');
            $('#down_arrow').addClass('goto1b');

            $('#dig_deeper').addClass('on');

            $('#section1-navitem1').addClass('on');
            $('#section1-navitem2').removeClass('on');
            $('#section1navitem2').addClass('on');
            $('#section1navitem3').removeClass('on');

            document.getElementById("table").style.display="none";
            document.getElementById("latest-in-touch").style.display="block";
            document.getElementById("key-features").style.display="none";

          }

        });

        $('#down_arrow').click(function(){ // if #down_arrow clicked
          
          if ( $(this).hasClass("goto1a") ) { // and if it has the goto1a class appended

            $('#up_arrow').addClass('on');
            $('#up_arrow').addClass('goto1');
            $('#up_arrow').removeClass('goto1a');
            $('#up_arrow').removeClass('goto1b');

            $('#down_arrow').addClass('on');
            $('#down_arrow').removeClass('goto1');
            $('#down_arrow').removeClass('goto1a');
            $('#down_arrow').addClass('goto1b');

            $('#dig_deeper').addClass('on');

            $('#section1-navitem1').addClass('on');
            $('#section1-navitem2').removeClass('on');
            $('#section1navitem2').addClass('on');
            $('#section1navitem3').removeClass('on');

            document.getElementById("table").style.display="none";
            document.getElementById("latest-in-touch").style.display="block";
            document.getElementById("key-features").style.display="none";

          } 

          else if ( $(this).hasClass("goto1b") ) { // and if it has the goto1b class appended

            $('#up_arrow').addClass('on');
            $('#up_arrow').removeClass('goto1');
            $('#up_arrow').addClass('goto1a');
            $('#up_arrow').removeClass('goto1b');

            $('#down_arrow').removeClass('on');
            $('#down_arrow').removeClass('goto1');
            $('#down_arrow').removeClass('goto1a');
            $('#down_arrow').removeClass('goto1b');

            $('#dig_deeper').removeClass('on');

            $('#section1-navitem1').removeClass('on');
            $('#section1-navitem2').addClass('on');
            $('#section1navitem2').removeClass('on');
            $('#section1navitem3').addClass('on');

            document.getElementById("table").style.display="none";
            document.getElementById("latest-in-touch").style.display="none";
            document.getElementById("key-features").style.display="block";

          }

        });

        $('#section1navitem2').click(function(){ // if #section1navitem2 (Latest in Touch) is clicked 

          $('#up_arrow').addClass('on');
          $('#up_arrow').addClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').addClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').removeClass('goto1a');
          $('#down_arrow').addClass('goto1b');
     
          $('#dig_deeper').addClass('on');

          $('#section1-navitem1').addClass('on');
          $('#section1-navitem2').removeClass('on');
          $('#section1navitem2').addClass('on');
          $('#section1navitem3').removeClass('on');

          document.getElementById("table").style.display="none";
          document.getElementById("latest-in-touch").style.display="block";
          document.getElementById("key-features").style.display="none";

        });

        $('#section1navitem3').click(function(){ // if #section1navitem3 (Key Features) is clicked 

          $('#up_arrow').addClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').addClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').removeClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').removeClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').removeClass('on');

          $('#section1-navitem1').removeClass('on');
          $('#section1-navitem2').addClass('on');
          $('#section1navitem2').removeClass('on');
          $('#section1navitem3').addClass('on');

          document.getElementById("table").style.display="none";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="block";

        });

        $('#section2navitem').click(function(){ // if #section2navitem (Gallery) clicked 

          $("#text-block").style.visibility='hidden';

          $('#tablemenu').removeClass('section1');
          $('#section1').removeClass('section1');
          $('#section1navitem').removeClass('on');

          $('#tablemenu').addClass('section2');
          $('#section2').addClass('section2');
          $('#section2navitem').addClass('on');

          $('#tablemenu').removeClass('section3');
          $('#section3').removeClass('section3');
          $('#section3navitem').removeClass('on');

          $('#up_arrow').removeClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').removeClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').removeClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').removeClass('on');

          document.getElementById("table").style.display="none";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="none";
          document.getElementById("gallery").style.display="block";
          document.getElementById("contact").style.display="none";

          $("#content-display").removeClass('table').css({ "display": "block", "opacity": "0" });
          $("#content-display").removeClass('contact').css({ "display": "block", "opacity": "0" });
          $("#content-display").addClass('gallery').css({ "display": "block", "opacity": "0" }).animate({ "opacity": "1" }, 3000);

        });

        $('#section3navitem').click(function(){ // if #section3navitem (Contact) is clicked 

          $('#tablemenu').removeClass('section1');
          $('#section1').removeClass('section1');
          $('#section1navitem').removeClass('on');

          $('#tablemenu').removeClass('section2');
          $('#section2').removeClass('section2');
          $('#section2navitem').removeClass('on');

          $('#tablemenu').addClass('section3');
          $('#section3').addClass('section3');
          $('#section3navitem').addClass('on');

          $('#up_arrow').removeClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').removeClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').removeClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').removeClass('on');

          document.getElementById("table").style.display="none";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="none";
          document.getElementById("gallery").style.display="none";
          document.getElementById("contact").style.display="block";

          $("#content-display").removeClass('table').css({ "display": "block", "opacity": "0" });
          $("#content-display").removeClass('gallery').css({ "display": "block", "opacity": "0" });
          $("#content-display").addClass('contact').css({ "display": "block", "opacity": "0" }).fadeIn({ "opacity": "1" }, 3000);

        });

      $win.on("scroll", function () { // on scroll do this
        //console.log($(this).scrollTop());

        if ( ($(this).scrollTop() == winvh) ){ // if scrolled to gallery

          $('#tablemenu').removeClass('section1');
          $('#section1').removeClass('section1');
          $('#section1navitem').removeClass('on');

          $('#tablemenu').addClass('section2');
          $('#section2').addClass('section2');
          $('#section2navitem').addClass('on');

          $('#tablemenu').removeClass('section3');
          $('#section3').removeClass('section3');
          $('#section3navitem').removeClass('on');

          $('#up_arrow').removeClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').removeClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').removeClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').removeClass('on');

          document.getElementById("table").style.display="none";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="none";
          document.getElementById("gallery").style.display="block";
          document.getElementById("contact").style.display="none";

          $("#content-display").removeClass('table').css({ "display": "block", "opacity": "0" });
          $("#content-display").removeClass('contact').css({ "display": "block", "opacity": "0" });
          $("#content-display").addClass('gallery').css({ "display": "block", "opacity": "0" }).animate({ "opacity": "1" }, 3000);

        }

        else if ( ($(this).scrollTop() > winvh) && ($(this).scrollTop() <= winvh*2) ){ // if scrolled to contact

          $('#tablemenu').removeClass('section1');
          $('#section1').removeClass('section1');
          $('#section1navitem').removeClass('on');

          $('#tablemenu').removeClass('section2');
          $('#section2').removeClass('section2');
          $('#section2navitem').removeClass('on');

          $('#tablemenu').addClass('section3');
          $('#section3').addClass('section3');
          $('#section3navitem').addClass('on');

          $('#up_arrow').removeClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').removeClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').removeClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').removeClass('on');

          document.getElementById("table").style.display="none";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="none";
          document.getElementById("gallery").style.display="none";
          document.getElementById("contact").style.display="block";

          $("#content-display").removeClass('table').css({ "display": "block", "opacity": "0" });
          $("#content-display").removeClass('gallery').css({ "display": "block", "opacity": "0" });
          $("#content-display").addClass('contact').css({ "display": "block", "opacity": "0" }).fadeIn({ "opacity": "1" }, 3000);
        }

        else { // if scrolled to Multitouch Table

          $('#tablemenu').addClass('section1');
          $('#section1').addClass('section1');
          $('#section1navitem').addClass('on');

          $('#tablemenu').removeClass('section2');
          $('#section2').removeClass('section2');
          $('#section2navitem').removeClass('on');

          $('#tablemenu').removeClass('section3');
          $('#section3').removeClass('section3');
          $('#section3navitem').removeClass('on');

          $('#up_arrow').removeClass('on');
          $('#up_arrow').removeClass('goto1');
          $('#up_arrow').removeClass('goto1a');
          $('#up_arrow').removeClass('goto1b');

          $('#down_arrow').addClass('on');
          $('#down_arrow').removeClass('goto1');
          $('#down_arrow').addClass('goto1a');
          $('#down_arrow').removeClass('goto1b');

          $('#dig_deeper').addClass('on');

          document.getElementById("table").style.display="block";
          document.getElementById("latest-in-touch").style.display="none";
          document.getElementById("key-features").style.display="none";
          document.getElementById("gallery").style.display="none";
          document.getElementById("contact").style.display="none";

          $("#content-display").removeClass('gallery').css({ "display": "block", "opacity": "0" });
          $("#content-display").removeClass('contact').css({ "display": "block", "opacity": "0" });
          $("#content-display").addClass('table').css({ "display": "block", "opacity": "0" }).animate({ "opacity": "1" }, 3000);

        }

      }).on("resize", function(){ // if the user resizes the window
         winvh = $(this).height(); // get the new height value
      }); 

      
    });

  }

  if ($("#mobile").css("display") == "block" ){ // begin scripts that only fire when in 'mobile' mode (below 700px width)
    if(window.location.href.substr(-2) !== "?m") {
      window.location = window.location.href = "?m";
    }
  }

$(function() { // scroll to anchor
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});



}
