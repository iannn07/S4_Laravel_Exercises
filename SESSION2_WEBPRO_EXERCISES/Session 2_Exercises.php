<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Session 2_Exercise</title>
</head>
<body>
<body>
    <h1>Grades Calculator</h1>
    <form action="Session 2_FH.php" method="POST">
        <div>
            <!-- Use Alt+Shift+Arrow Down -->
            <table>
                <tr>
                    <td>Math</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="math" required>
                    </td>
                </tr>
                <tr>
                    <td>Biology</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="biology" required>
                    </td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="physics" required>
                    </td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="chem" required>
                    </td>
                </tr>
                <tr>
                    <td>Indonesian</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="indonesian" required>
                    </td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="english" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td>
                        <button type="submit" class="Button">Submit</button>
                        <button type="reset" class="Button">Reset</button>
                    </td>
                </tr>
            </table>
        </div> 
    </form>
</body>
</html>