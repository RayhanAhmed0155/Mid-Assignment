<?php
$name = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['name'])){	
	}
	else{
		$name = $_POST['name'];
	}
}
?>

<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <legend><b>NAME</b></legend>
        <input type="text" name="name" value="<?php echo $name; ?>">
		<label> <?php echo $name; ?></label>
        <br>
        <hr>
        <input type="submit" name="submit">
        <br>
        <br>
     </fieldset>
     <br>
     
    </form>
  </body>
</html>