<?php
    include 'connection.php';

    $tagsArray = $_POST['checkBoxTag'];
    $tags = '';
    $postTags = array();
    $postsContain = array();
    $counter = 0;
    
    
    //return ids from all posts that contain the specified tags and puts them in an array
    $query = "select tags,post_id from post";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
        foreach($tagsArray as $tag) {
            if(str_contains($row['tags'], $tag)) {
                $postsContain[$counter] = $row['post_id'];
            }
        }
        $counter++;
    }

    foreach($postsContain as $curPostID) {
        $displayQuery = "select name, likes from post where post_id = '$curPostID'";
        $displayResult = mysqli_query($conn, $displayQuery);
        $displayRow = mysqli_fetch_assoc($displayResult)
        ?>
            <div>
                <p><?php echo $displayRow['name'];?></p>
                <p>Likes: <?php echo $displayRow['likes'];?></p>
            
            </div>
        <?php
    }
?>