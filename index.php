<?php include 'assets/php/common.php' ?>
<!DOCTYPE html>
<html>
<head>
<?php
session_start();
echo $head;
?>
	<title>Halloween AMC8</title>
</head>
<body>

<div id="Clouds">
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Background"></div>
<!--  <svg viewBox="0 0 40 24" class="Cloud"><use xlink:href="#Cloud"></use></svg>-->
</div>

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="40px" height="24px" viewBox="0 0 40 24" enable- xml:space="preserve">
  <defs>
    <path id="Cloud" d="M33.85,14.388c-0.176,0-0.343,0.034-0.513,0.054c0.184-0.587,0.279-1.208,0.279-1.853c0-3.463-2.809-6.271-6.272-6.271
	c-0.38,0-0.752,0.039-1.113,0.104C24.874,2.677,21.293,0,17.083,0c-5.379,0-9.739,4.361-9.739,9.738
	c0,0.418,0.035,0.826,0.084,1.229c-0.375-0.069-0.761-0.11-1.155-0.11C2.811,10.856,0,13.665,0,17.126
	c0,3.467,2.811,6.275,6.272,6.275c0.214,0,27.156,0.109,27.577,0.109c2.519,0,4.56-2.043,4.56-4.562
	C38.409,16.43,36.368,14.388,33.85,14.388z"/>
  </defs>
</svg>

<div class="w3-card-4">

<div class="w3-container w3-dark-red">
  <h2>Submit Answers to Halloween Mock AMC 8!</h2>
</div>

<form class="w3-container">

<label>First Name</label>
<input class="w3-input" type="text">

<label>Last Name</label>
<input class="w3-input" type="text">

</form>

</div>

</body>
</html>