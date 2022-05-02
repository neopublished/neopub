<?php
// Reusable profile picture component with h-card

require "config.php";
?>

<div class="p-author h-card">
    <img src="<?= $site_author_profile_picture ?>" class="u-photo">
    <p hidden><a class="u-url p-name" href="<?= $site_url ?>"><?= $site_author ?></a></p>
</div>