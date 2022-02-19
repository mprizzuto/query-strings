<?php 
//an easier to read var_dump()
function formatInput($input) {
  echo "<pre>";
  var_dump($input);
  echo "<pre>";
}

// variables
$page = $_GET["page"] ?? null;
// $coffeeDetail = $_GET['detail'] ?? null;

// message for home.php
// $welcomeMessage = "";

function renderPage($page) {
  switch($page) {
    case "coffee":
      include "./pages/coffee.php";
      break; 

    case "coffee-detail":
      include "./pages/coffee-detail.php";
      break;

    default:
      include "./pages/home.php";
  }
}

function renderDetailPage() {
  require "./data/coffee-details.php";

  // $coffeeDetail = $_GET['detail'] ?? null;
  $coffeeDetail = $_GET['detail'] ?? null;
  switch($coffeeDetail) {
    case "golden":
    echo renderCoffeeDetail($goldenBrew);
    // echo "golden";
    break;

    default:
    echo "coffee detail not found";
  }
}

function generate404() {
  // $welcomeMessage = "!";
  $validQueryStrings = ["coffee", "coffee-detail"];

  if(!in_array($_GET["page"] ?? null, $validQueryStrings)) {
    $welcomeMessage = "error!";
    require_once "./pages/404.php";
    // echo "true";
    return true;
  } else {
    // echo "false";
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

<?php
  function renderCoffeeDetail(iterable $coffee) {
    $result = "";
  foreach($coffee as $key => $value) { 
    $result .= <<<heredoc
    <li>{$key} {$value}</li>
    
    heredoc;
    // return $result;
  }
  return $result;
 }

?>


<?php function renderCoffee(iterable $coffees) { ?>
  <ul class="coffee-list">
  <?php foreach($coffees as $coffee):?>
    <li class="brand">brand:<?=$coffee['brand']?></li>
    <li>
      <picture>
        <img src="<?=$coffee['photo']?>" alt="<?=$coffee['alt']?>">
      </picture>
    </li>

    <li>
      <strong>price: $<?=$coffee['price']?></strong>
    </li>

    <li>
      <a href="<?=$coffee['link']?>"><?=$coffee['teaser']?></a>
    </li>
  <?php endforeach; ?>
  </ul>
<?php } ?>