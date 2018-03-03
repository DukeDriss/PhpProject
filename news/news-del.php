<?php session_start();
if($_SESSION['type']!="Administrateur"){
  header("location:logit.php");
}
?>
<?php
$con = new mysqli ('localhost','root','','projet');

if(isset($_GET['id'])){
  $id= $_GET['id'];
$query = "DELETE FROM `news` WHERE id ='$id' ";
if ($con->query($query) === TRUE) {
    echo "Record DELETED successfully ".'<br><br><a href="../gerer_news.php"><input class="btn btn-danger" value="return" type="button"></a>';

} else {
    echo " Error Inserting record: " . $con->error.'<br><br><a href="../gerer_news.php"><input class="btn btn-danger" value="return" type="button"></a>';
}
}
?>
