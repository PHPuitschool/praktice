

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Стоимость хлеба при слагаемых ингридиентах</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!---->
<!---->
<!--    <form method="POST" action="" >-->
<!--        <input type="submit" value=" Мука " name="flour">-->
<!--    </form>-->
<!---->
<!--</body>-->
<!--</html>-->
<?php
$form = <<<FORM
<form action="" method="post">
 <input type="submit" value=" Мука " name="flour">
</form>
FORM;

if (isset($_POST['flour'])) {
    echo "<table>
<tr>$form</tr>
<tr><img src=/freelance/мука.jpg
     width=50 height=50 alt=flour></tr>
    </table>";
    }
    else {
    echo $form;
    }



?>