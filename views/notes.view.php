<?php 
require('partials/head.php');
require('partials/banner.php');
require('partials/nav.php');
?>
<main>
    <h1>Notes</h1>
    <div class="m-4">
        <?php foreach($notes as $note): ?>
            <li>
                <a href="note?id=<?php echo($note['id']) ?>"><?php echo $note['title'];?></a>
            </li>
            <?php endforeach ?>
    </div>
</main>
<?php
require('partials/footer.php'); 
?>