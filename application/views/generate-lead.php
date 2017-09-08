<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-register mx-auto mt-5">
        <div class="card-header">
          Generate Lead
        </div>
        <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">

          <?php if($this->session->userdata('sessionMessage')!=''){?>
		  <div style="padding:20px; color:#FF0000; text-align:center; font-weight:bold"><?php echo $this->session->userdata('sessionMessage'); $this->session->unset_userdata('sessionMessage');?></div>
		  <?php }?>

          	<?php if(validation_errors()!=''){ ?>
          	<div style="padding-left:20px; color:#FF0000; font-weight:bold">
			  <?php echo validation_errors(); ?>
			</div><?php  }?>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">First name</label>
                  <input type="text" class="form-control" name="first_name" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter first name">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputLastName">Last name</label>
                  <input type="text" class="form-control" name="last_name" id="exampleInputLastName" aria-describedby="nameHelp" placeholder="Enter last name">
                </div>
              </div>
            </div>

			<div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">Email Address</label>
                  <input type="email" class="form-control" name="email_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="col-md-6">
                  <label for="phonenumber">Phone Number</label>
                  <input type="text" class="form-control" name="phone_number" id="phonenumber" aria-describedby="nameHelp" placeholder="Enter phone Number">
                </div>
              </div>
            </div>



            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <textarea class="form-control" name="address"></textarea>
             
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Home Square Footage</label>
              <input type="text" class="form-control" name="home_sqf" id="home_sqf" placeholder="Enter Home Sqf">
            </div>


            
            <button type="submit" class="btn btn-primary btn-block">submit Lead</button>
          </form>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/popper/popper.min.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

  </body>

</html>
