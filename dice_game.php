<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <link rel="stylesheet" href="dice_game.css">
</head>

<body>
    <h1 id="welcome_header">welcome</h1>
    <h2 id="start_header">Referesh To Start The Game</h2>
    <div class="game">
        <div class="players">
            <h3>Player 1</h3>
            <h3>Player 2</h3>
        </div>
        <div class="imgs">
            
                <img src="assests/dice1.png" id="img1" alt="">
           
           
                <img src="assests/dice2.png" id="img2" alt="">
          
        </div>
    </div>
 
   <script>
    let randomnum1 = Math.floor(Math.random() * 6) + 1;
    let randomnum2 = Math.floor(Math.random() * 6) + 1;

    let img1 = document.getElementById("img1");
    img1.src = "assests/dice" + randomnum1 + ".png";

    let img2 = document.getElementById("img2");
    img2.src = "assests/dice" + randomnum2 + ".png";

    if (randomnum1 > randomnum2) {
        document.getElementById("welcome_header").innerHTML = "Player 1 wins";
        document.getElementById("start_header").innerHTML = "refreseh to play again";
    } else if (randomnum1 < randomnum2) {
        document.getElementById("welcome_header").innerHTML = "Player 2 wins";
        document.getElementById("start_header").innerHTML = "refreseh to play again";
    } else {
        document.getElementById("welcome_header").innerHTML = "It's a tie";
        document.getElementById("start_header").innerHTML = "refreseh to play again";
    }
</script>

   
</body>

</html>