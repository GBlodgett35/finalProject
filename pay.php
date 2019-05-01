<html>
<body>

Thank you <?php echo $_POST["fName"]; ?> for your order!<br>
An email has been sent to <?php echo $_POST["email"]; ?> confirming your order.
Your order number is <?php echo(rand(1000,10000000)); ?>
</body>
</html>