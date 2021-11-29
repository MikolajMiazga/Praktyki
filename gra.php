<?php

session_start();

if (!isset($_SESSION['zalogowany'])) {
	header('Location: index.php');
	exit();
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Scientific Calculator using HTML CSS and JavaScript</title>
	<link rel="stylesheet" href="logstyles.css?v=<?php echo time(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">
</head>

<body>
	<div class="kontener">
		<div class="conatainer">
			<form name="cacl">
				<input type="text" name="text" id="screen" readonly>
			</form>
			<div class="btns">
				<button onclick="document.cacl.text.value=Math.sin(document.cacl.text.value)">Sin</button>
				<button onclick="document.cacl.text.value=Math.cos(document.cacl.text.value)">Cos</button>
				<button onclick="document.cacl.text.value=Math.tan(document.cacl.text.value)">Tan</button>
				<button onclick="document.cacl.text.value=Math.log(document.cacl.text.value)">log</button>
				<button onclick="document.cacl.text.value=Math.pow(document.cacl.text.value,2)">x<sup>2</sup></button>
				<button onclick="document.cacl.text.value=Math.pow(document.cacl.text.value,3)">x<sup>3</sup></button>
				<button onclick="document.cacl.text.value=Math.sqrt(document.cacl.text.value,1/2)">&radic;</button>
				<button onclick="document.cacl.text.value=Math.sqrt(document.cacl.text.value,1/3)">&#8731;</button>
				<button onclick="document.cacl.text.value+='1'">1</button>
				<button onclick="document.cacl.text.value+='2'">2</button>
				<button onclick="document.cacl.text.value+='3'">3</button>
				<button onclick="document.cacl.text.value+='4'">4</button>
				<button onclick="document.cacl.text.value+='5'">5</button>
				<button onclick="document.cacl.text.value+='6'">6</button>
				<button onclick="document.cacl.text.value+='7'">7</button>
				<button onclick="document.cacl.text.value+='8'">8</button>
				<button onclick="document.cacl.text.value+='9'">9</button>
				<button onclick="document.cacl.text.value+='0'">0</button>
				<button onclick="document.cacl.text.value+='.'">.</button>
				<button onclick="document.cacl.text.value+='*'">*</button>
				<button onclick="document.cacl.text.value+='+'">+</button>
				<button onclick="document.cacl.text.value+='-'">-</button>
				<button onclick="document.cacl.text.value+='/'">/</button>
				<button onclick="document.cacl.text.value+='%'">%</button>
				<button onclick="document.cacl.text.value=''" class="reset clear">C</button>
				<button onclick="del()" class="reset del">DEL</button>
				<button onclick="document.cacl.text.value=eval(document.cacl.text.value)" class="reset equal">=</button>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php

		echo "<p>Witaj " . $_SESSION['user'] . '! [ <a href="logout.php">Wyloguj się!</a> ]</p>', "<p><b>E-mail</b>: " . $_SESSION['email'];


		?>
	</div>

	<div id="ips">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at velit ullamcorper nisl sodales suscipit. Nunc efficitur felis quis libero tincidunt luctus. In turpis risus, imperdiet vitae ornare eu, mollis eget sem. Sed eu massa vel orci porttitor egestas. Fusce quis commodo quam. Sed quis faucibus augue. Cras cursus lectus porttitor nibh sollicitudin fringilla. Fusce fermentum justo ut elit accumsan ullamcorper. Pellentesque scelerisque dui sit amet ultricies cursus. Nam cursus elit eu ex lacinia commodo.

		Integer pharetra ultrices lorem, sed pellentesque urna mattis sit amet. Nulla ac posuere nisl, sed venenatis ex. Donec suscipit aliquet tortor, sollicitudin imperdiet dolor efficitur id. In et dui pretium, faucibus ante ut, ornare ligula. Integer mollis bibendum ipsum, in sodales eros suscipit id. Donec leo velit, venenatis ut enim vitae, pellentesque semper diam. Suspendisse viverra eget ipsum a vestibulum. Sed eget aliquet enim, a vestibulum lorem. Mauris ac mauris at arcu volutpat commodo sed sed erat.

		Aenean feugiat lectus quis quam varius, at commodo nibh placerat. Nam venenatis, ligula at dictum pretium, lacus felis accumsan orci, a tincidunt risus metus eu tellus. Morbi suscipit rhoncus urna, eu pretium magna vulputate a. Aliquam eu posuere diam, eget malesuada elit. Aliquam mauris leo, posuere eu nunc blandit, maximus malesuada nibh. Proin et libero id felis lobortis aliquet. Nulla porta mi quis mi facilisis, non sagittis sapien ornare. Nullam turpis purus, placerat ac urna id, aliquam tincidunt risus. Maecenas eu commodo ex.

		In hac habitasse platea dictumst. Mauris faucibus commodo euismod. Nunc sodales dapibus elit, sit amet bibendum sem luctus quis. Fusce id erat ut odio luctus tristique id ut eros. Aenean nisl metus, consectetur quis ipsum ut, posuere posuere tellus. Nam feugiat metus dui, eget varius nulla auctor aliquam. Cras vestibulum sem varius rutrum mattis. Quisque risus erat, ullamcorper vel turpis sit amet, tincidunt aliquam augue. Vestibulum sed mauris ultricies sapien egestas rhoncus et rutrum augue. Etiam sollicitudin a neque ut efficitur. Donec vestibulum porta mollis. Vivamus ipsum felis, accumsan vitae diam condimentum, convallis sollicitudin tortor. Aliquam dui urna, consectetur nec nunc in, consequat aliquet augue.

		Vestibulum vitae justo id nisi vulputate vehicula. Aenean tristique rhoncus eros, eu suscipit magna. Cras efficitur sit amet tortor id ullamcorper. Sed mattis, elit at pretium accumsan, ligula enim ornare ex, a ullamcorper diam eros et nunc. Nullam vitae accumsan sem. Nunc sed euismod quam. Sed vehicula eget diam et luctus. Morbi cursus, ligula sed aliquet lobortis, leo nisl semper sem, ac commodo purus magna vel nisl. Donec arcu arcu, posuere in placerat at, maximus at lectus.




	</div>

	<script type="text/javascript">
		function del() {
			var x = document.getElementById('screen').value;
			document.getElementById('screen').value = x.substr(0, x.length - 1);
		}
	</script>
</body>

</html>