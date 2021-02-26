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
	
<form action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
			<p><input name="name" type="text" size="30" 
   value="<?php $_POST['name']; echo $_POST['name'];  ?>"
   readonly></p>
   <p><input name="color" type="text" size="30" 
   value="<?php $_POST['color']; echo $_POST['color'];  ?>"
   readonly></p>
  <p>Name x:<br> 
 <input name='name_center_x' type='text'  value='' /></p>
 <p>Name Y: <br> 
  <input name='name_center_y' type='text'  value='' /></p>
 <p>Width: <br> 
 <input name='width' type='text'  value='' /></p>
 <p>Height: <br> 
  <input name='height' type='text'  value='' /></p>
   <p>Start circle degree: <br> 
  <input name='start_circle_degree' type='text'  value='0' /></p>
   <p>End circle degree: <br> 
  <input name='end_circle_degree' type='text'  value='360' /></p>
  <input type='submit' value='Сохранить' id="btn_submit">
  </form>