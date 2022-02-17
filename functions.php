<?php 
//an easier to read var_dump()
function formatInput($input) {
	echo "<pre>";
	var_dump($input);
	echo "<pre>";
}

// variables
$page = $_GET["page"] ?? null;

// message for home.php
// $welcomeMessage = "";

function renderPage($page) {
	switch($page) {
		case "coffee":
			include "./pages/coffee.php";
		  break; 
		default:
		  include "./pages/home.php";
	}
}

function generate404() {
	// $welcomeMessage = "!";
	$validQueryStrings = ["coffee", "coffee-details"];

	if(!in_array($_GET["page"] ?? null, $validQueryStrings)) {
		$welcomeMessage = "error!";
		require_once "./pages/404.php";
		echo "true";
		return true;
	} else {
		echo "false";
		return false;
	}
}


?>

<?php function generateMeta(string $title, string $description) {?>
	 <head>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    
    <meta charset="utf-8">

    <title><?=$title?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?=$description?>">
    
  </head>
<?php } ?>