<?php
session_start();
?>
<script language="javascript">

function check_form2(theForm)
{
	if(theForm.name.value=='')
	{
		alert("����������, ������� ���!");
		theForm.name.focus();
		return (false);
	}	

	const re =/^[a-z]/i;
	if(re.test(theForm.name.value)==false)
	{
		alert("����������, ������� ��� ��������� ������ ��������� �������!");
		theForm.name.focus();
		return (false);
	}	
	return (true);
}

</script>

<form action="image.php" method='POST' accept-charset="utf-8" 
onsubmit="return check_form2(this)">
<p>Save picture</p>
 Name :<br> 
<input name='name' type='text'  value='name' />
<input type='submit' value='Сохранить' name="submit">
</form>

<?php 
if(isset($_POST['submit'])) {
     $_SESSION['save']=1;
} else {
  	$_SESSION['save']=0;
}

?>