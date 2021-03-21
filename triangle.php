<script language="javascript">

function check_form(theForm)
{
	if(theForm.first_x.value=='')
	{
		alert("Пожалуйста, введите first_x");
		theForm.first_x.focus();
		return (false);
	}
	if(theForm.first_x.value<0)
	{
		alert("Пожалуйста, введите first_x");
		theForm.first_x.focus();
		return (false);
	}
	if(theForm.first_y.value<0)
	{
		alert("Пожалуйста, введите first_y");
		theForm.first_y.focus();
		return (false);
	}
	if(theForm.second_x.value<0)
	{
		alert("Пожалуйста, введите second_x");
		theForm.second_x.focus();
		return (false);
	}
	if(theForm.second_y.value<0)
	{
		alert("Пожалуйста, введите second_y");
		theForm.second_y.focus();
		return (false);
	}
	if(theForm.third_x.value<0)
	{
		alert("Пожалуйста, введите third_x");
		theForm.third_x.focus();
		return (false);
	}
	if(theForm.third_y.value<0)
	{
		alert("Пожалуйста, введите third_y");
		theForm.third_y.focus();
		return (false);
	}

	if(theForm.first_y.value=='' )
	{
		alert("Пожалуйста, введите first_y");
		theForm.first_y.focus();
		return (false);
	}
	if(theForm.second_x.value=='')
	{
		alert("Пожалуйста, введите second_x");
		theForm.second_x.focus();
		return (false);
	}
	if(theForm.second_y.value=='')
	{
		alert("Пожалуйста, введитеsecond_y");
		theForm.second_y.focus();
		return (false);
	}
	if(theForm.third_x.value=='')
	{
		alert("Пожалуйста, введите third_x");
		theForm.third_x.focus();
		return (false);
	}
	if(theForm.third_y.value=='')
	{
		alert("Пожалуйста, введите third_y");
		theForm.third_y.focus();
		return (false);
	}
	if((theForm.third_x.value-theForm.second_x.value)==(theForm.second_x.value-theForm.first_x.value)&&(theForm.third_y.value-theForm.second_y.value)==(theForm.second_y.value-theForm.first_y.value))
	{
		alert("Координаты не должны находиться на одной линии!");
		return (false);
	}
	if((theForm.first_x.value==theForm.first_y.value)&&(theForm.second_x.value==theForm.second_y.value)&&(theForm.third_x.value==theForm.third_y.value))
	{
		alert("Координаты не должны находиться на одной линии!");
		return (false);
	}
	return (true);
}	
</script>
	

<!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>triangle</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>triangle</h2>
<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<div class="container w-50">
<form class="form-control g-3 needs-validation" novalidate action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<div class="row">
 <div class="col-sm">
 <label for="first x " class="form-label">first x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='first_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="first y" class="form-label">first y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='first_y'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="second x" class="form-label">second x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='second_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="second y" class="form-label">second y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='second_y'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="third x" class="form-label">third x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='third_x'  type="text" value=''  required/>
<div class="invalid-feedback">
      Please provide a valid start circle degree.
    </div>
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="'third y" class="form-label">'third y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='third_y'  type="text"  value='' required />
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
