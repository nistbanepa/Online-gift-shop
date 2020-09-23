<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="/Online-Store/css/styles.css">
</head>

<body>
    <form class="btn-cart">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age" required><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br><br>
        <label for="phone">Phone number:</label>
        <input type="text" name="phone" id="phone" required><br><br>
        <input type="radio" name="payment" id="paypal" value="paypal" checked>Pay pal</input>
        <input type="radio" name="payment" id="card" value="card">Credit card</input>
        <input type="radio" name="payment" id="esewa" value="esewa">E-Sewa</input>
        <input type="radio" name="payment" id="cash" value="cash">Cash</input>
        <button class="btn-sub" type="submit">Submit</button>
    </form>
</body>

</html>