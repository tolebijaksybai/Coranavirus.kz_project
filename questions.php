<!DOCTYPE html>
<html>
<head>
	<?php 
	$title="Сұрақтар";
	require_once "blocks/head.php" 
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready (function(){
			$("done").click (function(){
				$("#messageShow").hide ();
				var name = $("#name").val();
				var email = $("#email").val();
				var subject = $("subject").val();
				var message = $("message").val();
				var fail = "";
				if (name.length < 2) fail = "Толық енгізіңіз";
				else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) fail = "Сіз қате email енгіздіңіз";
				else if (subject.length<5) fail="Хат тақырыбы 5 символдан кем болмауы керек";
				else if (message.length<20) fail="Жіберілетін хат 20 символдан кем болмауы керек";
				if (fail != ""){
					$('#messageShow').html (fail + "<div class='clear'><br></div>");
					$('#messageShow').show ();
					return false;
				}
			})
		})
	</script>
</head>
<body>
	<?php require_once "blocks/header.php"; ?>

	<div id="wrapper">
		<div id="leftCol">
			<input type="text" placeholder="Аты-жөніңіз" id="name" name="name"><br/>
			<input type="text" placeholder="Email" id="email" name="email"><br/>
			<input type="text" placeholder="Жіберілетін хат тақырыбы" id="subject" name="subject"><br/>
			<textarea name="message" id="message" placeholder="Сұрақтарыңызды жазыңыз..."></textarea><br/>
			<div id="messageShow"></div>
			<input type="button" name="done" id="done" value="Жіберу">
		</div>
	</div>
	
	<?php require_once "blocks/footer.php" ?>
</body>
</html>

<!--
<!DOCTYPE html>
<html>
<head>
 <?php
  $title = "Сұрақтар"; 
  require_once "blocks/head.php"; 
 ?> 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js
"></script> 
 <script>
  $(document).ready (function () { 
   $("#done").click (function () { 
    var name = $("#name").val (); 
    var email = $("#email").val (); 
    var subject = $("#subject").val (); 
    var message = $("#message").val (); 
    var fail = ""; 
    if (name.length < 3) 
     fail = "Имя не меньше 3 символов"; 
    else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) 
     fail = "Вы ввели некорректный email"; 
    else if (subject.length < 5) 
     fail = "Тема сообщения не менее 5 символов"; 
    else if (message.length < 20) 
     fail = "Сообщение не менее 20 символов"; 
    if (fail != "") { 
     $('#messageShow').html (fail + "<div class='clear'><br></div>"); 
     $('#messageShow').show (); 
     return false; 
    }
   }); 
  }); 
 </script>
</head>
<body>
 <?php require_once "blocks/header.php" ?>

 <div id="wrapper">
  <div id="leftCol">
<!-- Форма создаётся с помощью Ajacs и JQuery(JavaScript) --> 
<!--
   <input type="text" placeholder="Имя" id="name" name="name"><br /> 
   <input type="text" placeholder="Email" id="email" name="email"><br /> 
   <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br /> 
   <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение:"></textarea><br />
   <div id="messageShow"></div>
   <input type="button" name="done" id="done" value="Отправить">
  </div>
 <?php require_once "blocks/rightCol.php" ?> 
 </div>
 <?php require_once "blocks/footer.php" ?> 
 </body>
</html>
-->
<!--


<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Сұрақтар";
	require_once "blocks/head.php"; 
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script>
		$(document).ready (function () {
			$("#done").click (function () {
				$("#messageShow").hide ();
				var name = $("#name").val ();
				var email = $("#Email").val ();
				var subject = $("#subject").val ();
				var message = $("#message").val ();
				var fail = "";
				if (name.length < 2) { 
					fail = "Толық енгізіңіз";
				} else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {
					fail = "Сіз қате E-mail енгіздіңіз";
				} else if (subject.length < 5) {
					fail = "Хат тақырыбы 5 символдан кем болмауы керек";
				} else if (message.length < 20) {
					fail = "Жіберілетін хат 20 символдан кем болмауы керек";
				}
				if (fail != "") {
					$('#messageShow').html (fail + "<div class='clear'><br></div>");
					$('#messageShow').show ();
					return false;
				}
			});
		});
	</script>
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<div id="wrapper">
		<div id="leftCol">
			<input type="text" placeholder="Аты-жөніңіз" id="name" name="name"><br>
			<input type="text" placeholder="Email" id="Email" name="Email"><br>
			<input type="text" placeholder="Жіберілетін хат тақырыбы" id="subject" name="subject"><br>
			<textarea name="message" id="message" placeholder="Сұрақтарыңызды енгізіңіз..."></textarea><br>
			<div id="messageShow"></div>
			<input type="button" name="done" id="done" value="Жіберу">
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>

-->