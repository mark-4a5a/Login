    <?php include 'assets/header.php'; ?>
    
    <center>
        <h2>Login Pagina</h2>
        <form method='post'>
            <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if(empty($username) or empty($password)){
                    echo "<p>Field is empty!</p>";
                } else {
                    $check_login = mysql_query("SELECT id, type FROM users WHERE username ='$username' AND password='$password'");
                    if(mysql_num_rows($check_login) == 1){
                        $run = mysql_fetch_array($check_login);
                        $user_id = $run['id'];
                        $type = $run['type'];
                            if($type == 'd') {
                                echo "<p>Your account is deactivated.</p>";
                            } else {
                                $_SESSION['user_id'] = $user_id;
                                header('location: index.php');
                            }
                    } else {
                        echo "<p>Wrong Username and/or Password.</p>";
                    }
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
        </table><br>
            <input type='submit' name='submit' value='Login'/>
        </form>
    </center>
    <div class="clear"></div>
  </main>
</div>
    <?php include 'assets/footer.php'; ?>