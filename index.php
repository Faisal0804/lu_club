
<?php include "lib/database.php"?>
<?php  $db= new database();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LU Student Clubs</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
           
            <!-- Header Start -->
            <header class="header-area">
                <div class="container">
                    <div class="header">
                        <div class="logo">
                            <a href="index.php">LU STUDENT CLUBS</a>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="index.php">home</a></li>
                                <li><a href="signup.php">signup</a></li>
                                <li><a href="index.php">LU Clubs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->

            <!-- Banner Start -->
            <section class="banner-area" style="background-image: url(assets/img/lubg.jpeg);">
                <div class="container">
                    <div class="banner">
                        <h1>Welcome To<br>LU Student Clubs</h1>
                    </div>
                </div>
            </section>
            <!-- Banner End -->

            <!-- Clubs Start -->
            <section class="clubs-area">
                <div class="container">
                    <div class="club">
                    <?php 
						//select club

					
						$select_query="select * from clublist order by id limit 4";
					    $read_club=$db->select($select_query);
						if($read_club){
							$i=0;
							while($result_club=$read_club->fetch_assoc()){			
								$i++;

						?>
	
                         


                        <div class="single-club">
                            <a href="#"><img src="admin/<?php echo $result_club['club_logo'];?>" alt=""></a>
                            <a href="#"><h4><?php echo $result_club['club_name'] ;?><span><?php echo $result_club['club_title']; ?></span></h4></a>
                            <a href="club.php?clubid=<?php echo $result_club['id'] ;?>" class="btn">Explore Now</a>
                        </div>
                        <?php }}?>
                       
                    </div>
                </div>
            </section>
            <!-- Clubs End -->

            <!-- Footer Start -->
            <footer class="lus footer-area">
                    <div class="copy">
                        <p>&copy; 2023, All rights are reserved.</p>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
</body>
</html>