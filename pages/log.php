<?
session_name("MyLogin");
session_start();

if($_GET['action'] == "login") {
$conn = mysql_connect("localhost","username","password");
$db = mysql_select_db("database name");
$name = $_POST['user'];
$q_user = mysql_query("SELECT * FROM users WHERE login='$name'");

if(mysql_num_rows($q_user) == 1) {

$query = mysql_query("SELECT * FROM users WHERE login='$name'");
$data = mysql_fetch_array($query);
if($_POST['pwd'] == $data['password']) {
session_register("name");
header("Location: url.php"); // success page. put the URL you want
exit;
} else {
header("Location: login.php?login=failed&cause=".urlencode('Wrong Password'));
exit;
}
} else {
header("Location: login.php?login=failed&cause=".urlencode('Invalid User'));
exit;
}
}

// if the session is not registered
if(session_is_registered("name") == false) {
header("Location: login.php");
}
?>
