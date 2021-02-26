<!DOCTYPE HTML>
<html lang="ru"><head>
<meta charset="UTF-8">
<title>Отправка формы на AJAX</title>
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js"></script>
</head><body>
<h2>Первая форма</h2>
 
<form id="my_form">

	<div class="mar10-tb"><label>Имя: <input name="name"></label></div>
	<div class="mar10-tb"><label>Телефон: <input name="phone"></label></div>
	<select name="myselect"  size=1 id="myselect">
      <option>-- Make a selection --</option>
      <option value="figure1">Option 1</option>
      <option value="figure2">Option 2</option>
      <option value="figure3">Option 3</option>
      <option value="figure4">Option 4</option>              
   </select>
	<div><button type="submit">Отправить</button></div>
	
</form> 

<div id="my_message"></div>

<script> 
$('#my_form').submit(function(){
	
	$.post(
		'figure.php', // адрес обработчика
		 $("#myselect").serialize(), // отправляемые данные  		
		
		function(msg) { // получен ответ сервера  
			$('#myselect').hide('slow');
			$('#my_message').html(msg);
		}
	);
	
	return false;
});
</script> 


</body>
</html>
