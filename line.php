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
<form action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<p><input name="name" type="text" size="30" 
   value="<?php echo $_POST['name'];  ?>"
   readonly></p>
   <p><input name="color" type="text" size="30" 
   value="<?php echo $_POST['color'];  ?>"
   readonly></p>
            <p>right x :<br> 
            <input name='right_x' type='text'  value='' /></p>
            <p>right y: <br> 
            <input name='right_y' type='text'  value='' /></p>
            <p>left x: <br> 
            <input name='left_x' type='text'  value='' /></p>
            <p>left y: <br> 
            <input name='left_y' type='text'  value='' /></p>
            <input type='submit' value='Сохранить' id="btn_submit">
            </form>