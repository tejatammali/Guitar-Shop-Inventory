<html>
<title>Create New Order Items</title>

<head>Create a new order items to be added to the database</head>

<body>
    <form action="order_script.php" method=post>
        <label for=order_id>Order ID # </label>
        <input type=text id=order_id name=order_id></br>
        <label for=customer_id>customers ID # </label>
        <input type=date id=order_date name=order_date></br>
        <label for=ship_amount>ship amount: </label>
        <input type=text id=ship_amount name=ship_amount></br>
        <label for=tax_amount>tax_amount: </label>
        <input type=text id=tax_amount name=tax_amount></br>
        <label for=ship_date>ship_date: </label>
        <input type=date id=ship_date name=ship_date></br>
        <label for=ship_address_id>ship_address_id: </label>
        <input type=text id=ship_address_id name=ship_address_id></br>
        <label for=card_type>card_type: </label>
        <input type=text id=card_type name=card_type></br>
        <label for=ship_number>card_number: </label>
        <input type=numeric id=card_number name=card_number></br>
        <label for=card_expires>card_expires: </label>
        <input type=date id=card_expires name=card_expires></br>
        <label for=billing_address>billing_address: </label>
        <input type=text id=billing_address name=billing_address></br>
        <input type=submit value=Submit>
</body>

</html>