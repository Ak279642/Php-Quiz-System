<?php
session_start();
unset($_SESSION["ans"]);
unset($_SESSION["time"]);
$conn = mysqli_connect("localhost", "avinash1_holi12", "DjAvi#279641", "avinash1_holi12");
if (!$conn) {
  die("Database Not Connected");
}
$sub = $_SESSION["stsubject"];
$sql1 = "SELECT * FROM question WHERE subject='$sub'";
$qry1 = mysqli_query($conn, $sql1);
if ($qry1 && $qry1->num_rows > 0) {
  $_SESSION["total_question"] = $qry1->num_rows;
}
$sql2 = "SELECT * FROM question WHERE subject='$sub' LIMIT 1";
$qry2 = mysqli_query($conn, $sql2);
if ($qry2 && $qry2->num_rows > 0) {
  $rowdata = mysqli_fetch_assoc($qry2);
  $_SESSION["question_id"] = $rowdata["id"];
}
?>
<!DOCTYPE html>
 <html lang="en" onselectstart="return false" oncopy="return false" oncut="return false" onpaste="return false" oncontextmenu="return false;"> 

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


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  
  
  <div id="resultEnd"></div>
  <div class="navbar">
    <ul>
      <li style="color:#fff; font-weight:bold; font-size:12px;"><?php echo "Total Question: " . $_SESSION["total_question"]; ?></li>
    </ul>
    <span id="timer" class="btn-danger" style="padding:5px 14px; font-weight:bold;">
      <span id="minutes">00</span>:<span id="seconds">00</span>
    </span>
  </div>
  
    <center><div class="mt-4" id="google_translate_element"></div></center>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
  
  <div style="color:red;font-weight:bold; margin:auto; font-size:10px;" class="text-center text-uppercase mt-4">Please do not Refresh your Browser</div>
  <div class="container">
    <?php
    $sql = "SELECT * FROM question WHERE subject='$sub' LIMIT 0,1";
    $qry = mysqli_query($conn, $sql);
    if ($qry && $qry->num_rows > 0);
    $sl = 1;
    while ($row = mysqli_fetch_assoc($qry)) {
    ?>
      <div class="question">
        <div id="questionData">
          <h6><?php echo  $sl . ". " . $row["question"]; ?></h6>
          <ol style="list-style-type: none;">
            <li><input type="radio" value="A" name="ans"><?php echo  htmlspecialchars($row["A"]) ?></li>
            <li><input type="radio" value="B" name="ans"><?php echo  htmlspecialchars($row["B"]) ?></li>
            <li><input type="radio" value="C" name="ans"><?php echo  htmlspecialchars($row["C"]) ?></li>
            <li><input type="radio" value="D" name="ans"><?php echo  htmlspecialchars($row["D"]) ?></li>
          </ol>
        </div>
        <fieldset id="buttons">
          <div class="row">
           
            <button type="button" id="Skip" class="btn btn-sm">Skip</button>
            <button type="button" id="Next" class="btn btn-sm">Next</button>
          </div>
        </fieldset>
      </div>
    <?php
      $sl += 1;
    }
    ?>
  </div>

  <script>
        $(document).ready(function() {
        $('#Selector').bind('copy paste', function(e) {
            e.preventDefault();
        });
    });
    document.onkeydown = function(e) {
                if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
                    alert('Shortcut Disabled');
                }
                return false;
        };
    var minutesLabel = document.getElementById("minutes");
    var secondsLabel = document.getElementById("seconds");
    var totalSeconds = 0;
    setInterval(setTime, 1000);

    function setTime() {
      ++totalSeconds;
      secondsLabel.innerHTML = pad(totalSeconds % 60);
      minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
    }

    function pad(val) {
      var valString = val + "";
      if (valString.length < 2) {
        return "0" + valString;
      } else {
        return valString;
      }
    }
 
    function Next() {
     openFullscreen();
      var time = document.getElementById("timer").innerText;
      var field = document.getElementById("buttons");
      field.disabled = true;
      let answer = "Skip";
      var checkRadio = document.querySelector('input[name="ans"]:checked');
      if (checkRadio != null) {
        answer = document.querySelector('input[name="ans"]:checked').value;
      }
      $.ajax({
        type: "POST",
        url: "action/answer.php",
        data: {
          answer: answer,
          time: time,
        },
        success: function(result) {
          if(result=="end"){
              closeFullscreen();
           window.location.href = 'result.php';
          }else{
          document.getElementById("questionData").innerHTML = result;
          field.disabled = false;
          totalSeconds = 0;
          document.getElementById("minutes").innerText = 00;
          document.getElementById("seconds").innerText = 00;
        }
        }
      });
    }

    function Skip() {
    openFullscreen(); 
      var time = document.getElementById("timer").innerText;
      var field = document.getElementById("buttons");
      field.disabled = true;
      let answer = "Skip";
      $.ajax({
        type: "POST",
        url: "action/answer.php",
        data: {
          answer: answer,
          time: time,
        },
        success: function(result) {
          if(result=="end"){
             closeFullscreen();
           window.location.href = 'result.php?StudentID='+studentid;
          }else{
          document.getElementById("questionData").innerHTML = result;
          field.disabled = false;
          totalSeconds = 0;
          document.getElementById("minutes").innerText = 00;
          document.getElementById("seconds").innerText = 00;
          }
        }
      });
    }
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}

    document.getElementById("Next").addEventListener("click", Next);
    document.getElementById("Skip").addEventListener("click", Skip);
    

</script>

  <?php
  include "footer.php";
  ?>