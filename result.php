<?php
session_start();

$conn = mysqli_connect("localhost", "avinash1_holi12", "DjAvi#279641", "avinash1_holi12");
if (!$conn) {
    die("Database Not Connected");
}
    $stdid = $_SESSION["stid"];
    session_destroy();
    $sql = "SELECT * FROM student WHERE stid = '$stdid'";
    $qry = mysqli_query($conn, $sql);
    if ($qry && $qry->num_rows > 0);
    $row = mysqli_fetch_assoc($qry);
    $sub = $row["subject"];
    $answer = explode("-", $row['ans']);
    $timeTaken = explode("-", $row['time']);
    $question = explode("-", $row['questionId']);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MCQ Practice</title>
        <!-- Fontawesome CDN -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap Style CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Bootstrap Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap UI CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Javascript Jquery File -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <!-- Coustom CSS -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/question.css">
    </head>

    <body>
        <h4>MCQ Objective Practice</h4>
        <style>
            .question ol li {
                padding: 5px 0px;
                background: transparent;
                margin-bottom: 5px;
            }

            .error {
                background: red;
            }

            .success {
                background: green;
            }

            .result {
                width: 100%;
                box-shadow: 1px 1px 10px grey;
                border-radius: 10px;
                padding: 20px;
                margin-bottom: 20px;
                background: #e3f2fd;
            }

            .result ul {
                list-style: none;
            }

            .result ul li {
                font-size: 12px;
                font-weight: bold;
                padding: 5px 0px;
            }
            #textSpan, #textTime{
                font-size: 12px;
                font-weight: bold;
                padding-left: 20px;
                color: red;
            }
              #textSpan2 {
                font-size: 12px;
                font-weight: bold;
                padding-left: 20px;
                color: red;
            }
        </style>
        <div class="container">
            <div class="result">
                <ul>
                    <li>Name: <?php echo $row["name"]; ?></li>
                    <li>Branch: <?php echo $row["branch"]; ?></li>
                    <li>Email: <?php echo $row["email"]; ?></li>
                    <li>Subject: <?php echo $row["subject"]; ?></li>
                    <li>Date: <?php echo $row["date"]; ?></li>
                    <li>Time: <?php echo $row["starttime"]; ?></li>
                    <li id="score"></li>
                </ul>
            </div>
            <?php
            $in_array = implode("','", $question);
            $sql = "SELECT * FROM question WHERE id IN  ('" . $in_array . "')";
            $qry = mysqli_query($conn, $sql);
            if ($qry && $qry->num_rows > 0);
            $sl = 1;
            $index = 0;
            $marks = 0;
            while ($row = mysqli_fetch_assoc($qry)) {
                if ($row["ans"] == $answer[$index]) {
                    $marks += 1;
                }
            ?>
                <div class="question">
                    <h6><?php echo  $sl . ". " . $row["question"]; ?></h6>
                    <ol style="list-style-type: none;">
                        <li style="background:<?php if ($answer[$index] == 'A' && $row["ans"] == "A") {
                                                    echo '#4caf50';
                                                } else {
                                                    echo '#ffcdd2';
                                                } ?>; padding-left:10px;"><?php echo  htmlspecialchars($row["A"]) ?></li>
                        <li style="background:<?php if ($answer[$index] == 'B' && $row["ans"] == "B") {
                                                    echo '#4caf50';
                                                } else {
                                                    echo '#ffcdd2';
                                                } ?>; padding-left:10px;"><?php echo  htmlspecialchars($row["B"]) ?></li>
                        <li style="background:<?php if ($answer[$index] == 'C' && $row["ans"] == "C") {
                                                    echo '#4caf50';
                                                } else {
                                                    echo '#ffcdd2';
                                                } ?>; padding-left:10px;"><?php echo  htmlspecialchars($row["C"]) ?></li>
                        <li style="background:<?php if ($answer[$index] == 'D' && $row["ans"] == "D") {
                                                    echo '#4caf50';
                                                } else {
                                                    echo '#ffcdd2';
                                                } ?>; padding-left:10px;"><?php echo  htmlspecialchars($row["D"]) ?></li>
                    </ol>
                    <span id="textSpan">Time Taken in Answer: <span id="textTime"><?php echo  $timeTaken[$index]; ?></span></span>
                       <span id="textSpan2">Correct Answer: <?php echo $answer['ans']; ?></span>
                </div>
            <?php
                $sl += 1;
                $index += 1;
            }
            ?>
        </div>
    <?php
include "footer.php";
    ?>
    <script>
        let marks = <?php echo $marks; ?>;
        $(document).ready(function() {
            document.getElementById("score").innerText = "Result: " + marks;
        });
    </script>