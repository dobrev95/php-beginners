<html>
    <?php    
    $title = "Zaralab"; // Site title
    $pageTitle = "Zaralab"; // This page title
    $url = "data/customers.json";
    $json = file_get_contents($url);
    $customers = json_decode($json, true);
    $id = $_GET['id'];
    ?>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1>
            <?php
                foreach ($customers as $value) {
                 if($value['id'] ==$id){
                  $customer = $value;
                  break;
                 }
                  
                }   
                ?>
            
        </h1>
        <div>
            <?php echo "<img src='".$customer['picture']."'/></br>".$customer['name']['first']." ".$customer['name']['last']."</br> ".$customer['phone'].'</br><b>'.$customer['balance']."<b>"; ?>
            
            <!-- customer names, phone, email, age, picture, balance -->
        </div>
        <p>
           <?php echo $customer['about'] ?>
        </p>
        <p>
            <a href="index.php" title="Back to the index">Back</a>
        </p>
    </body>
</html>
