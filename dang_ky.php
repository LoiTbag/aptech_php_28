<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng lý</title>
    </head>
    <body>
        <h1>Đăng ký thành viên</h1>
        <form action="register_submit.php" method="POST">
            <table >
                 <tr>
                    <td>Email :</td>
                    <td>
                        <input type="text" name="txtEmail" size="50" />
                    </td>
                </tr>
                
                <tr>
                    <td> Password :</td>
                    <td>
                        <input type="password" name="txtPassword" size="50" />
                    </td>
                </tr>
               
            </table>
            <input type="submit" name="submit" value="Đăng ký" />
            <input type="reset" value="làm mới" />
        </form>
    </body>
</html>