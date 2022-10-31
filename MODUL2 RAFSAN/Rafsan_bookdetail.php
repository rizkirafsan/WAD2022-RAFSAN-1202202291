<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <body style="background-color:gray;">
    <nav class="navbar-dark bg-secondary ">
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="Rafsan_Home.php">
            Home
          </a>
            </h6>
        </li>
        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="bookingpage.php">
            Booking
          </a>
          </h6>
        </li>
      </ul>
    </nav>

        <div class = "container style="text-align: center; padding-top: 0.5cm;">

            <div class="class text-center mb-5 text-primary">
                <h6 style="text-align: center;color:antiquewhite">
                   <p>
                   Thank You Rafsan_1202202291 for Reserving
                   <br>
                   Please double check your reservation details
                   </p> 
                </h6>

<table class="table">
  <thead>
    <tr>
      <th scope="col">
          <b>
              Booking Number
          </b>
      </th>
      <th scope="col">
          <b>
              Name
          </b>
      </th>
      <th scope="col">
          <b>
              Check-in
          </b>
      </th>
      <th scope="col">
          <b>
                Check-out
          </b>
      </th>

      <th scope="col">
          <b>
                Car Type
          </b>
      </th>

      <th scope="col">
          <b>
                Phone Number
          </b>
      </th>

      <th scope="col">
          <b>
                Service(s)
          </b>
      </th>

      <th scope="col">
          <b>
                Total Price
          </b>
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
          <?php 
          echo rand();
          ?></th>
      <td>Muhammad Rizki Rafsyandjani</td>
      <td>11-10-2022 10:00:00</td>
      <td>12-10-2022 10:00:00</td>
      <td>Alphard</td>
      <td>081381796079</td>
      <td>- Health protocol
        <br>
        - Fuel Filled
      </td>
      <td>Rp. 1.000.000</td>
    </tr>

  </tbody>
</table>
<footer style="text-align: center;color:black">
    <b>
        (Created by Rafsan_1202202291)
    </b>
</footer>
</body>
</html>