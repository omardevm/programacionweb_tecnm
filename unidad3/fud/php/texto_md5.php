
<form method="post" action="">
<input type="text" name="texto">
<input type="submit"><br><br>
<?php
    
    echo md5($_POST['texto']);
?>
</form>