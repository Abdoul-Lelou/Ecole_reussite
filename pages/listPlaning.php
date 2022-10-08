<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>List_Planing</title>
</head>
<body>
    
<div class="container">
    <!-- Second Nav-menu -->
    
    <!-- End of second Nav-Menu -->
    <!-- Main Nav-menu -->
    <ul id="2" class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a href="#profile" data-target="#profile" data-toggle="pill" class="nav-link active show profile">
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#test" data-target="#test" data-toggle="pill" class="nav-link test">
                <span>Test</span>
            </a>
        </li>
    </ul>
    <!-- End of main Nav-menu -->
    <!-- Tab content -->
    <div class="tab-content">
        
        <div class="tab-pane active show" id="profile">
            <div class="col-md-12">
            <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A list item
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A second list item
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A third list item
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>
            </div>
        </div>
        <div class="tab-pane" id="test">
            <div class="col-md-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>
    <!-- Tab content end-tag -->
</div>
</body>
</html>