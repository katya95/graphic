<form action="image.php" method='POST' accept-charset="utf-8">
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