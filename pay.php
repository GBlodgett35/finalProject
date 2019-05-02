<!-- IS 270 Final Project
Greg Blodgett, Ethan Bond, Joe Faith, HyeJin Moon, & David Taylor -->


<!--For when the user submits the form for the payment. 
This form will thank them for their order and have a button to return to the main page
-->


<html>
<body>

Thank you <?php echo $_POST["fName"]; ?> for your order!<br>
An email has been sent to <?php echo $_POST["email"]; ?> confirming your order.
Your order number is <?php echo(rand(1000,10000000)); ?>
<a href="index.html">Return to home</a>

</body>
</html>