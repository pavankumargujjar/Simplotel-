<?php
$user = "G Pavan Kumar";
?>
<!DOCTYPE html>
<html>
    
    <head>
    <link rel="stylesheet" href="prog6_a.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Tourney:ital,wght@1,900&display=swap" rel="stylesheet">
    <style>
        h2{
    background-color: goldenrod;
    font-family: 'Dancing Script', cursive;
    text-align: center;
}
h3{
    top: 0;
    font-family: 'Tourney', cursive;
}
body{
    background-color: rgb(27, 141, 235);
}
.profile {
    padding-top: 10px;
    background-color: #edd766;
    position: relative;
    display: block;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 20px;
    transition: 0.3s;
    width: 30%;
}
.profile:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
img{
    border-radius: 100%;
    display: block;
    margin-left: auto;
    width: 318px;
    height: 379px;
    margin-right: auto;
    border: 3px solid black;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.container {
    font-family: 'Dancing Script', cursive;
    text-align: center;
    padding: 2px 16px;
}

    </style>
    <title> program 6_a </title>
</head>

<body>
    <h2><?php echo $user; ?>,Welcome to Sample PHP Script </h2>
    <?php
    print "<h3> REFRESH PAGE </h3>";
    $name = "counter.txt";
    $file = fopen($name, "r");
    $hits = fscanf($file, "%d");
    fclose($file);
    $hits[0]++;
    $file = fopen($name, "w");
    fprintf($file, "%d", $hits[0]);
    fclose($file);
    print "Total number of views: " . $hits[0];
    ?>
    <div class="profile">
        <img src="GPK.jpg" alt="profile picture"></img>
        <div class="container">
            <h4><b><?php echo $user; ?></b></h4>
            <p>6th Sem Computer Science Department</p>
        </div>
    </div>

</body>

</html>
