<?php
session_start();
?>
<script language="javascript">

function check_form2(theForm)
{
	if(theForm.name.value=='')
	{
		alert("Пожалуйста, введите имя!");
		theForm.name.focus();
		return (false);
	}	

	const re =/^[a-z]/i;
	if(re.test(theForm.name.value)==false)
	{
		alert("Пожалуйста, введите имя используя только латинский алфавит!");
		theForm.name.focus();
		return (false);
	}	
	return (true);
}

</script>






<!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>form</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<form class="form-control g-3 needs-validation w-50" novalidate action="image.php" method='POST' accept-charset="utf-8" onsubmit="return check_form2(this)">
 <div class="row align-items-start">
<div class="col-md-4">
<label for="validation" class="form-label">Save picture</label>
</div>
</div>

 <div class="row">
  <div class="col-sm">
<label for="name" class="form-label">Name</label>
</div>
<div class="col-sm">
<input class="form-control" name='name'  type="text"  value='name' pattern="/^[a-z]/i" />
</div>
<div class="col-sm">
<button type="submit" class="btn btn-primary"  name="submit">Sign in</button>
</div>
</div>
</form>
</body>
</html>
<?php 
if(isset($_POST['submit'])) {
     $_SESSION['save']=1;
} else {
  	$_SESSION['save']=0;
}

?>