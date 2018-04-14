<?php
/*Created an associative array called $game_choices consisting of keys and their values - "rock" being the key 
and the value being "ROCK"*/
$game_choices = array ("rock" => "ROCK", "paper" => "PAPER", "scissors" => "SCISSORS");
 
/*Created this function called promptGame to initiate the game, this prompts the user for input and calls the other 
function to process the game*/
function promptGame() {
     
//Here is a builtin global variable which allows variables to be called in from anywhere within the php file
 
    global $game_choices;
    
           
    echo "Please type rock, paper or scissors to play the game: ";
    
    /* The next line allows control over user input, for example if anything values 
     * are entered in uppercase then it will be recognised lowcase, white spaces removed, 
     * 100 characters allowed.*/
    
    $input = strtolower(trim(stream_get_line(STDIN, 100, "\n")));
    
    //The isset determines if the variable value has been set.  For example rock, paper or scissors from $game_choices
    
    if (isset($game_choices[$input])) {
        
        $human_move=$game_choices[$input];
        
    //this line is saying that the computer-move is a random choice chosen from arry $game_choices
        $computer_move = $game_choices[array_rand($game_choices)];
        
    /*If both of the above statements are true then processGame, 
      if it is not true echo opps try again then promptGame starts again
     */
         processGame($human_move,$computer_move);
    
    } else {
        echo "\n Oops! try again :)\n";
    
    //Function promptGame() is called again   
    }
     
    promptGame();
 }   	

 //This function processes the game again
 
 function processGame($human_move,$computer_move) {
 
 
  	echo "You chose $human_move\n";
	
    echo "Computer chose $computer_move  \n";

    if ($human_move == $computer_move ) {
    		
            echo("Draw!\n");
    } else if ($computer_move=="SCISSORS" && $human_move=="PAPER") {
		echo("Computer wins!\n");   
	} else if ($computer_move=="ROCK" && $human_move=="PAPER") {
		echo("You win!\n");
	} else if ($computer_move=="ROCK" && $human_move=="scissors") {
		echo("Computer wins!\n");
	} else if($computer_move=="PAPER" && $human_move=="ROCK") { 
		echo ("Computer win!\n");   
	} else if($computer_move=="PAPER" && $human_move=="SCISSORS") {
		echo ("You win!\n");
	} else if ($computer_move=="SCISSORS" && $human_move=="ROCK") {
            echo ("You win!\n");
    }
    //Reprompt the game by calling the function promptGame to play the game again after it finishes
    promptGame();
 }
 
 //Prompt the game as the page starts up
 promptGame();

 

 
 
 
 

