<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custome css file link -->
  <link rel="stylesheet" href="css/style.css">
  <!-- script file link -->
  <script src="handler/handle.js"></script>
</head>
<body>

<header class="flex">
    <h1 class="name-page">About</h1>
    <nav class="flex">
      <a href="index.php">Home</a>
      <a href="about.php" class="active">About</a>
    </nav>
</header>

<h1 class="heading">Hi, I'm Thach Nguyen 👋</h1>

<section class="info" id="section-1">
  <div class="text">
    <h2>Seeking FrontEnd Internship Position</h2>
    <p>As a last-year student passionate about web programming, I am eager to pursue a career in the field. My creativity and problem-solving abilities drive me to build innovative web applications. I am excited to contribute my skills and join a dynamic team in the ever-evolving world of web development</p>
    <div class="contact flex">
      <p style="margin-bottom: 0">Contact via:</p>
      <a target="_blank" href="https://www.linkedin.com/in/chauthach-nguyen/"><i class="fa-brands fa-linkedin"></i></a>
      <a target="_blank" href="mailto:thachnc2002@gmail.com"><i class="fa-solid fa-envelope"></i></a>
      <a target="_blank" href="tel:0522464846"><i class="fa-solid fa-phone"></i></a>
    </div>   
    </div>
    <div class="img">
        <img src="asset/img/NguyenChauThach.jpg" alt="">
    </div>
</section>
<section id="section-2">
  <div class="box">
    <div class="left">
      <h3>Education</h3>
      <p>2020 - 2024 (expected)</p>
    </div>
    <div class="right">
      <p><strong>Bachelor of E-Commerce University of Information Technology (UIT)</strong></p>
      <p>Subjects: Object-Oriented Programming, Data Structures and Algorithms, Database, Web Application Development, Mobile Application Development, Safety and security in Electronic Commerce, Information
  system analysis and design, Enterprise Resource Planning</p>
    </div>
  </div>
  <div class="box">
    <div class="left">
      <h3>Skills</h3>
      <p>01/2023</p>
    </div>
    <div class="right">
      <p><strong>Programming</strong> C++, PHP, JavaScript, HTML5/CSS, TypeScript <br><strong>Framework</strong>  ReactJS, SCSS, TailwindCSS, Bootstrap 4, JQuery <br><strong>Language</strong> Able to read and understand documents and communicate in English
      </p>
    </div>
  </div>
  <div class="box">
    <div class="left">
      <h3>Project</h3>
    </div>
    <div class="right">
      <ul>
        <li>
          <div><p><strong>WEBSITE INTRODUCE E-Commerce Club Project</strong></p>
          <p>Link preview: <a href="https://ecc-web.vercel.app/">ecc-web</a></p>
          <p>Source code: <a href="https://github.com/absya23/ecc-web">ecc-web code</a></p>
          <p>Technologies: Figma, ReactJS, SCSS, TailwindCSS.</p>
          <p>Design UI by Figma and construct web UI/UX.</p> </div>
          <div><img src="asset/img/eccweb.png" alt=""></div>
        </li>
        <li>
          <div>
          <p><strong>WEBSITE E-COMMERCE FOR STATIONERY SHOP</strong></p>
          <p>Link preview: <a href="https://olcstore-web.vercel.app/">olcstore-web</a></p>
          <p>Source code: <a href="https://github.com/absya23/olcstore_web">olcstore-web code</a>, <a href="https://github.com/absya23/olcapi-web">olcapi-web code</a></p>
          <p>Technologies: ReactJS, TailwindCSS, Laravel, MySQL, React hooks.</p>
          <p>Login/ Register/ Logout for user.</p>  
          <p>View and search products, add a product to a wishlist, cart.</p> 
          <p>Update cart and check out order.</p>
          <p>Manage customers, orders, products.</p>
          </div>
          <div class="img"><img src="asset/img/olcweb.png" alt=""></div>
        </li>
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="left">
      <h3>Certifications</h3>
      <p>01/2023</p>
    </div>
    <div class="right">
    <p>Software Development With Scrum powered <a href="https://verified.sertifier.com/en/verify/60129115265859/">by Axon Active</a></p>
      <img src="asset/img/certification.png" alt="">
    </div>
  </div>
</section>
</body>
</html>