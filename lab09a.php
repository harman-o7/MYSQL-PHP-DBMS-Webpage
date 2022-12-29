<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #add8e6; ">
    <?php
    $connect = mysqli_connect("localhost", "h5dhaliw", "Oydciog[", "h5dhaliw") ;
    echo "Connected to MySQL";
    $created = mysqli_query($connect, $drop);
    ?>
    <h1 style="text-align: center;">Lab 9 sql with php</h1>
    <hr size="10px" color="blue">

    <div>
       
       
        <br>
        <form method="post" action='lab09b.php' style="display:inline"> 
            <input type="submit" name="print" 
                    value="problem 2"/>
        </form> 

        <form method="post" action='lab09c.php' style="display:inline"> 
            <input type="submit" name="ontario" 
                    value="problem 3"/>
        </form> 
        <form method="post" action='lab09d.php' style="display:inline"> 
            <input type="submit" name="forms" 
                    value="problem 4"/>
        </form> 
        <form method="post" action='lab09e.php' style="display:inline"> 
            <input type="submit" name="random" 
                    value="problem 5"/>
     </form> 
    </div>
  
    <br>



    <?php
///<input type="submit" name="random" action='lab09e.php'
///value="problem: 5"/>
    //if(isset($_POST['droptables'])){
        $sql = "DROP TABLE photo;";
        $create = mysqli_query($connect, $sql);
        if ($create){
            echo "Dropped<br>";
        }
        else{
            echo "<p>Error dropping table!</p><br>";
        }
   // }

 // if (isset($_POST['createTables'])){
        $sql = "CREATE TABLE photo (
            number_pic    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            subject_pic  VARCHAR(20) NOT NULL,
            location_pic VARCHAR(20) NOT NULL,
            url_pic       VARCHAR(1500) NOT NULL,
            taken_date DATE );";
          $created = mysqli_query($connect, $sql);
            if($created){
                echo "Table photo created<br>";
            }
            else{
                echo "Table not created<br>";
            }      
   // }


  //  if(isset($_POST['pop'])){
        $Array = [
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('World Cup', 'Qatar', 'https://images.unsplash.com/photo-1637203723757-a9b26181e1ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80', '2022-11-1') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Time Square', 'New York', 'https://images.unsplash.com/photo-1541336032412-2048a678540d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', '2022-11-1')",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('The 6ix', 'Ontario', 'https://images.unsplash.com/photo-1517935706615-2717063c2225?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1065&q=80', '2022-11-3') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Niagara Falls', 'Ontario', 'https://images.unsplash.com/photo-1606516397986-1eeb79e8c052?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bmlhZ2FyYSUyMGZhbGxzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60','2022-11-3') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Effiel Tower', 'France', 'https://images.unsplash.com/photo-1549144511-f099e773c147?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZnJhbmNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60', '2022-11-5') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Mountains', 'Switzerland', 'https://images.unsplash.com/photo-1514970746-d4a465d514d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80', '2022-11-6') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Beach', 'Jamaica', 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmVhY2glMjBqYW1haWNhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60', '2022-11-7') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Views', 'Rio', 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', '2022-11-7') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Canyons', 'Grand Canyon', 'https://images.unsplash.com/photo-1615551043360-33de8b5f410c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JhbmQlMjBjYW55b258ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60', '2022-11-9') ",
            "INSERT INTO photo (subject_pic, location_pic, url_pic, taken_date) VALUES ('Nature', 'Africa', 'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1672&q=80', '2022-11-9') "];
        
        foreach($Array as $sql) {
            $created = mysqli_query($connect, $sql);
             if (!$created) {
                    echo "Error " . "<br>";
                }
            //else {
                //echo "Value inserted into pictures successfully" . "<br>";
            //}
            }
        echo "Values inserted into pictures successfully" . "<br>";

            
   // }



    ?>

    
    
    
</body>
</html>
