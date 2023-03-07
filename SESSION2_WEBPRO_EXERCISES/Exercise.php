<!-- !DOCTYPE meaning this document using HTML5 -->
<!-- CTRL + Slash can be use as a shortcut to create a comment -->
<!-- Every tag can be contained several properties -->
<!DOCTYPE html>
<html lang="en">
    <script></script>
    
    <!-- Head section shouldn't appear on your webpage -->
    <head>
        <meta http-equiv="X UA Compatible" content="IE = edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css">
        <title>Exercise 2</title>
    </head>
    
    <!-- Body section must appear on the webpage -->
    <body>

    <!-- Variable types -->
    <?php 
        $name = "Ian";
        $age = 19;
        $avg = 95.75;
        $isLecturer = false;
        $hobby = ["Jim", "Eat", "Turu","SS"];
    ?>

    <h1 id="Title"> <?php echo $name ?></h1>
    <?php echo var_dump($name, $age, $avg, $isLecturer, $hobby)?>

    <!-- Used to take the value of variable using "" -->
    <h1><?php echo "$name $age" ?></h1> 
    
    <!-- Used to pure string by using '' -->
    <h1><?php echo '$name $age' ?></h1> 

    <h2>Hobbies</h2>
    
    <!-- Looping using for & foreach -->
    <ul>
        <?php 
            for($i=0; $i < count($hobby); $i++){
                echo "<li>$hobby[$i]</li>";
            }
        ?>
    </ul>

    <ol>
        <?php
            foreach($hobby as $hobbies){
                echo "<li>$hobbies</li>";
            }
        ?>
    </ol>

    <!-- Basic JS to change a string to a specific string -->
    <script>
        setTimeout(() =>{
            document.getElementById("Title").innerHTML = "Cardiac"
        }, 3000);
    </script>
    </body>
</html>
