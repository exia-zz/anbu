<?php require_once("includes/connection.php"); ?>
<?php require("includes/_header.php"); ?>

    <div class="content">
        <?php
            
            $users_query = "SELECT * FROM users" ;
            $users_result = mysql_query($users_query) or die (mysql_error());
        ?>

        <?php while($users_row = mysql_fetch_assoc($users_result)) {?>
          <?php echo $users_row['first_name']; ?>
          <?php echo $users_row['last_name']; ?>
          <?php echo $users_row['email']; ?>
          <?php echo $users_row['bio']; ?>
        <?php }?>
    </div>

<?php require("includes/_footer.php"); ?>