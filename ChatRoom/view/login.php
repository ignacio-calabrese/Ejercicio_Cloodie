<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Chat Room - Iniciar Sesiòn</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/styles.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="../assets/js/index.js"></script>
	</head>
	<body>
		<header>
			<h1>Chat Room</h1>
		</header>
        <h2>Ingresa un nombre de usuario</h2>
        <form action="../index.php" method="POST">
            <table class="login">
                <tr>
                    <td class="left">
                        <label for="user">Username:</label>
                    </td>
                    <td class="right">
                        <input type="text" name="user" id="user" required>
                    </td>
                </tr>
                <td colSpan="2">
                        <input type="submit" id="login" name="login" value="LOGIN">
                    </td>
                </tr>
            </table>
        </form>
	</body>
</html>