<?php
    include "header.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cart.css">
    <title>Cart</title>
</head>
<body>
    <div class="cart-page">
        <div class="cart-main-content">
            <div class="cart-content">
                <div class="title-box">
                    <h1>Shopping Cart</h1>
                    <p>Here you can see your coffees you want to order</p>
                </div>
                <div class="cart-coffe-content">
                    <div class="cart-coffe-title">
                        <h1>Cart</h1>
                    </div>

                    <div class="cart-coffe-list">
                        <div class="cart-coffe-card">
                            <div class="coffe-card-image">
                                <img src="../images/Latte_Coffe.jpg" alt="coffe-img">
                            </div>

                            <div class="coffe-card-info-container">
                                <div class="coffe-card-info">
                                    <div class="coffe-name-price">
                                        <h1>Caffe latte</h1>
                                        <h3>IDR 40.000</h3>
                                    </div>
    
                                    <div class="coffe-category">
                                        <p>Coffe</p>
                                    </div>
    
                                    <div class="coffe-qty">
                                        <p>Quantity: </p>
                                    </div>
                                </div>

                                <div class="coffe-delete-btn">
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="cart-coffe-card">
                            <div class="coffe-card-image">
                                <img src="../images/Latte_Coffe.jpg" alt="coffe-img">
                            </div>

                            <div class="coffe-card-info-container">
                                <div class="coffe-card-info">
                                    <div class="coffe-name-price">
                                        <h1>Caffe latte</h1>
                                        <h3>IDR 40.000</h3>
                                    </div>
    
                                    <div class="coffe-category">
                                        <p>Coffe</p>
                                    </div>
    
                                    <div class="coffe-qty">
                                        <p>Quantity: </p>
                                    </div>
                                </div>

                                <div class="coffe-delete-btn">
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="summary-content">
                <div class="summary-title">
                    <h1>Summary</h1>
                </div>

                <div class="summary-sub-tax">
                    <div class="summary-sub">
                        <h3>Subtotal:</h3>
                        <h3>IDR 150.000</h3>
                    </div>
                    <div class="summary-tax">
                        <h3>Estimated Tax:</h3>
                        <h3>IDR 2.000</h3>
                    </div>
                </div>

                <div class="summary-total">
                    <h3>Total:</h3>
                    <h3>IDR 152.000</h3>
                </div>

                <div class="summary-button">
                    <a href="checkout.php">Order</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include "footer.php";
?>