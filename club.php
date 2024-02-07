<?php include "lib/database.php"?>
<?php  $db= new database();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUCC</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!-- Header Area -->
    <header class="header-area">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="lucc.html"><img src="assets/img/lucc/logo/LUCC_logo.jpg" alt="">LUCC</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="lucc.html">Home</a></li>
                        <li><a href="event.html">Events</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="luclublist.php">Clubs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <?php 

     if(isset($_GET['clubid'])){
        $club_id=$_GET['clubid'];
     }
    
    
    ?>

    <!-- About Area -->
    <section class="about-area">
        <div class="container">
            <div class="about">
            <?php 
						//select club

					
						$select_query="select club_pst.*, clublist.*
                         from club_pst
                         inner join clublist on club_pst.club_id=clublist.id
                         where clublist.id='$club_id'";
					    $read_club_pst=$db->select($select_query);
						if($read_club_pst){
							$i=0;
							while($result_club_post=$read_club_pst->fetch_assoc()){			
								$i++;

			?>

               
                <div class="about-content">
                    <h1><?php echo $result_club_post['club_title'];  ?></h1>
                    <p><?php echo $result_club_post['desccription'];  ?></p>
                    <a href="#" class="btn">Get More Info</a>
                </div>
             
                <div class="about-img">
                    <img src="admin/<?php echo $result_club_post['image'];  ?>" alt="">
                  
                </div>
                <?php }}?>
                
            </div>
        </div>
    </section>

    <!-- Events Area -->
    <section class="events-area">
        <div class="container">
            <div class="section-title">
                <h4>Our Events</h4>
            </div>
            <div class="events">
                <div class="single-event">
                    <h4>Hoodie Registration</h4>
                    <img src="assets/img/lucc/events/event1.jpg" alt="">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-location-dot"></i>Leading University</span>
                        <span><i class="fa-solid fa-calendar-days"></i>2th - 10th December, 2022</span>
                        <span><i class="fa-solid fa-clock"></i>11:00 AM - 2:00 PM</span>
                    </div>
                    <div class="event-content">
                        <p>Leading University has launched it's 1st institutional HOODIE.
                            Leading University Computer Club is proud to announce that we’ll be in charge of the Leading University Hoodie campaign by the direction of Leading University Authority.
                            Whether you are currently studying at Leading University or an Ex student, pre-book the hoodie right now so that the memories of our university lives with you every winter.</p>
                        <a href="" class="btn">More Details</a>
                    </div>
                </div>
                <div class="single-event">
                    <h4>Picnic</h4>
                    <img src="assets/img/lucc/events/event2.jpg" alt="">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-location-dot"></i>Leading University</span>
                        <span><i class="fa-solid fa-calendar-days"></i>18th October, 2022</span>
                        <span><i class="fa-solid fa-clock"></i>11:00 AM</span>
                    </div>
                    <div class="event-content">
                        <p>Leading University Computer Club is going to organize the "CSE Department Annual Picnic" for the very first time as titled "Hello World to Real World".
                            We haven't organized any picnic event since then 2019 as that time we were going through a pandemic situation. Therefore, in the days to come, on 3rd December 2022, the event will be arranged.</p>
                        <a href="" class="btn">More Details</a>
                    </div>
                </div>
                <div class="single-event">
                    <h4>Bit Fest</h4>
                    <img src="assets/img/lucc/events/event3.jpg" alt="">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-location-dot"></i>Leading University</span>
                        <span><i class="fa-solid fa-calendar-days"></i>8th June, 2023</span>
                        <span><i class="fa-solid fa-clock"></i>12:00 PM</span>
                    </div>
                    <div class="event-content">
                        <p>The leading University Computer Club is going to arrange “Bit Fest” at the Leading University. Participants in the event include students from the Leading University as well as programmers, developers, and game players. The program will last for two days on our home campus. Over 700 programmers, developers, gamers, and students from all over the Sylhet city will attend this event.
                        </p>
                        <a href="" class="btn">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity Area -->
    <section class="activity-area">
        <div class="container">
            <div class="section-title">
                <h4>Our Services</h4>
            </div>
            <div class="activities">
                <div class="single-activity">
                    <i class="fa-regular fa-calendar"></i>
                    <h4>Event Organizing</h4>
                    <p>Event Organizing is an great initiative taken by LUCC for activities.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-gamepad"></i>
                    <h4>Gaming Contest</h4>
                    <p>Gaming Contest is an great initiative taken by LUCC for activities.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-code"></i>
                    <h4>Programming Contest</h4>
                    <p>Programming Contest is an great initiative taken by LUCC for activities.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-brands fa-codepen"></i>
                    <h4>Hackathon</h4>
                    <p>Hackathon is an great initiative taken by LUCC for activities.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <h4>Volunteers</h4>
                    <p>Volunteers is an great initiative taken by LUCC for activities.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-list-check"></i>
                    <h4>Management</h4>
                    <p>Management is an great initiative taken by LUCC for activities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Area -->
    <section class="services-area">
        <div class="container">
            <div class="section-title">
                <h4>Our Activities</h4>
            </div>
            <div class="services">
                <div class="single-services" style="background-image: url('assets/img/lucc/Activity/techstrom.jpg');">
                    <div class="single-service-overlay">
                        <h4>Techstrom</h4>
                        <p>The Intra LU Junior Programming Contest, Hackathon, Gaming Contest, ICT Quiz Contest, Job Fair, and Culture Program are some of the segments that make up the Bit Fest. There will be games including Carrom, Buzz-Wire, Dart Board, and FIFA-22 in the gaming competition.</p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </div>
                <div class="single-services" style="background-image: url('assets/img/lucc/Activity/bitfest.jpg');">
                    <div class="single-service-overlay">
                        <h4>Bit Fest</h4>
                        <p>The leading University Computer Club is going to arrange “Bit Fest” at the Leading University. Participants in the event include students from the Leading University as well as programmers, developers, and game players.</p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </div>
                <div class="single-services" style="background-image: url('assets/img/lucc/Activity/picnic.jpg');">
                    <div class="single-service-overlay">
                        <h4>Picnic</h4>
                        <p>Leading University Computer Club is going to organize the "CSE Department Annual Picnic" for the very first time as titled "Hello World to Real World".
                            We haven't organized any picnic event since then 2019 as that time we were going through a pandemic situation.</p>
                        </p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Members Area -->
    <section class="members-area">
        <div class="container">
            <div class="section-title">
                <h4>LUCC Team</h4>
            </div>
            <div class="members">
                <div class="single-member">
                    <img src="assets/img/lucc/members/member1.png" alt="">
                    <h4>Abul Hasnat Fahim
                        <span>President</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member2.png" alt="">
                    <h4>Asifur Rahman<span>Vice President</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member3.png" alt="">
                    <div class="guide-content"></div>
                    <h4>Rafid Al Raiyan<span>Assistant General Secretary</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member4.png" alt="">
                    <h4>Umama Begum<span>Assistant Organizing Secretary</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member5.jpg" alt="">
                    <h4>Mafruda Ahmed<span>Joint General Secretary</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member6.png" alt="">
                    <h4>Nabil Rahman<span>Joint Organising Secretary</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member7.png" alt="">
                    <h4>Sanjida Chowdhury<span>Publicity Secretary</span></h4>
                </div>
                <div class="single-member">
                    <img src="assets/img/lucc/members/member8.jpg" alt="">
                    <h4>Suhrath Tahra<span>Assistant Treasurer</span></h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Area -->
    <section class="video-area">
        <div class="container">
            <div class="videos">
                <div class="video-content">
                    <i class="fa-solid fa-circle-play"></i>
                    <h4>Video Gallery</h4>
                    <p>Short overview of our work</p>
                    <a href="" class="btn">More Videos</a>
                </div>
                <div class="video-watch">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Flucc.official%2Fvideos%2F856673845056648%2F&show_text=false&width=475&t=0" width="475" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe> 
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="footer">
                <div class="single-footer">
                    <h4>about us</h4>
                    <p> An active LUCC Student Branch can be one of the most positive elements of your academic career, offering programs, activities, and professional networking opportunities that build critical skills outside of the class.</p>
                    
                    <div class="footer-social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="single-footer">
                    <h4>contact us</h4>
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i> Leading University, Kamal Bazar, Sylhet</li>
                        <li><i class="fa-solid fa-phone"></i>01719-389936</li>
                        <li><i class="fa-regular fa-envelope"></i> computerclub.lu@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>&copy; 2023, All rights are reserved.</p>
        </div>
    </footer>
</body>
</html>