<h1>gist url: <?= $gist->getUrl() ?></h1>
<h1>created date: <?= $gist->getCreatedAt() ?></h1>
<?php

$file = $gist->getFile();
$owner = $gist->getOwner();

?>

<h1>filename: <?= $file->getName() ?></h1>
<h1>login: <?= $owner->getLogin() ?></h1>
<h1>avatar: <?= $owner->getAvatarUrl() ?></h1>
<h1>url: <?= $owner->getUrl() ?></h1>
