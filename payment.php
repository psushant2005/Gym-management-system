
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment.css">

</head>
<body>

<div class="container">
    <form action="connect.php" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Full Name" id="fullname" name="fullname">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Email" id="email" name="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Address" id="address" name="address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="City" id="city" name="city">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="State" id="state" name="state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="number" placeholder="Zip Code" id="zipcode" name="zipcode" maxlength="6">
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card.jpeg" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Name on card" id="namecard" name="namecard">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="Card number" id="number" name="number">
                </div>
                <div class="inputBox">
                    <span>expiry date :</span>
                    <input type="date" placeholder="Expiry date" id="Expdate" name="Expdate">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Amount :</span>
                        <input type="number" placeholder="Amount" id="Amount" name="Amount">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="CVV" id="cvv" name="cvv">
                    </div>
                </div>
            </div>
        </div>
        
        <a href="index.php"><input type="submit" value="proceed to checkout" class="submit-btn" ></a>
    </form>
</div>    
    
</body>
</html>