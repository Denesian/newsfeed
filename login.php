session_start();
if(isset($_POST['login'])) {
$username = trim($_POST['username']);
$user_password = trim($_POST['password']);
$_SESSION['username'] = $username;