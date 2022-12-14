<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="Assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/./style.css"/>
    <title>Explore - Top Pujas in Kolakata</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <style>
        #phpcenter{
            display: flex;
            text-align: center;
            justify-content: space-between;
            margin: auto;
            width: 60%;
            padding: 10px;
        }
    </style>
  </head>
  <body>
     <!-- Modal -->
     <form action="../PHP/./login.php">
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog ">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Login</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
              <form action="login.php" method="post" class="d-flex justify-content-center align-items-center">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="phpname" required> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="phppassword" required> 
                </div>
                <button type="submit" class="btn btn-danger">Login</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
     </form>
    <section id="top" >
      <div class="hero2">
      <nav class="navbar navbar-expand-lg nav_design">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"> Sharadiya</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="../../index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href=".../../../../about.html">About</a>
              </li>
              <li class="nav-item mx-2">
                <a href="../../register.html">
                  <button class="btn btn-success">Sign up</button>
                </a>
              </li>
              <li class="nav-item mx-2">
                <!-- <a href="login.html"><button class="btn btn-danger">Login</button></a> -->
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-danger"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  Login
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    </section>

<div id="phpcenter">
<?php
require 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM service");

echo "<table border='1' border-collapse: collapse;>
<tr>
<th>Date</th>
<th>Name</th>
<th>Number</th>
<th>Email</th>
<th>Service</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['number'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['service'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</div>

<script src="../scripts/./main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>