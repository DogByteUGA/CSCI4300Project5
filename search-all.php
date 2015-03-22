<?php
 include 'common.php';
 ?>
 <p> Films with <?php echo $first?> <?php echo $last?><p>


    <?php 
    //connect to my imdb_small database

      $username = "root";
      $password = "flaker";
 
try {
    $conn = new PDO('mysql:host=localhost:3306;dbname=imdb_small', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT name, year FROM movies JOIN roles ON movies.id=roles.movie_id JOIN actors ON roles.actor_id = actors.id WHERE actors.first_name = :first AND actors.last_name = :last ORDER BY movies.year desc');
    //function to add quotes to query
    $stmt->bindParam(':first', $first, PDO::PARAM_STR);
    $stmt->bindParam(':last', $last, PDO::PARAM_STR);
    $stmt->execute();
 
 // get array containing all of the result rows
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
 
}catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>

    <table class="searchAlltable">
      <thead>
        <tr>
          <th>Title</th>
          <th>Year</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($r = $stmt->fetch()): ?>
       <tr>
          <td><?php echo htmlspecialchars($r['name'])?></td>
          <td><?php echo htmlspecialchars($r['year']); ?></td>
       </tr>
      <?php endwhile; ?>
    </tbody>
</table>


<?php

include 'bottom.html';

 ?>