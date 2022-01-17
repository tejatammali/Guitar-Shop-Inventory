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
    </head>
    <?php
        include('connect.php');

        //Assign Strings
        $string1=$_POST['category_id'];
        $string2=$_POST['product_code'];
        $string3=$_POST['product_name'];
        $string4=$_POST['description'];
        $string5=$_POST['list_price'];
        $string6=$_POST['discount_percent'];
        
        // Assign the query string to the variable $query 
        $query = "INSERT INTO products
        (category_id, product_code, product_name, 
        description, list_price, discount_percent, date_added)
        VALUES ($string1, '$string2', '$string3',
         '$string4', $string5, $string6, NOW())";

        //Code I got from w3 schools to update database
        // Create connection
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($conn->query($query) === TRUE) {
        echo "Entry CREATED successfully";
        } else {
        echo "Error CREATING record: " . $conn->error;
        }

        // Close the database connection.
        mysqli_close($dbc);

    ?>
    <form action='products_script.php' method=post>
        <input type=submit name=submit value="Return to table">
    </form>
</html>