<?php
if (count($_POST) > 0) {
    require_once "soofa-php-package/src/soofa.php";

    //Initialize Soofa class
    $soofa = new \soofa\Soofa\Soofa(5005, "1zjmqsomeaxx8j8nqrn3t9oc1ee4ig");

    //Check if the transaction exists using the posted transaction id(tid)
    $soofa->find($_POST["tid"]);
    //Retrieve the transaction details
    $result = $soofa->getTransaction();

    //Transaction properties
    $transaction_status = $result[0]->status;
    $transaction_transaction_id = $result[0]->tid;
    $transaction_receipt_number = $result[0]->receipt_no;
    $transaction_sender_currency = $result[0]->sender_currency;
    $transaction_reference = $result[0]->reference;
    $transaction_amount_paid = $result[0]->gross_amount;
    $transaction_received_amount = $result[0]->net_amount;
    $transaction_sender = $result[0]->sender;

    //Save transaction details to your db

    $msg = "Payment successful.Transaction ID is ".$result[0]->tid;
}

?>

<html>
  <head>
    <!-- General Settings -->
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="en-us" />

    <!-- Meta Tags -->
    <title>Soofa Pay / PHP Demo</title>

    <!-- Static Assets -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    
  
  </head>
  <body>
  <?php
if (@$msg!="") { ?>
<div class="row">
    <div class="col-md-12">
    <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">x</button>
            <p class="text-center"><?php echo $msg; ?></p>
        </div>
        <?php }?>
    </div>
</div>


<div class="container-fluid">
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <img src="./public/14.jpg" class="img-fluid" alt="" />
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Content-->
          <div class="p-4">
            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1"></span>
              </a>
              <a href="">
                <span class="badge blue mr-1"></span>
              </a>
              <a href="">
                <span class="badge red mr-1"></span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1"> </span>
              <span>Ksh.10</span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor
              suscipit libero eos atque quia ipsa sint voluptatibus! Beatae sit
              assumenda asperiores iure at maxime atque repellendus maiores quia
              sapiente.
            </p>

            <form
             id="checkout"
              class="d-flex justify-content-center soofa"
              method="POST"
              action="index.php"
            >
              <input type="hidden" value="Huawei Y9" name="added_product" />
              <input type="hidden" value="10" name="amount" />
              <input type="text" name="reference" value="PHP Demo" hidden />
              <input type="text" name="tid" value="" hidden />
              <button
                class="btn btn-primary btn-md my-0 p qbn-submit"
                type="button"
                name="add-to-cart"
              >
                Proceed to pay
              </button>
              </form>
          </div>
          <!--Content-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

      <hr />

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">
        <!--Grid column-->
        <div class="col-md-6 text-center">
          <h4 class="my-4 h4"></h4>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
            suscipit modi sapiente illo soluta odit voluptates, quibusdam
            officia. Neque quibusdam quas a quis porro? Molestias illo neque eum
            in laborum.
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
          <img src="./public/11.jpg" class="img-fluid" alt="" />
          <div class="text-center">
            <p class="lead">
              <span class="mr-1"> </span>
              <span>Ksh.5</span>
            </p>
            <form
             id="checkout"
              class="d-flex justify-content-center soofa"
              method="POST"
              action="index.php"
            >
              <input type="hidden" value="Huawei Y9" name="added_product" />
              <input type="hidden" value="5" name="amount" />
              <input type="text" name="reference" value="PHP Demo" hidden />
              <input type="text" name="tid" value="" hidden />
              <button
                class="btn btn-primary btn-md my-0 p qbn-submit"
                type="button"
                name="add-to-cart"
              >
                Proceed to pay
              </button>
              </form>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
          <img src="./public/12.jpg" class="img-fluid" alt="" />
          <div class="text-center">
            <p class="lead">
              <span class="mr-1"> </span>
              <span>Ksh.9</span>
            </p>
            <form
             id="checkout"
              class="d-flex justify-content-center soofa"
              method="POST"
              action="index.php"
            >
              <input type="hidden" value="Huawei Y9" name="added_product" />
              <input type="hidden" value="9" name="amount" />
              <input type="text" name="reference" value="PHP Demo" hidden />
              <input type="text" name="tid" value="" hidden />
              <button
                class="btn btn-primary btn-md my-0 p qbn-submit"
                type="button"
                name="add-to-cart"
              >
                Proceed to pay
              </button>
              </form>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
          <img src="./public/13.jpg" class="img-fluid" alt="" />
          <div class="text-center">
            <p class="lead">
              <span class="mr-1"> </span>
              <span>Ksh.7.5</span>
            </p>
            <form
             id="checkout"
              class="d-flex justify-content-center soofa"
              method="POST"
              action="index.php"
            >
              <input type="hidden" value="Huawei Y9" name="added_product" />
              <input type="hidden" value="7.5" name="amount" />
              <input type="text" name="reference" value="PHP Demo" hidden />
              <input type="text" name="tid" value="" hidden />
              <button
                class="btn btn-primary btn-md my-0 p qbn-submit"
                type="button"
                name="add-to-cart"
              >
                Proceed to pay
              </button>
              </form>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  </main>
  <script
    id="qbn"
    src="https://checkout.soofapay.com/v1/soofa.min.js"
    type="text/javascript"
    data-till="5005"
  ></script>
</div>
</body>
</html>