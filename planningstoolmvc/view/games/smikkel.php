<!--<div class="info">-->
<!--    <h1 class="Titel">--><?php //echo $db['name']; ?><!--</h1>-->
<!--    <img class="Foto" src="img/--><?php //echo $db['image']; ?><!--">-->
<!--    <p class="Beschrijving">--><?php //echo $db['description']; ?><!--</p>-->
<!--    <p class="Min-spelers">Minimale spelers: --><?php //echo $db['min_players']; ?><!--.</p>-->
<!--    <p class="Max-spelers">Maximale spelers: --><?php //echo $db['max_players']; ?><!--.</p>-->
<!--    <p class="Speeltijd">Speeltijd: --><?php //echo $db['play_minutes']; ?><!-- minuten.</p>-->
<!--    <p class="Uitlegtijd">Uitlegtijd: --><?php //echo $db['explain_minutes']; ?><!-- minuten.</p>-->
<!--</div>-->

<h1 class="Titel"><?php echo $data['name']; ?></h1>
<img class="Foto" src="<?= URL .'/' . URL_PUBLIC_FOLDER ?>/img/<?= $data['image']; ?>">
<p class="Beschrijving"><?php echo $data['description']; ?></p>
<p class="Skills">Skills: <?php echo $data['skills']; ?></p>
<p class="Expansions">Expansions: <?php echo $data['expansions']; ?></p>
<p class="Min-spelers">Minimale spelers: <?php echo $data['min_players']; ?>.</p>
<p class="Max-spelers">Maximale spelers: <?php echo $data['max_players']; ?>.</p>
<p class="Speeltijd">Speeltijd: <?php echo $data['play_minutes']; ?> minuten.</p>
<p class="Uitlegtijd">Uitlegtijd: <?php echo $data['explain_minutes']; ?> minuten.</p>
<a class="Url" href="<?php echo $data['url']; ?>"><?php echo $data['url']; ?></a>
<p class="Youtube"><?php echo $data['youtube']; ?></p>