<script language="javascript">

function check_form(theForm)
{
	if(theForm.user_name.value=='')
	{
		alert("����������, ������� ���!");
		theForm.user_name.focus();
		return (false);
	}	
	if(theForm.name.value=='')
	{
		alert("����������, ������� ���!");
		theForm.name.focus();
		return (false);
	}	
	return (true);
}

</script>

<form action="picture.php" method='POST' accept-charset="utf-8"
 onsubmit="return check_form(this)">
<p>Search my pictures</p>
 Name :<br> 
 <input name='user_name' type='text'  value='' />
 <input type='submit' value='Сохранить' name="submit">
</form>
            