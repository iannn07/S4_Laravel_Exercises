<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Form Handler</title>
</head>
<body>
       <!-- Variable types -->
       <?php 
              $name = $_POST["name"];
              $age = $_POST["age"];
              $hobby = $_POST["Hobbies"];
              $aggree = $_POST["agreement"];
       ?>

       <h1>Hi, <?php echo $name ?></h1>
       <p>Is this true? Age: <?php echo $age ?>; Hobbies: <?php echo join(",", $hobby)?></p>

       <?php 
              if($agree){
                     echo "<p>Thank you</p>";
              } else{
                     echo "<p>Please accept</p>";
              }
       ?>
</body>
</html>