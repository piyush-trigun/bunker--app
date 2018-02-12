 <?php


       include('connect.php');

       if(isset($_POST['submit'])){

            $query=mysqli_query($connect,"SELECT * from `subjects`");   

            if(mysqli_num_rows($query)>0){

            $num=mysqli_num_rows($query);
              
            while($row=mysqli_fetch_assoc($query)){ 
 
                  $id=$row['id'];
                  
                  $present=$row['present'];
                  $total=$row['total'];
               
                  $status=$_POST['gridRadios'.$id];

                

                  if($status=='Absent'){
                                          
                      $q=mysqli_query($connect,"UPDATE `subjects` SET `total`=$total+1 WHERE `id`=$id");
                      continue;                     
                  }

                  if($status=='No class'){ 
                       
                          
                      $q=mysqli_query($connect,"UPDATE `subjects` SET `total`=$total WHERE `id`=$id");
                      continue;
                  
                  }

                  if($status=='Present'){    

                      $q=mysqli_query($connect,"UPDATE `subjects` SET `present`=$present+1,`total`=$total+1 WHERE `id`=$id");
                      continue;
                  }

                  

               } //close while(row)

            } //close if(mysql_num_rows)

           

         
         }   //if($_POST['submit'])

          header('Location: homepage.html');

   ?>