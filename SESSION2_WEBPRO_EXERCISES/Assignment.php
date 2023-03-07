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
        <title>Registration Form</title>
    </head>

    <!-- Body section -->
    <body>
    <h1>Registration Form</h1>
    <form action="form_handler.php" method="POST">
        <div>
            <!-- Use Alt+Shift+Arrow Down -->
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="name" placeholder="Input your name" required>
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>:</td>
                    <td>
                        <input type="integer" name="age" placeholder="Input your age" required>
                    </td>
                </tr>
                <tr>
                    <td>Hobbies</td>
                    <td>:</td>
                    <td>
                        <select name="Hobbies[]">
                            <option value="">--None--</option>
                            <option value="Jim">Jim</option>
                            <option value="Turu">Turu</option>
                            <option value="Eat">Eat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <span>
                            <input type="checkbox" name="agreement" value="1"> I'm agree with Terms and Condition
                        </span>
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
