	<h1>Overzicht van games</h1>
    <div class="grid">
    <?php
    foreach ($data as $row){?>
        <a href="<?php echo URL ?>game/gameinfo/<?php echo $row['id']; ?>">
            <div class="info">
                <img class="Foto" src="<?= URL .'/' . URL_PUBLIC_FOLDER ?>/img/<?= $row['image']; ?>">
                <p class="naamgame"><?php echo $row['name']?></p>
            </div>
        </a>
    <?php }?>
    </div>
