<?php 

include 'connection.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Lab2</title>
    <script src="local_storage.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onload="lc_stor_show()">
<div class="wrapper">
    
        <form action="videocassette.php" method="get">
        <label>Videocassette:</label><br>
        <select name="videocassette" id = "videocassette">
        <option>CD</option>
            <?php
      
            $cursor = $coll->distinct('videocassette');
       
            foreach ($cursor as $row) {
                echo "<option>$row</option>";
            }
            ?>
        </select>
        <input  class="buttons " type="submit" value="List films">
    </form>


    <form action="actor.php" method="get">

    <label>Actor:</label><br>
            <select name="actor" id= "actor">
            <?php
            $cursor = $coll->distinct("actor");

            foreach ($cursor as $row) {
                echo "<option>$row</option>";
            }
            ?>
        </select>
        
        <input class="buttons " type="submit" value="List actors" >
    </form>

    <form method="get" action="new_release.php">
    <label>Аilm of the current year:</label><br>
        <input  class="buttons" type="submit" id="new_release" value="List films">
    </form>

</div>

    <div id="res"> </div>

    <div id="res1"> </div>

    <div id="res2"> </div>


</body>

</html>