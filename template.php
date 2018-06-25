<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Cafedra theme for GetSimple CMS
*
*****************************************************/

# Get this theme's settings based on what was entered within its plugin. 
# This function is in functions.php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
		<?php get_page_clean_title(); ?> &mdash;
		<?php get_site_name(); ?>
	</title>
	<!-- Подключение JQuery -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

	<!-- Подключение css файлов -->
	<link href="<?php get_theme_url(); ?>/css/reset.min.css" rel="stylesheet">

	<!-- Подключение bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet">

	<!-- Подключение шрифтов из Google Fonts https://fonts.google.com/ -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans:400,600,700,800" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php get_header();?>
</head>

<body>
	<div class="container">
		<header>
			Это хедер сайта
		</header>
		<navbar>
			<ul>
				<li><a href="#offers">Услуги</a></li>
				<li><a href="#rielt">О риэлеторе</a></li>
				<li><a href="#objects">Объекты</a></li>
				<li><a href="#contact">Контакты</a></li>
			</ul>
		</navbar>
	</div>
	<div class="hello-screen">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-sm">
					<div class="hello-screen__main">
						<h2>Специалист по недвижимости В Омске Светлана Викторовна Ласкина</h2>
						<p>Оформление недвижимости. Сопровождение сделок. Помощь в оформлении ипотеки, консультационные услуги
						</p>
						<button class='btn'><a href="#contact">Записаться на консультацию</a></button>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container offers">
		<a href="" name="offers"></a>
		<h1 name="offers">Услуги</h1>
		<div class="row offers-row">
			<div class="col-lg-9 col-md">
				<div class="offer offer__first-block">
					<div class="offer__header">
						Подготовка комплекта документов
					</div>
					<div class="offer__main offer__main_big">Включает несколько направлений: подготовка право устанавливающих документов, подготовка технической документации; сбор справок о регистрации лиц на жилой площади; об отсутствии задолженностей по коммунальным платежам; и другие необходимые документы (справки, удостоверения, дубликаты).
						<ul class='offer__list_with-text'>
							<li>на квартиру, комнату, долю;</li>
							<li>на дом, дачу, землю;</li>
							<li>на гаражи.</li>
						</ul>
						<div class="offer__price-label offer__price-label_big">стоимость: <br>
							<span>от 3 500 РУБ </span>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3 g-note">
				<div class="offer__note">
					<div class="offer__paragraph">
						Услуги по желанию клиента могут быть объединены между собой
					</div>
					<div class="offer__paragraph">
						Конечная стомость услуг зависит от сложности ситуации и обсуждается в момент заключения договора
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-lg col-md">
				<div class="offer offer__second-block">
					<div class="offer__header">
						Сопровождение сделки купли-продажи
					</div>
					<div class="offer__main  offer__main_small">
						<ul class='offer__list_no-text'>
							<li>по продаже объекта недвижимости;</li>
							<li>по приобретению объекта недвижимости;</li>
							<li>с поиском объекта недвижимости (справки, удостоверения, дубликаты).</li>
						</ul>
						<div class="offer__price-label offer__price-label_small">стоимость: <br>
							<span>от 15 500 РУБ </span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg col-md">
				<div class="offer offer__third-block">
					<div class="offer__header">
						Консультационные услуги
					</div>
					<div class="offer__main offer__main_small">
						<ul class='offer__list_no-text'>
							<li>по комплектности документов для совершения сделки;</li>
							<li>по вопросам ценообразования;</li>
							<li>по заключению договора, задатка, аванса, предварительного договора и пр;</li>
							<li>по возможностям ипотечного кредитования.</li>
						</ul>
						<div class="offer__price-label offer__price-label_small">стоимость: <br>
							<span>от 850 РУБ </span>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<div class="container about">
		<a href="" name="rielt"></a>
		<h1>О риэлторе</h1>
		<div class="row ">
			<div class="col-lg-4 col-md">
				<div class="about__photo">
					<img src="<?php get_theme_url(); ?>/images/photo.png" alt="фото">
				</div>
			</div>
			<div class="col-lg-6 offset-lg-1 col-md">
				<div class="about__description">
					Ласкина Светлана Викторовна<br> Я работаю на рынке недвижимости более десяти лет и могу помочь своим клиентам в решении их проблем , связанных с недвижимостью, как в вопросах оформления комплекта документов, так и сопровождения сделки купли –продажи, включая консультационные услуги.
				</div>
			</div>
		</div>
		<div class="row about">
			<div class="col-lg-8 col-md offset-lg-2">
				<div class="g-note about__note">
					Рынок недвижимости существует уже несколько десятилетий. Он имеет свою историю , свои правила и свои требования. Только взаимодействуя с ним постоянно, можно эффективно ориентироваться в обстановке на рынке недвижимости
				</div>
			</div>
		</div>
		




	</div>
	<div class="container objects">
		<a href="" name="objects"></a>
		<h1>Объекты</h1>
		<div class="row ">
			<div class="col-lg-4 col-md">
				<div class="objects__card">hello</div>
			</div>
			<div class="col-lg-4 col-md">
				<div class="objects__card">hello</div>
			</div>
			<div class="col-lg-4 col-md">
				<div class="objects__card">hello</div>
			</div>
		</div>
		<h1>Отзывы</h1>
		<div class="row reviews">
			<div class="col-lg-6 col-md">
				<div class="reviews__card">
					отзыв 1
				</div>
			</div>
			<div class="col-lg-6 col-md">
				<div class="reviews__card">
					отзыв 2
				</div>
			</div>
		</div>
	</div>
	<div class="container contact">
		<a href="" name="contact"></a>
		<h1>Контакты</h1>
		<div class="row ">
			<div class="col-lg-6 col-md">
				<div class="contact__note g-note">
					контакты
				</div>
			</div>
			<div class="col-lg-6 col-md">
				<div class=contact__note>
					примечание
				</div>
			</div>
		</div>
	</div>
	<div class="container footer">
		<footer>
			<div class="row ">
				<div class="col">footer</div>
			</div>
		</footer>
	</div>
	<?php get_footer(); ?>
</body>

</html>
