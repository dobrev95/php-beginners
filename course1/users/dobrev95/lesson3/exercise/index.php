<html>
    <?php
    $title = "Zaralab"; // Site title
    $pageTitle = "Zaralab"; // This page title
    $url = "data/customers.json";
    $json = file_get_contents($url);
    $customers = json_decode($json, true);
    ?>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
    <center>
        <h1>
            <?php echo $pageTitle; ?>
        </h1>
        <ul>
            <?php
            foreach ($customers as $value) {
                
               echo "<li>".$value['name']['first']." ".$value['name']['last']."</br>".$value['phone']."</li><a href='view.php?id=$value[id]'>more</a></br>";
              
            }
            ?>
        </ul>
    </center>
</body>
</html>
