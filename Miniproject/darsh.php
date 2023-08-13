<html>
<style>
 body{
margin:0;
padding:0;
 }
 img{
   height:100px;
   width:100%;
   padding:0px;
  }
nav{
margin:0;
padding:0;
overflow:hidden;
background-color:Gold;
}
nav ul{
list-style-type:none;
float:left;
}
nav ul li{
display:inline-block;
margin-right:30px;
}
nav ul li a{
padding:10px 25px;
text-decoration:none;
color:white;
display:block;
text-align:center;
font-weight:700;
}
nav ul li a:hover{
  background-color: GoldenRod;
  
}
marquee{
  color: GoldenRod;
  font-size: 20px;
  padding:0;
  border: 10px solid gold;
}
table {
  border: 10px solid Gold;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}



th {
  background-color: Gold;
  color: white;
}
</style>
<body>
  <div class="bg-image"></div>
  <img src="https://guruvayurdevaswom.nic.in/GVR-Logo/BannerLogo1.jpg" >
  <nav><ul>
  <li><a href="file:///C:/xampp/htdocs/Miniproject/main.html">Home</a></li>
  
  <li><a href="file:///C:/xampp/htdocs/Miniproject/Poojatimings.html">Temple Timings</a></li>
  <li><a href="file:///C:/xampp/htdocs/Miniproject/Vazhipadu.html">Vazhipadu details</a></li>
  <li><a href="file:///C:/xampp/htdocs/Miniproject/Prasadham.html">Prasadham</a></li>
  <li><a href="file:///C:/xampp/htdocs/Miniproject/Harinamakeerthanam.html">Harinamakeerthanam</a></li>
  <li><a href="#about">Login/Signup</a></li>
  </ul></nav>
<marquee><pre>ഓം നമോ ഭഗവതേ വാസുദേവായ     OM  NAMO BHAGAVATE VASUDEVAYA    ॐ नमो भगवते वासुदेवाय: </pre></marquee>
<br>
<br>
<div style="display:inline">
<table>





<td>
<?php
$link = mysqli_connect("localhost","root","","virtualQ");
if ($link==false){
  die("Error Could not connect");
}
$sql = "INSERT INTO pilgrim(H_D_Name, emailid, Star, NOD, date, time) values('$_GET[hname]', '$_GET[hmail]', '$_GET[hstar]', '$_GET[nod]', '$_GET[ddate]', '$_GET[time]')";
if (mysqli_query($link,$sql)){
   echo "<table>"; 
     echo "<tr>";
       echo " <th>Darshan Date </th>
       <th>Darshan Time</th>";
       echo "</tr>";
        echo "<tr>";
         echo "<td> $_GET[ddate] </td>";
         echo "<td> $_GET[time] </td>";
       echo "<table>";
       echo "<tr>";
       echo "<th>Name of the devotee</th>";
       echo "<th>DOB</th>";
       echo "<th>Age</th>";
       echo "<th>Aadhar Card No</th>";
       echo "<th>Star</th>";
     echo "</tr>";
       echo "<tr>";
       echo "<td>".$_GET['hname']."</td>";
       echo "<td>".$_GET['hdob']."</td>";
       echo "<td>".$_GET['hage']."</td>";
       echo "<td>".$_GET['hadno']."</td>";
       echo "<td>".$_GET['hstar']."</td>";
      echo "</tr> ";
     echo " <tr>";
        echo "<td>".$_GET['fname']."</td>";
       echo "<td>".$_GET['fdob']."</td>";
       echo "<td>".$_GET['fage']."</td>";
       echo "<td>".$_GET['fadno']."</td>";
       echo "<td>".$_GET['fstar']."</td>";
      echo "</tr> ";
     echo " <tr>";
        echo "<td>".$_GET['sname']."</td>";
       echo "<td>".$_GET['sdob']."</td>";
       echo "<td>".$_GET['sage']."</td>";
       echo "<td>".$_GET['sadno']."</td>";
       echo "<td>".$_GET['sstar']."</td>";
      echo "</tr> ";
       
   echo "</table>";
  
 
 
     
     
  
}else{
   echo "False";
}
?>
</td>
<td><img src="https://www.epoojastore.com/image/catalog/devotional-articles-images/2020/april/guruvaurappan.png" style="height:100%;width:100%;"></td>
<table>
<tr>
<h1><centre>General Instructions</centre></h1>
<p>1. Report on the booked time near Main Gopuram near Melpathur Auditorium.</p>
<p>2. Carry your Aadhar Card without fail.</p>
<p>3. Men are to wear mundu around their waist, without any dress covering their chest. But it is allowed to cover the chest region with a small piece of cloth (veshthi). 
<p>4. Women are allowed to wear sari and girls are to wear long skirt and blouses and salwar khameez. </p>
<p>5. Electronics and Electrical gadgets are strictly prohibitted inside the temple </p></tr>
</table>

<centre><button onclick = "window.print()">Print</button></centre>
</body>
</html>
