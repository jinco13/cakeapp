<h1>this is users list</h1>
<ul>
    <?php foreach($users as $user): ?>
    <li>
        <?= $user->username ?><br>
        <?php if ($user->requests): ?>
            <?php foreach($user->requests as $req): ?>
                <strong><?= $req->name ?></strong><br/>
            <?php endforeach;?>
            <br/>
            <?php foreach($user->tags as $tag): ?>
                <i><?= $tag->name ?></i><br/>
            <?php endforeach;?>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
