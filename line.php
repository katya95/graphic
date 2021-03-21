<script language="javascript">

function check_form(theForm)
{
	if(theForm.right_x.value=='')
	{
		alert("Пожалуйста, введите right_x");
		theForm.right_x.focus();
		return (false);
	}
	if(theForm.right_x.value<0)
	{
		alert("Пожалуйста, введите right_x");
		theForm.right_x.focus();
		return (false);
	}
	if(theForm.right_y.value<0)
	{
		alert("Пожалуйста, введите right_y");
		theForm.right_y.focus();
		return (false);
	}
	if(theForm.left_x.value<0)
	{
		alert("Пожалуйста, введите left_x");
		theForm.left_x.focus();
		return (false);
	}
	if(theForm.left_y.value<0)
	{
		alert("Пожалуйста, введите left_y");
		theForm.left_y.focus();
		return (false);
	}

	if(theForm.right_y.value=='' )
	{
		alert("Пожалуйста, введите right_y");
		theForm.right_y.focus();
		return (false);
	}
	if(theForm.left_x.value=='')
	{
		alert("Пожалуйста, введите left_x");
		theForm.left_x.focus();
		return (false);
	}
	if(theForm.left_y.value=='')
	{
		alert("Пожалуйста, введите 'left_y");
		theForm.left_y.focus();
		return (false);
	}
	
	return (true);
}

</script>


   <!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>line</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>line</h2>
<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<div class="container w-50">
<form class="form-control g-3 needs-validation" novalidate action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<div class="row">
 <div class="col-sm">
 <label for="right x" class="form-label">right x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='right_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="right y" class="form-label">right y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='right_y'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="left x" class="form-label">left x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='left_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="left y" class="form-label">left y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='left_y'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="name" class="form-label">Name:</label>
 </div>
 <div class="col-sm">
 <input class="form-control" name='name'  type="text"  value='<?php echo $_POST['name'];  ?>' placeholder="Readonly input here..." readonly>
 </div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="color" class="form-label">Color:</label>
 </div>
 <div class="col-sm">
 <input class="form-control" name='color'  type="text"  value='<?php echo $_POST['color'];  ?>' placeholder="Readonly input here..." readonly>
 </div>
 </div>
 <div class="row  p-2">
 <div class="col-sm">
 <button type="submit" class="btn btn-primary"  name="submit">Save</button>
 </div>
 </div>
 </form>
  </div>
</body>
</html>        
            