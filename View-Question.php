<?php
include "header.php";
if(isset($_POST["AddSubject"])){
    $_SESSION["subject2"] = $_POST["subject"];
    }
  
if (isset($_POST["Delete"])) {
    extract($_POST);
    $sql = "DELETE FROM question WHERE id='$DelID'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Deleted Successfully');</script>";
    } else {
        echo "<script>alert('Internal Server Error');</script>";
    }
}
?>
<head>
    <?php if(isset($_SESSION["subject2"])){ 
  ?>
    <title><?php echo $_SESSION["subject2"]; ?></title>
    <?php
    }
    ?>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
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
</head>
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
        if (isset($_SESSION["teacher_name"])) {
            echo "Welcome: " . $_SESSION["teacher_name"];
        }
        ?>
    </span>
</div>

<center>
    <div class="formcard">
<form action="" method="POST">
 <div class="form-group">
    <label>Enter Subject to View</label>
    <select  class="form-control" name="subject">
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
</select>     </div>
<button type="submit" name="AddSubject" class="btn mb-4">View</button>
</form>
<?php if(isset($_SESSION["subject2"])){ 
  ?>

        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>QUESTION</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>ANSWER</th>
                    <th>SUBJECT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>QUESTION</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>ANSWER</th>
                    <th>SUBJECT</th>
                    <th>ACTION</th>
                </tr>
            </tfoot>
            </thead>
            <tbody>
                <?php
                $sub = $_SESSION["subject2"];
                $sql = "SELECT * FROM question WHERE subject='$sub'ORDER BY id DESC";
                $qry = mysqli_query($conn, $sql);
                if ($qry && $qry->num_rows > 0);
                while ($row = mysqli_fetch_assoc($qry)) {
                ?>
                    <tr>
                        <td><?php echo $row["question"]; ?></td>
                        <td><?php echo htmlspecialchars($row["A"]) ?></td>
                        <td><?php echo  htmlspecialchars($row["B"]) ?></td>
                        <td><?php echo  htmlspecialchars($row["C"]) ?></td>
                        <td><?php echo  htmlspecialchars($row["D"]) ?></td>
                        <td><?php echo $row["ans"]; ?></td>
                        <td><?php echo $row["subject"]; ?></td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="DelID" value="<?php echo $row["id"]; ?>">
                                <button type="submit" name="Delete" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <script>
           $(document).ready(function() {
                $('#example').DataTable({
                    responsive: true,
                    dom: 'Bfrtip',
                    "scrollX": true,
                    buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o"></i> Copy',
                            titleAttr: 'Copy',
                            className: 'red'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o"></i> Excel',
                            titleAttr: 'Excel',
                            className: 'red'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-text-o"></i> CSV',
                            titleAttr: 'CSV',
                            className: 'red'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o"></i> PDF',
                            orientation: 'landscape',
                            titleAttr: 'PDF',
                            className: 'red'
                        }
                    ]
                });
            });
        </script>
        <?php
}
?>
    </div>
    </div>
    <?php
    include "footer.php";
    ?>