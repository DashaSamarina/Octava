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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
	<div class="container mb-6">
		<a href="" name="offers"></a>
		<h1 name="offers">Услуги</h1>
		<div class="row">
			<div class="col-lg-9 col-12 mb-5">
				<div class="offer offer__first-image">
					<div class="offer__header">
						Подготовка комплекта документов
					</div>
					<div class="offer__main">
						<div class="offer__paragraph">
							Включает несколько направлений: подготовка право устанавливающих документов, подготовка технической документации; сбор справок об отсутствии задолженностей по коммунальным платежам и&nbsp;о&nbsp;регистрации лиц на&nbsp;жилой площади; и&nbsp;другие необходимые документы (справки, удостоверения, дубликаты)
						</div>
						<ul class='offer__list d-lg-inline-block'>
							<li>на квартиру, комнату, долю;</li>
							<li>на дом, дачу, землю;</li>
							<li>на гаражи.</li>
						</ul>
						<div class="offer__price-label d-lg-inline-block float-lg-right">стоимость: <br>
							<span>от 3 500 РУБ </span>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-12 mb-5">
				<div class="note d-flex align-items-center">
					<div class="note__paragraph ">
						Услуги по&nbsp;желанию клиента могут быть объединены между собой
						<div class="note__divider"></div>
						Конечная стомость услуг зависит от&nbsp;сложности ситуации и&nbsp;обсуждается в&nbsp;момент заключения договора
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-5">
				<div class="offer offer__second-image">
					<div class="offer__header">
						Сопровождение сделки купли-продажи
					</div>
					<div class="offer__main">
						<ul class="offer__list">
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
				<div class="offer offer__third-image">
					<div class="offer__header">
						Консультационные услуги
					</div>
					<div class="offer__main offer__main_small">
						<ul class='offer__list'>
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
		<div class="container mb-6">
			<a href="" name="rielt"></a>
			<h1>О риэлторе</h1>
			<div class="row">
				<div class="col-12 offset-md-2 col-lg-4 offset-lg-0 mb-4">
					<img src="<?php get_theme_url(); ?>/images/photo.png" alt="фото">
				</div>
				<div class="col-12 col-lg-6 offset-lg-1 mb-4">
					<div class="about__description">
						<strong>Ласкина Светлана Викторовна</strong><br> Я работаю на рынке недвижимости более десяти лет и&nbsp;могу помочь своим клиентам в решении их проблем, связанных с недвижимостью, как в вопросах оформления комплекта документов, так и&nbsp;сопровождения сделки купли–продажи, включая консультационные услуги.
					</div>
				</div>
			</div>
			<div class="row about">
				<div class="col-12 col-lg-8 offset-lg-2">
					<div class="g-note about__note">
						Рынок недвижимости существует уже несколько десятилетий. Он имеет свою историю, свои правила и требования. Только взаимодействуя с ним постоянно, можно эффективно ориентироваться в обстановке на рынке недвижимости
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
</body>

</html>
