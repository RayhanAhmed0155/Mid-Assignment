<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <tr>
        	<legend><b>GENDER</b></legend>
			
		    <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other
		     
		
			</td>
	   </tr>	
        <br>
		<?php
$gender = "";
 if(isset($_POST['submit']))
    {
        if(isset($_POST['gender']))
        {
            echo $_POST['gender'];
        }
        else
        {
            echo "Please select your gender !";
        }
    }
?>	
        <hr>
        <input type="submit" name="submit">
        <br>
        <br>
     </fieldset>
     <br>
    </form>
  </body>
</html>

