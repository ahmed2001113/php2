<?php
$id = $_GET['id'];
 include 'inc/header.php';
 include 'inc/conn.php';
 if($_SERVER['REQUEST_METHOD'] == 'POST'){  
  $id=$_POST['id'];
  $tname=$_POST['tname'];
  $q="UPDATE tests SET name = '$tname' , date=Now() where id = $id ";
  $update= $conn->query($q);
 }
  
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Tests</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php 
                  $q =" SELECT * FROM tests where id = $id ";
                  $upp=$conn->query($q);
                  foreach($upp as $u){?>
              <form action="test.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input name="tname"value="<?=$u['name'] ?>" type="text" class="form-control"  placeholder="Enter T.name">
                    <input name="id" value=<?= $u['id']?> type="hidden" class="form-control" >
                  </div>
 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary form-control">Up Date</button>
                </div>
              </form>
              <?php } ?>
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php 
 include 'inc/footer.php'
 ?>