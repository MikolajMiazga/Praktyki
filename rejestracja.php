<?php
session_start();

if (isset($_POST['email'])) {

	$wszystko_OK = true;

	$nick = $_POST['nick'];

	if ((strlen($nick) < 3) || (strlen($nick) > 20)) {
		$wszystko_OK = false;
		$_SESSION['e_nick'] = "<strong>Nick musi posiadać od 3 do 20 znaków</strong>";
	}

	if (ctype_alnum($nick) == false) {
		$wszystko_OK = false;
		$_SESSION['e_nick'] = "<strong>Nick może składać sie tylko z liter i cyfr (bez polskich znaków)</strong>";
	}


	$email = $_POST['email'];
	$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

	if ((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)) {
		$wszystko_OK = false;
		$_SESSION['e_email'] = "<strong>Podaj poprawny adres email</strong>";
	}

	$haslo1 = $_POST['haslo1'];
	$haslo2 = $_POST['haslo2'];

	if ((strlen($haslo1) < 8) || (strlen($haslo1) > 20)) {
		$wszystko_OK = false;
		$_SESSION['e_haslo'] = "<strong>Hasło musi posiadać od 8 do 20 znaków</strong>";
	}
	if ($haslo1 != $haslo2) {
		$wszystko_OK = false;
		$_SESSION['e_haslo'] = "<strong>Hasła muszą być identyczne</strong>";
	}

	$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

	if (!isset($_POST['regulamin'])) {

		$wszystko_OK = false;
		$_SESSION['e_regulamin'] = "<strong>Potwierdź akceptację regulaminu</strong>";
	}


	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);


	try {
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

		if ($polaczenie->connect_errno != 0) {
			throw new Exception(mysqli_connect_errno());
		} else {
			$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");

			if (!$rezultat) throw new Exception($polaczenie->error);

			$ile_takich_maili = $rezultat->num_rows;
			if ($ile_takich_maili > 0) {
				$wszystko_OK = false;
				$_SESSION['e_email'] = "<strong>Istnieje konto z tym adresem email</strong>";
			}






			$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");

			if (!$rezultat) throw new Exception($polaczenie->error);

			$ile_takich_nickow = $rezultat->num_rows;
			if ($ile_takich_nickow > 0) {
				$wszystko_OK = false;
				$_SESSION['e_nick'] = "<strong>Istnieje konto z tym nickiem</strong>";
			}

			if ($wszystko_OK == true) {
				if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL,'$nick','$haslo_hash','$email')")) {
					$_SESSION['udanarejestracja'] = true;
					header('Location: witamy.php');
				} else {
					throw new Exception($polaczenie->error);
				}
			}




			$polaczenie->close();
		}
	} catch (Exception $e) {
		echo '<span style="color:#f54900;">Błąd serwera! Przepraszamy za niedogodności.</span>';
		//echo '<br />Informacja developerska:' . $e;
	}
}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<link rel="stylesheet" href="rejestracja.css?v=<?php echo time(); ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Rejestracja</title>

</head>

<body>
	<div class="container">

		<div id="Mtext">
			<h1>Rejestracja</h1>
		</div>

		<form method="post">
			<div class="form-input">
				<input type="text" name="nick" placeholder="Nick" />
				<?php
				if (isset($_SESSION['e_nick'])) {
					echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
					unset($_SESSION['e_nick']);
				}
				?>
			</div>
			<div class="form-input">
				<input type="text" name="email" placeholder="Email" />
				<?php
				if (isset($_SESSION['e_email'])) {
					echo '<div class="error">' . $_SESSION['e_email'] . '</div>';
					unset($_SESSION['e_email']);
				}
				?>
			</div>
			<div class="form-input">
				<input type="password" name="haslo1" placeholder="Hasło" />
				<?php
				if (isset($_SESSION['e_haslo'])) {
					echo '<div class="error">' . $_SESSION['e_haslo'] . '</div>';
					unset($_SESSION['e_haslo']);
				}
				?>
			</div>
			<div class="form-input">
				<input type="password" name="haslo2" placeholder="Powtórz Hasło" />
			</div>
			<label>
				<div class="check" id="text"> <input type="checkbox" name="regulamin" />Akceptuje regulamin</div>
			</label>
			<?php
			if (isset($_SESSION['e_regulamin'])) {
				echo '<div class="error">' . $_SESSION['e_regulamin'] . '</div>';
				unset($_SESSION['e_regulamin']);
			}
			?>
			<input type="submit" value="Zarejestruj się" class="btn-login" />
		</form>
	</div>

</body>

</html>