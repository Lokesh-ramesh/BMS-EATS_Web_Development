<?php 
    include('config.php');
    session_start();
    $result = $db->query('SELECT * FROM users_information order by name ASC');
    $data_record = $result->num_rows;
?>
<!DOCTYPE html> 
<html lang="en"> 
  <head> <title>Add user information</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- jQuery library -->
<!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <?php $apage = array('id'=>'','name'=>'');?>
        <script>var page_0 = <?php echo json_encode($apage)?></script>
        <h3><a data="page_0" class="model_form btn btn-sm btn-danger" href="#"><span class="glyphicon glyphicon-plus"></span> Add new record</a></h3>
      </div>
  </div>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
           <table class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>About You</th>
                    <th>Birthday</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($result) && ($data_record) > 0)  : $i=1; ?>
                    <?php  while ($users = mysqli_fetch_object($result)) { ?>

                        <tr class="<?=$users->id?>_del">
                            <td><?=$i;?></td>
                            <td><?=$users->name;?></td>
                            <td><?=$users->country;?></td>
                            <td><?=$users->email;?></td>
                            <td><?=$users->mobile;?></td>
                            <td><?=$users->about;?></td>
                            <td><?=$users->dob;?></td>
                            <script>var page_<?php echo $users->id ?> = <?php echo json_encode($users);?></script>
                            <td><a data="<?php echo 'page_'.$users->id ?>" class="model_form btn btn-info btn-sm" href="#"> <span class="glyphicon glyphicon-pencil"></span></a>
                            <a data="<?php echo  $users->id ?>" title="Delete <?php echo $users->name;?>" class="tip delete_check btn btn-info btn-sm "><span class="glyphicon glyphicon-remove"></span> </a>  
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
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-9665679251236729"
               data-ad-slot="9239985429"
               data-ad-format="auto"></ins>
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
    $(document).on('click','.model_form',function(){
        $('#form_modal').modal({
          keyboard: false,
          show:true,
          backdrop:'static'
        });
        var data = eval($(this).attr('data'));
        $('#id').val(data.id);
        $('#name').val(data.name);
        $('#country').val(data.country);
        $('#email').val(data.email);
        $('#about').val(data.about);
        $('#mobile').val(data.mobile);
        $('#dob').val(data.dob);
        if(data.id!="")
            $('#pop_title').html('Edit');
        else
            $('#pop_title').html('Add');
       
    });  
    $(document).on('click','.delete_check',function(){
      if(confirm("Are you sure to delete data")){
        var current_element = $(this);
        url = "add_edit.php";
        $.ajax({
        type:"POST",
        url: url,
        data: {ct_id:$(current_element).attr('data')},
        success: function(data) { //location.reload(); 
          $('.'+$(current_element).attr('data')+'_del').animate({ backgroundColor: "#003" }, "slow").animate({ opacity: "hide" }, "slow");
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
          <h4 class="modal-title"><i class="icon-paragraph-justify2"></i><span id="pop_title">Add</span> Users information</h4>
        </div>
        <!-- Form inside modal -->
        <form method="post" action="add_edit.php" id="cat_form">
          <div class="modal-body with-padding">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Name :</label>
                   <input type="text" name="name" id="name"  class="form-control required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Country :</label>
                   <input type="text" name="country" id="country" class="form-control required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Email :</label>
                   <input type="email" name="email" id="email"  class="form-control required email">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Mobile :</label>
                   <input type="text" name="mobile" id="mobile" class="form-control required number">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>About You :</label>
                   <textarea name="about" id="about" class="form-control required"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Birthday :</label>
                   <input type="date" id="dob" class="form-control required" name="dob">
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