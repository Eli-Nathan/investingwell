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
      if (qu.search('isa') >= 0 || qu.search('interest savings account') >= 0) {
        $('#answer').html("<p class='slideDown text-center'>UK investors have an ISA (individual savings account) allowance of £20,000 in this tax year.</p>");
      }

      else if (qu.search('gia') >= 0 || qu.search('general investment account') >= 0) {
        $('#answer').html("<p class='slideDown text-center'>A GIA is a non ISA tax wrapper that UK and non UK savers can invest in. Unlike an ISA there is no limit to what you can invest each year but there may be tax due on any growth or income.</p>");
      }

      else if (qu.search('thanks') >= 0 || qu.search('thank you') >= 0) {
        $('#answer').html("<p class='slideDown text-center'>You are very welcome!</p><p class='slideDown text-center'>Can I help with anything else?</p>");
      }

      else {
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
    if (clickedEl.hasClass('is-active')) {
      clickedEl.removeClass('is-active');
    } else {
      $('.box-inner').removeClass('is-active');
      $(this).toggleClass("is-active");
    }

  });
  $(document).click(function(event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {
      $navbar.collapse('hide');
    }
  });

  $('[data-toggle="tooltip"]').tooltip();

  window.goBack = function (e){
    var defaultLocation = "http://www.investingwell.co.uk/";
    var oldHash = window.location.hash;

    history.back(); // Try to go back

    var newHash = window.location.hash;

    /* If the previous page hasn't been loaded in a given time (in this case
    * 1000ms) the user is redirected to the default location given above.
    * This enables you to redirect the user to another page.
    *
    * However, you should check whether there was a referrer to the current
    * site. This is a good indicator for a previous entry in the history
    * session.
    *
    * Also you should check whether the old location differs only in the hash,
    * e.g. /index.html#top --> /index.html# shouldn't redirect to the default
    * location.
    */

    if(
        newHash === oldHash &&
        (typeof(document.referrer) !== "string" || document.referrer  === "")
    ){
        window.setTimeout(function(){
            // redirect to default location
            window.location.href = defaultLocation;
        },1000); // set timeout in ms
    }
    if(e){
        if(e.preventDefault)
            e.preventDefault();
        if(e.preventPropagation)
            e.preventPropagation();
    }
    return false; // stop event propagation and browser default event
}
$('.navbar-collapse').on('shown.bs.collapse', function() {
  $('.navbar-toggle i.fa-bars').addClass('fa-times');
  $('.navbar-toggle i.fa-bars').removeClass('fa-bars');

});
$('.navbar-collapse').on('hide.bs.collapse', function() {
  $('.navbar-toggle i.fa-times').addClass('fa-bars');
  $('.navbar-toggle i.fa-times').removeClass('fa-times');
});

});
