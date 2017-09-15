<?php
$suits = array ("clubs", "diamonds", "hearts", "spades");
$faces = array (
  "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
  "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13);
$deck = array();

foreach($suits as $suit){
foreach($faces as $face => $value){
  $deck["$face of $suit"] = $value;
  }
}
function createRandomDeck($deck) {
  shuffle($deck);
  return $deck;
}
$shuffledDeck = createRandomDeck($deck);
print_r($shuffledDeck);

?>
