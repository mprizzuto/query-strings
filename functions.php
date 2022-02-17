<?php 
//an easier to read var_dump()
function formatInput($input) {
	echo "<pre>";
	var_dump($input);
	echo "<pre>";
}

// variables
$page = $_GET["page"] ?? null;


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