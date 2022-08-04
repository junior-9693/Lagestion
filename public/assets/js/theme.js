
$('document').ready(function() {
  $('#doctorSlideshow').owlCarousel({
    nav: true,
    dots: false,
    navText: ["<span class='mai-arrow-back'></span>", "<span class='mai-arrow-forward'></span>"],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });
});

$('document').ready(function() {
  $("a[data-role='smoothscroll']").click(function(e) {
    e.preventDefault();
    
    var position = $($(this).attr("href")).offset().top - nav_height;

    $("body, html").animate({
        scrollTop: position
    }, 1000 );
    return false;
  });
});

$('document').ready(function() {
  // Back to top
  var backTop = $(".back-to-top");

  $(window).scroll(function() {
    if($(document).scrollTop() > 400) {
      backTop.css('visibility', 'visible');
    }
    else if($(document).scrollTop() < 400) {
      backTop.css('visibility', 'hidden');
    }
  });

  backTop.click(function() {
    $('html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});


$('document').ready(function() {
  // Tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // Popovers
  $('[data-toggle="popover"]').popover();

  // Page scroll animate
  new WOW().init();
});

window.addEventListener('DOMContentLoaded',()=>{
  (()=>{
      document.body.insertAdjacentHTML('afterbegin', '<div id="overlay"></div>');
      let $overlay = document.getElementById('overlay');
      Array.from(document.querySelectorAll('.container .dropbtn')).forEach(($button)=>{
          $button.addEventListener('click', (e)=>{
              let $actionNav = $button.nextElementSibling;
              if($actionNav.classList.contains('show')){
                  $actionNav.classList.remove('show');
                  $overlay.classList.remove('show');
              }else{
                  $actionNav.classList.add('show');
                  $overlay.classList.add('show');

              }
              e.preventDefault();
          })
      });
      $overlay.addEventListener('click',()=>{
          $overlay.classList.remove('show');
          Array.from(document.querySelectorAll('.container .dropdown-content')).forEach(($dropDown)=>{
              $dropDown.classList.remove('show');
          });
      })
  })();
})

$('#add_article').on('click', function(e)
{
e.preventDefault();

$newArticle = "<div class='article'>";
$newArticle += "    <div class='first_line_header clearfix'>";
$newArticle += "        <div class='header_title'>";
$newArticle += "            <span class='header_title_text'>Article nième</span>";
$newArticle += "        </div>";
$newArticle += "        <div class='header_address'>";
$newArticle += "            Rue du manège, 25";                            
$newArticle += "		</div>";
$newArticle += "    </div>";
$newArticle += "    <div class='second_line_header clearfix'>";
$newArticle += "        <div class='header_admin_datetime'>";
$newArticle += "            <span class='header_text'>Thelma</span>";
$newArticle += "        </div>";
$newArticle += "        <div class='header_more_options_icon'>";
$newArticle += "            <div class='dropdown'>";
$newArticle += "                <input type='button' class='dropbtn' value='&#8942;'>";
$newArticle += "                <nav class='dropdown-content'>";
$newArticle += "                    <a href='update.php'>Modifier</a>";
$newArticle += "					<a href='delete.php'>Supprimer</a>";
$newArticle += "					<a href='insert.php'>Insérer</a>";
$newArticle += "                </nav>";
$newArticle += "            </div>";
$newArticle += "        </div>";
$newArticle += "    </div>";
$newArticle += "    <div class='separate_line'></div>";
$newArticle += "        <div class='article_content'>";
$newArticle += "            <p><span style='font-size:14px'><u><strong><span style='background-color:#27ae60'>Ceci est un énième test ...</span></strong></u></span></p>";
$newArticle += "        </div>";
$newArticle += "</div>";
    
$('.container').prepend($newArticle);
});
