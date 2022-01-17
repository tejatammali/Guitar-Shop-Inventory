<html>
    <?php
    include('connect.php');
    echo '<h2>List Product Items</h2>
            <form action="products_delete2.php" method="post">
            
            <p>Which product do you wish to delete?
            <select name="product_ID">';

    // ... <option> entries go in here
    // Build the query
    $query = "SELECT * FROM products ORDER BY product_id";
    $result = @mysqli_query($dbc, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<option
            value="' . $row['product_id'] . '">' . $row['product_name'] . '
            </option>';
    }

    echo '</select>
            </p>';

    echo '<p><input type="submit" name="delete" value="Delete"
            /></p>
            <input type="hidden" name="submitted" value="TRUE" />
            </form>';
    // Free up the resources.
    mysqli_free_result($result);
    // Close the database connection.
    mysqli_close($dbc);
    ?>

    <a href='products_script.php'>Cancel</a>
</html>