<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<h1>സന്ദേശമയയ്‌ക്കുന്നതിലൂടെ നിങ്ങളുടെ പ്രശ്‌നങ്ങൾ പങ്കിടാനാകും</h1>

<form action="message.php" id="usrform" method="post">
  Name: <input type="text" name="person" required>
  <input name="click" type="submit">

</form>
<br>
<textarea rows="4" cols="50" name="problems" form="usrform" >
Enter your problems here...</textarea>
<?php
if(isset($_POST['click']))
{
    //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>
 $person = $_POST['person'];
   $problems = $_POST['problems'];
 

//Database connection
$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into message(person, problems)
	values(?, ?)");
	$stmt->bind_param("ss",$person, $problems);
	$stmt->execute();
	echo "Submitted Successfully.....";
	$stmt->close();
	$conn->close();
}
}
?>

<p>*കുറിപ്പ്  : നിങ്ങൾ നൽകിയ പ്രശ്നങ്ങൾ സുരക്ഷിതമായിരിക്കും ഒപ്പം നിങ്ങൾക്ക് ഞങ്ങളെ വിശ്വസിക്കാനും കഴിയും.</p>

</body>
</html>