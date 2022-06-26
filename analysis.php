<?php 
 include 'inc/header.php';
 include 'inc/conn.php';

?>
  <div class="content-wrapper" >
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Doctors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
<section class="content">

  <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
  <div class="card card-primary">
              <div class="card-header">

                <h3 class="card-title">Quick Example</h3>
              </div>
 <div class="container addData my-5">
  <form class="text-center" action="index.php" method="post" style="width:900px; margin:auto; font-size:25px ">

        <div class="form-group">

              <label for="username"> Name</label>
              <input name="username" type="text" class="form-control" id="username">
        </div><br>
      <div class="form-group">

          <label for="exampleInputEmail1">Personal Id</label>
          <input name="personalid" type="text" class="form-control" id="exampleInputEmail1">
      </div><br>
        <div class="form-group">
          
         <label for="phone"> Phone</label>
         <input name="phone" type="text" class="form-control" id="phone">
        </div><br>
        <div class="form-group">
         <label for="birthdate"> Age</label>
         <input name="birthdate" type="numbers" class="form-control" id="birthdate">
        </div><br>
        <div class="form-group">

         <label for="gender"> Gender: &nbsp; &nbsp; &nbsp; </label> 
         <input type="radio" name="gender" value="male" id="gender">&nbsp;Male&nbsp; &nbsp;
         <input type="radio" name="gender" value="female" id="gender">&nbsp;Female
     </div><br>
        <div class="form-group">

         <label for="drname"> Doctor Name</label>
         <select name="drname" id="drname" class="form-control">
         <?php $qdoctors="SELECT * FROM doctors";
         $doctor=$conn->query($qdoctors);
         foreach($doctor as $dr){  ?>
         <option><?= $dr['name']?></option>
        <?php } ?> 
        </select>
     </div><br>
     <div class="form-group">
         <label for="testname"> Test Name</label>
         <select name="testname" id="testname" class="form-control">
        <?php $qtests="SELECT * FROM tests";
         $test=$conn->query($qtests);
         foreach($test as $t){  ?>
        <option><?= $t['name']?></option>
        <?php } ?>
       </select>
     </div><br>
     <div class="form-group">

       <label for="branchname"> Branch Name</label>
       <select name="branchname" id="branchname" class="form-control">
       <?php $qbranchs="SELECT * FROM branchs";
         $branch=$conn->query($qbranchs);
         foreach($branch as $b){  ?>
           
        <option><?= $b['name']?></option>
        <?php } ?>
        </select>
     </div><br>
    <div class="form-group">
     <label for="result">Result</label>
     <input name="result" type="text" class="form-control" id="result">
    </div><br>
   <div class="form-group">
    <label for="resultdate">Result Date</label>
    <input name="resultdate" type="date" class="form-control" id="resultdate">
    </div><br>
  <div class="form-group">
    <label for="description">Description</label>
     <input name="description" type="text" class="form-control" id="description">
    </div><br>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary form-control"> +Submit</button>
                </div>
 </form>
</div>              
</section>
   </div>
  <?php 
 include 'inc/footer.php'
 ?>