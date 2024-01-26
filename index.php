<?session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box1 {
            display: flex;
            justify-content: center;
            align-items: center;
            transform: trans0lateX(50);
            margin: 10% 30%;
        }
    </style>
</head>
<h3>INSERT</h3>
<body>
    <div class="container">
        <div class="box1">
        <form class="form-control mx-2 my-2 " action="CRUD/create.php" method="post"> 
            <div class="mb-3">
                <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];session_destroy();}?>
                <label  for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Surname</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="surname" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="age" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
           
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
    <div><a href="https://maps.app.goo.gl/7f5xzaj1T55JD9iW6">loc</a></div>
</body>
</html>


