<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/fish/libs/_load.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  load_template('_head');

  ?>
</head>
<body>
    

<header>
    <?php
    load_template('_header');
    ?>
</header>
<main>
<?php
load_template('_slide');

?>
</main>



<?php
load_template('_footer_links');

?>
</body>
</html>