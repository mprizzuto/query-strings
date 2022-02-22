<?php 
// require_once "./functions.php";
$company = $_GET["company"] ?? null;
$roastLevel = $_GET["roast-level"] ?? null;
$website = $_GET["website"] ?? null;

?>

<h1>add a bean</h1>

<form method="POST" action="?page=bean-results">
	<label for="company">company name
		<input type="text" name="company" id="company" value="<?=$company?>">
	</label>

	<label for="roast-level">roast level
		<input type="range" name="roast-level" id="roast-level" min="20" max="90" value="<?=$roastLevel?>">
	</label>

	<label for="website">website
		<input type="text" name="website" id="website" value="<?=$website?>">
	</label>


	<button action="submit">submit</button>
</form>