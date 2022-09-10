<style type="text/css">
    th{
        text-align: right;
    }

    h3{
        text-align: center;
    }
</style>

<table cellpadding= "5" cellspacing="10" align="center">
    <h3>Login Form with Remember Me (+ sessions&cookies)</h3>
    <form action="okay.php" method="post">
        <tr><th>Email</th><td><input id = "email" type="text" name="email"></td></tr>
        <tr><th>Password</th><td><input id = "pass" type="password" name="password"></td></tr>
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me😘</td></tr>
        <tr><td colspan="2" align="right"><input type="submit" value="Login" name="login"></t d></tr>
    </form>

</table>
<?php
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        echo "<script>
        
            document.getElementById('email').value = '$email';
            document.getElementById('pass').value = '$pass';
        </script>";
    }
?>