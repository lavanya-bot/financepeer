<html>
 <body>
 <?php
 $servername="localhost";
 $username="lavanya";
 $password="Vinaycharan@17";
 $database="financepeer";
 $conn = new mysqli($servername, $username, $password,$database);
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }

 $sql="SELECT * from json_table";
 $result=$conn->query($sql);
 ?>
 <html>
<body>
<table border="1" cellpadding="0" cellspacing="0">
 <tr>
 <th>userid</th>
 <th>id</th>
 <th>title</th>
 <th>body</th>
 </tr>
 <?php
 if ($result-> num_rows > 0){
 while($row =$result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row["userId"];?></td>
 <td><?php echo $row["id"];?></td>
 <td><?php echo $row["title"];?></td>
 <td><?php echo $row["body"];?></td>
 </tr>
 <?php
 }
 }
 $conn->close();
 ?>
</table>
 </body>
 </html>