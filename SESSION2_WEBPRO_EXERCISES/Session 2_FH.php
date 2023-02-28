<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Session 2_FH</title>
</head>
<body>
    <?php 
        $math = $_POST['math'];
        $bio = $_POST['biology'];
        $physics = $_POST['physics'];
        $chemist = $_POST['chem'];
        $indonesia = $_POST['indonesian'];
        $english = $_POST['english'];
        $sum = ($math+$bio+$physics+$chemist+$indonesia+$english)/6;
    ?>

    <table>
        <tr>
            <td></td>
            <td></td>
            <td>Integer</td>
            <td>FINAL</td>
        </tr>
        <tr>
            <td>Math</td>
            <td>:</td>
            <td>
                <?php 
                    echo $math;
                ?>
            </td>
            <td>
                <?php 
                    if($math <= 100 && $math >= 85){
                        echo "A";
                    } else if($math <= 84 && $math >= 75){
                        echo "B";
                    } else if($math <= 74 && $math >= 65){
                        echo "C";
                    } else if($math <= 64 && $math >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Biology</td>
            <td>:</td>
            <td>
                <?php 
                    echo $bio;
                ?>
            </td>
            <td>
                <?php 
                    if($bio <= 100 && $bio >= 85){
                        echo "A";
                    } else if($bio <= 84 && $bio >= 75){
                        echo "B";
                    } else if($bio <= 74 && $bio >= 65){
                        echo "C";
                    } else if($bio <= 64 && $bio >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Physics</td>
            <td>:</td>
            <td>
                <?php 
                    echo $physics;
                ?>
            </td>
            <td>
                <?php 
                    if($physics <= 100 && $physics >= 85){
                        echo "A";
                    } else if($physics <= 84 && $physics >= 75){
                        echo "B";
                    } else if($physics <= 74 && $physics >= 65){
                        echo "C";
                    } else if($physics <= 64 && $physics >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Chemistry</td>
            <td>:</td>
            <td>
                <?php 
                    echo $chemist;
                ?>
            </td>
            <td>
                <?php 
                    if($chemist <= 100 && $chemist >= 85){
                        echo "A";
                    } else if($chemist <= 84 && $chemist >= 75){
                        echo "B";
                    } else if($chemist <= 74 && $chemist >= 65){
                        echo "C";
                    } else if($chemist <= 64 && $chemist >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Indonesian</td>
            <td>:</td>
            <td>
                <?php 
                    echo $indonesia;
                ?>
            </td>
            <td>
                <?php 
                    if($indonesia <= 100 && $indonesia >= 85){
                        echo "A";
                    } else if($indonesia <= 84 && $indonesia >= 75){
                        echo "B";
                    } else if($indonesia <= 74 && $indonesia >= 65){
                        echo "C";
                    } else if($indonesia <= 64 && $indonesia >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>English</td>
            <td>:</td>
            <td>
                <?php 
                    echo $english;
                ?>
            </td>
            <td>
                <?php 
                    if($english <= 100 && $english >= 85){
                        echo "A";
                    } else if($english <= 84 && $english >= 75){
                        echo "B";
                    } else if($english <= 74 && $english >= 65){
                        echo "C";
                    } else if($english <= 64 && $english >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td>:</td>
            <td>
                <?php 
                    echo round($sum);
                ?>
            </td>
            <td>
                <?php 
                    if($sum <= 100 && $sum >= 85){
                        echo "A";
                    } else if($sum <= 84 && $sum >= 75){
                        echo "B";
                    } else if($sum <= 74 && $sum >= 65){
                        echo "C";
                    } else if($sum <= 64 && $sum >= 50){
                        echo "D";
                    } else{
                        echo "E";
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>