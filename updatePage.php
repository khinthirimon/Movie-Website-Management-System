<?php
  $msg="";

  //if upload button is pressed
 if(isset($_POST['upload'])){
    //the path to store the uploaded image
  // $target= "assets/images".basename($_FILES['image']['name']);
 

    //connect to the database
  $db= mysqli_connect("localhost","root","","movie");

    //Get all the submitted data from the form
    $title=$_POST['title'];
    $image= $_FILES['image']['name'];
    $genre=$_POST['genre'];
    $date=$_POST['date'];
    $rating=$_POST['rating'];
    $text = $_POST['text'];
    $youtube = $_POST['youtube'];
    $download = $_POST['download'];
    

    $tmp_name=$_FILES['image']['tmp_name'];

    $img_upload_path = 'images/'.$image;
    move_uploaded_file($tmp_name, $img_upload_path);

    $sql = "INSERT INTO image (image,text) VALUES ('$title','$image','$genre','$date','$rating','$text','$youtube','$download')";
    $sql = "INSERT INTO image ( title ,image, genre ,date, rating,text, youtube, download) VALUES ('$title','$image','$genre','$date','$rating','$text','$youtube','$download')";
   mysqli_query($db,$sql);//stores the submitted data into the database tables image

    //now let's move the uploaded image into the folder:images
    if(move_uploaded_file($_FILES['image']['name'], $target)) {
        $msg="Image uploaded successfully";
    }
    else{
        $msg="There was a problem uploading image";
    }
  }
  ?>  
  
  
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Update Form</title>
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <!-- Bootstrap CSS Link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>
@import url('https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@300&family=Open+Sans:ital,wght@0,400;1,300;1,400&family=Passions+Conflict&family=Poppins:wght@100;300;400;500;600&family=Roboto+Slab:wght@300;400;500;600&display=swap');
/* *{
  font-family: 'Poppins', sans-serif;
  font-size: large;
  margin: 0; padding: 0;
  box-sizing: border-box;
  outline: none; border: none;
  text-decoration: none;
} */

    .btn:hover {
        background-color: #343a40; /* Your custom color code */
        color: #fff; 
        border-radius: 5px;
        border:.01rem solid #fff; /* Remove border if needed */
    }
.card-body input,textarea{
  background-color: #343a40;
}
            
    </style>
    </head>
    <body 
    style="font-family: 'Poppins', sans-serif; 
           font-size: large;
           margin: 0; padding: 0;
           height: 100%;
           background-color: hsl(207, 19%, 11%);


    ">
<body>
     <!-- Update Form Start -->
     <div class="container mt-5 mb-5" >
      <div class="row">
          <div class="col-md-8 offset-md-2">
              <div class="card">
                  <div class="card-header h-75 d-inline-block" >
                      <h4 class="text-center" style="margin-top: .8rem; margin-bottom: .8rem;" >Update Movies</h4>
                  </div>
                    <div id="content" class="card-body" style="background-color: #212529;color: #fff;">

                    <?php
                        $db= mysqli_connect("localhost","root","","movie");
                        $sql="SELECT * From image";
                        $result= mysqli_query($db,$sql);
                        while($row=mysqli_fetch_array($result)){
                          
                      
                        }
                    
                    
                    ?>



                      <form action="updatePage.php" method="post" enctype="multipart/form-data">

                          <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" name="title" class="form-control" id="n1" placeholder="Enter movie or serie's title.." required>
                          </div>
                          
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Poster:</label>
                            <input type="file" name="image" class="form-control"  id="formFile">
                          </div> 

                          <div class="mb-3">
                            <label for="title" class="form-label">Genre:</label>
                            <input type="text" name="genre" class="form-control" id="n1" placeholder="Enter movie or serie's genre.." required>
                          </div>

                          <div class="col-md-6">
                            <label for="datepicker">Released Date:</label>
                            <input type="date" name="date" id="datepicker" class="form-control">
                          </div>
                          
                          <div class="col-md-6">
                            <label for="datepicker">Rating:</label>
                            <input type="text" name="rating" id="datepicker" class="form-control">
                          </div>
                        
                          <div class="mb-3">
                            <label for="title" class="form-label">Trailer Link:</label>
                            <input type="text" name="youtube" class="form-control" id="n1" placeholder="Enter movie trailer link.." required>
                          </div>

                          <div class="mb-3">
                            <label for="title" class="form-label">Download Link:</label>
                            <input type="text" name="download" class="form-control" id="n1" placeholder="Enter movie download link.." required>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description.."></textarea>
                          </div>

         

                          <a href="moviepage2.php"><button type="submit" name="upload" class="btn" style=
                          "background-color: #CE1212">Update Data</button></a>
                          <a href="adminpage.html"><button type="button"  class="btn ms-3" style=
                          "background-color: #CE1212">Cancel</button></a>
                        
                      </form>
                    
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Profile end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4eb603963b.js" crossorigin="anonymous"></script>

</body>
</html>