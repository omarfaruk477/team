<?php
if ( file_exists( __DIR__.'/autoload.php')){
     require_once __DIR__.'/autoload.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<?php

// server request method
if ($_SERVER['REQUEST_METHOD'] == "POST" ){
    //get values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $gender = $_POST["gender"] ?? ''; 

    if ( empty($name) || empty($email) || empty($phone) || empty($location) ){
        $msg = creatAlert("All  fields are required" );
    }else{
        $msg = creatAlert("Data stable", "success");
    }
    
}

?>


<div class="container my-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-5 my-3">
            <div class="card">
                <h2 class="card-header">Creat an account</h2>
                <div class="card-body">
                    <div class="msg">
                        <?php echo $msg  ?? ''; ?>
                    </div>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="my-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="my-3">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="my-3">
                            <label for="" >Location</label>
                            <select name="location" id="" class="form-control">
                                <option value="">-Select-</option>
                                <option value="Ashugonj">Ashugonj</option>
                                <option value="Voirob">Voirob</option>
                                <option value="Brahmonbaria">Brahmonbaria</option>
                                <option value="Kishorgonj">Kishorgonj</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">
                                <input type="radio" name="gender" value="male"> Male
                            </label>
                            <label for="">
                                <input type="radio" name="gender" value="female"> Female
                            </label>
                        </div>
                        <div class="my-3">
                            <input type="submit" value="Creat" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>