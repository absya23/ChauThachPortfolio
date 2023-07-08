

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custome css file link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- script file link -->
  <script src="handler/handle.js"></script>
</head>
<body>

<!-- header -->
<header class="flex">
  <h1 class="name-page">Home</h1>
  <nav class="flex">
    <a href="" class="active">Home</a>
    <a href="about.php">About</a>
  </nav>
</header>
<!-- body -->
<section class="contact">
    <h1 class="heading">
      <span>Contact me</span>
    </h1>
    <?php
      if(isset($_POST['submit'])) {

        $name= $_POST['name'];
        echo "<p class='message'>Message send!</p>";
      }
    ?>
    <form action="" method="post">
      <div class="flex-col">
        <input type="text" name="name" class="name" placeholder="Name..." required>
        <input type="email" name="email" class="email" placeholder="Email..." required>
        <textarea name="mesage" class="email" placeholder="Message..."></textarea>
        <input type="submit" class="btn-submit" name="submit" value="Send"/>
      </div>
    </form>
  </section>
  
</body>
</html>