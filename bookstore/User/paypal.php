<?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="demo.php";
    </script>
    <?php
}
?>
<h1>Please wait we are transferring you in paypal....</h1>
<?php
$paypal_url = 'https://www.sandbox.paypal.com/';
$pay=$_SESSION["pay"]/60;
$pay=round($pay);
?>
<form action="<?php echo $paypal_url;?>/cgi-bin/webscr" method="post" name="buyCredits" id="buyCredits">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="amit_1266030690_per@gmail.com">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="item_name" value="payment for donate">
    <input type="hidden" name="item_number" value="">
    <input type="hidden" name="amount" value="<?php echo $pay; ?>">
    <input type="hidden" name="return" value="http://localhost/bookstore/user/success.php">
</form>
<script type="text/javascript">
    document.getElementById("buyCredits").submit();
</script>