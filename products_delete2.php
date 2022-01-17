<html>
<title>Delete a product</title>

<head>Delete the current entry</br>
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <p>
        WARNING: Once an enrty has been deleted it can not be restored</br>
        without reseting the entire server. This is the only warning</br>
        PLEASE USE CAUTION</br>
        <br>The following entry will be deleted:
    </p>
    <?php
        include('connect.php');
        $product_id=$_POST['product_ID'];
        $query = "SELECT*
        FROM products 
        WHERE product_id = $product_id";
        $result = @mysqli_query($dbc, $query);
        echo "<table>";
        echo "<tr><td>Product ID</td>
            <td>Category ID</td><td>Product Code</td><td>Product Name</td>
            <td>Description</td><td>List Price</td><td>Discount Percent</td>
            <td>Date Added</td>
            </tr>";
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //Assign the strings to be used
        $string1=$row['product_id'];
        $string2=$row['category_id'];
        $string3=$row['product_code'];
        $string4=$row['product_name'];
        $string5=$row['description'];
        $string6=$row['list_price'];
        $string7=$row['discount_percent'];
        $string8=$row['date_added'];
        
        
                echo "<tr>
                <td>" . $string1 . '</td>
                <td>' . $string2 . '</td>
                <td>' . $string3 . '</td> 
                <td>' . $string4 . '</td>
                <td>' . $string5 . '</td>
                <td>' . $string6 . '</td>
                <td>' . $string7 . '</td>
                <td>' . $string8 . '</td>
                </tr>';
        
        
        echo "<form action='products_delete3.php' method=post>";
        echo "<input type=hidden name=previous_id value='" . $string1 . "'/>";
        echo "<input type=submit name=submit value=DELETE></form>";
     
        // Free up the resources.
        mysqli_free_result($result);
        // Close the database connection.
        mysqli_close($dbc);
        
    ?>
    </form>
    <a href='products_delete.php'> Cancel</a>
</body>

</html>