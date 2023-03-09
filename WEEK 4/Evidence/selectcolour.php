<html>
  <head><title>Select colour page</title></head>
    <body>
    <?php session_start(); ?>
      <form action="confirmation.php"  method="post">
	        Select the colour for the <?php echo $_SESSION['sesQuant']; ?> widgets you are ordering
          
          <?php $_SESSION['sesSize'] = $_POST['selsize']?>
   	        <select name="selcolour">
   	          <option>white</option>
	            <option>red</option>
	            <option>yellow</option>
	            <option>green</option>
	            <option>blue</option>
            </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	
