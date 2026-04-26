<!DOCTYPE html>
<html>

<head>
<title>
Product Management
</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<center>
<h1>Product Management Page</h1>
</center>

<div class="container">

<p>Unit Price: <b>1000</b></p>

<label>Quantity:</label>
<input type="number" id="quantity" >

<br><br>

<label>Total Price:</label>
<input type="text" id="total" readonly>

</div>

<script>var unitPrice = 1000;

var quantityInput = document.getElementById("quantity");
var totalInput = document.getElementById("total");

quantityInput.addEventListener("input", calculateTotal);

function calculateTotal()
{
    var quantity = quantityInput.value;

    if(quantity < 0)
    {
        alert("Quantity cannot be negative");
        quantity = 0;
        quantityInput.value = 0;
    }

    var total = unitPrice * quantity;

    totalInput.value = total;

    if(total > 1000)
    {
        alert("Congratulations! You are eligible for a gift coupon.");
    }
}
    
</script>

</body>

</html>