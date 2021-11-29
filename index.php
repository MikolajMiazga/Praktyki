<?php

session_start();

if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
	header('Location: gra.php');
	exit();
}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Wielki Test</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="description" content="witam na mojej pierwszej stronie" />
	<meta name="keywords" content="test, nauka" />

</head>

<body>



	<div id="main">
		<div id="container3">
			<p><strong>Witam w świecie nauki</strong></p>



		</div>

		<div id="container2">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ullamcorper gravida mauris. Duis ullamcorper nunc a augue dictum, a pellentesque lectus euismod. Quisque in commodo nulla. Donec vitae mi massa. Duis congue et ante non laoreet. Maecenas eleifend nisl in posuere sodales. Vestibulum eu posuere metus, vel pharetra lorem. Integer sagittis eget arcu eget venenatis. Quisque ut sapien gravida, vestibulum tellus quis, ornare magna. Donec nec felis id tellus fringilla dapibus eu id ex. Proin vestibulum fermentum turpis sit amet rhoncus. Phasellus pharetra commodo nisl, finibus aliquam lacus placerat nec. Suspendisse lacus urna, malesuada vitae tincidunt et, vestibulum vel augue. Vivamus nibh eros, molestie in mi ut, ultrices aliquam lorem. Integer scelerisque, enim vitae pharetra elementum, ex sapien vehicula lorem, pharetra accumsan ipsum ante quis mauris. Mauris sodales quis libero ac congue.</p>

			<p>Aenean fermentum, nisl et iaculis luctus, eros sapien venenatis tellus, eget pellentesque tellus justo vel augue. Vestibulum scelerisque lorem ac erat malesuada efficitur. Donec commodo nulla quis est vestibulum porttitor. Nam finibus odio nec elit malesuada, at dapibus dolor feugiat. Fusce volutpat ipsum ex, id sodales tellus hendrerit in. Cras vel leo placerat, imperdiet dui et, euismod libero. Vestibulum et elit ante. In at massa id nulla mollis malesuada ut id quam. Maecenas euismod, odio a fringilla tempor, lectus purus faucibus turpis, a blandit risus lacus molestie nibh. Duis tempus ipsum est, sit amet semper lectus congue sit amet.</p>

			<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas fermentum tempus nulla at placerat. Aenean nec maximus ipsum. Phasellus sit amet metus nec arcu rhoncus congue at ut dui. Vivamus turpis est, dictum a bibendum at, tristique sit amet leo. Donec maximus tellus eu nulla ornare, a vehicula est efficitur. Sed eget dignissim massa. Curabitur eget imperdiet nunc, a dapibus ligula. Praesent imperdiet faucibus mauris, eu gravida sapien. Integer ac ante tincidunt, rutrum ex suscipit, dapibus sem. Phasellus a augue erat. Suspendisse eu commodo mauris.</p>

			<p>Donec pharetra erat risus, non lobortis turpis suscipit non. Vivamus a sapien congue diam ultrices egestas. Ut dictum egestas nunc, a tempor nisi. Phasellus luctus odio nec sapien sollicitudin, at tristique purus lacinia. Nunc consectetur nulla nisl, a aliquam quam rutrum at. In vitae metus et eros tempor posuere eget sit amet nunc. Phasellus placerat felis in quam efficitur ultricies. Aenean eget nulla a magna congue fringilla. Integer efficitur nisl a enim lacinia vehicula. Quisque elementum lectus eu congue tristique. Proin vel purus et leo vulputate hendrerit. Vestibulum sed leo lorem. Suspendisse potenti. In imperdiet hendrerit suscipit.</p>

			<p>Nullam volutpat erat et augue pellentesque mollis. Sed suscipit pretium eros. Duis viverra lobortis felis, ut tristique libero aliquet sed. Vestibulum vel neque ac urna pretium molestie vitae sit amet enim. Ut laoreet erat ante, in rutrum metus molestie sit amet. Vestibulum mattis, erat faucibus maximus euismod, mauris mi accumsan nisi, eu dignissim mi lorem ac diam. Maecenas ut scelerisque leo. Nulla eget ultrices arcu. Duis tellus ligula, luctus sit amet dolor in, blandit gravida ante. Curabitur luctus orci quis pellentesque molestie. Sed eleifend auctor eleifend. In accumsan condimentum massa, posuere lobortis quam sollicitudin vitae. Donec eu elit arcu. Maecenas dictum ex nec arcu tincidunt pulvinar. Maecenas porttitor molestie dui vitae rhoncus. Pellentesque orci ligula, venenatis ut tristique sit amet, pretium eu diam.</p>
		</div>


		<div id="box">
			<div id="container4">
				<img src="img/I.jpg.">


			</div>


			<div id="container">
				<form action="zaloguj.php" method="post">


					<input type="text" placeholder="Login" name="login">



					<input type="password" placeholder="Hasło" name="haslo">




					<input type="submit" value="Zaloguj się">

					<a href="rejestracja.php" style="color: #dcc12e; text-decoration: none;">Rejestracja</a>
					<br />
					<?php
					if (isset($_SESSION['blad']))	echo $_SESSION['blad'];
					?>


				</form>
			</div>
			<div id="container5">
				<div class="img" style="background-image: url(img/pan.jpg)"></div>
				<br>
				<div class="img" style="background-image: url(img/pan2.jpg)"> </div>
				<br>
				<div class="img" style="background-image: url(img/pan3.jpg)"></div>

			</div>
		</div>
		<div class="footer">

			<p>WielkiTest.pl Mikołaj Miazga &copy; 2021</p>

		</div>
	</div>



</body>

</html>