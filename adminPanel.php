<!DOCTYPE html>
<html lang="en">
<? include "CRUD/read.php";?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head> 
<body>

    <div class="container">
        <table  class="table" id="myTable">
            <thead  class="thead-dark">
              <th>ID</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Password</th>
            </thead>
        </table>
          
          <select id="selectOptions">
            <option value="1">1 ta</option>
            <option value="2">2 ta</option>
            <option value="3">3 ta</option>
            <option value="4">4 ta</option>
          </select>
    </div>

<script src="action.js"></script>
</body>
</html>

