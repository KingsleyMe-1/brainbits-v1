<!DOCTYPE html>
<html>
<head>
  <title>Account Created</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background: linear-gradient(to bottom, #000033, #0000FF);
      font-family: Arial, sans-serif;
      height: 100vh;
      overflow: hidden;
    }
    
    .message {
      position: absolute;
      background-color: #23e40d;
      color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      font-size: 24px;
      box-shadow: 0 5px 6px rgba(0, 0, 0, 0.9);
      display: flex;
      align-items: center;
      top: 35%;
      left: 18%;
    }
    
    .icon {
      font-size: 40px;
      margin-left: 20px;
    }

    .button {
      background: linear-gradient(to bottom, #0d18e8, #000033);
      color: #ffffff;
      padding: 15px 30px;
      border-radius: 30px;
      border: none;
      font-size: 18px;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: background-color 0.3s ease;
      cursor: pointer;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
      position: absolute;
      left: 44%;
      top: 55%
    }
    
    .button:hover {
      background: linear-gradient(to top, #0d18e8, #000033);
    }

  </style>
</head>
<body>
  <div class="message">
    <h1>You successfully created an account </h1>
    <i class="fas fa-check-circle icon"></i>
  </div>
    <a href="index.php" class="button">Continue</a>
</body>
</html>
