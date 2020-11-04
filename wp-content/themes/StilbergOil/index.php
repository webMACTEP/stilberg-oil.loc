<?php get_header(); ?>
  <?php
    $features = get_posts([
    'post_type' => 'features',
     'orderby'   => 'date',
     'order'     => 'DESC'
  ]);
  ?>
    <div class="intro">
        <div class="container">
            <div class="row">
            <div class="intro_content col-12">
<div class="intro_title">Экспресс-замена моторного масла <span style="color: #BCAA5E;">бесплатно</span> </div>
<div class="intro_subtitle">Узнайте стоимость масла и фильтра для вашего а/м</div>
<form action="" method="get" name="form-33">
<div class="call_price">

<input type="text" class="inputs focused" name="marka"  placeholder="Марка а/м">|
<input type="text" class="inputs focused" name="model"  placeholder="Модель">|
<input type="text" class="inputs focused" name="tell"  placeholder="Ваш телефон">
<div style="cursor: pointer" class="call_price_btn feedback" name="send" type="">Узнать</div>

</div>
</form>

<form action="" method="get" name="form-33">
<div class="call_price2">
    <input type="text" class="inputs focused" name="marka"  placeholder="Марка а/м">
</div>
<div class="call_price2">
    <input type="text" class="inputs focused" name="model"  placeholder="Модель">
</div>
<div class="call_price2">
    <input type="text" class="inputs focused" name="tell"  placeholder="Ваш телефон">
</div>
<div onclick="ym(68069773,'reachGoal','uznat'); return true;" style="cursor: pointer" class="call_price_btn2 feedback" name="send" type="">Узнать</div>

            </div>    
            </div>
        </div></form>
    </div>
    <section class="advantages">
<div class="container">
    <div class="row">
        <div class="advantages_cont col-12">
        <div class="advantag">
            <img src="../wp-content/themes/StilbergOil/assets/img/original.svg">
            <div class="advantages_item">
                100% оригинальная продукция
            </div>
        </div>
        <div class="advantag">
            <img src="../wp-content/themes/StilbergOil/assets/img/grafic.svg">
            <div class="advantages_item">
                Работаем без выходных с 8.00 до 21.00
            </div>
        </div>
        <div class="advantag">
            <img src="../wp-content/themes/StilbergOil/assets/img/express.svg">
            <div class="advantages_item">
                Эспресс замена  масла и фильтра от 10 минут
            </div>
        </div>

    </div>
    </div>
</div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                 <div class="title_cont col-12">
                    <div class="title">Услуги<div class="selector"></div></div>
                </div>  
                <div class="services_cont col-12">                 
                <a href="../замена-масла-в-двигателе/"><div class="service">
                <img src="../wp-content/themes/StilbergOil/assets/img/cogwheel.svg">
                <div class="s_title">Замена масла в двигателе</div>                
                </div></a>
                <a href="../замена-масла-в-мкпп/"><div class="service">
                    <img src="../wp-content/themes/StilbergOil/assets/img/mkpp.svg">
                    <div class="s_title">Замена масла в МКПП</div>                
                    </div></a>
                    <a href="../замена-масла-в-акпп/"><div class="service">
                        <img src="../wp-content/themes/StilbergOil/assets/img/akpp.svg">
                        <div class="s_title">Замена масла в АКПП</div>                
                        </div></a>
                        <a href="../замена-масляного-фильтра/"><div class="service">
                            <img src="../wp-content/themes/StilbergOil/assets/img/filter.svg">
                            <div class="s_title">Замена масляного фильтра</div>                
                            </div></a>                        
                </div> 
            </div>
        </div>
    </section>
    <section class="shop">
        <div class="container">
            <div class="row">
                <div class="title_cont col-12">
                    <div class="title">Каталог<div class="selector"></div></div>
                </div>
                <div class="shop_cont col-12">
                    <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-1", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-1", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-1", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-1", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-1">Купить</div>            
                    </div></form>  
                    <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-2", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-2", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-2", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-2", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-2">Купить</div>            
                    </div></form>  
                    <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-3", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-3", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-3", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-3", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-3">Купить</div>            
                    </div></form>  
                    <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-4", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-4", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-4", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-4", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-4">Купить</div>            
                    </div></form>  

                </div>  
                <div class="shop_cont col-12">
                <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-5", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-5", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-5", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-5", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-5">Купить</div>            
                    </div></form>  
                    <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-6", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-6", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-6", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-6", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-6">Купить</div>            
                    </div></form>  
                    <form action="" method="get" name="form-2">
                    <div class="product_card">
                        <div class="s_title"><?php the_field("oil-7", 2) ?></div>
                        <img class="oil_img" src="<?php the_field("img-7", 2) ?>">
                        <div class="discription">Цена в таре: <?php the_field("pcs-7", 2) ?> руб./л.</div> 
                        <div class="price"><?php the_field("price-7", 2) ?> руб./л</div>
                        <div style="cursor: pointer" class="buy_btn modal_btn-7">Купить</div>            
                    </div></form>  

                </div>  

            </div>
        </div>
    </section>
    <section class="registration">
        <div class="container">
            <div class="row">
                <div class="registration_cont col-12">
                    <div class="reg_form">
<div class="reg_title">Заказать экспресс-замену масла и фильтра</div>
<div class="reg_sub_title">Экспресс-замена масле в коробке или в двигателе вашего автомобиля от 10 до 15 минут. Быстро и качественно</div>
<form action="" method="get" name="form-2">
<input type="text" class="reg_tel focused" name="tell" placeholder="Ваш телефон">
<div onclick="ym(68069773,'reachGoal','zapis'); return true;"  style="cursor: pointer" class="feedback reg_btn"  name="send" type="">Заказать</div>
<div class="confid"><input type="checkbox" value="да" name="checkbox" checked="checked"> согласие на обработку персональных данных</div>
</form>
</div>
                </div>
            </div>
        </div>
    </section>
    <section class="certificat">
        <div class="container">
            <div class="row">
                <div class="title_cont col-12">
                    <div class="title">Сертификаты<div class="selector"></div></div>
                </div>
                <div class="cert_cont col-12">
                    <img class="cert_img" src="../wp-content/themes/StilbergOil/assets/img/cert1.png">
                    <img class="cert_img" src="../wp-content/themes/StilbergOil/assets/img/cert2.png">
                    <img class="cert_img" src="../wp-content/themes/StilbergOil/assets/img/cert3.png">
                    <img class="cert_img" src="../wp-content/themes/StilbergOil/assets/img/cert4.png">
                </div>

            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="title_cont col-12">
                    <div class="title">Отзывы<div class="selector"></div></div>
                </div>
                <div class="rev_cont col-12"> 
                <div class="cd-testimonials-wrapper cd-container">
	<ul class="cd-testimonials">
		<li>
			<div class="cd-author">
				<img src="img/avatar-1.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>Баринов Игорь</li>
				</ul>
            </div>
            <p>Очень рекомендую обслуживать автомобиль именно тут. Отличные мастера, быстрая и слаженная работа. Приезжал на замену экспресс замену масла бесплатно.</p>

		</li>

		<li>
			<div class="cd-author">
				<img src="img/avatar-2.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>Пугач Галина</li>
				</ul>
            </div>			
            <p>Приезжала на экспресс замену бесплатно, сделали буквально за 20 минут все. А пока ждала сидела в удобной комнате ожидания.</p>
		</li>

		<li>
			<div class="cd-author">
				<img src="img/avatar-3.jpg" alt="Author image">
				<ul class="cd-author-info">
					<li>Анастасия Финогенова</li>
				</ul>
            </div>			
            <p>Все очень понравилось. На моих глазах из бочки наливали масло. Теперь буду покупать в этом сервисе и до дома близко.</p>
		</li>
		
		
	</ul> <!-- cd-testimonials -->

	<a href="#0" class="cd-see-all">Читать все</a>
</div> <!-- cd-testimonials-wrapper -->

<div class="cd-testimonials-all">
	<div class="cd-testimonials-all-wrapper">
		<ul>
			<li class="cd-testimonials-item">
            <p>Очень рекомендую обслуживать автомобиль именно тут. Отличные мастера, быстрая и слаженная работа. Приезжал на замену экспресс замену масла бесплатно.</p>
				
				<div class="cd-author">
					<img src="img/avatar-1.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>Баринов Игорь</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
            <p>Приезжала на экспресс замену бесплатно, сделали буквально за 20 минут все. А пока ждала сидела в удобной комнате ожидания.</p>
				
				<div class="cd-author">
					<img src="img/avatar-2.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>Пугач Галина</li>
					</ul>
				</div> <!-- cd-author -->
			</li>

			<li class="cd-testimonials-item">
            <p>Все очень понравилось. На моих глазах из бочки наливали масло. Теперь буду покупать в этом сервисе и до дома близко.</p>
				
				<div class="cd-author">
					<img src="img/avatar-3.jpg" alt="Author image">
					<ul class="cd-author-info">
						<li>Анастасия Финогенова</li>
					</ul>
				</div> <!-- cd-author -->
			</li>


		</ul>
	</div>	<!-- cd-testimonials-all-wrapper -->

	<a href="#0" class="close-btn">Close</a>
</div> <!-- cd-testimonials-all -->
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->

                </div>
            </div>
        </div>

    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <div class="row">
                <div class="title_cont col-12">
                    <div class="title">Контакты<div class="selector"></div></div>
                </div>
                <div class="cont_con col-12">
                    Москва, улица Свободы, дом 35, строение 9
                    <a href="tel:+7 (495) 255-52-94"><div class="cont_tel">+7 (495) 255-52-94</div></a>
                </div>

            </div>
        </div>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5f285e12b6b3f9eb3de4031aca35dc4335cc85c5a9aa4bc6549e789ee732165f&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </section>

<?php get_footer(); ?>