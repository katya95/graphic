<script language="javascript">

function check_form(theForm)
{
	if(theForm.top_right_x.value=='')
	{
		alert("Пожалуйста, введите top-right x");
		theForm.top_right_x.focus();
		return (false);
	}
	
	if(theForm.top_right_x.value<0)
	{
		alert("Пожалуйста, введите top-right x");
		theForm.top_right_x.focus();
		return (false);
	}
	
	if(theForm.top_right_y.value<0)
	{
		alert("Пожалуйста, введите top_right_y");
		theForm.top_right_y.focus();
		return (false);
	}
	
	if(theForm.bottom_left_x.value<0)
	{
		alert("Пожалуйста, введите bottom_left_x");
		theForm.bottom_left_x.focus();
		return (false);
	}
	
	if(theForm.bottom_left_y.value<0)
	{
		alert("Пожалуйста, введите bottom_left_y");
		theForm.bottom_left_y.focus();
		return (false);
	}

	if(theForm.top_right_y.value=='' )
	{
		alert("Пожалуйста, введитеtop-right y");
		theForm.top-right_y.focus();
		return (false);
	}
	
	if(theForm.bottom_left_x.value=='')
	{
		alert("Пожалуйста, введите bottom_left_x");
		theForm.bottom_left_x.focus();
		return (false);
	}
	
	if(theForm.bottom_left_y.value=='')
	{
		alert("Пожалуйста, введите bottom_left_y");
		theForm.bottom_left_y.focus();
		return (false);
	}
	
	if(theForm.top_right_x.value != theForm.top_right_y.value)
	{
		alert("Пожалуйста, введите top-right_x равный top_right_y");
		return (false);
	}
	
	if(theForm.bottom_left_x.value != theForm.bottom_left_y.value)
	{
		alert("Пожалуйста, введите bottom_left_x равный bottom_left_y");
		return (false);
	}
	
	return (true);
}

</script>

            
  <!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>square</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>Square</h2>
<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<div class="container w-50">
<form class="form-control g-3 needs-validation" novalidate action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<div class="row">
 <div class="col-sm">
 <label for="top-right x" class="form-label">top-right x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='top_right_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="top-right y" class="form-label">top-right y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='top_right_y'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="bottom-left x" class="form-label">bottom-left x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='bottom_left_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="bottom-left y" class="form-label">bottom-left y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='bottom_left_y'  type="text"  value=''  />
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