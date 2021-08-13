<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/bootstrap4/css/bootstrap.min.css';?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div class="col-lg-12">
    <h4 class="success">Thank you! Your payment was successful.</h4>
    <p>Item Name : <span><?php echo $item_name; ?></span></p>
    <p>Item Number : <span><?php echo $item_qty; ?></span></p>
    <p>TXN ID : <span><?php echo $txn_id; ?></span></p>
    <p>Amount Paid : <span>$<?php echo $payment_amt.' '.$currency_code; ?></span></p>
    <p>Payment Status : <span><?php echo $status; ?></span></p>
    <a href="<?php echo base_url().'index.php/home/cart'; ?>">Back to Cart</a>
</div> 
</body>
</html>
