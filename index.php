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

<div class="container">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse distinctio nam labore rerum. Sequi nam illo autem ipsam cumque inventore, repudiandae similique et vitae voluptate adipisci saepe id nisi ex.</p>
</div>

<div class="wave-container">
  <h2>Hello, CSS Waves!</h2>
</div>

</div>
<div class="wave-gradient"></div>
<style>
 .wave-container {
  background: #4f46e5;
  color: white;
  padding: 100px 0;
  position: relative;
  text-align: center;
}

.wave-container::after {
  content: '';
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  height: 80px;
  background: white;
  border-radius: 100% 100% 0 0 / 50% 50% 0 0;
}

.wave-gradient {
  height: 150px;
  background: 
    radial-gradient(circle at 0% 100%, white 40%, transparent 41%) repeat-x;
  background-size: 40px 40px;
  background-color: #4f46e5;
}

  
</style>
</main>



<?php
load_template('_footer_links');

?>
</body>
</html>