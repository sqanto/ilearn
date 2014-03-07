<h1>Keine Rechte  Es soll bitte gehen</h1>
<h2>Admins sind</h2>
<?php

require("common.php");
//$SQL ="SELECT * FROM `users` WHERE `admin`>'0'";

   $query = "
        SELECT 
            username
        FROM users
	WHERE `admin`>'0'
    ";

    try
    {
        // These two statements run the query against your database table.
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    catch(PDOException $ex)
    {
        // Note: On a production website, you should not output $ex->getMessage().
        // It may provide an attacker with helpful information about your code.
        die("Failed to run query: " . $ex->getMessage());
    }

    // Finally, we can retrieve all of the found rows into an array using fetchAll
    $rows = $stmt->fetchAll();

?>
            <td><?php $text =  json_encode($rows); ?></td>
		<?php $text = str_replace("username","", $text); ?>
		<?php $text = str_replace("}]","", $text); ?>
		<?php $text = str_replace("[{","", $text); ?>
		<?php $text = str_replace('"":"',"", $text); ?>
		<?php $text = str_replace('"',"", $text); ?>
		 <?php $text = str_replace('},{'," ", $text); ?>

            <td><?php echo $text ?></td>


