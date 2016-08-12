<div class = "container">
    <a href="<?= $owner->getUrl() ?>">
        <h2 class="page-header">
            <?= $owner->getLogin() ?>
        </h2>
    </a>

    <img src="<?= $owner->getAvatarUrl() ?>">

    <h4>Gists:</h4>
    <div class="list-group">
        <?php

        foreach ($gists as $gist) {
            $file = $gist->getFile();
            $fileName = $file->getName();
            $gistUrl = $gist->getUrl();
            $createdDate = $gist->getCreatedAt();
            echo '<a class="list-group-item" href="' . $gistUrl . '">';
            echo $fileName;
            echo '(' . $createdDate . ')';
            echo '</a>';
        }

        ?>

    </div>
</div>
