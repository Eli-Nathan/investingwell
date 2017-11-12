// Select all links with hashes
$('a[href*="#"]')
     // Remove links that don't actually link to anything
     .not('[href="#"]')
     .not('[href="#0"]')
     .click(function(event) {
          // On-page links
          if (
               location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
               location.hostname == this.hostname
          ) {
               // Figure out element to scroll to
               var target = $(this.hash);
               target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
               // Does a scroll target exist?
               if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                         scrollTop: target.offset().top - 70
                    }, 1000, function() {
                         // Callback after animation
                         // Must change focus!
                         var $target = $(target);
                         $target.focus();
                         if ($target.is(":focus")) { // Checking if the target was focused
                              return false;
                         } else {
                              $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                              $target.focus(); // Set focus again
                         };
                    });
               }
          }
     });
$(document).ready(function() {
     $("form.question").submit(function(e) {
          e.preventDefault();
          var que = $('#question').val();
          var qu = que.toLowerCase();
          setTimeout(function() {
               $('#answer').html('<p class="text-center"><i class="fa fa-spinner fa-spin"></i>&nbsp; Getting your answer...</p>');
          }, 0);
          setTimeout(function() {
               if (qu.search('sky') >= 0 && qu.search('blue') >= 0) {
                    // if (qu == "why is the sky blue?" || qu == "why is the sky blue") {
                    $('#answer').html("<p class='slideDown text-center'>A clear cloudless day-time sky is blue because molecules in the air scatter blue light from the sun more than they scatter red light. When we look towards the sun at sunset, we see red and orange colours because the blue light has been scattered out and away from the line of sight.</p>");
               } else if ((qu.search('isa') >= 0) && (qu.search('my') >= 0 || qu.search('your') >= 0)) {
                    $('#answer').html("<p class='slideDown text-center'>We've checked your ISA for you and found that you have £1256. Keep up the good work!</p>");
               } else if ((qu.search('isa') >= 0) && (qu.search('open') >= 0 || qu.search('set up') >= 0)) {
                    $('#answer').html("<p class='slideDown text-center'>Here's some of the best places we've found that will let you open up an ISA</p><ul class='text-center'><li><a href='https://www.bankofscotland.co.uk/isas/cash-isas/'>Bank of Scotland</a></li><li><a href='http://www.santander.co.uk/info/savings/isa-range'>Santander</a></li><li><a href='https://www.hsbc.co.uk/1/2/savings-accounts/cash-isa/'>HSBC</a></li></ul>");
               } else if (qu.search('corporate') >= 0 && qu.search('bonds') >= 0) {
                    $('#answer').html("<p class='slideDown text-center'>Corporate Bonds are similar to Government Gilts and work in much the same way, however Corporate Bonds, as the name suggests, are issued by multinational companies as opposed to Governments. They do this as a cheaper form of borrowing than a bank loan and often offer better returns than Government Gilts. They have to because the risk of a corporate going bankrupt, even a multinational one, is greater than the risk of a Government being unable to repay it's debt.");
               } else if (qu.search('government') >= 0 && qu.search('gilt') >= 0) {
                    $('#answer').html("<div class='slideDown'><h3>Government Gilts (Fixed Rates).</h3> <p>Government backed stock, known as 'Gilts' are loans made to the Government by in effect the investors. </p> <p>Gilts provide income (derived from interest payments). Inflation erodes away at the true value of the Gilts capital, whilst interest rates will make the Gilts income appear more or less attractive. Broadly speaking when interest rates rise the value of the Gilt will fall and vice versa. Many professional investors and fund managers invest part of their portfolio in Gilts because Gilts can help them to spread risk and/or provide income.</p><h3>Government Gilts (Index Linked).</h3> <p>Like conventional gilts, index-linked gilts pay initially, in line with market interest rates.  However, their semi-annual coupons and principal payment are adjusted by the Retail Price Index (RPI).</p><p>You should keep in mind that the value of investments and the income from them can fall as well as rise. You may not get back the full amount invested. Different types of investments may not be suitable for all investors.</p></div>");
               } else if (qu.search('thanks') >= 0 || qu.search('thank you') >= 0) {
                    $('#answer').html("<p class='slideDown text-center'>You are very welcome!</p><p class='slideDown text-center'>Can I help with anything else?</p>");
               } else {
                    $('#answer').html("<p class='slideDown text-center'>Sorry, I don't really have much to say about" + " \"" + qu + "\"</p>");
               }
          }, 4000);
     });
     $(".link-row").click(function() {
          alert("Test");
          window.open($(this).data("href"));
     });
     $(function() {
          var navMain = $(".navbar-collapse"); // avoid dependency on #id
          // "a:not([data-toggle])" - to avoid issues caused
          // when you have dropdown inside navbar
          navMain.on("click", "a:not([data-toggle])", null, function() {
               navMain.collapse('hide');
          });
     });
     $('.box-inner').click(function() {
       var clickedEl = $(this);
       if(clickedEl.hasClass('is-active')) {
         clickedEl.removeClass('is-active');
       }
       else {
         $('.box-inner').removeClass('is-active');
         $(this).toggleClass("is-active");
       }

     });
});
