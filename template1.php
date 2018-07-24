<?php if(!defined('IN_GS')){ die('you cannot load this page directly :/'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Octava landing for GetSimple CMS
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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Подключение JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!-- Подключение bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- Подключение css файлов -->
	<link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet">

	<!-- Подключение шрифтов из Google Fonts https://fonts.google.com/ -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans:400,600,700,800" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Подключение js файлов -->
	<script src="<?php get_theme_url(); ?>/js/script.js" type='text/javascript'></script>

	<?php get_header();?>
</head>
<body>
	<div class="container-fluid hello-screen no-gutters">
		<div class="row" "style=margin:-15px;">
			<div class="col-lg no-gutters">
				<navbar>
					<ul>
						<li><a href="#offers">Услуги</a></li>
						<li><a href="#rielt">О риэлеторе</a></li>
						<li><a href="#objects">Объекты</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</navbar>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-0  hello-screen__main">
					<h2>Специалист по недвижимости в&nbsp;Омске Светлана Викторовна Ласкина</h2>
					<p>Оформление недвижимости. Сопровождение сделок. Помощь в&nbsp;оформлении ипотеки, консультационные услуги
					</p>
					<a href="#contact"><button class="button">Записаться на консультацию</button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container offers">
		<a href="" name="offers"></a>
		<h1 name="offers">Услуги</h1>
		<div class="row">
			<div class="col-lg-9 col-md-12 offers-row">
				<div class="offer offer__first-block mobile-margin">
					<div class="offer__header">
						Подготовка комплекта документов
					</div>
					<div class="offer__main offer__main_big">Включает несколько направлений: подготовка право устанавливающих документов, подготовка технической документации; сбор справок об отсутствии задолженностей по коммунальным платежам и&nbsp;о&nbsp;регистрации лиц на&nbsp;жилой площади; и&nbsp;другие необходимые документы (справки, удостоверения, дубликаты)
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
			<div class="col-lg-3 col-xs-12">
				<div class="offer__note mobile-margin">
					<div class="offer__paragraph">
						Услуги по&nbsp;желанию клиента могут быть объединены между собой
					</div>
					<div class="offer__divider"></div>
					<div class="offer__paragraph">
						Конечная стомость услуг зависит от&nbsp;сложности ситуации и&nbsp;обсуждается в&nbsp;момент заключения договора
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="offer offer__second-block mobile-margin">
					<div class="offer__header">
						Сопровождение сделки купли-продажи
					</div>
					<div class="offer__main offer__main_small">
						<ul class='offer__list_no-text'>
							<li>по продаже объекта недвижимости;</li>
							<li>по приобретению объекта недвижимости;</li>
							<li>с поиском объекта недвижимости.</li>
						</ul>
						<div class="offer__price-label offer__price-label_small">стоимость: <br>
							<span>от 15 000 РУБ </span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12">
				<div class="offer offer__third-block">
					<div class="offer__header">
						Консультационные услуги
					</div>
					<div class="offer__main offer__main_small">
						<ul class='offer__list_no-text'>
							<li>по комплектности документов для совершения сделки;</li>
							<li>по заключению договора, задатка, аванса, предварительного договора и пр;</li>
							<li>по возможностям ипотечного кредитования.</li>
						</ul>
						<div class="offer__price-label offer__price-label_small">стоимость: <br>
							<span>от 750 РУБ </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-image">
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
						<strong>Ласкина Светлана Викторовна</strong><br> Я работаю на рынке недвижимости более десяти лет и&nbsp;могу помочь своим клиентам в решении их проблем, связанных с недвижимостью, как в вопросах оформления комплекта документов, так и&nbsp;сопровождения сделки купли–продажи, включая консультационные услуги.
					</div>
				</div>
			</div>
			<div class="row about">
				<div class="col-lg-8 col-md offset-lg-2">
					<div class="g-note about__note">
						Рынок недвижимости существует уже несколько десятилетий. Он имеет свою историю, свои правила и требования. Только взаимодействуя с ним постоянно, можно эффективно ориентироваться в обстановке на рынке недвижимости
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container objects">
		<a href="" name="objects"></a>
		<h1>Объекты</h1>
		<div class="row ">
			<div class="col-lg-4 col-md">
				<div class="object">
					<img src="/theme/Octava/images/hero-image.png" alt="">
					<div class="object__header">ул. Краснознаменная дом 26 к.2</div>
					<div class="object__text">1-комн.,34 кв.м, 4/9 панель</div>
					<div class="object__price-label">1 230 тыс. руб</div>
				</div>
			</div>
			<div class="col-lg-4 col-md">
				<div class="object">
					<img src="/theme/Octava/images/hero-image.png" alt="">
					<div class="object__header">ул. Краснознаменная дом 26 к.2</div>
					<div class="object__text">1-комн.,34 кв.м, 4/9 панель. long long text </div>
					<div class="object__price-label">1 230 тыс. руб</div>
				</div>
			</div>
			<div class="col-lg-4 col-md">
				<div class="object">
					<img src="/theme/Octava/images/hero-image.png" alt="">
					<div class="object__header">ул. Краснознаменная дом 26 к.2</div>
					<div class="object__text">1-комн.,34 кв.м, 4/9 панель. long long text </div>
					<div class="object__price-label">1 230 тыс. руб</div>
				</div>
			</div>

		</div>
	</div>
	<div class="reviews-image">
		<div class="container reviews">
			<h1>Отзывы</h1>
			<div class="row">
				<div class="col-lg-6 col-md">
					<div class="review">
						<div class="review__header">
							Владислав K.
						</div>
						<div class="review__info">
							2016 год. Продажа 2-комнатной квартиры на Заозерной
						</div>
						<div class="review_text">
							«Cветлана Викторовна помогала с продажей квартиры и наследством в 2016 году. Было проделано много работы по подготовке документов. Все было сделано профессионально, на все вопросы мы получали развернутые ответы. Спасибо ей за ответственный подход к делу, полученными результатами довольны»
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md">
					<div class="review">
						<div class="review__header">
							Анна Л.
						</div>
						<div class="review__info">
							Апрель 2017 год. Подготовка документов для продажи частного дома
						</div>
						<div class="review_text">
							«Cветлана Викторовна помогала с продажей квартиры и наследством в 2016 году. Было проделано много работы по подготовке документов.»
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container contact">
		<a href="" name="contact"></a>
		<h1>Контакты</h1>
		<div class="row ">
			<div class="col-lg-6 col-md">
				<div class="g-note contact__info">
					<ul>
						<li class="contact__phone">8 (905) 922-98-62</li>
						<li class="contact__address"> г. Омск, ул. Тарская 13 "А", каб. 703</li>
						<li class="contact__email">lanalaskina@yandex.ru</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md">
				<div class=contact__note>
					Задать свой вопрос вы можете как по телефону, так и&nbsp;в&nbsp;офисе агенства по&nbsp;предварительной записи. Я&nbsp;проконсультирую и&nbsp;отвечу на&nbsp;интересующие вопросы. Мы обговорим список требуемых услуг и&nbsp;заключим договор на&nbsp;их&nbsp;оказание. Звоните!
				</div>
			</div>
		</div>
	</div>
	<div class="container map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A734127cf54acc7b5730ac9018ee556b9143891d7073246c30c84b4aa322a026e&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>

	<!--<div class="container footer">
		<footer>
			<div class="row ">
				<div class="col">footer</div>
			</div>
		</footer>
	</div>-->
	<?php get_footer(); ?>
</body>

</html>
