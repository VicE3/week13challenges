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
echo "<pre>";
print_r($deck);
echo "</pre>";

// echo "<pre>";
// print_r(array_keys($deck));
// echo "</pre>";



//turn associative array into a numeric array for the shuffled deck
$deckWithoutInitValues = (array_keys($deck));



function createRandomDeck($deckWithoutInitValues) {
  //this shuffles the deck
  shuffle($deckWithoutInitValues);
  return $deckWithoutInitValues;
  //make a for loop that limits the number of cards FOR THE USER
  //IN THAT LOOP ARRAY_SHIFT FROM THE DECK AND ARRAY_PUSH THOSE CARDS INTO USER CONTAINER

}
$shuffledDeck = createRandomDeck($deckWithoutInitValues);

echo "<pre>";
print_r($shuffledDeck);
echo "<pre>";

$cardsPerUser = 5;

function dealCards($shuffledDeck, $cardsPerUser) {
$shuffledDeckLength = count($shuffledDeck);

  for($i = 0; $i < $cardsPerUser; $i++) {
    $aRandomHand = array_shift($shuffledDeck);
    echo "<pre>";
    echo $aRandomHand;
    echo "</pre>";
  }

}
$deal = dealCards($shuffledDeck, $cardsPerUser);

echo "<pre>";
print_r($deal);
echo "<pre>";


?>
