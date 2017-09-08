<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lead Generation</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>js/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

  
      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item active">Lead Detail Page</li>
        </ol>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
           <a href="<?php echo base_url()?>lead/lead_listing">
           <button type="button" class="btn btn-primary">Back</button>
           </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email </th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Home square footage</th>
                    <th>Generate Lead Date</th>
                    
                  </tr>
                </thead>

                <tbody>

                <?php  foreach($record->result() as $row){?>
                
                  <tr>
                    <td><?php echo $row->first_name?></td>
                    <td><?php echo $row->last_name?></td>
                    <td><?php echo $row->email_address?></td>
                    <td><?php echo $row->address?></td>
                    <td><?php echo $row->phone_number?></td>
                    <td><?php echo $row->home_sqf?></td>

                    <td><?php echo date('Y-m-d',strtotime($row->first_name))?></td>
                    
                  </tr>
               

                <?php }?>
                 
                </tbody>
              </table>
            </div>
          </div>
         
        </div>

      </div>
      <!-- /.container-fluid -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/popper/popper.min.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>js/jquery-easing/jquery.easing.min.js"></script>
    
    <script src="<?php echo base_url()?>js/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>js/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>js/sb-admin.js"></script>

  </body>

</html>
