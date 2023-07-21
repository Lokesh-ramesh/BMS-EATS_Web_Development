<?php 
    include('config.php');
    session_start();
    $result = $db->query('SELECT * FROM products ');
    $data_record = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add product information</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include('navbar.php');?>
    <div class="row">

        <div class="col-md-4" style="margin-left:250px;">
            <h2>PRODUCTS</h2>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4" style="margin-left:250px;MARGIN-BOTTOM:5PX;">
            <?php $apage = array('id'=>'','pid'=>'');?>
            <script>
            var page_0 = <?php echo json_encode($apage)?>
            </script>
            <h3><a data="page_0" class="model_form btn btn-sm btn-danger" href="#"><span
                        class="glyphicon glyphicon-plus"></span> Add new record</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>PRODUCT_ID</th>
                        <th>HOTEL_ID</th>
                        <th>PRODUCT_NAME</th>
                        <th>PRODUCT_IMAGE</th>
                        <th>OLD_PRICE</th>
                        <th>NEW_PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($result) && ($data_record) > 0)  : $i=1; ?>
                    <?php  while ($users = mysqli_fetch_object($result)) { ?>

                    <tr class="<?=$users->id?>_del">
                        <td><?=$users->pid;?></td>
                        <td><?=$users->hid;?></td>
                        <td><?=$users->product_name;?></td>
                        <td><?=$users->product_image;?></td>
                        <td><?=$users->old_price;?></td>
                        <td><?=$users->new_price;?></td>
                        <script>
                        var page_<?php echo $users->id ?> = <?php echo json_encode($users);?>
                        </script>
                        <td><a data="<?php echo 'page_'.$users->id ?>" class="model_form btn btn-info btn-sm" href="#">
                                <span class="glyphicon glyphicon-pencil"></span></a>
                            <a data="<?php echo  $users->id ?>" title="Delete <?php echo $users->pid;?>"
                                class="tip delete_check btn btn-info btn-sm "><span
                                    class="glyphicon glyphicon-remove"></span> </a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                    <?php else : echo '<tr><td colspan="8"><div align="center">-------No record found -----</div></td></tr>'; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php
              if(isset($_SESSION['flash_msg'])) :  
               $message = $_SESSION['flash_msg'];
               echo $error= '<div class="alert alert-success" role="alert">
               <span class="glyphicon glyphicon-envelope"></span> <strong>'.$message.'</strong> </div>';
               unset($_SESSION['flash_msg']);
              endif;
          ?>


            <!-- Ads and more  -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- header_responsive_ads -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9665679251236729"
                data-ad-slot="9239985429" data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>


        </div>
        <div class="col-md-2">

        </div>
    </div>



    <!-- End -->
</body>

</html>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on('click', '.model_form', function() {
        $('#form_modal').modal({
            keyboard: false,
            show: true,
            backdrop: 'static'
        });
        var data = eval($(this).attr('data'));
        console.log(data);
        $('#id').val(data.id);
        $('#pid').val(data.pid);
        $('#hid').val(data.hid);
        $('#product_name').val(data.product_name);
        $('#product_image').val(data.product_image);
        $('#new_price').val(data.new_price);
        $('#old_price').val(data.old_price);
        if (data.id != "")
            $('#pop_title').html('Edit');
        else
            $('#pop_title').html('Add');

    });
    $(document).on('click', '.delete_check', function() {
        if (confirm("Are you sure to delete data")) {
            var current_element = $(this);
            console.log($(current_element).attr('data'));
            url = "add_p.php";
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    ct_id: $(current_element).attr('data')
                },
                success: function(data) {
                    location.reload();
                    $('.' + $(current_element).attr('data') + '_del').animate({
                        backgroundColor: "#003"
                    }, "slow").animate({
                        opacity: "hide"
                    }, "slow");
                }
            });
        }
    });
});
</script>


<!-- Form modal -->
<div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-paragraph-justify2"></i><span id="pop_title">Add</span> Products
                    information</h4>
            </div>
            <!-- Form inside modal -->
            <form method="post" action="add_p.php" id="cat_form">
                <div class="modal-body with-padding">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>pid :</label>
                                <input type="text" name="pid" id="pid" class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>hid :</label>
                                <input type="text" name="hid" id="hid" class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>product_name :</label>
                                <input type="text" name="product_name" id="product_name" class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>product_image :</label>
                                <input type="text" name="product_image" id="product_image"
                                    class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>New price :</label>
                                <input type="text" name="new_price" id="new_price" class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Old price :</label>
                                <input type="text" name="old_price" id="old_price" class="form-control required">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                    <span id="add">
                        <input type="hidden" name="id" value="" id="id">
                        <button type="submit" name="form_data" class="btn btn-primary">Submit</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /form modal -->