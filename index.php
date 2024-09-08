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
    

<div class="container my-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-5 my-3">
            <div class="card">
                <h2 class="card-header">Creat an account</h2>
                <div class="card-body">
                    <form action="" >
                        <div class="my-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Phone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="" >Location</label>
                            <select name="" id="" class="form-control">
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