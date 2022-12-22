
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
        <li><a href="Teacher-Login.php">Teacher Login</a></li>
        <li><a href="index.php">Practice</a></li>
    </ul>
    <span>
        <?php 
       if(isset($_SESSION["stname"])){
        echo "Welcome: ".$_SESSION["stname"];
       }
       ?>
    </span>
</div>