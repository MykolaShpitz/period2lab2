<?php
include "connection.php";
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab1</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php
     $film_str = "<h4>FILM ACTOR TABLE:</h4>";
    $film_str .= "<table><tr><th>FILM</th><th>RELEASE</th><th>VIDEOCASSETTE</th><th>COUNTRY</th></tr>";
    $actor  = $_REQUEST['actor']; 

    if($actor  != "")
    {
       
        $film = $coll->find(['actor'=>$actor]);
 
        foreach($film as $row) 
       {
       
            $name = $row['title'];
            $film_str .= "<tr><td>{$row['title']}</td> <td>{$row['date']}</td><td>{$row['videocassette']}</td><td>{$row['film_release_country']}</td> </tr>";
     
        }

        $film_str .= "</table>";

        echo  $film_str;
        echo "<script>localStorage.setItem('actor', '$film_str')</script>";
    }
    ?>
     </table>
</body>
<html>