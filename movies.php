<?php require_once("includes/connection.php"); ?>
<?php require("includes/_header.php"); ?>


    <br/>
    <br/>
    <br/>
    <?php $current_page = basename($_SERVER['SCRIPT_NAME']);
      echo $current_page; ?>
      
    <div class="content">
    <?php
      $movies = "SELECT * FROM movies";
      $result = mysql_query($movies) or die (mysql_error());
    ?>

      
<?php while($name = mysql_fetch_assoc($result)) {?>
<div class = "movies">
  <div class="left"> <img src="movies/<?php echo $name['picture'];?>" /></div>
  <div class="right">
    <?php echo $name['name'];?><br/>
    <?php echo $name['rate'];?><br/>
    <?php echo $name['category'];?><br/>
  </div>
</div>

<?php } ?>
<div class="clear"></div>
</div>

<?php include("includes/_footer.php"); ?>