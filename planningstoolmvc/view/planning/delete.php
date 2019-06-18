 <h2>Weet je zeker dat je deze planning wil verwijderen</h2>
 <p>Game naam: <?php echo $data["gamename"] ?></p>
 <p>Game tijd: <?php echo $data["time"] ?></p>
 <p>Leraar: <?php echo $data["teacher"] ?></p>
 <p>Deelnemers: <?php echo $data["players"] ?></p>

 <form method="post" action="../destroy/<?php echo $data["id"] ?>">
     <input type="submit" name="bevestig" value="ja">
     <input type="submit" name="bevestig" value="nee">
 </form>