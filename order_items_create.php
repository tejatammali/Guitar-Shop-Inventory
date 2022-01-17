<html>
<title>Create New Order Items</title>

<head>Create a new order items to be added to the database</head>

<body>
    <form action="order_items_script.php" method=post>
        <label for=order_id>Order ID # </label>
        <input type=text id=order_id name=order_id></br>
        <label for=product_id>Product ID # </label>
        <input type=text id=product_id name=product_id></br>
        <label for=item_price>Item Price: </label>
        <input type=number id=item_price name=item_price></br>
        <label for=discount_amount>Discount Amount: </label>
        <input type=number id=discount_amount name=discount_amount></br>
        <label for=quantity>Quantity: </label>
        <input type=text id=quantity name=quantity></br>
        <input type=submit value=Submit>
</body>

</html>