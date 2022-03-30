<!DOCTYPE html>
<html lang="ru">
	<?php 
		$webSiteTitle = 'Lesson PHP | My Test site';
		require 'blocks/headInst.php'; 
	?>
	<body>
	<?php require 'blocks/bd.php'; ?>
		<?php require 'blocks/header.php'; ?>

		<main class="container mt-5">
			<div class="row pt-5">
				<div class="col-md-8">
					Основная часть сайта
				</div>
				<?php require 'blocks/asside.php'; ?>
			</div>
		</main>

		<?php require 'blocks/footer.php'; ?>
	</body>
</html>
