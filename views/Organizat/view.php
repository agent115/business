<?php 
use yii\helpers\Html;
$this->title= 'организация';
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-md-6 col-md-offset-3">

			
				<h3><?=$organizat->name?></h3>
				<p>Телефон:<?= $organizat->phone?></p>
						<p>Телефон:<?= $organizat->phone_2?></p>
						<p>Адрес:<?= $organizat->adress?></p>
						<p>График:<?= $organizat->grafic?></p>
						<h4>Ключи:<?= $organizat->keywords?></h4>

						<div><?=$organizat->mars?></div>

			</div>
		</div>
	</div>
</section>
