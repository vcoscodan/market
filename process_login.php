<html>
    <h1>Login processor</h1>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php $conn = new PDO('mysql:server=localhost;dbname=market', 'market_user', 'market_user');
    if($conn === false) {
        echo "Connection failed<br>"; die();
    } 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->query('select email, password from users where email = \''.$email.'\'');
    $result_set = $stmt->fetch();
    if (empty($result_set)) {
        echo "Result was empty<br>"; die();
    } else {
        echo "Result was not empty<br>";
    }
    if (strcmp($password, $result_set['password']) == 0 ) {
        echo "Success<br>";
    } else {
        echo "Failed<br>";
    }
?>
<p>More test</p>
</html>