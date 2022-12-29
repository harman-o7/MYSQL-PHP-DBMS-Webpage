<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'lab09a.php';

        /// question 5
        $sql ="SELECT * FROM photo ORDER BY RAND() LIMIT 1" ;
        $result = mysqli_query($connect, $sql);
        $totallines = mysqli_num_rows($result);
        $i = 1;
            while ($totallines > 0){
            echo "<div align='center' style='float:left;text-align:center;margin:5px 13px 15px 13px;width:200px;height:250px;font-size:1.2em;line-height: 105%;'>";
            echo "<span> #$i </span><br>";
            $line = mysqli_fetch_assoc($result);
            $subject_pic = $line["subject_pic"];
            echo $line["location_pic"];
            echo "<br>";
            echo $line["taken_date"];
            echo "<br>";
            echo "$subject_pic<br>";
            $img= $line["url_pic"];
            echo "<img src=$img style='border-radius:10px; border:2px solid #0095ff;' width=200 height=150>";
            echo "</div><div style='position:relative; top:-3px; font-weight:300;'>";
        
            echo "</div></div>";
            $totallines = $totallines -1;
            $i = $i + 1;
            }
        
        echo "<br>";
        echo "<div>";
        $sql = "SELECT * FROM photo";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            $count = mysqli_num_rows($result);
            echo "<br>" . "Total number of images in database are: " . $count . "<br>";
        }

        echo "</div>";
      


    
    ?>
    
</body>
</html>
