$(document).ready(function () {
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("navbar").style.padding = "10px 10px";
    } else {
      document.getElementById("navbar").style.padding = "30px 10px";
    }
  }



  $(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });

  $('.navbar-nav a').on('click', function () {
    $('.navbar-nav').find('li.active').removeClass('active');
    $(this).parent('li').addClass('active');
  });

  let $btns = $('.project-area .button-group button')

  $btns.click(function (e) {
    $('.project-area .button-group button').removeClass('active');
    e.target.classList.add('active');

    let selector = $(e.target).attr('data-filter');
    $('.project-area .grid').isotope({
      filter: selector
    });
    return false;
  });


});


// 