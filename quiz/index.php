<?php 

$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$msg = strip_tags($msg);
	$msg = addslashes($msg);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quiz Tut</title>
<script>
function startQuiz(url){
	window.location = url;
}
</script>
</head>
<body>
<?php echo $msg; ?>
<h3>Klicke unten um das Quiz zu starten</h3>
<button onClick="startQuiz('quiz.php?question=1')">Klicken um zu beginnen</button>
</body>
</html>
