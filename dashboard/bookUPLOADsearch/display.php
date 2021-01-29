<html>
    <head>
        <title>Study material for engineering students</title>
        <link rel="stylesheet" href="s.css">
    </head>
    <body>
        <div class="registration-page">
        <table class="content-table" style="width:100%">
        <thead>
        <tr>
            <th class="list-group-item">USERNAME</th>
            <th class="list-group-item">BOOK NAME</th>
            <th class="list-group-item">BOOK AUTHOR</th>
            <th class="list-group-item">BRANCH</th>
            <th class="list-group-item">SEMESTER</th>
            <th class="list-group-item">SUBJECT</th>
            <th class="list-group-item">PRICE (in Rs)</th>
            <th class="list-group-item">CONTACT</th>
            <th class="list-group-item">PHOTO</th>
         </tr> 
          </thead>  
         <tbody>
         <?php

           include 'conn.php';
           $selectquery = "select * from book_ads";
           $query= mysqli_query($con,$selectquery);
           $result=mysqli_fetch_array($query);

           while($result = mysqli_fetch_array($query)){
          ?>
          
         <tr>
           <td><?php echo $result['username']; 
           ?></td>
           <td><?php echo $result['bookname']; 
           ?></td>
           <td><?php echo $result['bookauthor']; 
           ?></td>
           <td><?php echo $result['branch']; 
           ?></td>
           <td><?php echo $result['sem']; 
           ?></td>
          <td><?php echo $result['subject']; 
           ?></td>
           <td><?php echo $result['price']; 
           ?></td>
           <td><?php echo $result['contact']; 
           ?></td>
           <td><img src=" <?php echo $result['photo'];?>"></td>
           </tbody>
         </tr>
         <?php
    }
    ?>
        </table>
        </div>
    </body>
</html>