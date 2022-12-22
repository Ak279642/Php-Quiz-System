<?php
include "header.php";
if(isset($_POST["AddSubject"])){
    $_SESSION["subject2"] = $_POST["subject"];
    }
  
if (isset($_POST["ViewResult"])) {
    extract($_POST);
    $_SESSION["stid"] = $DelID;

        echo "<script>  window.open('result.php', '_blank');</script>";

}

if (isset($_POST["DeleteResult"])) {
    extract($_POST);
 $sql = "DELETE FROM student WHERE id='$DelID'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Deleted Successfully');</script>";
    } else {
        echo "<script>alert('Internal Server Error');</script>";
    }
}
?>
<head>
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

        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                <th>Student ID</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Time</th>
                     <th>View</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th>Student ID</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>View</th>
                    <th>Result</th>
                </tr>
            </tfoot>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM student";
                $qry = mysqli_query($conn, $sql);
                if ($qry && $qry->num_rows > 0);
                while ($row = mysqli_fetch_assoc($qry)) {
                ?>
                    <tr>
                        <td><?php echo $row["stid"]; ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["branch"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["subject"] ?></td>
                        <td><?php echo $row["date"] ?></td>
                        <td><?php echo $row["starttime"] ?></td>
                      <td>
                            <form action="" method="POST">
                                <input type="hidden" name="DelID" value="<?php echo $row["stid"]; ?>">
                                <button type="submit" name="ViewResult" class="btn btn-danger btn-sm">View Result</button>
                            </form>
                           </td>
                              <td>
                            <form action="" method="POST">
                                <input type="hidden" name="DelID" value="<?php echo $row["id"]; ?>">
                                <button type="submit" name="DeleteResult" class="btn btn-danger btn-sm">Delete</button>
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
 </div>
    </div>
    <?php
    include "footer.php";
    ?>