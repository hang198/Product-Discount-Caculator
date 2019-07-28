<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    label {
        width: 170px;
        display: inline-block;
    }

    input {
        width: 170px;
    }
</style>
<body>
<form method="post" action="display_discount.php">
    <h1>Product Discount Calculator</h1><br>
    <label>Product Description: </label>
    <input type="text" name="description"><br>
    <label>List Price: </label>
    <input type="number" name="list_price"><br>
    <label>Discount Percent: </label>
    <input type="number" name="discount_percent">(%)<br>
    <label></label>
    <input type="submit" value="Calculate Discount">
</form>
</body>
</html>