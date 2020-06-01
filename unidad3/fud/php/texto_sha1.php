
<form method="post" action="">
<input type="text" name="texto">
<input type="submit"><br><br>
<?php
    
    echo sha1($_POST['texto']);
?>
</form>