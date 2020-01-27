/*
GAME FUNCTION
- Player must quess a number between a min and max
- Player gets a certain amount of guesses
- Notify player of guesses remaining
- Notyfy the player of the correct answer if looses
- Let player choose to play again

*/

//Game Values

let min = 1,
    max = 15,

   winningNum = getRandomNum(min, max),
   guessesLeft = 3;

//UI Elements
const game = document.querySelector('#game'),
      minNum = document.querySelector('.min-num'),
      maxNum = document.querySelector('.max-num'),
      guessBtn = document.querySelector('#guess-btn'),
      guessInput = document.querySelector('#guess-input'),
      message = document.querySelector('.message');

//Assign min and max
minNum.textContent = min;
maxNum.textContent = max;

//play again event listener
game.addEventListener('mousedown', function(e){
   if(e.target.className === 'play-again'){
   window.location.reload();
   }
});

// Listen for quess btn
guessBtn.addEventListener('click', function(){
 let guess = parseInt(guessInput.value);

 // Validate
 if(isNaN(guess) || guess < min || guess > max){
   setMessage(`Please enter a number between ${min} and ${max}`, 'red');
 }

//Check if guess is won
 if(guess === winningNum){
//Game Over - won

gameOver(true , `${winningNum} is correct. Yeahhhhh, you won!`);

 }else{
 // Wrong Num
 guessesLeft -= 1;

  if(guessesLeft == 0){
// Game over - lost
gameOver(false, `Game Over, You lost. The correct number was ${winningNum}. Play again`);

  }else{

guessInput.style.borderColor = 'red';

// Clear Input
guessInput.value ='';
// Game Contnues - answer wrong, tell the user its the wrong number
 setMessage(`${guess} is incorrect, ${guessesLeft} guesses left`, 'red')
  }
 }


});

function gameOver(won, msg){
   let color;
   won === true ? color = 'green' : color = 'red';
//Disable input
guessInput.disabled = true;
//Change border green
   guessInput.style.borderColor = color;
   //set text color
   message.style.color = color;
//Set message
setMessage(msg);

//Play again

guessBtn.value = 'Play again';
guessBtn.className += 'play-again';
}

// Get winningNum
function getRandomNum(min, max){
 return Math.floor(Math.random()*(max-min+1)+min);
}


//Set Message
function setMessage(msg , color){
    message.style.color = color;
    message.textContent = msg;
}