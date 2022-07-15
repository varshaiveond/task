<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<title>
    form table
</title>
<body>
<?php include ('includes/menubar.php');?>



<!-- Image and text -->
<!-- <div class="bg-light"><nav class="container navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="..." width="30" height="30" class="d-inline-block align-top" alt="">
    Form Table
  </a>
</nav>
</div> -->

<div class="container py-4">
<?php

include ('connection.php'); // connection for sql

$sql = "SELECT sno,email,ex_no,texta from form"; // fetch details of a table =form ,col=email,no,text
$result = $conn->query($sql);// run sql query

echo" <table class='container table' id='myTable'>\n"; //table header " ''-->content "-->end
echo"   <thead>\n"; 
echo"    <tr>\n";
echo"       <th scope='col'> sno </th>\n";//table header 1
echo"       <th scope='col'>Email</th>\n";//table header 2
echo"       <th scope='col'>No.</th>\n";//table header 3
echo"       <th scope='col'>Messeage</th>\n";
echo"     </tr>\n";
echo"   </thead>\n";

if($result->num_rows > 0){   //if num of rows > 0 store in result
    while($row = $result->fetch_assoc()){  //fetch details of result of rows in web table

        echo"   <tbody>\n";
        echo"     <tr>\n";
        echo"       <td>".$row["sno"]."</td>\n";  //data of this row
        echo"       <td>".$row["email"]."</td>\n";
        echo"       <td>".$row["ex_no"]."</td>\n";
        echo"       <td>".$row["texta"]."</td>\n";
        echo"     </tr>\n";
        echo"   </tbody>\n";
       
    }

    echo" </table>\n";
}

?>
</div>


 <blockquote class="blockquote">
        <footer class="blockquote-footer container py-4">
            <h3>Varsha Kakumanu</h3>
        </footer>
    </blockquote>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>

        
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
</body>
</html>