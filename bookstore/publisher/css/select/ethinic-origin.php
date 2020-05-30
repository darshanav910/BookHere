<?php
session_start();
if(!isset($_SESSION["useremail"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>

    <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>Ethinic Origin | Muwaddammb</title>

    <?php include 'design.php'; ?>
    <link href="assets/css/jquery.multiselect.css" rel="stylesheet" type="text/css">
    <style>
        #form_margin
        {
            margin-left: 0px;
            margin-right: 0px;
            padding: 0px;
        }
    </style>


</head>

<body>
<form class="form-horizontal" name="form1" id="form1" action="" method="post">

<?php include 'header-menu.php';
include "sidebar.php";

?>

<!-- What we do --><!-- Clients -->

        <h3 class="title-2 uppercase text-center"><strong>Ethinic Origin</strong></h3>
        <br>

        <form class="form-horizontal" action="" method="post">

            <div class="form-group col-lg-6 col-lg-push-3 col-md-6 col-md-push-3">
                <select name="multicheckbox[]" id="ethinicorigin" multiple="multiple" class="4colactive" required aria-required="true">
                    <?php
                    include "connect.php";

                    $res = mysqli_query($link,"select distinct name from ethinic_origin order by id asc ");

                    while ($row = mysqli_fetch_array($res)) {

                        echo "<option value='$row[name]'>";
                        echo $row['name'];
                        echo "</option>";

                    }
                    ?>
                </select>
            </div>

            <div class="form-group" id="form_margin">
                <label for="inputheight" class="control-label col-lg-3 col-md-3"></label>

                <div class="col-lg-6">

                </div>
            </div>
        <input type="submit" class="btn btn-primary"
               name="submitethinic" id="submitethinic"
               value="Submit">
            </form>

        <?php
        if (isset($_POST["submitethinic"])) {

            include "connect.php";
            $aa="";
            $count=0;

            $box=$_POST['multicheckbox'];
            while (list ($key,$val) = @each ($box))
            {
                $count=$count+1;

                if($count==1)
                {
                    $aa=$val;
                }
                else
                {
                    $aa=$aa.",".$val;
                }

            }
            $date11=date("Y-m-d h:m:s");

            $date1=mysqli_real_escape_string($link,$date11);
            $ethinic_origin1=ing($link,$aa);

            mysqli_query($link, "update users set ethinic_origin='$ethinic_origin1',updated_at='$date1' WHERE id='$_SESSION[userid]'") or die(mysqli_error($link));

            ?>
            <script type="text/javascript">
                alert("Ethinic Origin Updated Successfully.");
            </script>
            <?php



        }
        ?>
        </div>
    </div>


<!-----
<div class="block-2-container section-container">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>
----->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="assets/js/jquery.multiselect.js"></script>

<script>

    $('select[multiple]').multiselect({
        columns: 2,
        placeholder: 'Select options',
        selectAll: true
    });

</script>
<!-- Footer -->
<?php include "footer.php"; ?>

</body>

</html>
