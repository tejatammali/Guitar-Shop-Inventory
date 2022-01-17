<html>
    <title>Create New Address</title>
    <head>Create a new address to be added to the database</head>
    <body>
        <form action="addresses_script.php" method=post> 
            <label for=Customer_ID>Customer ID #: </label>
            <input type=text id=Customer_ID name=Customer_ID></br>
            <label for=line1>Line 1: </label>
            <input type=text id=line1 name=line1></br>
            <label for=line2>Line 2: </label>
            <input type=text id=line2 name=line2 ></br>
            <label for=city>City: </label>
            <input type=text id=city name=city></br>
            <label for=state>State: </label>
            <input type=text id=state name=state></br>
            <label for=zip>Zip Code #: </label>
            <input type=text id=zip name=zip></br>
            <label for=phone>Phone #: </label>
            <input type=tel id=phone name=phone></br>
            <input type=submit value=Submit>
            
         
    </body>
</html>