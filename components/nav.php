<?php require "./data/nav-data.php";?>

<nav class="site-menu">
	<?php foreach($navItems as $nav): ?>
		<?php foreach($nav as $key => $value): ?>
	    <a href="<?=$value?>"><?=$key?></a>
	   
		<?php endforeach; ?>
	<?php endforeach; ?>
</nav>