<!DOCTYPE html>
<html>
<body>
<H2>Welcome to Lucky 7 Game</h2>
<?php

function spinDice($chosenOption) {
    $gemeOptions = [
        'below7' => ['title'=> 'Below 7', 'betcost'=> 10, 'winprice'=> 20],
        'above7' => ['title'=> 'Above 7', 'betcost'=> 10, 'winprice'=> 20],
        'lucky7' => ['title'=> 'Lucky 7', 'betcost'=> 10, 'winprice'=> 30]
    ];
  $balance = 100;
  $dice1 = rand(1,6);
  $dice2 = rand(1,6);
  $reward = $gemeOptions[$chosenOption]['winprice'];
  $rewardTotal = 0;

//  echo "<br> Rolled sum => ". 
$spinDice = $dice1 + $dice2;
  
  
//  print_r($gemeOptions);

echo "<br>Place your bet at Rs. 10 ";
echo "<br>Game Results ";
	echo "<br>Dice 1  : " . $dice1;
	echo "<br>Dice 2  : " . $dice2;
	echo "<br>Total : " . $spinDice;
echo "\n";

	switch($spinDice) {
      case $spinDice < 7 :
        $reward += $gemeOptions[$chosenOption]['winprice'];
        $balance -= $gemeOptions[$chosenOption]['betcost'];
      	echo "<br>Congratulations you won! your balance is : " . ($balance + $reward);
        break;
      case $spinDice > 7 :
        $reward += $gemeOptions[$chosenOption]['winprice'];
        $balance -= $gemeOptions[$chosenOption]['betcost'];
      	echo "<br>Congratulations you won! your balance is : " . ($balance + $reward);
        break;
      case $spinDice == 7 :
        $reward += $gemeOptions[$chosenOption]['winprice'];
        $balance -= $gemeOptions[$chosenOption]['betcost'];
      	echo "<br>Congratulations you won! your balance is : " . ($balance + $reward);
        break;
      default :
      	echo "<br>Try agin you missed this chance";
        break;
    }	


}

function resetgame() {
	// this will reset game
    $balance = 100;
    $rewards = 0;

}

$chosenOption = 'above7'; // above7 , lucky7, below7

spinDice($chosenOption);

resetgame();

?>
</body>
</html>
