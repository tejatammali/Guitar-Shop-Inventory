<html>
    <?php
        include('connect.php');
        echo '<h2>List of orders</h2>
        <form action="order_edit2" method="post">

        <p>Which orders do you wish to edit?
        <select name="order">';

         // ... <option> entries go in here
        // Build the query
        $query = "SELECT * FROM orders ORDER BY order_date";
        $result = @mysqli_query ($dbc, $query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
        echo'<option
        value="'.$row['order_date'].'">'.$row['order_id'].'
        </option>';
        }

        echo '</select>
        </p>';

        echo '<p><input type="submit" name="submit" value="Submit"
        /></p>
        <input type="hidden" name="submitted" value="TRUE" />
        </form>';


    ?>
</html>