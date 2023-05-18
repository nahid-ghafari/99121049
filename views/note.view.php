<?php 
require('partials/head.php');
require('partials/banner.php');
require('partials/nav.php');
?>
<main>
    <h1>Note: <?php echo($note['title']); ?></h1>
    <p><?php echo($note['body']);?></p>
</main>
<?php
require('partials/footer.php'); 
?>