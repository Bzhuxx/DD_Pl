
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png">
    <title>Registration</title>
</head>
<body>
    <div id="main">
        <h1><b><p align="center">Служба Поддержки</p></b></h1>
        <form action="main.php" method="post" >
        <div id="passport">
        <p>
            <input class="personality" name="surename" id="field" placeholder="Фамилия" limited="37" type="text" size="7">
        </p>
            <input class="personality" name="name" id="field" placeholder="Имя" limited="37" type="text" size="7">
        <p>
            <input class="personality" name="mobilephone" id="field" placeholder="Телефон" limited="11" type="tel" size="7">
        </p>
        <p>
            <textarea id="field" type="text" name="problem" cols="40"  placeholder="Проблема"></textarea>
        </p>
        </div>
        <br>
        
        <div id="send">
            <input type="submit" value="Отправить" id="button">
        </div>
        </form>
    </div>
</body>
</html>