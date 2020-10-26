<?php
// -----------------------1. Conect----------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// ----------------------2. Select-----------------------------------------

$sql = "SELECT DEPT_ID, DEPT_NAME FROM department";

// ----------------------3. EXCUTE---------------------------------------------
?>
<html>
    <head><title>department</title></head>

    <body>
       <select>
           <option value="acc">accouting</option>
           <option value="com">computer</option>
       </select>
<?php
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "<select>" ;
          echo "<option value='".$row["DEPT_ID"]."'>" .$row['DEPT_ID']. "</option>" ;
          echo "</select>" ;

      }
    } else {
      echo "0 results";
    }
    
    mysqli_close($conn);
?>
    </body>
</html>
