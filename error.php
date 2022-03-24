<!DOCTYPE html>
<html lang="ru">
	<?php 
		$webSiteTitle = 'Lesson PHP | Error 404 site';
		require 'blocks/headInst.php'; 
	?>
	<body>
		<?php require 'blocks/header.php'; ?>
		<main class="container mt-5">
			<div class="row pt-5">
				<div class="col-md-8">
					<?php echo '<h1><strong>Ошибка 404</strong><br>- Страница НЕ найдена <br>- перейдите <a href="/">на  Главную страницу сайта</a></h1>'; ?>
				</div>
				<?php require 'blocks/asside.php'; ?>
			</div>
		</main>
		
		<?php require 'blocks/footer.php'; ?>
	</body>
</html>
