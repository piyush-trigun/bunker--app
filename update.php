<!DOCTYPE html>
<html>
<head>
	<title>Update attendance</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/update.css" rel="stylesheet">

</head>

<body>
               

   <form class="attendance-form" action="getdata.php" method="post">

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

                     
              echo '<div class="form-group row">';

              echo '<label for="subject" class="col-sm-4 form-control-label">'.$subject.'</label>';

              echo '<div class="col-sm-6">';

              echo '<div class="radio options">

                <label>
                   <input type="radio" name="gridRadios'.$id.'" value="Present">
                   Present
                </label>

             </div>  <!-- radio options -->';

              echo '<div class="radio options">

                <label>
                   <input type="radio" name="gridRadios'.$id.'" value="Absent">
                   Absent 
               </label>

             </div>  <!-- radio options -->';

              echo '<div class="radio options">
 
                <label>

                   <input type="radio" name="gridRadios'.$id.'" value="No class" checked>
                   No class
               </label>

              </div>    <!-- radio options  -->';



            echo '</div>   <!-- col-sm-6  -->';



	        echo  '</div>   <!--   form-group row  -->';


        }

       echo' 

  	  <div class="form-group row">
 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
          </div>    <!--  col-sm-offset-2 col-sm-10   -->
      </div>    <!-- form-group row   -->';

     }

     ?>

  </form>

  


</body>

</html>	