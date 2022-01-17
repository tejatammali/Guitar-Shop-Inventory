<html>
    <title>Update</title>
    <head>
        <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    </head>
    <?php
        include('connect.php');
        //Assign the strings to be used from previous post
        $string1=$_POST['product_id'];
        $string2=$_POST['category_id'];
        $string3=$_POST['product_code'];
        $string4=$_POST['product_name'];
        $string5=$_POST['description'];
        $string6=$_POST['list_price'];
        $string7=$_POST['discount_percent'];
        $string8=$_POST['date_added'];

        //Entry's old product_id needed to update it
        $old_id=$_POST['previous_id'];


        //Update querey
        $query1= "UPDATE products 
        SET category_id= $string2, 
        product_code= '$string3', 
        product_name= '$string4', 
        description= '$string5', 
        list_price= $string6, 
        discount_percent= $string7 
        
        WHERE product_id= $old_id";

        //Code I got from w3 schools to update database
        // Create connection
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($conn->query($query1) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }

        //Show what the current entry looks like in the database
        $query2= "SELECT * FROM products WHERE product_id= $old_id";
        $result = @mysqli_query($dbc, $query2);

        echo "<br>Current entry: </br>";

        echo "<table>";
        echo "<tr><td>Product ID</td>
            <td>Category ID</td><td>Product Code</td><td>Product Name</td>
            <td>Description</td><td>List Price</td><td>Discount Percent</td>
            <td>Date Added</td>
            </tr>";

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo '<td>' . $row['product_id'] . '</td>
            <td>' . $row['category_id'] . '</td>
            <td>' . $row['product_code'] . '</td> 
            <td>' . $row['product_name'] . '</td>
            <td>' . $row['description'] . '</td>
            <td>' . $row['list_price'] . '</td>
            <td>' . $row['discount_percent'] . '</td>
            <td>' . $row['date_added'] . '</td>
            </tr>';
        echo "</table>";
        // Free up the resources.
        mysqli_free_result($result);
        // Close the database connection.
        mysqli_close($dbc);
    ?>
    <form action='products_script.php' method=post>
        <input type=submit name=submit value="Return to table">
    </form>
    <a href='products_edit.php'> Cancel</a>
</html>