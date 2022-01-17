<html>
<title>Edit a order item</title>

<head>Edit the current entry</head>

<body>
    <?php
    include('connect.php');
    $item_id = $_POST['item_ID'];
    $query = "SELECT * FROM order_items WHERE item_ID = $item_id";
    $result = @mysqli_query($dbc, $query);
    echo "<table>";

    echo "<table>";

    echo "<tr><td>Edit Item</td><td>Delete Item</td>
        <td>Order ID</td><td>Product ID</td><td>Item Price</td>
        <td>Discount Amount</td><td>Quantity</td>
        </tr>";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>
        <td><a href='order_items_edit.php'>Edit</a></td>
        <td><a href='order_items_edit.php'>Delete</a></td>";
        echo
        '<td>' . $row['order_id'] . '</td>
        <td>' . $row['product_id'] . '</td> 
        <td>' . $row['item_price'] . '</td>
        <td>' . $row['discount_amount'] . '</td>
        <td>' . $row['quantity'] . '</td>
        </tr>';
    }
    /*
    echo "<form action='products_script.php' method=post>
        <label for=category_id>Category ID # </label>
        <input type=text id=category_id name=category_id></br>
        <label for=product_code>Product Code: </label>
        <input type=text id=product_code name=product_code></br>
        <label for=product_name>Product Name: </label>
        <input type=text id=product_name name=product_name></br>
        <label for=description>Description: </label>
        <input type=text id=description name=description></br>
        <label for=list_price>List Price: </label>
        <input type=text id=list_price name=list_price></br>
        <label for=discount_percent>Discount Percent: </label>
        <input type=text id=discount_percent name=discount_percent></br>
        <label for=date_added>Date Added: </label>
        <input type=text id=date_added name=date_added></br>
        <input type=submit value=Submit>"
    */
    ?>
</body>

</html>