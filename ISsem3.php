<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon for website -->
   <link rel="apple-touch-icon" sizes="180x180" href="favicon_io (1)\android-chrome-192x192.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon_io (1)\favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon_io (1)\favicon-16x16.png">
   <link rel="manifest" href="favicon_io (1)\site.webmanifest">
    <title>CANSTUDY | IS</title>
    <!-- Linking Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style44_page2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
      <!-- Navigation Bar -->
        <nav>
          <input type="checkbox" id="click">
          <label for="click" class="menu-bar">
            <i class="fas fa-bars"></i>
          </label>
          <!-- >>>Change the header bg and add the gif remove the text -->
              <div class="banner"></div>
            <ul>
            <li><a class="menu-btn" href="index.html"><i class="fa fa-fw fa-home"></i><b> Home</b></a></li>
            <div class="dropdown">
                <button class="dropbtn"><b>Study Material</b>
                  <i class="fa fa-caret-down"></i></b>
                </button>
                <div class="dropdown-content">
                  <a href="IS_page2.html">Information Science &amp; Engineering</a>
                  <a href="CS_page2.html">Computer Science &amp; Engineering</a>
                  <a href="EC_page2.html">Electronics &amp; Communication Engineering</a>
                  <a href="MEC_page2.html">Mechanical Engineering</a>
                  <a href="AI_page2.html">Artificial Intelligence &amp; Machine Learning</a>
                  <a href="CSD_page2.html">Computer Science &amp; Design</a>
                  <a href="CSB_page2.html">Computer Science &amp; Business Systems</a>
                  <a href="SH_page2.html">Science &amp; Humanities</a>
                </div>
              </div>
              <li><a class="menu-btn" href="https://www.careers360.com/colleges/canara-engineering-college-mangalore/reviews" target="_blank"><b>College Reviews</b></a></li>
              <li><a class="menu-btn" href="https://www.justcrackinterview.com/20-most-common-interview-questions-and-answers-asked-in-every-interview/" target="_blank"><b>Interview Prep</b></a></li>
              <li><a class="menu-btn" href="https://www.markcalculator.in/sgpamain.html" target="_blank"><b>Cgpa And Sgpa Calculator</b></a></li>
              <li><a class="menu-btn" href="https://www.canaraengineering.in/contact-us" target="_blank"><i class="fa fa-fw fa-envelope"></i><b>Contact Us</b></a></li>
              </li>
        </nav>
    </header>
    <main>
            <section>
                <h1><span>Subjects for Semester 3</span></h1>
                <div class="btn1-space"></div>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'canstudy');
        
                $query = "SELECT * FROM isefaculty_upload";
                $query_run = mysqli_query($connection, $query);
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                <div class="dropdown1">
                    <button class="dropbttn" href="#">MAT(18MAT31)</a>
                        <i class="fa fa-caret-right"></i>
                        <div class="dropdown-content1">
                        <?php<a href="$row['module1']; ">Module 1</a>?>
                            <a href="#">Module 2</a>
                            <a href="#">Module 3</a>
                            <a href="#">Module 4</a>
                            <a href="#">Module 5</a>
                        </div>
                        <?php
                    }
                }
                else
                {
                    echo "No Record Found";
                }
                ?>
                </div>
                <div class="btn1-space"></div>
                <div class="dropdown1">
                    <button class="dropbttn" href="#">DS (18CS32)</a>
                        <i class="fa fa-caret-right"></i>
                        <div class="dropdown-content1">
                            <a href="#">Module 1</a>
                            <a href="#">Module 2</a>
                            <a href="#">Module 3</a>
                            <a href="#">Module 4</a>
                            <a href="#">Module 5</a>
                        </div>
                </div>
                <div class="btn1-space"></div>
                <div class="dropdown1"> 
                    <button class="dropbttn" href="#">ADE(18CS33)</a>
                        <i class="fa fa-caret-right"></i>
                        <div class="dropdown-content1">
                            <a href="#">Module 1</a>
                            <a href="#">Module 2</a>
                            <a href="#">Module 3</a>
                            <a href="#">Module 4</a>
                            <a href="#">Module 5</a>
                        </div>
                </div>
                <div class="btn1-space"></div>
                <div class="dropdown1">
                    <button class="dropbttn" href="#">CO (18CS34)</a>
                        <i class="fa fa-caret-right"></i>
                        <div class="dropdown-content1">
                            <a href="#">Module 1</a>
                            <a href="#">Module 2</a>
                            <a href="#">Module 3</a>
                            <a href="#">Module 4</a>
                            <a href="#">Module 5</a>
                        </div>
                </div>
                <div class="btn1-space"></div>

                <div class="dropdown1">
                    <button class="dropbttn" href="#">SE (18CS35)</a>
                        <i class="fa fa-caret-right"></i>
                        <div class="dropdown-content1">
                            <a href="#">Module 1</a>
                            <a href="#">Module 2</a>
                            <a href="#">Module 3</a>
                            <a href="#">Module 4</a>
                            <a href="#">Module 5</a>
                        </div>
                </div>
                <div class="btn1-space"></div>
                <div class="dropdown1">
                    <button class="dropbttn" href="#">DMS(18CS36)</a>
                        <i class="fa fa-caret-right"></i>
                        <div class="dropdown-content1">
                            <a href="#">Module 1</a>
                            <a href="#">Module 2</a>
                            <a href="#">Module 3</a>
                            <a href="#">Module 4</a>
                            <a href="#">Module 5</a>
                        </div>
                </div>
                <div class="btn1-space"></div>
                <div class="btn-space"></div>
    </body>

</html>