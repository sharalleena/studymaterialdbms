<?php
include 'conn.php';
if(isset($_POST["submit"])) {
  $username =$_POST['username'];
  $bookname =$_POST['bookname'];
  $bookauthor =$_POST['bookauthor'];
  $subject =$_POST['subject'];
  $branch =$_POST['branch'];
  $semester =$_POST['sem'];
  $price =$_POST['price'];
  $contact =$_POST['contact'];
  $f=$_FILES["fileToUpload"];
  $filename=$f['name'];
  $filepath=$f['tmp_name'];
  $fileerror=$f['error'];
  if($f['error'] == 0){

    $destfile = 'upload/'.$filename;
    move_uploaded_file($filepath, $destfile);
    $insertquery = " insert into book_ads(username,bookname,
    bookauthor,branch,sem,subject,price,contact,photo) values(
    '$username','$bookname','$bookauthor','$branch','$semester','$subject','$price',
    '$contact','$destfile')";
    $query=mysqli_query($con,$insertquery);
    if($query){
      echo "inserted";
    }
      else
      {
        echo "not inserted";
      }
    }

}
else{
  echo "no button clicked";
}