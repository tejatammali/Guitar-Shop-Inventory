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
    $query = "SELECT * FROM orders";

    // Run the query against the connection $dbc 
    $result = @mysqli_query($dbc, $query);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
    // Uncommenting above line results in loss of first table row

    echo "<table>";

    echo "<tr><td>Edit Item</td><td>Delete Item</td><td>Order ID</td>
        <td>Customer ID</td><td>Order Date</td><td>Ship Amount</td>
        <td>Tax Amount</td><td>Ship Date</td><td>Ship Address ID</td>
        <td>Card Type</td><td>Card Number</td><td>Card Expires</td>
        <td>Billing Address ID</td>
        </tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>
        <td><a href='orders_edit.php'>Edit</a></td>
        <td><a href='orders_edit.php'>Delete</a></td>";
        echo
        '<td>' . $row['order_id'] . '</td>
        <td>' . $row['customer_id'] . '</td>
        <td>' . $row['order_date'] . '</td> 
        <td>' . $row['ship_amount'] . '</td>
        <td>' . $row['tax_amount'] . '</td>
        <td>' . $row['ship_date'] . '</td>
        <td>' . $row['ship_address_id'] . '</td>
        <td>' . $row['card_type'] . '</td>
        <td>' . $row['card_number'] . '</td>
        <td>' . $row['card_expires'] . '</td>
        <td>' . $row['billing_address_id'] . '</td>
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