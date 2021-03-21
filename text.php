<script language="javascript">

function check_form(theForm)
{
	if(theForm.text.value=='')
	{
		alert("Пожалуйста, введите text");
		theForm.text.focus();
		return (false);
	}
	
	if(theForm.text.value<0)
	{
		alert("Пожалуйста, введите text");
		theForm.text.focus();
		return (false);
	}
	
	if(theForm.size.value<0)
	{
		alert("Пожалуйста, введите size");
		theForm.size.focus();
		return (false);
	}
	
	if(theForm.x.value<0)
	{
		alert("Пожалуйста, введите x");
		theForm.x.focus();
		return (false);
	}
	
	if(theForm.y.value<0)
	{
		alert("Пожалуйста, введите y");
		theForm.y.focus();
		return (false);
	}

	if(theForm.size.value=='' )
	{
		alert("Пожалуйста, введите size");
		theForm.size.focus();
		return (false);
	}
	
	if(theForm.x.value=='')
	{
		alert("Пожалуйста, введите x");
		theForm.x.focus();
		return (false);
	}
	
	if(theForm.y.value=='')
	{
		alert("Пожалуйста, введите y");
		theForm.y.focus();
		return (false);
	}
	
	return (true);
}

</script>


   <!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>text</title>
<link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>text</h2>
<script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
<div class="container w-50">
<form class="form-control g-3 needs-validation" novalidate action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<div class="row">
 <div class="col-sm">
 <label for="text" class="form-label">text:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='text'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="size" class="form-label">size:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='size'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="x" class="form-label">x:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='x'  type="text"  value=''  />
</div>
 </div>
 <div class="row">
 <div class="col-sm">
 <label for="y" class="form-label">y:</label>
 </div>
 <div class="col-sm">
<input class="form-control" name='y'  type="text"  value=''  />
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
