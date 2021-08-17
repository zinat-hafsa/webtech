<?php
include('../control/db.php');
session_start(); 
include ("../model/setconn.php");
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
if(isset($_GET["uname"]))
{
  
  $sql="update users set deleted_by='".$_SESSION['username']."' where username='".$_GET['uname']."' ";
  //echo $sql;
  execute($sql);
  header("location:alluserinfo.php");

}
?>

<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}



</style>
</head>
<body>
<h2>All User Information Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>All user information: 
<?php
$sql = "select * FROM users where deleted_by is  NULL and type!='admin'  ";
//echo $sql;
$userQuery=execute($sql);

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"users");

// if ($userQuery->num_rows > 0) {
//     echo "<table><tr><th>First Name</th><th>Email</th><th>Address</th><th>Phone No</th><th>NID</th><th>Type</th><th>DOB</th><th>Action</th>";
//     // output data of each rowth
//     while($row = $userQuery->fetch_assoc()) {
//       echo "<tr><td><img class='thumb-img' src='". $row["imageg"] ."' alt=''>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["phoneno"]."</td><td>".$row["nid"]."</td><td>".$row["type"]."</td><td>".$row["dob"]."</td><td><a href=".'alluserinfo.php?uname='.$row["username"].">delete</a></td></tr>";
//     }
//     echo "</table>";
//   } else {
//     echo "0 results";
//   }

?>

<style>
.profile-container {
  border: 1px solid #CCC;
  width: 100%;
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
}

.profile-wraper {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  width: max-content;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #FFF;
  padding: 4px;
  margin: 16px 0  16px 0;
}



.profile-wraper > span {
  color: #444;
  font-size: 13px;
  display: block;
}

.thumb-img {
  width: 128px;
  height: 128px;
  border-radius: 50%;
}


</style>
<div class="profile-container">

<?php
      if ($userQuery->num_rows > 0) {
          while($row = $userQuery->fetch_assoc()) {
    ?>

  <div class="profile-wraper">
    <img class='thumb-img' src='<?php echo $row["imageg"]; ?>' alt=''>
    <table>

            
      <tr>
        <td>Name:</td>
        <td><?php echo $row["firstname"]; ?></td>
      </tr>

      <tr>
        <td>Email:</td>
        <td style="width: 100px; word-wrap: wrap;"><?php echo $row["email"]; ?></td>
      </tr>

      <tr>
        <td>UserName:</td>
        <td><?php echo $row["username"]; ?></td>
      </tr>

      <tr>
        <td>Address:</td>
        <td><?php echo $row["address"]; ?></td>
      </tr>

      <tr>
        <td>PhoneNo:</td>
        <td><?php echo $row["phoneno"]; ?></td>
      </tr>

      <tr>
        <td>NID:</td>
        <td><?php echo $row["nid"]; ?></td>
      </tr>

      <tr>
        <td>Gender:</td>
        <td><?php echo $row["gender"]; ?></td>
      </tr>

      <tr>
        <td>Type:</td>
        <td><?php echo $row["type"]; ?></td>
      </tr>

      <tr>
        <td>DOB:</td>
        <td><?php echo $row["dob"]; ?></td>
      </tr>

      <tr>
            <td></td>
            <td><a href="alluserinfo.php?uname=<?php echo  $row["username"];?>">delete</a></td>
      </tr>
        



    </table>
  </div>

  <?php }
          echo "</table>";
        } else {
          echo "0 results";
        }
        ?>

</div>

<br/>
<br/>
<br/>
<a href="adminhome.php">Admin Home Page</a>
<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>