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
    $photo  =$_POST["photo"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $gender = $_POST["gender"] ?? ''; 

    if ( empty($photo) || empty($name) || empty($email) || empty($phone) || empty($location) || empty($gender) ){
        $msg = creatAlert("All  fields are required" );
    }elseif (filter_var( $email, FILTER_VALIDATE_EMAIL) == FALSE ){
        $msg = creatAlert("Invalid Email Address", "warning");
    }else{
        $msg = creatAlert("Data stable", "success");
        resetForm();
    }


    // Storage data to JSON DB
    $data = json_decode(file_get_contents('./db/team.json'), true);

    array_push($data, [
        "photo"     =>  $photo,
        "name"      =>  $name,
        "email"     =>  $email,
        "phone"     =>  $phone,
        "location"  =>  $location,
        "gender"    =>  $gender,
    ]);
    file_put_contents('./db/team.json', json_encode($data));
    



}

?>


<div class="container my-5">
    <div class="row my-5">
        <div class="col-md-4 my-3">
            <div class="card">
                <h2 class="card-header">Creat an account</h2>
                <div class="card-body">
                    <div class="msg">
                        <?php echo $msg  ?? ''; ?>
                    </div>
                    <form action="" method="POST">
                    <div class="my-3">
                            <label for="">Photo</label>
                            <input type="text" class="form-control" value="<?php echo old("photo"); ?>" name="photo">
                            <?php echo checkRequired("photo") ;?>
                        </div>
                        <div class="my-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="<?php echo old("name"); ?>" name="name">
                            <?php echo checkRequired("name") ;?>
                        </div>
                        <div class="my-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" value="<?php echo old("email"); ?>" name="email">
                            <?php echo checkRequired("email") ;?>
                        </div>
                        <div class="my-3">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" value="<?php echo old("phone"); ?>" name="phone">
                            <?php echo checkRequired("phone") ;?>
                        </div>
                        <div class="my-3">
                            <label for="" >Location</label>
                            <select name="location" id="" class="form-control">
                                <option value="">-Select-</option>
                                <option <?php echo old('location') == "Ashugonj" ? "Selected" : "" ; ?> value="Ashugonj">Ashugonj</option>
                                <option <?php echo old('location') == "Voirob" ? "Selected" : "" ; ?> value="Voirob">Voirob</option>
                                <option <?php echo old('location') == "Brahmonbaria" ? "Selected" : "" ; ?> value="Brahmonbaria">Brahmonbaria</option>
                                <option <?php echo old('location') == "Kishorgonj" ? "Selected" : "" ; ?> value="Kishorgonj">Kishorgonj</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="">
                                <input type="radio" name="gender" <?php echo old('gender') == "Male" ? "checked" : "" ; ?> value="Male"> Male
                            </label>
                            <label for="">
                                <input type="radio" name="gender" <?php echo old('gender') == "Female" ? "checked" : "" ; ?> value="Female"> Female
                            </label>
                        </div>
                        <div class="my-3">
                            <input type="submit" value="Creat" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 my-3">
            <div class="row">

                <?php
                $teamData = json_decode(file_get_contents('./db/team.json'));
                foreach($teamData as $team) :
                ?>
                <div class="col-md-4">
                    <div class="card mb-5">
                        <div class="card-body">
                            <img class="w-100 rounded image" src="<?php echo $team -> photo; ?>"  alt="">
                            <h4><?php echo $team -> name; ?></h4>
                            <p><?php echo $team -> email; ?></p>
                            <p><?php echo $team -> phone; ?></p>
                            <p><?php echo $team -> location; ?></p>
                            <p><?php echo $team -> gender; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ; ?>
            </div>
        </div>
    </div>
</div>


<script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>