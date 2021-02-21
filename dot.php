<form action="image.php" method='POST' accept-charset="utf-8">
<p><input name="name" type="text" size="30" 
   value="<?php echo $_POST['name'];  ?>"
   readonly></p>
   <p><input name="color" type="text" size="30" 
   value="<?php echo $_POST['color'];  ?>"
   readonly></p>
            <p> x :<br> 
            <input name='x' type='text'  value='' /></p>
            <p>y: <br> 
            <input name='y' type='text'  value='' /></p>
            <input type='submit' value='Сохранить' id="btn_submit">
            </form>