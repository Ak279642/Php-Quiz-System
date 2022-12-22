<?php
session_start();
date_default_timezone_set('Asia/Kolkata'); 
$conn = mysqli_connect("localhost", "avinash1_holi12", "DjAvi#279641", "avinash1_holi12");
if (isset($_POST['answer'])) {
if (isset($_SESSION["ans"])) {
        $_SESSION["ans"] .= "-" . $_POST["answer"];
    } else {
        $_SESSION["ans"] = $_POST["answer"];
    }

    if (isset($_SESSION["time"])) {
        $_SESSION["time"] .= "-" . $_POST["time"];
    } else {
        $_SESSION["time"] = $_POST["time"];
    }

    $result = explode("-", $_SESSION["ans"]);
    $sub = $_SESSION["stsubject"];
    $start =  count($result);
    if ($start != $_SESSION["total_question"]) {


        $sql = "SELECT * FROM question WHERE subject='$sub' LIMIT $start , 1";
        $qry = mysqli_query($conn, $sql);
        if ($qry && $qry->num_rows > 0);
        $sl = count($result) + 1;
        while ($row = mysqli_fetch_assoc($qry)) {
        $_SESSION["question_id"] .= "-".$row["id"];
?>
            <h6><?php echo  $sl . ". " . $row["question"]; ?></h6>
            <ol style="list-style-type: none;">
                <li><input type="radio" value="A" name="ans"><?php echo  htmlspecialchars($row["A"]) ?></li>
                <li><input type="radio" value="B" name="ans"><?php echo  htmlspecialchars($row["B"]) ?></li>
                <li><input type="radio" value="C" name="ans"><?php echo  htmlspecialchars($row["C"]) ?></li>
                <li><input type="radio" value="D" name="ans"><?php echo  htmlspecialchars($row["D"]) ?></li>
            </ol>
<?php
        }
    } else {
$stdId = $_SESSION["stid"];      
 $name = $_SESSION["stname"];
 $branch = $_SESSION["stbranch"];
 $email = $_SESSION["stemail"];
 $subject = $_SESSION["stsubject"];
 $questionID = $_SESSION["question_id"];
 $ans = $_SESSION["ans"];
 $Anstime = $_SESSION["time"];
 $date = date('d-m-Y');
 $time = date("h:i:s");   
 $query = mysqli_query($conn, "SELECT * FROM student WHERE stid = '$stdId'");
 if($query && $query->num_rows > 0){
     echo "end";
 }else{
 $sql = "INSERT INTO student (name, branch, email, subject, questionId, ans, time, date, stid, starttime) VALUES ('$name', '$branch', '$email', '$subject', '$questionID', '$ans', '$Anstime', '$date', '$stdId', '$time')";
   if(mysqli_query($conn, $sql)){
    echo "end"; 
   }    
 }
}
}
?>