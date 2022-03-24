<!DOCTYPE html>
<html lang="ru">
	<?php 
		$webSiteTitle = 'Lesson PHP | Registrate My Site';
		require 'blocks/headInst.php'; 
	?>
	<body>
		<?php require 'blocks/header.php'; ?>

		<main class="container mt-5">
			<div class="row pt-5">
				<div class="col-md-8">
					<h2>Форма регистрации</h2>
					<form action="reg/rega.php" method="POST">

						<label for="userName">Ваше имя:</label>
						<input type="text" class="userName form-control mb-3" name="userName" id="userName">

						<label for="email">Ваш рабочий Email:</label>
						<input type="email" class="email form-control mb-3" name="email" id="email">

						<label for="login">Придумайте себе Логин:</label>
						<input type="text" class="login form-control mb-3" name="login" id="login">

						<label for="password">Придумайте себе пароль:</label>
						<input type="password" class="password form-control mb-5" name="password" id="password">

						<button type="submit" class="btn btn-success">Зарегистрироваться</button>
					</form>
				</div>
				<?php require 'blocks/asside.php'; ?>
			</div>
		</main>

		<?php require 'blocks/footer.php'; ?>
	</body>
</html>
