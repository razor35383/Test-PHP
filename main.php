<?php 
		if($_COOKIE['user']==''):?>

			<p>Вы не авторизированы</p>
			<a href="/">Авторизироваться</a>
			<?php exit(); ?>
		<?php endif; ?>

<p>Hello world</p>