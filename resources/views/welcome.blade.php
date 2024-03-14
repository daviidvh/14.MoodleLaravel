<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moodle Card</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" src="../css/app.css">
  <style>
    body {
      background-color: #f0f0f0; 
    }
    .card-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background-color: #f0ffff; 
      border: none; 
      border-radius: 20px; 
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      width: 70%; 
      max-width: 600px; 
    }
    .card-title {
      font-size: 3rem; 
      color: #383838; 
    }
    .names {
      font-size: 1.5rem; 
      color: #666666; 
    }
    .btn-login, .btn-register {
      background-color: #6495ed; 
      color: #fff;
      border: none; 
      border-radius: 10px; 
      padding: 8px 16px; 
      margin: 5px; 
      font-size: 1rem; 
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card-container">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title mb-4">MOODLE</h5>
        <h6 class="names">David Velázquez</h6>
        <h6 class="names">Nuria Luengo</h6>
        <div class="mt-4">
          <a href="{{ route('login') }}" class="btn btn-login">LOGIN</a>
          <a href="{{ route('register') }}" class="btn btn-register">REGISTER</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

