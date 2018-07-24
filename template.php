<?php if(!defined('IN_GS')){ die('you cannot load this page directly :/'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Octava landing for GetSimple CMS
*
*****************************************************/

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
		<?php get_page_clean_title(); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Подключение JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
	<div class="first-bg">
		<div class="container-fluid navbar">
			<div class="container">
				<div class="row">
					<div class="col-lg">
						<ul class="navbar__menu">
							<li class="navbar__list-item"><a href="#offer" class="navbar__link ">Услуги</a></li>
							<li class="navbar__list-item navbar__list-item_hiding"><a href="#about" class="navbar__link">О риэлторе</a></li>
							<li class="navbar__list-item navbar__list-item_hiding"><a href="#objects" class="navbar__link">Объекты</a></li>
							<li class="navbar__list-item"><a href="#contact" class="navbar__link">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-10 col-lg-4 first-bg__main">
					<div class="first-bg__header">
						Специалист по недвижимости в&nbsp;Омске Светлана Викторовна Ласкина
					</div>
					<div class="first-bg__info">
						Оформление недвижимости. Сопровождение сделок. Помощь в&nbsp;оформлении ипотеки, консультационные услуги
					</div>

					<div class="first-bg__button"><a href="#contact" class="first-bg__button-link">Записаться на консультацию</a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container offer">
		<a href="" name="offer"></a>
		<h1 name="offer">Услуги</h1>
		<div class="row">
			<div class="col-lg-9 col-12">
				<div class="offer__block offer__block_margin offer__first-image">
					<div class="offer__header">
						Подготовка комплекта документов
					</div>
					<div class="offer__content">
						<div class="offer__paragraph">
							Включает несколько направлений: подготовка право устанавливающих документов, подготовка технической документации; сбор справок об отсутствии задолженностей по коммунальным платежам и&nbsp;о&nbsp;регистрации лиц на&nbsp;жилой площади; и&nbsp;другие необходимые документы (справки, удостоверения, дубликаты)
						</div>
						<ul class='offer__list'>
							<li class='offer__list-item'>на квартиру, комнату, долю;</li>
							<li class='offer__list-item'>на дом, дачу, землю;</li>
							<li class='offer__list-item'>на гаражи.</li>
						</ul>
						<div class="offer__price-label d-lg-inline-block float-lg-right">стоимость: <br>
							<span>от 3 500 РУБ </span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-12">
				<div class="offer__note offer__block offer__block_margin offer__block_small">
					Услуги по&nbsp;желанию клиента могут быть объединены между собой
					<div class="note__divider"></div>
					Конечная стомость услуг зависит от&nbsp;сложности ситуации и&nbsp;обсуждается в&nbsp;момент заключения договора
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="offer__block offer__second-image">
					<div class="offer__header">
						Сопровождение сделки купли-продажи
					</div>
					<div class="offer__content">
						<ul class="offer__list">
							<li class='offer__list-item'>по продаже объекта недвижимости;</li>
							<li class='offer__list-item'>по приобретению объекта недвижимости;</li>
							<li class='offer__list-item'>с поиском объекта недвижимости.</li>
						</ul>
						<div class="offer__price-label offer__price-label_small">стоимость: <br>
							<span>от 15 000 РУБ </span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12">
				<div class="offer__block offer__third-image">
					<div class="offer__header">
						Консультационные услуги
					</div>
					<div class="offer__content">
						<ul class='offer__list'>
							<li class='offer__list-item'>по комплектности документов для совершения сделки;</li>
							<li class='offer__list-item'>по заключению договора, задатка, аванса, предварительного договора и пр;</li>
							<li class='offer__list-item'>по возможностям ипотечного кредитования.</li>
						</ul>
						<div class="offer__price-label offer__price-label_small">стоимость: <br>
							<span>от 750 РУБ </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-bg">
		<div class="container about">
			<a href="" name="about"></a>
			<h1>О риэлторе</h1>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="about__image">
						<img src="<?php get_theme_url(); ?>/images/photo.png" alt="фото">
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-7 offset-lg-1">
					<div class="about__description">
						<strong>Ласкина Светлана Викторовна</strong><br> Я работаю на рынке недвижимости более десяти лет и&nbsp;могу помочь своим клиентам в решении их проблем, связанных с недвижимостью, как в вопросах оформления комплекта документов, так и&nbsp;сопровождения сделки купли–продажи, включая консультационные услуги.
					</div>
				</div>
				<div class="col-12 col-lg-8 offset-lg-2">
					<div class="about__note">
						<div class="about__paragraph">
							Рынок недвижимости существует уже несколько десятилетий. Он имеет свою историю, свои правила и требования. Только взаимодействуя с ним постоянно, можно эффективно ориентироваться в обстановке на рынке недвижимости
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="container objects">
		<a href="" name="objects"></a>
		<h1>Объекты</h1>
		<div class="row ">
			<div class="col-12 col-lg-6">
				<div class="object">
					<img src="/theme/Octava/images/object_1.jpg" alt="">
					<div class="object__header">ул. Краснознаменная дом 26 к.2</div>
					<div class="object__text">1-комн.,34 кв.м, 4/9 панель</div>
					<div class="object__price-label">1 230 тыс. руб</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="object">
					<img src="/theme/Octava/images/object_2.jpg" alt="">
					<div class="object__header">ул. 2-я Путевая</div>
					<div class="object__text">4-х комнатный частный дом, 78 кв.м, 5 соток земли, материал: рубленный </div>
					<div class="object__price-label">1825 тыс. руб.</div>
				</div>
			</div>

		</div>
	</div>
	<div class="reviews-bg">
		<div class="container reviews">
			<h1>Отзывы</h1>
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="review review_margin">
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
				<div class="col-12 col-lg-6 ">
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
			<div class="col-12 col-lg-6">
				<div class="contact__info contact__info_margin">
					<ul class="contact__list">
						<li class="contact__list-item contact__list-item_phone">8 (905) 922-98-62</li>
						<li class="contact__list-item contact__list-item_address"> г. Омск, ул. Тарская 13 "А", каб.703</li>
						<li class="contact__list-item contact__list-item_email">lanalaskina@yandex.ru</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="contact__note contact__note_margin">
					Задать свой вопрос вы можете как по телефону, так и&nbsp;в&nbsp;офисе агенства по&nbsp;предварительной записи. Я&nbsp;проконсультирую и&nbsp;отвечу на&nbsp;интересующие вопросы. Мы обговорим список требуемых услуг и&nbsp;заключим договор на&nbsp;их&nbsp;оказание. Звоните!
				</div>
			</div>
		</div>
	</div>
	<div class="container map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A734127cf54acc7b5730ac9018ee556b9143891d7073246c30c84b4aa322a026e&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>
	<?php get_footer(); ?>
</body>

</html>
