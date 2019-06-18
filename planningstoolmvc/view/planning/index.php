	<h1>Overzicht van planning</h1>
    <div class="indexdiv">
        <?php
        foreach($data as $result){
            ?>
            <div id="plancontainer">
                <h4><i class="fas fa-chess"></i><?php echo $result["gamename"]?></h4>
                <h4><i class="far fa-clock"></i><?php echo $result["time"]?></h4>
                <h4><i class="fas fa-users"></i><?php echo $result["players"]?></h4>
                <h4><i class="fas fa-graduation-cap"></i><?php echo $result["teacher"]?></h4>
                <a href="<?php echo URL ?>planning/edit/<?php echo $result["id"] ?>"><i class="fas fa-edit"></i>Edit</a>
                <a href="<?php echo URL ?>planning/delete/<?php echo $result["id"] ?>"><i class="fas fa-trash"></i>Delete</a>
            </div>
            <?php
        }
        ?>
    </div>
