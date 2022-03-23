<html>
<body>
<form method="post" action="https://sandbox.payhere.lk/pay/checkout">
    <input type="hidden" name="merchant_id" value="1218595">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/ict_jobseeker_44/payment">
    <input type="hidden" name="cancel_url" value="http://localhost/ict_jobseeker_44/payment">
    <input type="hidden" name="notify_url" value="http://localhost/ict_jobseeker_44/payment">
    <br><br>Item Details<br><br>
<!--  order ID  -->
    <label for="order_id">Order ID</label>
    <input type="text" id="order_id" name="order_id" value="ItemNo12345"> <br>
<!--    items-->
    <label for="items">Item</label>
    <input type="text" id="items" name="items" value="Door bell wireless"><br>
<!--    currency-->
    <label for="currency">Currency</label>&Tab;&Tab;
    <label for="LKR">LKR</label>
    <input type="radio" id="LKR" name="currency" value="LKR" required>
    <label for="USD">USD</label>
    <input type="radio" id="USD" name="currency" value="USD"><br>
<!--    amount-->
    <label for="amount">amount</label>
    <input type="text" id="amount" name="amount" value="1000" required>

    <br><br>Customer Details<br><br>
<!--    first name-->
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" value="Saman"><br>
<!--    last name-->
    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name" value="Perera"><br>
<!--    email-->
    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="samanp@gmail.com"><br>
<!--    phone number-->
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" value="0771234567"><br>
<!--    address-->
    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="No.1, Galle Road"><br>
<!--    city-->
    <label for="city">City</label>
    <input type="text" name="city" value="Colombo"><br>

    <input type="hidden" name="country" value="Sri Lanka"><br><br>
    <input type="submit" value="Buy Now">
</form>
</body>
</html>
