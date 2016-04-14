<?php



?>

<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
      
     <link rel="stylesheet" href="stylesheet/RollDiceGame.css" type="text/css">
     <script type="text/javascript" src="jquery-1.7.2.js"></script>
     <title>Roll a Dice Game</title> 
     <script type="text/javascript">
        $(document).ready(function(){ 
            var ctr;
            var panel=""; 
            
            $('.win').hide();
            $('.lose').hide();
            $('#error').hide();
            
            $("button").click(function(event){ 
               var enteredValue = document.getElementById("guessedNumber").value;
               ctr = Math.floor((Math.random()*5)+1);
 
              if(isNaN(enteredValue) || enteredValue > 6 || enteredValue ==""){
                 //$("button").prop("disabled",true);
                 $("div #error").show();
                 event.preventDefault();
              }
              else
                {
               // $("button").prop("disabled",false);
               // alert("HI");
                $("div #error").hide();
                event.preventDefault();
                if(ctr==1){ 
                     $("#cube").toggleClass("show-back"); 
                     $("#cube").removeClass(panel); 
                     panel="show-back"; 
                 } 
               if(ctr==2){ 
                     $("#cube").toggleClass("show-right"); 
                     $("#cube").removeClass(panel); 
                     panel="show-right"; 
            } 
            if(ctr==3){ 
                $("#cube").toggleClass("show-left"); 
                $("#cube").removeClass(panel); 
                panel="show-left";
            } 
            if(ctr==4){ 
                $("#cube").toggleClass("show-top"); 
                $("#cube").removeClass(panel); panel="show-top"; 
            } 
            if(ctr==5){ 
                $("#cube").toggleClass("show-bottom"); 
                $("#cube").removeClass(panel); 
                panel="show-bottom"; 
            } 
            if(ctr==6){ 
                $("#cube").toggleClass("show-front"); 
                $("#cube").removeClass(panel); 
                panel="show-front"; 
                //ctr=0; 
            } 
           // alert(enteredValue);
            if(ctr == enteredValue){
                setTimeout("$('#header .win').show()",500);
                $('#header .lose').hide();
                event.preventDefault();
            }else{
                 setTimeout("$('#header .lose').show()", 500);
                 $('#header .win').hide();
                 event.preventDefault();
            }
            }
                       
        }); 
        
});
    
        </script>
    </head>
    
    <body>
        <header>
            <div id="header">
             <h1>ROLL THE DICE AND GUESS THE NUMBER GAME</h1>
             <p>This is simple Dice game.You have to guess the number and write in the box next to "Roll Dice" Button. After guessing, roll the Dice by clicking on "Roll Dice" button, if your guessed number and Dice number matches you will win. Isn't it cool, so lets start.</p>
             <p class="win">HURRAY YOU WIN</p>
             <p class="lose"> SORRY NUMBER ENTERED DOES NOT MATCH. PLEASE ENTER NUMBER AND ROLL DICE ONCE AGAIN</p>
            </div>
        </header>
        
        <section class="container"> 
            <div id="cube">
                <figure class="back">1</figure>
                <figure class="right">2</figure>
                <figure class="left">3</figure>
                <figure class="top">4</figure>
                <figure class="bottom">5</figure>
                <figure class="front">6</figure>
            </div>
        </section>
        
        <div id="dice">
            <label> Enter any Number between 1 to 6 and click on "Roll Dice" Button: </label>
            <input type="text" id="guessedNumber" name="guessedNumber" value="" autocomplete="off" maxlength="1"/><span id="error"> Please Enter Number Between 1 to 6 and then Roll Dice</span>
           <p> <button> 
                <abbr title="Click here to Roll the Dice">Roll Dice</abbr> 
            </button></p>
        </div>
    </body>
    
</html>
