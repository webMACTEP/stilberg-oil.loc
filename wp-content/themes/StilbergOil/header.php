<?php  
  $features = get_posts([
    'post_type' => 'features',
     'orderby'   => 'date',
     'order'     => 'DESC',
      'numberposts' => 0
  ]);
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stilberg Oil — экспресс-замена моторного масла</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../wp-content/themes/StilbergOil/assets/css/style.css?ver=1.0.0">
    <link rel="stylesheet" href="../wp-content/themes/StilbergOil/assets/css/normalize.css?ver=1.0.0">
    <link rel="stylesheet" href="../wp-content/themes/StilbergOil/assets/css/bootstrap-grid.min.css?ver=1.0.0">
    <!-- imonials -->
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68069773, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68069773" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- feedback -->
    <script src="../feedback/js/feedback.js"></script>
    <script src="../feedback/js/jquery.arcticmodal.js"></script>
    <script src="../feedback/js/jquery.jgrowl.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-00', function(){
			$('#small-modal0').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-0', function(){
			$('#small-modal').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-1', function(){
			$('#medium-modal-1').arcticmodal();
		});
  });
  $(document).ready(function() {
		$(document).on('click', '.modal_btn-2', function(){
			$('#medium-modal-2').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-3', function(){
			$('#medium-modal-3').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-4', function(){
			$('#medium-modal-4').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-5', function(){
			$('#medium-modal-5').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-6', function(){
			$('#medium-modal-6').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-7', function(){
			$('#medium-modal-7').arcticmodal();
		});
  });
	$(document).ready(function() {
		$(document).on('click', '.modal_btn-8', function(){
			$('#medium-modal-8').arcticmodal();
		});
  });

    </script>
    <link rel="stylesheet" type="text/css" href="../feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="../feedback/css/jquery.jgrowl.css">
    <link rel="stylesheet" type="text/css" href="../feedback/css/style.css">
</head>
<body>
<section class="bt_top">
    <script>
      $(document).ready(function() { 
        var button = $('#button-up');	
        $(window).scroll (function () {
          if ($(this).scrollTop () > 300) {
            button.fadeIn();
          } else {
            button.fadeOut();
          }
      });	 
      button.on('click', function(){
      $('body, html').animate({
      scrollTop: 0
      }, 800);
      return false;
      });		 
      });
      </script>	
    <div id="button-up">
      <i class="fa fa-chevron-up"></i>	
  </div>
</section>
    <header class="header">
        <div class="container">
            <div class="row">  
                <div class="col-12">
                    <div class="header__content">             
                <div class="left_h">
                    <div class="telephone">
                    <img src="../wp-content/themes/StilbergOil/assets/img/phone.svg" alt="Наш телефон">
                    <div class="phone"><a class="phone" href="tel:+7 (495) 255-52-94">+7 (495) 255-52-94</a></div>
                    </div>
                <a href="#" class="callback modal_btn-00">Вам перезвонить?</a>
                </div>
                <div class="logo"><a class="logo" href="../">Stilberg <span style="color: #40DD55;">Oil</span></a></div>
                <nav class="right_h">
                    <ul class="main_menu">
                        <li class="menu_list"><a href="../#services">Услуги</a></li>
                        <li class="menu_list"><a href="../#contacts">Контакты</a></li>
                    </ul>
                    <div style="cursor: pointer" class="zapis modal_btn-0">Записаться</div>

                </nav>
            </div>
            </div> 
            </div>
        </div>
    </header>
