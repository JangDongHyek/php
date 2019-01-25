<?php
require('lib/print.php');
require('view/top.php');
?>

    <a href="create.php">create</a>
    <?php
    if(isset($_GET['id'])) {
      echo "<a href=\"update.php?id=".$_GET['id']."\">update</a>";
    }
      ?>

     <form action="update_process.php" method="post">
       <p> <input type="text" name="title" placeholder="Title" value="<?=print_title();?>"> </p>
       <p> <textarea name="description" placeholder="Description"><?=print_description();?></textarea> </p>
       <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
       <input type="submit">
     </form>
     
<?php
require('view/bottom.php');
?>
