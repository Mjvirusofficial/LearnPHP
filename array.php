<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Start learning basic PHP</h1>
    <?php
    
        echo 'Array = [HTML, CSS, JAVASCRIPT, REACT JS, NEXT JS]';
        echo '<br>';

        $Language = ['HTML','CSS','JAVASCRIPT','REACT JS','NEXT JS'];
    
        echo 'Accessing Array Elements:-';
        echo '<br>';
        echo '<br>';

        echo $Language[0];
        echo '<br>';

        echo $Language[1];
        echo '<br>';

        echo $Language[2];
        echo '<br>';

        echo $Language[3];
        echo '<br>';

        echo $Language[4];
        echo '<br>';
        echo '<br>';

        echo 'Adding Elements:-';
        echo '<br>';

        array_push($Language,'PHP',);

        // 2nd way
        $Language[] = 'jQuery';

        echo $Language[5];
        echo '<br>';

        echo $Language[6];
        echo '<br>';
        echo '<br>';
        echo 'Removing Elements:-';
        echo '<br>';
        array_pop($Language);
        echo $Language[6];
        echo '<br>';

        echo 'Iterating Array element uding foreach loop:-<br><br>';
        foreach($Language as $i){
            echo $i.'<br>';
        }
    ?>
</body>
</html>