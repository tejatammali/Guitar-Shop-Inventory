<html>
<title>Edit a product</title>

<head>Edit the current entry</br>
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <p>
        Please enter text only in the fields that you wish to update</br>
        If no text is entered in a field then its previous value(shown in the table)
        will be used</br></br>
        WARNING: Description MUST be entered every time,
         you can copy paste from below</br>
        <br>PLEASE USE CAUTION when updating primary or foreign keys</br>
        Updating an entry in one table will not change values in any other table.</br>
        <br>COLUMNS UNABLE TO BE EDITED:</br>
                    *Product ID</br>
                    *Date Added
    </p>
    <?php
        include('connect.php');
        $product_id=$_POST['product_ID'];
        $query = "SELECT product_id, category_id, product_code, product_name,
        description, list_price,discount_percent, date_added
        FROM products 
        WHERE product_id = $product_id";
        $result = @mysqli_query($dbc, $query);
        echo "<table>";
        echo "<tr><td>Product ID</td>
            <td>Category ID</td><td>Product Code</td><td>Product Name</td>
            <td>Description</td><td>List Price</td><td>Discount Percent</td>
            <td>Date Added</td>
            </tr>";
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //Assign the strings to be used
        $string1=$row['product_id'];
        $string2=$row['category_id'];
        $string3=$row['product_code'];
        $string4=$row['product_name'];
        $string5=$row['description'];
        $string6=$row['list_price'];
        $string7=$row['discount_percent'];
        $string8=$row['date_added'];
        
        
                echo "<tr>
                <td>" . $string1 . '</td>
                <td>' . $string2 . '</td>
                <td>' . $string3 . '</td> 
                <td>' . $string4 . '</td>
                <td>' . $string5 . '</td>
                <td>' . $string6 . '</td>
                <td>' . $string7 . '</td>
                <td>' . $string8 . '</td>
                </tr>';
        
        
        echo "<form action='products_update.php' method=post>";

        //Currently unable to edit product_id because it is primary key
        //From here down all code related to will be commented out
        /*
        echo "<label for=product_id>Product ID # </label>
            <input type=number id=product_id name=product_id placeholder=".
            $string1 . " value='". $string1 . "'></br>";

        */    
        //Replaced above code with code below
        echo "<input type='hidden' name='product_id' value='" . $product_id . "'/>";

        echo "<label for=category_id>Category ID # </label>
            <input type=number id=category_id name=category_id placeholder=".
            $string2 . " value='". $string2 . "'></br>";

        echo "<label for=product_code>Product Code: </label>
            <input type=text id=product_code name=product_code placeholder=".
            $string3 . " value='". $string3 . "'></br>";

        echo "<label for=product_name>Product Name: </label>
            <input type=text id=product_name name=product_name placeholder='".
            $string4 . "' value='". $string4 . "'></br>";
        
        echo "<label for=description>Description: </label>
            <textarea id=description name=description placeholder='".
            $string5 . "' size='500' value=" . $string5 . "></textarea></br>";

        echo "<label for=list_price>List Price: </label>
            <input type=number step=0.01 id=list_price name=list_price placeholder=".
            $string6. " value='". $string6 . "'></br>";

        echo "<label for=discount_percent>Discount Percent: </label>
            <input type=number step=0.01 id=discount_percent name=discount_percent placeholder=".
            $string7. " value='". $string7 . "'></br>";

        //Conversion issues prevented us from using datetime
        //Code has below has been commented out
        /*
        echo "<label for=date_added>Date Added: </label>
            <input type=datetime-local id=date_added name=date_added placeholder=".
            $string8. " value='". $string8 . "'></br>";
        */
        //Code below replaces code above to carry over old datetime
        echo "<input type='hidden' name='date_added' value='" . $string8 . "'/>";

        echo "<input type='hidden' name='previous_id' value='" . $product_id . "'/>";
        

        echo "<input type=submit value=Submit>";
        
        // Free up the resources.
        mysqli_free_result($result);
        // Close the database connection.
        mysqli_close($dbc);
    ?>
    </form>
    <a href='products_edit.php'> Cancel</a>
</body>

</html>