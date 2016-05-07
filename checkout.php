 <?php require_once("../resources/config.php"); ?>
    <?php require(TEMPLATE_FRONT.DS."header.php"); ?>


    <!-- Contact Section --> 
        <div class="container">
            <div class="row">
            <h3 class="text-center bg-danger"><?php display_message(); ?></h3>
                <h1>Checkout</h1>
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_cart">
              <input type="hidden" name="business" value="masum1201@gmail.com">
               <input type="hidden" name="currency_code" value="USD">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub-total</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php cart(); ?>
                        </tbody>
                    </table>
    <?php echo show_paypal(); ?>
                </form>
                <div class="col-xs-4 pull-right">
                    <h2>Cart Total</h2>
                    <table class="table table-bordered" cellspacing="0">
                        <tr class="cart-subtotal">
                            <th>Items</th>
                            <td><span class="amount">
                                <?php echo isset($_SESSION['item_quantity'])? $_SESSION['item_quantity']:$_SESSION['item_quantity']="0" ?>
                            </span></td>
                        </tr>
                        <tr class="shipping">
                            <th>Shipping and Handling</th>
                            <td>Free Shipping</td>
                        </tr>
                        <tr class="order-total">
                            <th>Order Total</th>
                            <td><strong><span class="amount">&#36;
                                <?php echo isset($_SESSION['item_total'])? $_SESSION['item_total']:$_SESSION['item_total']="0" ?>
                            </span></strong></td>
                        </tr>
                    </table>
                </div>
            </div>
 
     
thank_you.php?tx=12453&amt=345&cc=1201&st=Completed
       

         </div>
    <!-- /.container -->

    <div class="container">

        <hr class="star-primary">

   <?php require(TEMPLATE_FRONT.DS."footer.php"); ?>
   
   
   