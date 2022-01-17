<html>
    <?php
        include('connect.php');
         //Entry's old product_id needed to update it
         $old_id=$_POST['previous_id'];

        
        //Code I got from w3 schools to update database

        // Create connection
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Create Query
        $query="DELETE FROM products WHERE product_id= $old_id";
        if ($conn->query($query) === TRUE) {
        echo "Record DELETED successfully";
        } else {
        echo "Error DELETING record: " . $conn->error;
        }
        
        // Close the database connection.
        mysqli_close($dbc);
    ?>
    <form action='products_script.php' method=post>
        <input type=submit name=submit value="Return to table">
    </form>
</html>