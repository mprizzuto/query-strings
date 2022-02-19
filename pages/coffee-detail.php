
<h1>coffee details</h1>

<?php 
require "./data/coffee-details.php";
  

?>

<?php if (renderDetailPage() === "golden"): ?>
	<?=renderDetailPage()?>
<?php endif; ?>
