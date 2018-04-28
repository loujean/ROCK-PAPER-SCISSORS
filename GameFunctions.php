<?php

$user_choice= $_REQUEST["choice"];

$game_choices = array ("R" => "ROCK", "P" => "PAPER", "S" => "SCISSORS");	

if (isset($game_choices[$user_choice])) {
	$user_choice= $game_choices[$user_choice];
        $computer_choice = $game_choices[array_rand($game_choices)];
        processGame($user_choice,$computer_choice);
}

   function processGame($user_choice,$computer_choice) {
 
 	echo "You chose $user_choice\n";
	
    	echo "Computer chose $computer_choice  \n";

    if ($user_choice == $computer_choice ) {
    		
            echo("Draw!\n");
        } else if ($computer_choice=="SCISSORS" && $user_choice=="PAPER") {
		echo("Computer wins!\n");   
	} else if ($computer_choice=="ROCK" && $user_choice=="PAPER") {
		echo("You win!\n");
	} else if ($computer_choice=="ROCK" && $user_choice=="scissors") {
		echo("Computer wins!\n");
	} else if($computer_choice=="PAPER" && $user_choice=="ROCK") { 
		echo ("Computer win!\n");   
	} else if($computer_choice=="PAPER" && $user_choice=="SCISSORS") {
		echo ("You win!\n");
	} else if ($computer_choice=="SCISSORS" && $user_choice=="ROCK") {
            echo ("You win!\n");
        }
   }

