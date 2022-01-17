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
    $query = "SELECT * FROM categories";

    // Run the query against the connection $dbc 
    $result = @mysqli_query($dbc, $query);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
    // Uncommenting above line results in loss of first table row

    echo "<table>";

    echo "<tr><td>Edit Item</td><td>Delete Item</td><td>Category ID</td>
        <td>Category Name</td></tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>
        <td><a href='categories_edit.php'>Edit</a></td>
        <td><a href='categories_edit.php'>Delete</a></td>";
        echo
        '<td>' . $row['category_id'] . '</td>
        <td>' . $row['category_name'] . '</td>
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