
<form method="post" action="">
<input type="text" name="texto">
<input type="submit"><br><br>
<?php
    
    echo hash('snefru',$_POST['texto']);
?>
</form>