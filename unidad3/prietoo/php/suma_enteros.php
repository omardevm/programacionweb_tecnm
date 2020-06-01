
<form method="post" action="">
<input type="text" name="numero1">
<input type="text" name="numero2">
<input type="submit"><br><br>
<?php
    
    echo (int)$_POST['numero1']+(int)$_POST['numero2'];
?>
</form>