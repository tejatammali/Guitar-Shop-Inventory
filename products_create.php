<html>
<title>Create New Products</title>

<head>
    Create a new product to be added to the database</br>
</head>

<body>
    <br>The product_id and date_added will be assigned manually by the system</br>
    For a list of categories and their corresponding id, view the categories table</br></br>
    <form action="products_create2.php" method=post>
        <label for=category_id>Category ID # </label>
        <input type=number id=category_id name=category_id></br>
        <label for=product_code>Product Code: </label>
        <input type=text id=product_code name=product_code></br>
        <label for=product_name>Product Name: </label>
        <input type=text id=product_name name=product_name></br>
        <label for=description>Description: </label>
        <textarea id=description name=description></textarea></br>
        <label for=list_price>List Price: </label>
        <input type=number step=0.01 id=list_price name=list_price></br>
        <label for=discount_percent>Discount Percent: </label>
        <input type=number step=0.01 id=discount_percent name=discount_percent></br>
        <input type=submit value=Submit>
</body>

</html>