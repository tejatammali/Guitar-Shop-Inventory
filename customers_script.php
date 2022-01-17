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
    $query = "SELECT * FROM customers";

    // Run the query against the connection $dbc 
    $result = @mysqli_query($dbc, $query);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
    // Uncommenting above line results in loss of first table row

    echo "<table>";

    echo "<tr><td>Edit Item</td><td>Delete Item</td><td>Customer ID</td>
        <td>Email Address</td><td>Password</td><td>First Name</td>
        <td>Last Name</td><td>Shipping Address ID</td><td>Billing Address ID</td>
        </tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>
        <td><a href='customers_edit.php'>Edit</a></td>
        <td><a href='customers_edit.php'>Delete</a></td>";
        echo
        '<td>' . $row['customer_id'] . '</td>
        <td>' . $row['email_address'] . '</td>
        <td>' . $row['password'] . '</td> 
        <td>' . $row['first_name'] . '</td>
        <td>' . $row['last_name'] . '</td>
        <td>' . $row['shipping_address_id'] . '</td>
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