

<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $password1 = $_POST['password1']; 



        if( $password ==  $password1){
            $pg0 = "SELECT * FROM user";
            $result0 = pg_query($conn, $pg0);
            $row = pg_fetch_assoc($result0);
            if($row['name'] != $username){
                $pg = "INSERT INTO user (name, password) VALUES ( '$username', '$password')" ;
                $result = pg_query($conn, $pg);
                echo '<script language="javascript">alert("Successfully"); window.location="login.php";</script>';
            }
          else{
            echo '<script language="javascript">alert("duplicate username, try again!!"); window.location="logup.php";</script>';
          }
        }
        else{
            echo '<script language="javascript">alert("incorrect password try again!!"); window.location="logup.php";</script>';

        }
    }

?>