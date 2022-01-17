<html>

<head>
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    <form action='project_index.html' method=post>
        <input type=submit name=submit value="Return to Index">
    </head>
    <body>
        <a href="products_create.php">Create New Entry</a>
    <?php

    //This File establishes the databse connection
    include('connect.php');

    // Assign the query string to the variable $query 
    $query = "SELECT * FROM products";

    // Run the query against the connection $dbc 
    $result = @mysqli_query($dbc, $query);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
    // Uncommenting above line results in loss of first table row

    echo "<table>";

    echo "<tr><td>Edit Item</td><td>Delete Item</td><td>Product ID</td>
        <td>Category ID</td><td>Product Code</td><td>Product Name</td>
        <td>Description</td><td>List Price</td><td>Discount Percent</td>
        <td>Date Added</td>
        </tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>
        <td><a href='products_edit.php'>Edit</a></td>
        <td><a href='products_delete.php'>Delete</a></td>";
        echo
        '<td>' . $row['product_id'] . '</td>
        <td>' . $row['category_id'] . '</td>
        <td>' . $row['product_code'] . '</td> 
        <td>' . $row['product_name'] . '</td>
        <td>' . $row['description'] . '</td>
        <td>' . $row['list_price'] . '</td>
        <td>' . $row['discount_percent'] . '</td>
        <td>' . $row['date_added'] . '</td>
        </tr>';
       
    }

    echo '</table>';

    // Free up the resources.
    mysqli_free_result($result);
    // Close the database connection.
    mysqli_close($dbc);
    ?>
    
</body>

</html>