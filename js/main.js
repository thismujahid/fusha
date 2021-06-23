$(function(){
    "use strict"
    $(window).on('scroll', function(){
        if($(window).scrollTop() >= 100){
            $('.fixed-nav').slideDown(400)
        }else{
            $('.fixed-nav').slideUp(400)
        }
    });
    // Start Valid label For form In Register Now
   $('.register form .custom-input input').on('focus', function(){
       $(this).addClass('has-data')
   });
   $('.register form .custom-input input').on('blur', function(){
    $(this).removeClass('has-data')
    if($(this).val() != ""){
       $(this).addClass('has-data')
    }else{
    $(this).removeClass('has-data')
    }
    });
    // Start Valid label For form In Contact Us
    $('.contact form .custom-input input').on('focus',function(){
        $(this).addClass('typeing');
    });
    $('.contact form .custom-input input').on('blur',function(){
        $(this).removeClass('typeing');
        if($(this).val() != ""){
        $(this).addClass('typeing');
        }else{
        $(this).removeClass('typeing');
        }
    });
    $('.contact form .massage textarea').on('focus',function(){
        $(this).addClass('typeing');
    });
    $('.contact form .massage textarea').on('blur',function(){
        $(this).removeClass('typeing');
        if($(this).val() != ""){
            $(this).addClass('typeing');
            }else{
            $(this).removeClass('typeing');
            }
    });
    $('.back').on('click', function () {
        $('html').animate({
            scrollTop: 0
        }, 1000)
      });
      $(window).on('scroll', function(){
          if($(window).scrollTop() >= 1000){
              $('.back').fadeIn()
          }else{
            $('.back').fadeOut()
          }
      });
      $('.custom').on('click', function (e) {
        e.preventDefault();
          $('html').animate({
              scrollTop: $($(this).data('link')).offset().top
          }, 1000);
        });
        $('.logo a').on('click', function(e){
          e.preventDefault();
        })
        $('.toggleNav').on('click', function(){
            $('.nav-menu-fixed').toggleClass('open');
        })
        $('.landing-page .nav-menu-fixed .nav-container .closer').on('click', function () {
            $('.nav-menu-fixed').removeClass('open')
          });
          $('.landing-page .nav-menu-fixed a').on('click',function(){
            $('.nav-menu-fixed').removeClass('open')
          });
          $('.dropdown-toggle').on('click', function(){
            $('.dropdown-menu').slideToggle();
            $('.dropdown-menu a').on('click', function(){
            $('.dropdown-menu').slideUp();
            })
          });

        // Validate Sumbit Button For Register Form
        $('.register form button[type="submit"]').attr('disabled', 'disabled');
        $('.register form button[type="submit"]').on('click', function () {
          $('.register form input[type="text"]').focus()
        })
        $('.register form input').on('blur', function () {
          if($('.register form input[type="text"').val() == '' || $('.register form input[type="email"').val() == '' || $('.register form input[type="number"').val() == ''){
            $('.register form button[type="submit"]').attr('disabled', 'disabled');
          }else{
            $('.register form button[type="submit"]').removeAttr('disabled');
          }
        });
        // Validate Send
        $('.contact form').on('submit', function(e){
          if($('.contact form textarea').val() == ''){
            e.preventDefault();
            $('.contact form textarea').focus();
          }else if($('.contact form select option:selected').val() == ''){
            e.preventDefault();
            $('.contact form select').focus();
          }else{
            return true;
          }
        })
        // Lessons Details
        var links = document.querySelectorAll('.viwe-details');
        links.forEach(link => {
          $(link).on('click', function(){
            $(this).next('p').slideToggle();
            $(this).css('box-shadow', 'none')
            if($(this).text() === 'Viwe Detials'){
              $(this).text('Hide')
            }else{
              $(this).text('Viwe')
            }
            });
          });
          // About Viwe More Button
          $('#viwemorebtn').on('click', function(){
              $('#viwemorearea').slideToggle();
          });
          // Viwe Enroll Course Box
        $('.viwe-form').on('click', function(){
          $('.enroll-box').fadeIn(1000);
        });
        $('.enroll-box .closer').on('click', function(){
          $('.enroll-box').fadeOut(1000);
        });
        // Enabel label click in small devices navbar
        $('.landing-page .nav-menu-fixed .page-links label').on('click', function(){
          $('.landing-page .nav-menu-fixed .page-links ul').slideToggle();
          $(this).toggleClass('white');
          $('.landing-page .nav-menu-fixed .page-links label i.rot-i').toggleClass('rot');
        });

        var planRequest = document.querySelectorAll('.plan-request');
        planRequest.forEach(e => {
          $(e).on('click', function(){
            $(this).next('div').slideToggle();
            if($(this).text() === 'Requset This Plan'){
              $(this).find('button').text('Close Box');
            }else{
              $(this).find('button').text('Requset This Plan');
            }
          });
        });
});
var textArea = document.querySelector(".reviwes form textarea");
var span = document.getElementById("counter");
var length = textArea.getAttribute("maxlength");
textArea.oninput = function() {
    "use strict";
    span.textContent = textArea.value.length;
};