<?php
var_dump($argv);
var_dump($_ENV);
var_dump($_POST);
?>
<html>
  <form method="post">
    <input name="x" type="text" />
    <input type="submit" />
  </form>

  <?php echo $_POST["x"]; ?>
  
</html>

<?php
file_put_contents('/home/valect/mongoose/empty_file', 'its not really empty');
