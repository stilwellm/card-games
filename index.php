<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div class="container">
  <div class="left">&nbsp;</div>
  <div class="centre">

<?php

//Set up suits and faces

$suits = array ("hearts", "spades", "clubs", "diamonds");
$faces = array ("2", "3", "4", "5", "6", "7", "8", "9", "10", "ace", "jack", "queen", "king");


//Build a deck array with suits and faces
$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face){
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

shuffle ($deck);

//Pull cards from the deck and create a sting so that we can display the corresponding card image on screen
for ($i=0; $i<3; $i++){
    $card = array_shift($deck);
    $cardString = $card["face"] . "_of_" . $card["suit"] . ".png";
    echo "<img class=\"card\" height=\"300px\" src=\"images\\" . $cardString . "\">";
}

?>
  </div>
  <div class="right">&nbsp;</div>
</div>

<div class="left">&nbsp;</div>
<div class="centre" id="bottom"><input class="deal" type="button" value="Deal Again" onClick="window.location.reload()"></div>
<div class="right">&nbsp;</div>
</body>
</html>