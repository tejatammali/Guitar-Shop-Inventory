<html>
    <?php
        include('connect.php');
        echo '<h2>List Customers</h2>
        <form action="customers_edit2" method="post">
        
        <p>Which customer do you wish to edit?
        <select name="lname">';
        
         // ... <option> entries go in here
        // Build the query
        $query = "SELECT * FROM customers ORDER BY last_name";
        $result = @mysqli_query ($dbc, $query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
        echo'<option
        value="'.$row['last_name'].'">'.$row['first_name'].'
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