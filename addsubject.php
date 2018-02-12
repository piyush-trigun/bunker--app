<!DOCTYPE html>
<html>
<head>
	<title>Add subjects to bunk master</title> 

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/addsubject.css" rel="stylesheet">


</head>
<body>
  

   <div class="container">

    <form action="addsubject.php" method="post">

     <fieldset class="form-group">

         <div class="col-lg-6">

           <label for="subject">Add Subject</label>
           <input type="text" class="form-control" id="subject" name="subject">
           <small class="text-muted">Add a subject in your current semester</small>
  
        </div>  <!-- col-lg-6  -->
 
     </fieldset>

    <button type="submit" class="btn btn-primary button">Submit</button>

    </form>
  </div>  

  <?php
    
       include('connect.php');
       include('function.php');

       if(isset($_POST['subject'])){

          $subject=validate($_POST['subject']);
          $query=mysqli_query($connect,"INSERT INTO `subjects` VALUES('','$subject','0','0')");

          if(mysqli_affected_rows($connect)>0){
 
             ?>

             <script>

              alert('Subject you entered has been added to database');

            </script>

          <?php

         }

       }
          
  ?>
   	 
</body>
</html>