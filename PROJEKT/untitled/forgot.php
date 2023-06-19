<!doctype html>
<head>

    <title>Przypominanie hasła</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="box"></div>
        <div class="content">
            <h1 id="ih1">Przypominanie hasła</h1>

            <br>

            <form action="" method="POST">
                <div id="srodekbox"><input class="inputs" type="text" name="username" placeholder="Podaj login"
                                           value="" required/> <br/> <br></div>
                <div id="srodekbox"><input class="zoom" type="submit" name="szukaj" value="Przypomnij hasło"> <br/> <br>
                </div>
            </form>

            <?php
            include 'config.php';
            include 'db_func.php';

            $conn = db_connect();

            if (isset($_POST['szukaj'])) {
                $username = $_POST['username'];
                $result = $conn->query("SELECT password FROM uzytkownicy WHERE username='$username'");
                $user = mysqli_fetch_array($result);
                if ($user === null) {
                    ?>
                    <div id=srodekbox>Konto o nazwie <b><?php echo $username ?></b> nie istnieje!</div>
                    <?php
                } else {
                    ?>
                        <div id="srodekbox"><label>Twoje hasło do konta <b><?php echo $username ?></b>
                                to:</label></div>
                        <div id="srodekbox"><?php echo $user['password'] ?></div>
                    <?php
                }
            }
            db_disconnect($conn);
            ?>
        </div>
    </div>
</div>
<form action="index.php">
    <div class="logout">
        <button class="zoom">Panel logowania</button>
    </div>
</form>
<div class="rover"><img class="roverpng" src="rover.gif"></div>
</body>
</html>