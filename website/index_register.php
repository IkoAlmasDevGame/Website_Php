<!DOCTYPE html>
<html>
    <head>
        <title>Registeration Form Index</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <center><h1>REGISTERATION INDEX WEBSITE</h1></center>
        <br>
        <div class="register">
        <fieldset>
            <form method="POST" action="register.php">
                <center><table border="1">
                <tr>
                    <td>E-mailing</td>
                    <td>
                        <input type="text" name="email" id="email" placeholder="masukan email anda" class="input_mail">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" id="username" placeholder="masukan nama user anda" class="input_user">
                    </td>    
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" id="password" placeholder="masukan password anda buat" class="input_password">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jeniskelamin" value="laki">Laki-laki<br>
                        <input type="radio" name="jeniskelamin" value="perempuan">Perempuan<br>
                    </td>
                </tr>
                <tr>
                    <td>Date Birth</td>
                    <td>
                        <input type="date" name="datebirth">
                    </td>
                </tr>
                        </table>
                    </center>
                    <br>
                    <center>
                        <input type="submit" value="CLICK HERE">
                    </center>
                </form>
           </fieldset>
        </div>
    </body>
</html>