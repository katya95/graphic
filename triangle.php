<script language="javascript">

function check_form(theForm)
{
	if(theForm.first_x.value=='')
	{
		alert("����������, ������� first_x");
		theForm.first_x.focus();
		return (false);
	}
	if(theForm.first_x.value<0)
	{
		alert("����������, ������� first_x");
		theForm.first_x.focus();
		return (false);
	}
	if(theForm.first_y.value<0)
	{
		alert("����������, ������� first_y");
		theForm.first_y.focus();
		return (false);
	}
	if(theForm.second_x.value<0)
	{
		alert("����������, ������� second_x");
		theForm.second_x.focus();
		return (false);
	}
	if(theForm.second_y.value<0)
	{
		alert("����������, ������� second_y");
		theForm.second_y.focus();
		return (false);
	}
	if(theForm.third_x.value<0)
	{
		alert("����������, ������� third_x");
		theForm.third_x.focus();
		return (false);
	}
	if(theForm.third_y.value<0)
	{
		alert("����������, ������� third_y");
		theForm.third_y.focus();
		return (false);
	}

	if(theForm.first_y.value=='' )
	{
		alert("����������, ������� first_y");
		theForm.first_y.focus();
		return (false);
	}
	if(theForm.second_x.value=='')
	{
		alert("����������, ������� second_x");
		theForm.second_x.focus();
		return (false);
	}
	if(theForm.second_y.value=='')
	{
		alert("����������, �������second_y");
		theForm.second_y.focus();
		return (false);
	}
	if(theForm.third_x.value=='')
	{
		alert("����������, ������� third_x");
		theForm.third_x.focus();
		return (false);
	}
	if(theForm.third_y.value=='')
	{
		alert("����������, ������� third_y");
		theForm.third_y.focus();
		return (false);
	}
	if((theForm.third_x.value-theForm.second_x.value)==(theForm.second_x.value-theForm.first_x.value)&&(theForm.third_y.value-theForm.second_y.value)==(theForm.second_y.value-theForm.first_y.value))
	{
		alert("���������� �� ������ ���������� �� ����� �����!");
		return (false);
	}
	if((theForm.first_x.value==theForm.first_y.value)&&(theForm.second_x.value==theForm.second_y.value)&&(theForm.third_x.value==theForm.third_y.value))
	{
		alert("���������� �� ������ ���������� �� ����� �����!");
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
 <p>first x :<br> 
 <input name='first_x' type='text'  value='' /></p>
<p>first y: <br> 
<input name='first_y' type='text'  value='' /></p>
<p>second x: <br> 
<input name='second_x' type='text'  value='' /></p>
<p>second y: <br> 
<input name='second_y' type='text'  value='' /></p>
<p>third x: <br> 
<input name='third_x' type='text'  value='' /></p>
<p>third y: <br> 
<input name='third_y' type='text'  value='' /></p>
<input type='submit' value='���������' id="btn_submit">
</form>