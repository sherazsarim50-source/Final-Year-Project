<?php
include_once('../config/connect.php');
// include_once('secure.php')
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin - Users</title>

    <!-- vendor css
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet"> -->

    <!-- azia CSS -->
    <!-- <link rel="stylesheet" href="css/azia.css"> -->
  </head>

  
  <?php 
  include 'inc/header.php'; ?>
  <?php include 'inc/nav.php'; ?>

  <section id="content" style="margin-top: 53px;">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center" style="margin-bottom: -53px;">
						<h2>Users</h2>
						<!-- <p>You can order products from here</p> -->
					</div>

          <body class="az-light az-body">
    <!--header-start-->
    <?php // include_once('include/header.php'); ?>
    <!--header-end-->
    <div class="az-content az-content-dashboard-four">
      <div class="media media-dashboard">
        <div class="media-body">
          <div class="card card-dashboard-twelve mg-b-20">
            <div class="card-header">
              <!-- <h6 class="card-title">Users</h6> -->
            </div><!-- card-header -->
            <div class="card-body">
              <div class="row row-sm">
                <div class="col-md-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Zip Code</th>
                        <th>Mobile</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql_all="SELECT * FROM `usersmeta`";
                      $result_all=mysqli_query($connection, $sql_all);
                      while($row_all=mysqli_fetch_assoc($result_all))
                      {
                        ?>
                        <tr>
                          <td><?php echo $row_all['uid']; ?></td>
                          <td><?php echo $row_all['firstname']; ?></td>
                          <td><?php echo $row_all['lastname']; ?></td>
                          <td><?php echo $row_all['address1']; ?></td>
                          <td><?php echo $row_all['address2']; ?></td>
                          <td><?php echo $row_all['city']; ?></td>
                          <td><?php echo $row_all['state']; ?></td>
                          <td><?php echo $row_all['zip']; ?></td>
                          <td><?php echo $row_all['mobile']; ?></td>
                          <td>
                            <button class="btn btn-info edit-btn" data-toggle="modal" data-target="#edit_users" value="<?php echo $row_all['id']; ?>">Edit</button>
                            <button class="btn btn-danger del-btn" value="<?php echo $row_all['id']; ?>">Delete</button>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table><!--table-->
                </div><!--col-->
              </div><!--row-->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- media-body -->
      </div><!-- media -->
    </div><!-- az-content -->
    <!--edit-users-modal-->
<div id="edit_users" class="modal">
      <div class="modal-dialog wd-xl-800" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title mg-b-5">Edit User</h5>
            <p class="mg-b-20">Edit Detail</p>
            <form method="post" action="javascript:update_user()" id="edit_info">
             <div class="modal-body-embed"></div>
            </form>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
</div><!-- modal -->



				</div>
			</div>
		</div>
	</section>





   <!--footer-start-->
   <?php include 'inc/footer.php' ?>
   <!--footer-end-->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>


    <script src="js/azia.js"></script>
    
    <script>
      $(function(){
        'use strict'
      });
    </script>
     <script type="text/javascript">
      $("#users-main").addClass("active");
      $("#users-view").addClass("active");
    </script>
    <script type="text/javascript">
      $(".edit-btn").on("click",function(){
        var edit_id=$(this).val();
        $.ajax({
          method: 'POST',
          url: 'ajax/get_users_data.php',
          data: {
            "edit_id": edit_id
          },
          success: function(data)
          {
            //console.log(data);
            $(".modal-body-embed").html(data);
          }
        });
      });
    </script>
    <script type="text/javascript">
       function update_user()
      {
        var datastring = $("#edit_info").serialize();
        $.ajax({
            type: "POST",
            url: "ajax/update_users.php",
            data: datastring,
            success: function(data) {
              console.log(data);
              if(data=="Updated")
              {
                location.reload();
              }
              else
              {
                $("#error-place").text(data);
              }
            }
        });
      }
    </script>
    <script type="text/javascript">
      $(".del-btn").on("click",function(){
        if(confirm("Are you sure you want to Delete ?"))
        {
          var del_id=$(this).val();
          $.ajax({
            method: "POST",
            url: "ajax/del_users_data.php",
            data: {"del_id":del_id},
            success: function(data)
            {
              console.log(data);
              if(data==true)
              {
                location.reload();
              }
            }
          });
        }
      });
    </script>
  </body>
</html>
