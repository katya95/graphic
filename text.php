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

<form action="image.php" method='POST' accept-charset="utf-8"
onsubmit="return check_form(this)">
<p><input name="name" type="text" size="30" 
 value="<?php echo $_POST['name'];  ?>"
readonly></p>
<p><input name="color" type="text" size="30" 
value="<?php echo $_POST['color'];  ?>"
 readonly></p>
<p>text :<br> 
<input name='text' type='text'  value='' /></p>
<p>size :<br> 
<input name='size' type='text'  value='' /></p>
<p>Начало текста - координата x :<br> 
<input name='x' type='text'  value='' /></p>
<p>Начало текста - координата y :<br> 
<input name='y' type='text'  value='' /></p>
<input type='submit' value='Сохранить' id="btn_submit">
</form>