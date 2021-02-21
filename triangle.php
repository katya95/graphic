<form action="image.php" method='POST' accept-charset="utf-8">
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
            <input type='submit' value='Сохранить' id="btn_submit">
            </form>