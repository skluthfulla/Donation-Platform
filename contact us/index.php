<?php
   $server = "localhost";
    $username = "id19440649_pb24";
    $password = "Q?U<5u&LRs/?3cQi";
    $db="id19440649_pb24_database";
//echo "tttt";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$db);
//echo "cccccc";
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
 
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $kind = $_POST['kind'];
    $no = $_POST['no'];
    $sql = "INSERT INTO `book` (`name`, `email`, `phone`,`address`,`kind`, `no`, `dt`) VALUES ('$name', '$email', '$phone', '$address','$kind','$no', current_timestamp());";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book donation</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css"
      integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <video id="background-video" autoplay loop muted poster="video.jpg">
      <source src="video.mp4" type="video/mp4" />
    </video>
    <section class="contact">
      <div class="content">
        <h2>Book & stationary donation</h2>
      </div>
      <div class="container">
        <div class="contactInfo">
          <div class="box">
            <img class="icon" src="loc.png" alt="" />
            <div class="text">
              <h3>Address</h3>
              <p>
                Vignan's institude of information technology,<br />
                Duvvada, Visakapatanam District.,<br />
                Vizag, INDIA - 574219
              </p>
            </div>
          </div>
          <div class="box">
            <img class="icon" src="call.png" alt="">
            <div class="text">
              <h3>Phone Number</h3>
              <p>8792727001/8792736001</p>
            </div>
          </div>
          </div>
          <div class="box">
            <img class="icon" src="email.png" alt="" />
            <div class="text">
              <h3>Email</h3>
              <p>skluthufulla@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="contactform">
          <h2>Provide us</h2>
          <form action="mailto:skluthufulla@gmail.com" method="post" enctype="text/plain">
            <input type="text" name="name" id="name" placeholder="Name" />
            <input type="email" name="email" id="email" placeholder="E-mail" />
            <input
              type="phone"
              name="phone"
              id="phone"
              placeholder="Phone number"
            />
            <textarea
              name="address"
              id="desc"
              cols="30"
              rows="10"
              placeholder="Pickup address "
            ></textarea>
            <textarea
              name="kind"
              id="desc"
              cols="10"
              rows="10"
              placeholder="Type of book "
            ></textarea>
            <textarea
              name="no"
              id="desc"
              cols="12"
              rows="10"
              placeholder="Number of books"
            ></textarea>

            <button 
              class="btn"
              style="
                background: rgb(37, 81, 147);
                padding: 15px 35px;
                color: #ffffff;
                font-size: 1.5em;
                font-weight: 500;
                text-decoration: none;
                border-radius: 22px;
                border-color: #21675d;
                border-width: 5px;
              "
            >
              Submit
            </button>
          </form>
        </div>
        <!-- FORM END -->
      </div>
    </section>
  </body>
</html>
