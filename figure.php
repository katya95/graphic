<?php
	echo '<b class="t-green">Это ответ сервера</b>';
	echo '< pre>';
print_r($_POST);
echo $_POST['myselect'];
//echo $_POST['phone'];
echo '< /pre>';
if ($_POST['myselect'] == "figure1") {
      echo "Div contents 1";
      include 'form2.php';
      ?>
      

      
      
      <?php 
   }
   if ($_POST['myselect'] =="figure2") {
      echo "Div contents 2";
   }
	?>