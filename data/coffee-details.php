<?php 
// old data struxture.. TODO. transform 1 to true and 0 to false in the foreach loop
// $coffeeDetails = [
//   $goldenBrew = [
//   	"brand" => "golden brew",
// 	  "quantity" => "40 oz",
// 	  "pre-ground" => false,
// 	  "sold-out" => true,
// 	  "description" => "this is a premium organic coffee from the california gold mines. The miner's actually drank this coffee while prospecting for god during the california gold rush",
//   ],
//   $blackheart = [
//   	"brand" => "blackheart coffee",
// 	  "quantity" => "20 oz",
// 	  "pre-ground" => true,
// 	  "sold-out" => false,
// 	  "description" => "this coffee will give make your heart skip a beat, it is that strong",
//   ],

//   $ticBrew = [
// 		"brand" => "tic brew",
// 	  "quantity" => "40 oz",
// 	  "pre-ground" => true,
// 	  "sold-out" => false,
// 	  "description" => "all proceeds from this coffee benefit Tourette's Syndrome research",
// 	],
// ];

$coffeeDetails = [
  $goldenBrew = [
  	"brand" => "golden brew",
	  "quantity" => "40 oz",
	  "pre-ground" => !true ? "false" : "true",
	  "sold-out" => !true ? "false" : "true",
	  "description" => "this is a premium organic coffee from the california gold mines. The miner's actually drank this coffee while prospecting for god during the california gold rush",
  ],
  $blackheart = [
  	"brand" => "blackheart coffee",
	  "quantity" => "20 oz",
	  "pre-ground" => !true ? "false" : "true",
	  "sold-out" => !true ? "false" : "true",
	  "description" => "this coffee will give make your heart skip a beat, it is that strong",
  ],

  $ticBrew = [
		"brand" => "tic brew",
	  "quantity" => "40 oz",
	  "pre-ground" => true ? "true" : "false",
	  "sold-out" => false,
	  "description" => "all proceeds from this coffee benefit Tourette's Syndrome research",
	],
];

/*
$variable = [
	"brand" => "",
  "quantity" => "",
  "pre-ground" => bool,
  "sold-out" => bool,
  "description" => "",
],
*/ 
?>