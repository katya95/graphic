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
	
	return (true);
}

</script>

<form action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<p><input name="name" type="text" size="30" 
  value="<?php echo $_POST['name'];  ?>"
  readonly></p>
 <p><input name="color" type="text" size="30" 
  value="<?php echo $_POST['color'];  ?>"
  readonly></p>
<p>top-right x :<br> 
<input name='top_right_x' type='text'  value='' /></p>
<p>top-right y: <br> 
<input name='top_right_y' type='text'  value='' /></p>
<p>bottom-left x: <br> 
<input name='bottom_left_x' type='text'  value='' /></p>
<p>bottom-left y: <br> 
 <input name='bottom_left_y' type='text'  value='' /></p>
<input type='submit' value='Сохранить' id="btn_submit">
</form>
            
