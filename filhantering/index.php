<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="form" enctype="multipart/form-data" class="form">
        <input type="submit" name="writeToFile" value="Write to file">
        <input type="submit" id="sumbitForm" name="submitForm" value="Remove File" class="submit">
    </form>
    <?php
    $filename = "text.txt";
    $csvFile = "csvFile.csv";
    $f = fopen($filename, "a+");
    $c = fopen($csvFile, "r+");
    $data = [
        ['Symbol', 'Company', 'Price'],
        ['GOOG', 'Google Inc.', '800'],
        ['AAPL', 'Apple Inc.', '500'],
        ['AMZN', 'Amazon.com Inc.', '250'],
        ['YHOO', 'Yahoo! Inc.', '250'],
        ['FB', 'Facebook Inc.', '30']
    ];
    $data2 = [];
    if(isset($_POST['writeToFile'])){
        echo("The file $filename is open<br>");
        fwrite($f, "THERES TEXT, INSIDE THE FILE???\nNO WAAAY<br>");
        $contents = file_get_contents($filename);
        fclose($f);
    }
    if(isset($_POST['submitForm'])){
        readfile($filename);
        unlink($filename);
    }
    if(filesize($csvFile) == 0){
        foreach($data as $row){
            fputcsv($c, $row);
        }
    }
    while(($row = fgetcsv($c)) !== false) {
        $data2[] = $row;
    }    
    fclose($c);
    foreach($data2 as $print){
        echo"$print[0] $print[1] $print[2]<br>";
    }
    ?>
</body>
</html>