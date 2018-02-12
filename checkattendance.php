<!DOCTYPE html>
<html>
<style type="text/css">
.container{
   position: fixed;
   top:30%;
   left: 15%;
}
</style>
<head>
   <title>
   check Attandance
   </title>
   <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
   <div class="container">
    <table  style="width:750px" class="table table-striped ">
   <thead>
      <tr>
         <th>Subject</th>
         <th>Attendance</th>
      </tr>
   </thead>
   <?php
  

   include('connect.php');
   
   $query=mysqli_query($connect,"SELECT * from `subjects`"); 
   
   if(mysqli_num_rows($query)>0){

      $num=mysqli_num_rows($query);

      while($row=mysqli_fetch_assoc($query)){
   
           $id=$row["id"];
           $subject=$row["subject"];
           $present=$row["present"];
           $total=$row["total"];
      
           if($total==0)
            $attendance=100.0;

           else
             $attendance=($present*100.0)/$total;
                                   


         ?>
  
       <tbody>
         <tr>
         <td><?php echo $subject; ?> </td>
         <td> <?php echo $attendance; ?> </td>
         </tr>   
       </tbody>

   <?php
     }
   }

   ?>
   </table>
   </div>
</body>
</html>