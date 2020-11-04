<?php
/*
 * The template for displaying all pages
 */

get_header();
$sp_obj = New SpClass();

while ( have_posts() ) : the_post(); ?>


<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">	
				<h1><?php $sp_obj->get_title();?></h1>
				<?php the_content();?>		
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
<div onclick="ym(68069773,'reachGoal','zapis'); return true;"  style="cursor: pointer" class="reg_btn feedback"  name="send" type="">Заказать</div>
<div class="confid"><input type="checkbox" value="да" name="checkbox" checked="checked"> согласие на обработку персональных данных</div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; 

get_footer();