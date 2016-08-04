<?php $this->title='Организации';?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<h2>Поиск: <?=$q?></h2>
				<?php if(!empty($organization)):?>
						

				<?php else:?>
					<h2>Ничего не найдено</h2>
					<?php endif;?>
			</div>
		</div>
	</div>
</section>