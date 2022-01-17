<html>
<?php
include('connect.php');
echo '<h2>List Order Items</h2>
        <form action="orders_items_edit2.php" method="post">
        
        <p>Which order items do you wish to edit?
        <select name="item_ID">';

// ... <option> entries go in here
// Build the query
$query = "SELECT * FROM order_items ORDER BY item_id";
$result = @mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '<option
        value="' . $row['order_id'] . '">' . $row['item_id'] . '
        </option>';
}

echo '</select>
        </p>';

echo '<p><input type="submit" name="submit" value="Submit"
        /></p>
        <input type="hidden" name="submitted" value="TRUE" />
        </form>';
?>
<a href='products_script.php'>Cancel</a>
</html>