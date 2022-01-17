<html>
    <?php
        include('connect.php');
        echo '<h2>List Categories</h2>
        <form action="categories_edit2" method="post">
        
        <p>Which category do you wish to edit?
        <select name="lname">';
        
        // ... <option> entries go in here
        // Build the query
        $query = "SELECT * FROM categories ORDER BY category_id";
        $result = @mysqli_query ($dbc, $query);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
        echo'<option
        value="'.$row['category_id'].'">'.$row['category_name'].'
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