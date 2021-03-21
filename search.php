<script language="javascript">

function check_form(theForm)
{
	if(theForm.user_name.value=='')
	{
		alert("Пожалуйста, введите имя!");
		theForm.user_name.focus();
		return (false);
	}	
	if(theForm.name.value=='')
	{
		alert("Пожалуйста, введите имя!");
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
<!--  <div class="container">-->
<form class="form-control g-3 needs-validation w-50" novalidate action="picture.php" method='POST' accept-charset="utf-8"
 onsubmit="return check_form(this)">
 <div class="row">
 <div class="col-sm">
 <label for="name" class="form-label">Search my pictures</label>
 </div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="name" class="form-label"> Name :</label>
 </div>
  <div class="col-sm">
 <input class="form-control" name='user_name' type='text'  value='' />
 </div>
  <div class="col-sm">
<button type="submit" class="btn btn-primary"  name="submit">Search</button>
</div>
</div>
</form>
 </body>
</html>