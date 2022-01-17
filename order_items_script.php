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
        <a href="address_create.php">Create New Entry</a>
    <?php

    //This File establishes the databse connection
    include('connect.php');

    // Assign the query string to the variable $query 
    $query = "SELECT * FROM order_items";

    // Run the query against the connection $dbc 
    $result = @mysqli_query($dbc, $query);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
    // Uncommenting above line results in loss of first table row

    echo "<table>";

    echo "<tr><td>Edit Item</td><td>Delete Item</td><td>Item ID</td>
        <td>Order ID</td><td>Product ID</td><td>Item Price</td>
        <td>Discount Amount</td><td>Quantity</td>
        </tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>
        <td><a href='order_items_edit.php'>Edit</a></td>
        <td><a href='order_items_edit.php'>Delete</a></td>";
        echo
        '<td>' . $row['item_id'] . '</td>
        <td>' . $row['order_id'] . '</td>
        <td>' . $row['product_id'] . '</td> 
        <td>' . $row['item_price'] . '</td>
        <td>' . $row['discount_amount'] . '</td>
        <td>' . $row['quantity'] . '</td>
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