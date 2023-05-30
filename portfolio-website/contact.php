
<?php
include 'connection.php';
if (isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email','$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data sent!')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script>
      const contactForm = document.getElementById('contact-form');

    contactForm.addEventListener('submit', e => {
    e.preventDefault();

    const formData = new FormData(contactForm);

    fetch('contact.php', {
     method: 'POST',
     body: formData
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
   })
    .catch(error => {
    console.error(error);
  });
});

    </script>


</head>


<body>
<img class="logoNama" src="img/logoNama.png" alt="">
    <nav>
        <ul>
          <li><a href="home.html">About Me</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav> 
      <br><br><br><br>

      <div class="contactmepage">
    <?php
      $sql="SELECT email,phone,linkedin from contacts";
      $result=$conn->query($sql);
    
      if($result->num_rows > 0){
          $response=array();
          while ($row=$result->fetch_assoc()){
              $dt['email']= $row["email"];
              $dt['phone']= $row["phone"];
              $dt['linkedin']= $row["linkedin"];
              array_push($response,$dt);
          }
          $hasil_json=json_encode($response);
          $data = json_decode($hasil_json,true);
          
      }
      ?>
        <div class="section">
          <h1>Contact</h1>
          <p>Feel free to contact me through any of the following channels:</p>
          <div class="contacts">
            <h3>E-mail</h3>
            <p><?php echo $data[0]["email"] ?></p> <br>
            <h3>Phone</h3>
            <p><?php echo $data[0]["phone"] ?></p> <br>
            <h3>Linkedin</h3>
            <p><?php echo $data[0]["linkedin"] ?></p>
          </div>
        </div>
      <?php $conn->close(); ?>

  <div class="section">
    <form id="contact-form" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Send</button>
    </form>
  </div>

</div>



    
      <br><br><br>


    <div class="click">
        <p>or just click these icons below:</p>
    </div>

  
</body>
<footer>
  <div class="social-media-icons">
    <a href="mailto:jocelyn.leora@gmail.com"><i class="fa fa-envelope"></i></a>
    <a href="https://wa.me/6281231155926"><i class="fa fa-phone"></i></a>
    <a href="https://www.linkedin.com/in/jocelynleora"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.instagram.com/jocelynleora_"><i class="fa fa-instagram"></i></a>
  </div>
</footer>
</html>


