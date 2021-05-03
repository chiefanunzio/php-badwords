<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>
        <?php
    
        $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic magni fugit consequuntur, ipsam iste quasi qui nobis, error, provident sapiente animi non tenetur facilis inventore possimus minus eos. Explicabo nihil deserunt natus eius ut itaque alias at maxime corporis assumenda ab repellat accusantium, suscipit, odio minima tempore? Praesentium, odio consequuntur.';
        echo $paragrafo;
        ?>
    </p>

    <p>
        <?php

            echo strlen($paragrafo);
       
        ?>
    </p>

    <p>
        <?php
    
        $bedWord= $_GET['badword'];
        $censured = str_replace($bedWord,'***',$paragrafo);
        echo $censured;
        ?>
    </p>


</body>

</html>