<script language="javascript">

function check_form(theForm)
{
	if(theForm.name_center_x.value=='')
	{
		alert("Пожалуйста, введите name_center_x");
		theForm.name_center_x.focus();
		return (false);
	}
	if(theForm.name_center_x.value<0)
	{
		alert("Пожалуйста, введите name_center_x");
		theForm.name_center_x.focus();
		return (false);
	}
	if(theForm.name_center_y.value<0)
	{
		alert("Пожалуйста, введите name_center_y");
		theForm.name_center_y.focus();
		return (false);
	}
	if(theForm.width.value<0)
	{
		alert("Пожалуйста, введите width");
		theForm.width.focus();
		return (false);
	}
	if(theForm.height.value<0)
	{
		alert("Пожалуйста, введите height");
		theForm.height.focus();
		return (false);
	}

	if(theForm.name_center_y.value=='' )
	{
		alert("Пожалуйста, введите name_center_y");
		theForm.name_center_y.focus();
		return (false);
	}
	if(theForm.width.value=='')
	{
		alert("Пожалуйста, введите width");
		theForm.width.focus();
		return (false);
	}
	if(theForm.height.value=='')
	{
		alert("Пожалуйста, введите height");
		theForm.height.focus();
		return (false);
	}
	if(theForm.width.value != theForm.height.value)
	{
		alert("Пожалуйста, введите  ширину равную высоте");
		theForm.width.focus();
		return (false);
	}
	if(theForm.start_circle_degree.value != 0)
	{
		alert("Пожалуйста, введите start_circle_degree равный 0");
		theForm.start_circle_degree.focus();
		return (false);
	}
	if(theForm.end_circle_degree.value != 360)
	{
		alert("Пожалуйста, введите end_circle_degree равный 360");
		theForm.end_circle_degree.focus();
		return (false);
	}
	return (true);
}	
	</script>
	
  
  <!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>circle</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>Circle</h2>
<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<div class="container w-50">
<form class="form-control g-3 needs-validation" novalidate action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<div class="row">
 <div class="col-sm">
 <label for="Name x" class="form-label">Name x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='name_center_x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="Name y" class="form-label">Name y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='name_center_y'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="Width" class="form-label">Width:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='width'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="Height" class="form-label">Height:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='height'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="Start circle degree" class="form-label">Start circle degree:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='start_circle_degree'  type="text"  placeholder="0" value='0'  required/>
<div class="invalid-feedback">
      Please provide a valid start circle degree.
    </div>
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="End circle degree" class="form-label">End circle degree:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='end_circle_degree'  type="text"  placeholder="360" value='360' required />
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
  