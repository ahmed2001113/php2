<?php 
 include 'inc/header.php';
 include 'inc/conn.php' ;

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $username = $_POST['username'];
 $personalid = $_POST['personalid'];
  $phone = $_POST['phone'];
  $birthdate = $_POST['birthdate'];
 $gender = $_POST['gender'];
  $drname = $_POST['drname'];
  $testname = $_POST['testname'];
  $branchname = $_POST['branchname'];
  $result = $_POST['result'];
  $resultdate = $_POST['resultdate'];
  $description = $_POST['description'];
  $qqq = "INSERT INTO analysis( username , personalid , phone , birthdate , gender, drname , testname ,branchname , result, resultdate , description ,date)
 VALUES ('$username' , '$personalid','$phone' , '$birthdate' , '$gender' , '$drname','$testname' ,'$branchname' , '$result', '$resultdate' , '$description'  , Now())";  
     $q= $conn->query($qqq);
    } 

     if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $qqq = "DELETE FROM analysis where id = $id";
      $delete= $conn->query($qqq);
      }
    

?>
<style>
  .p{
    width:100%;
    display:flex;
    flex-wrap:wrap;
    font-size:25px;
margin-bottom:20px;
}
  .ch1{
    width:50%;
  padding-left:20px;
}
.ch2{
  width:50%;
  padding-left:20px;
  }
.ch3{
  width:100% ;
  padding:20px;
  text-align:center;
  }
.ch3 span{
 margin:20px 20px;
 }

</style>
   <div class="content-wrapper">
     <div class="content-header" >
       <?php $qqq="SELECT * from analysis";
$q = $conn->query($qqq);
foreach($q as $a ){ ?>

    <div class="card text-white bg-dark mb-3">
    <div class="p">
  <div class="ch1">
<span>Id ==></span> <span><?= $a['id']?></span><br><br> 
<span>Name ==></span> <span><?= $a['username']?></span><br><br>
<span>Personal Id ==></span> <span><?= $a['personalid']?></span><br><br>
<span>Phone ==></span> <span><?= $a['phone']?></span><br><br>
<span>Age ==></span> <span><?= $a['birthdate']?></span><br><br>
</div>
<div class="ch2">
<span>Gender ==></span> <span><?= $a['gender']?></span><br><br>
<span>Dr.Name ==></span> <span><?= $a['drname']?></span><br><br>
<span>T.Name ==></span> <span><?= $a['testname']?></span><br><br>
<span>B.Name Id ==></span> <span><?= $a['branchname']?></span><br><br>
</div>
<div class="ch3">
<span>Result</span> <span><?= $a['result']?></span>
  <span>Result Date</span> <span><?= $a['resultdate']?></span>
  <span>Date</span> <span><?= $a['date']?></span><br><br>
  <span>Description</span> <p><?= $a['description']?></p>
  <div style="width:90%; margin:auto;">
    <a href="index.php?delete=<?= $a['id'] ?>" class="btn btn-danger text-center"><i class="fa fa-trash"></i></a>
  </div>
  <br>
<div style="height:20px; width:100% ; background-color:#1b222c;"></div>

</div>
</div>


<?php } ?>
</div>
</div>

<?php 
 include 'inc/footer.php';
 ?>
<!-- 

  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Dark card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
-->