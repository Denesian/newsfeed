session_start();
if(isset($_POST['signup'])) {
$username = trim($_POST['username']);
$user_password = trim($_POST['password']);
$_SESSION['username'] = $username;