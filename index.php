<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373038-soal 1-prak12</title>
        <style>
            #result {
            margin-top: 10px;
            }

            .data{
                background-color:grey;
                width:200px;
                padding:5px;
            }
        </style>
    </head>
    <body>

    <?php
        echo "<div id='result'>";
        echo "<div class='data'>Data yang Anda Masukkan!</div><br>";
        echo "<div> Name: " . htmlspecialchars($_POST['name']) . "</div><br>";
        echo "<div> Position: " . htmlspecialchars($_POST['position']) . "</div><br>";
        echo "<a href='soal1_12.html'>Back</a>";
        echo "</div>";
    ?>
</body>
</html>
