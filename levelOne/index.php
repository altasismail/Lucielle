<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- first we will write a php function to randomly select a name from the Prenoms.txt file.  -->
<?php
    // we need to define the file for all the names consists. 
    $names = file_get_contents("./isim.txt");
    
    // then we define how to divide each name
    $nameArray = explode ("\n", $names);
    
    // we define each array as randomized indexed number.
    $randArrayIndexNo =array_rand ($nameArray);
    
    // here we define one name out from a list of names by its array number already defined above.
    $randName = $nameArray[$randArrayIndexNo];

    
?>
<input type="button" value="Find a Name" onclick="location.reload();">    
<h1><?php echo $randName; ?></h1>
    
</body>
</html>