<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Сохранение корректных данных в полях формы</h1>
<?php
    $errors = array();
    if (isset($_REQUEST["already_seen"]))
    {
        validation();
        if(count($errors)>0)
        {
            show_errors();
            show_form();
        }else{
            show_result();
        }
    }else{
        show_form();
    }

    function validation()
    {
        global $errors;
        if($_REQUEST["first_name"] == "")
        {
            $errors[] = "<font color='red'>Поле ИМЯ обязательно к заполнению</font>";
        }
        if($_REQUEST["last_name"] == "")
        {
            $errors[] = "<font color='red'>Поле Фамилия обязательно к заполнению</font>";
        }
    }
    function show_errors()
    {
        global $errors;
        foreach ($errors as $error)
        {
            echo $error . "<br>";
        }
    }
    function show_result()
    {
        echo "Ваше имя: ";
        echo $_REQUEST["first_name"];
        echo "<br>";
        echo "Ваша фамилия: ";
        echo $_REQUEST["last_name"];
    }
    function show_form()
    {
        $first_name = isset($_REQUEST["first_name"]) ? $_REQUEST["first_name"] : "";
        $last_name = isset($_REQUEST["last_name"]) ? $_REQUEST["last_name"] : "";
        echo "<form method='post'>";
        echo "Введите своё имя: ";
        echo "<input type='text' name='first_name' value='$first_name'>";
        echo "<br>";
        echo "Введите свою фамилию: ";
        echo "<input type='text' name='last_name' value='$last_name'>";
        echo "<br>";
        echo "<br>";
        echo "<input type='submit' value='ok'>";
        echo "<input type='hidden' name='already_seen'>";
        echo "</form>";
    }
?>

</body>
</html>
