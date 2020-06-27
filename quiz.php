<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quiz Questions And Answers</title>
<style>
p {
  text-align: auto;
  font-size: 20px;
  margin-top: 0px;
}
</style>
<style>
body {
  background-color: white;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: grey;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
<style>
div {
  margin-bottom: 15px;
  padding: 4px 12px;
}

.danger {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #4CAF50;
}

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}


.warning {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
}
</style>
</head>
<body>
<h1 class="glow">BIBLE QUIZ</h1>
<center><h1><u>Quiz Questions</u></h1></center>
<script>
// Set the date we're counting down to
var countDownDate = new Date("July 01, 2020 01:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<p>
<form name="quiz">
<p>

<div class="danger"><strong><b>Question 1.</strong></div>

<br>യോശുവയുടെ ശവശരീരം അടക്കിയത് എവിടെ?<br></b>

<blockquote>

<input type="radio" name="q1" value="don't like">don't like<br>

<input type="radio" name="q1" value="doesn't like">doesn't like<br>

<input type="radio" name="q1" value="doesn't likes">doesn't likes<br>

</blockquote>
<p id="demo"></p>



<p><b>



<div class="success"><strong>Question 2.</strong></div>

<br>അന്യജാതിക്കാരായ രാജാക്കന്മാരുടെ നേതാവാര്?<br></b>

<blockquote>

<input type="radio" name="q2" value="don't come">don't come<br>

<input type="radio" name="q2" value="doesn't come">doesn't come<br>

<input type="radio" name="q2" value="doesn't comes">doesn't comes<br>

</blockquote>

<p><b>



<div class="info"><strong>Question 3.</strong></div>

<br> ബേഥേലിന്റെ പഴയ പേര്?<br></b>

<blockquote>

<input type="radio" name="q3" value="come">come<br>

<input type="radio" name="q3" value="comes">comes<br>

<input type="radio" name="q3" value="coming">coming<br>

</blockquote>


<p><b>



<div class="warning"><strong>Question 4.</strong></div>

<br> പുത്രന്മാരോടുകൂടെ പുത്രിമാർക്കും അവകാശം ലഭിച്ചത് ഏത് ഗോത്രത്തിന്?<br></b>

<blockquote>

<input type="radio" name="q4" value="not">not<br>

<input type="radio" name="q4" value="isn't">isn't<br>

<input type="radio" name="q4" value="don't">don't<br>

</blockquote>


<p><b>



<div class="danger"><strong>Question 5.</strong></div>

<br>വാഗ്ദത്ത നാട്ടിൽ ആദ്യത്തെ പെസഹ ആചരിച്ചത് എവിടെ വെച്ച്?<br></b>

<blockquote>

<input type="radio" name="q5" value="don't make">don't make<br>

<input type="radio" name="q5" value="doesn't makes">doesn't makes<br>

<input type="radio" name="q5" value="doesn't make">doesn't make<br>

</blockquote>


<p><b>



<div class="success"><strong>Question 6.</strong></div>

<br> യെശയ്യാവ് ചെങ്കടലിനെ വിളിച്ച പേര്?<br></b>

<blockquote>

<input type="radio" name="q6" value="seem">seem<br>

<input type="radio" name="q6" value="seems">seems<br>

<input type="radio" name="q6" value="seeming">seeming<br>

</blockquote>

<p>

<div class="info"><strong>Question 7.</strong></div>

<br>ഞാൻ ദൈവത്തെ പരീക്ഷിക്കയില്ല എന്ന് പറഞ്ഞ രാജാവാര്?<br></b>

<blockquote>

<input type="radio" name="q7" value="don't have">don't have<br>

<input type="radio" name="q7" value="doesn't have">doesn't have<br>

<input type="radio" name="q7" value="doesn't has">doesn't has<br>

</blockquote>


<p>



<div class="warning"><strong>Question 8.</strong></div>

<br>ഹിസ്കിയാവ് സുഖം പ്രാപിച്ചതറിഞ്ഞ് എഴുത്തും സമ്മാനവും കൊടുത്തയച്ചതാര്?<br></b>

<blockquote>

<input type="radio" name="q8" value="doesn't has">doesn't has<br>

<input type="radio" name="q8" value="don't has">don't has<br>

<input type="radio" name="q8" value="doesn't have">doesn't have<br>

</blockquote>


<p>



<div class="danger"><strong>Question 9.</strong></div>

<br>ഏതു ദേശക്കാരാണ് ദീർഘകായന്മാർ?<br></b>

<blockquote>

<input type="radio" name="q9" value="take">take<br>

<input type="radio" name="q9" value="takes">takes<br>

<input type="radio" name="q9" value="taking">taking<br>

</blockquote>


<p>



<div class="success"><strong>Question 10.</strong></div>

<br>ദൈവത്തിന്റെ ജനം പറന്നു വരുന്നത് ഏതുപക്ഷിയെപ്പോലെയാണ്?<br></b>

<blockquote>

<input type="radio" name="q10" value="want">want<br>

<input type="radio" name="q10" value="wants">wants<br>

<input type="radio" name="q10" value="wanting">wanting<br>

</blockquote>

<p>



<div class="info"><strong>Question 11.</strong></div>

<br>ഞാ൯ ദാവീദി൯െറ വലിയ മുത്തശ്ശി അമ്മയാണ്?<br></b>

<blockquote>

<input type="radio" name="q11" value="come">സാറാ<br>

<input type="radio" name="q11" value="comes">രൂത്ത്<br>

<input type="radio" name="q11" value="coming">അബീശഗ്<br>

</blockquote>

<p>



<div class="warning"><strong>Question 12.</strong></div>

<br> തിമോത്തി എ൯െറ ചെറുമകനാണ്?<br></b>

<blockquote>

<input type="radio" name="q12" value="don't know">ലോവീസ്<br>

<input type="radio" name="q12" value="doesn't knows">യൂനീക്ക<br>

<input type="radio" name="q12" value="doesn't know">പ്രിസ്ക<br>

</blockquote>

<p>



<div class="danger"><strong>Question 13.</strong></div>

<br>ഞാ൯ ശക്ത൯െറ തല കഷണ്ടിയാക്കി?<br></b>

<blockquote>

<input type="radio" name="q13" value="try">സിപ്പോറ<br>

<input type="radio" name="q13" value="trys">ദെബോര<br>

<input type="radio" name="q13" value="tries">ദെലീല<br>

</blockquote>

<p>



<div class="success"><strong>Question 14.</strong></div>

<br>ബേഥേലി൯െറ പഴയ പേര്?<br></b>

<blockquote>

<input type="radio" name="q14" value="play">ലൂസ്<br>

<input type="radio" name="q14" value="plays">ഏൽ ബേഥേൽ<br>

<input type="radio" name="q14" value="playing">അല്ലോൻ ബാഖൂത്ത്<br>

</blockquote>

<p>



<div class="info"><strong>Question 15.</strong></div>

<br>എനിക്ക് ദുർബലമായ കണ്ണുകളുണ്ട്?<br></b>

<blockquote>

<input type="radio" name="q15" value="last">ദീനാ<br>

<input type="radio" name="q15" value="lastes">ലേയ<br>

<input type="radio" name="q15" value="lasts">റാഹേൽ<br>

</blockquote>

<p><b>

<input type="button"value="Grade Me"onClick="getScore(this.form);">

<input type="reset" value="Clear"><p>

Number of score out of 15 = <input type= text size 15 name= "mark">

Score in percentage = <input type=text size=15 name="percentage"><br>

</form>

<p>

<form method="post" name="Form" onsubmit="" action="">

</form>

</body>

<script>

var numQues = 15;

var numChoi = 3;

var answers = new Array(15);

answers[0] = "doesn't like";

answers[1] = "don't come";

answers[2] = "come";

answers[3] = "don't";

answers[4] = "doesn't make";

answers[5] = "seem";

answers[6] = "don't have";

answers[7] = "doesn't have";

answers[8] = "takes";

answers[9] = "want";

answers[10] = "comes";

answers[11] = "doesn't know";

answers[12] = "tries";

answers[13] = "play";

answers[14] = "lasts";

function getScore(form) {

var score = 0;

var currElt;

var currSelection;

for (i=0; i<numQues; i++) {

currElt = i*numChoi;

answered=false;

for (j=0; j<numChoi; j++) {

currSelection = form.elements[currElt + j];

if (currSelection.checked) {

answered=true;

if (currSelection.value == answers[i]) {

score++;

break;

}

}

}

if (answered ===false){alert("Do answer all the questions, Please") ;return false;}

}

var scoreper = Math.round(score/numQues*100);

form.percentage.value = scoreper + "%";

form.mark.value=score;

}

</script>

</html>

10.5k views · View 26 Upvoters · View Sharers
