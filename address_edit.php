<html>
    <?php
        include('connect.php');
        echo '<h2>List of addresses</h2>
        <form action="address_edit2" method="post">

        <p>Which addressess do you wish to edit?
        <select name="address">';

         // ... <option> entries go in here
        // Build the query
        $query = "SELECT * FROM addresses ORDER BY customer_id";
        $result = @mysqli_query ($dbc, $query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
        echo'<option
        value="'.$row['state'].'">'.$row['line1'].'
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