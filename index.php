<?php
include "header.php";
include "navbar.php";
if (isset($_POST["Start"])) {
array_filter($_POST);
extract($_POST);
$_SESSION['stname'] = $name;
$_SESSION['stsubject'] = $subject;
$_SESSION['stbranch'] = $branch;
$_SESSION['stemail'] = $email;
$_SESSION['stid'] = mt_rand(0000000000, 9999999999);
if(isset($_SESSION["stname"],$_SESSION['stsubject'],$_SESSION['stbranch'],$_SESSION['stemail'])){
    echo "<script>window.location.href='Practice.php'</script>";
}else{
    echo "<script>alert('Please Try Again');</script>";
}
}
?>
<div class="box2">
    <form action="" method="POST">
        <h5 class="text-center text-uppercase">Start Practice</h5>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label>Branch:</label>
            <select class="form-control" name="branch" required>
                <option value="">Select Branch</option>
                <option value="CS">Computer Science</option>
                <option value="ME">Mechenical</option>
                <option value="EE">Electrical</option>
                <option value="CE">Civil</option>
            </select>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label>Select Subject</label>
            <select class="form-control" name="subject">
                <option value="">Select Subject</option>
                <?php
                $sql = "SELECT DISTINCT subject FROM question ORDER BY subject ASC";
                $qry = mysqli_query($conn, $sql);
                $qry = mysqli_query($conn, $sql);
                if ($qry && $qry->num_rows > 0);
                while ($row = mysqli_fetch_assoc($qry)) {
                ?>
                    <option value="<?php echo $row['subject']; ?>"><?php echo $row['subject']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <button type="submit" name="Start" class="btn">Start Practice</button>
    </form>

</div>
<?php
include "footer.php";
?>