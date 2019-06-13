<?php
    session_start();
    if(!isset($_SESSION["userSession"])) {
        header("location: ../view/login.php");
    }
?>
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Chat Room</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/styles.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="../assets/js/index.js"></script>
	</head>
	<body>
		<header>
			<h1>Chat Room</h1>
        </header>
        <h2>Bienvenido <?php echo $_SESSION["userSession"];?></h2>
        <nav>
            <a class="bar" id="close" href="../index.php">Cerrar sesión</a>
        </nav>
        <div id="container">
            <div id="chat_box">
                <div id="chat"></div>
                <form action="../index.php" method="POST">
                    <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['userSession'];?>">
                    <textarea name="message" id="message" placeholder="Add your message" cols="30" rows="10"></textarea>
                    <input type="submit" name="add_message" id="add_message" value="Send">
                </form>
            </div>
        </div>
	</body>
</html>