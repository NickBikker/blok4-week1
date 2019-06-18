<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="../update">
    <input type="hidden" name="id" placeholder="Spel" value="<?php echo $data['id'] ?>"><br>
    Spel: <input type="text" name="gamename" placeholder="Spel" value="<?php echo $data['gamename'] ?>"><br>
    Starttijd: <input type="time" name="time" value="<?php echo $data['time'] ?>"><br>
    Spelers: <input type="text" name="players" placeholder="Spelers" value="<?php echo $data['players'] ?>"><br>
    Uitlegger: <input type="text" name="teacher" placeholder="Uitlegger" value="<?php echo $data['teacher'] ?>"><br>
    <input type="submit" name="" value="Verzenden">
</form>