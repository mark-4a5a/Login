<?php include 'assets/header.php';

    ?>
    
    <center>
        <h2>Register Pagina</h2>
        <form method='post'>
            <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $cpassword = $_POST['cpassword'];
                if(empty($username) or empty($password)){
                    echo "<p>Field is empty!</p>";
                } elseif($password != $cpassword) {
                    echo "<p>Wrong password!</p>";
                } else {
                    mysql_query("INSERT INTO users VALUES('', '$username', '$password', '$email', '2', 'a')");
                    echo "<p>Successfully Registered</p>";
                }
            };
            ?>
        <table>
            <tr>
                <td>Username</td>
                <td><input type='text' name='username'/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type='password' name='password'/></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type='password' name='cpassword'/></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input type='text' name='email'/></td>
            </tr>
        </table><br>
            <input type='submit' name='submit' value='Register'/>
        </form>
    </center>
    <div class="clear"></div>
  </main>
</div>
    <?php include 'assets/footer.php'; ?>