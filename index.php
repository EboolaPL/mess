<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Logowanie</title>
</head>
<body>
    <section>
        <div class="back"></div>
        <div class="back"></div>
        <div class="back"></div>
        <div class="back"></div>
        <div class="back"></div>
        <div class="box">
            <div class="squer" style="--i:0;"></div>
            <div class="squer" style="--i:1;"></div>
            <div class="squer" style="--i:2;"></div>
            <div class="squer" style="--i:3;"></div>
            <div class="squer" style="--i:4;"></div>
            <div class="squer" style="--i:5;"></div>
            <div class="conteiner">
                <div class="form">
                    <h2>Login form</h2>

                    <?php if(isset($_GET['login'])): ?>
                        <div> Podales niepoprawne dane. Sprobuj ponownie. </div>
                    <?php endif; ?>

                    <?php if(isset($_GET['name'])): ?>
                        <div> Login jest pusty. </div>
                    <?php endif; ?>

                    <?php if(isset($_GET['pass'])): ?>
                        <div> Haslo jest pusty. </div>
                    <?php endif; ?>

                    <form method="POST" action="./controllers/login.php?tes=t2">
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="login">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="login">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
</body>
</html>