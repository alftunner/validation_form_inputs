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
<h1>Кодирование тегов HTML</h1>
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
        if($_REQUEST["name"] == "")
        {
            $errors[] = "<font color='red'>Данное поле обязательно к заполнению</font>";
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
        $text = htmlentities($_REQUEST["name"], ENT_NOQUOTES, 'cp1251');
        echo $text;
    }
    function show_form()
    {
        echo "<form method='post'>";
        echo "Введите своё имя: ";
        echo "<input type='text' name='name'>";
        echo "<br>";
        echo "<br>";
        echo "<input type='submit' value='ok'>";
        echo "<input type='hidden' name='already_seen'>";
        echo "</form>";
    }
?>

</body>
</html>
