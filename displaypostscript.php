<?php
    function displayPosts() {
        include 'connection.php';
        $query = "select name, user_id, date, likes from post";
        $result = mysqli_query($conn, $query);

        //loop that displays posts 
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div>
                <p><?php echo $row['name'];?></p>
                <p>Likes: <?php echo $row['likes'];?></p>
          
            </div>
            <?php
        }

        mysqli_close($conn);
    }    
?>