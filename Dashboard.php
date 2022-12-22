<?php
include "header.php";
if(!isset($_SESSION["teacher_name"])){
    echo "<script>window.location.href='index.php';</script>";
    exit;
}
if(isset($_POST["AddSubject"])){
$_SESSION["subject"]= $_POST["subject"];
}
if(isset($_POST["RemoveSubject"])){
unset($_SESSION["subject"]);
}

if(isset($_POST["AddQuestion"])){
extract($_POST);
$sql = "INSERT INTO question (question, A, B, C, D, ans, subject) VALUES ('$question', '$A', '$B', '$C', '$D', '$ans', '$sub')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Added Successfully');</script>";
}else{
    echo "<script>alert('Internal Server Error');</script>";   
}
}
?>

<style>
@media screen and (max-width:720px){
.navbar{
flex-direction:column-reverse;
justify-content:flex-start;
padding:10px 0px 0px 0px;
}
.navbar ul {
width:100%;
margin:0;
}
.navbar ul li{
width:100%;
text-align:left;
display:block;
margin:0;
}
.navbar ul li a{
width:100%;
text-align:left;
display:block;
margin:0;
padding:7px 0px 7px 10px;
}
}
</style>
<div class="navbar">
<ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Dashboard.php">Add Question</a></li>
        <li><a href="View-Question.php">View Question</a></li>
        <li><a href="Dashboard-Result.php">View Result</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <span>
        <?php 
       if(isset($_SESSION["teacher_name"])){
        echo "Welcome: ".$_SESSION["teacher_name"];
       }
       
       ?>
    </span>
</div>

<div class="box2">
 <form action="" method="POST">
     <h5 class="text-center text-uppercase">Add Question</h5>
  <div class="form-group">
    <label>Enter Subject</label>
    <input type="text" class="form-control" value="<?php if(isset($_SESSION["subject"])){ echo $_SESSION["subject"]; } ?>" name="subject" placeholder="Enter Subject" 
    <?php if(isset($_SESSION["subject"])){ echo "readonly"; } ?>
    required>
    </div>
  <?php if(isset($_SESSION["subject"])){ 
      echo '<button type="submit" name="RemoveSubject" class="btn">Remove</button>';
       }else{
           echo '<button type="submit" name="AddSubject" class="btn">Add</button>';
       } ?>

<?php if(isset($_SESSION["subject"])){ 
    ?>
</form> 
<form action="" method="POST"> 
  <div class="form-group mt-4">
    <label>Enter Question</label>
    <input type="text" class="form-control"  name="question" placeholder="Enter Question" required>
    </div>

    <div class="row">
    <div class="col-md-3">
    <label>Enter Option A</label>
    <input type="text" class="form-control"  name="A" placeholder="Enter Option" required>
    </div>
    <div class="col-md-3">
    <label>Enter Option B</label>
    <input type="text" class="form-control"  name="B" placeholder="Enter Option" required>
    </div>
    <div class="col-md-3">
    <label>Enter Option C</label>
    <input type="text" class="form-control"  name="C" placeholder="Enter Option" required>
    </div>
    <div class="col-md-3">
    <label>Enter Option D</label>
    <input type="text" class="form-control"  name="D"  placeholder="Enter Option" required>
    </div>
    </div>

    <div class="form-group mt-4">
    <label>Enter Correct ANS</label>
    <select name="ans"  class="form-control"  required>
    <option value="">Please Select Correct Answer</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    </select>
    </div>
    <input type="hidden" class="form-control"  name="sub" value="<?php if(isset($_SESSION["subject"])){ echo $_SESSION["subject"]; } ?>">
    <button type="submit" name="AddQuestion" class="btn">Add Question</button>

<?php
}
?>
</form>   

 </div>

<?php
include "footer.php";
?>