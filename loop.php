<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>Start learning basic PHP</h1>
    <?php
        echo 'For Loop:-<br>';
        echo 'for($i = 0; $i < 5; $i++){
            <br>echo $i+1;<br>
        }<br><br>';

        for($i = 0; $i < 5; $i++){
            echo $i+1;
            echo '<br>';
        }

        $i = 1;
        echo '<br>While Loop:-<br>';
        while($i <=5){
            echo $i;
            echo '<br>';
            $i++;
        }

    ?>
</body>
</html>