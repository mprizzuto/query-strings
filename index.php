<?php 
require "./components/header.php";
var_dump($_GET);
?>


<main class="site-main">
	<section class="<?=$page?>">
		<inner-column>
			<?php 
			renderPage($page);

			if (isset($page)) {
				generate404();
			}
			?>
		</inner-column>
	</section>
</main>

<?php 
require "./components/footer.php";
?>