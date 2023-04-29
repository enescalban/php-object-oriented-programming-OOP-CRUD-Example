<?php require_once 'header.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h3>PHP OOP CRUD | <small>Add User</small></h3>
        <hr>
        <br> <br>

        <form action="" method="post">
            <input type="hidden" name="updateuserpost">
            <input value="<?php echo $user_data['user_id']; ?>" name="user_id" type="hidden">
            <div class="form-group">
                <label for="name">İsim:</label>
                <input type="text" class="form-control" value="<?php echo $user_data['name']; ?>" name="name" id="name" placeholder="İsminizi girin">
            </div>
            <br>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" class="form-control" value="<?php echo $user_data['email']; ?>" name="email" id="email" placeholder="E-posta adresinizi girin">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>