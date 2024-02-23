<?php include "lib/database.php"?>
<?php  $db= new database();?>
<?php include "helper/format.php"?>
<?php $fm= new Format();?>

<?php 
if(isset($_GET['event_id'])){
   $event=$_GET['event_id'];
}
?>

<?php 
	//select club
    $select_query="select * from club_event
    where id='$event'";
		$read_club=$db->select($select_query);
		if($read_club){
            $i=0;
            while($result_club=$read_club->fetch_assoc()){			
                $i++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result_club['club_name'] ;?></title>
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
                    <a href="club.php?club_id=<?php echo $result_club['id'] ;?>"><img src="admin/<?php echo $result_club['club_logo'];?>" alt=""><?php echo $result_club['club_name'] ;?></a>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="club.php?club_id=<?php echo $result_club['id'] ;?>">Home</a></li>
                        <li><a href="event.php?club_id=<?php echo $result_club['id'] ;?>">Events</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="index.php">Clubs</a></li>
                    </ul>
                </div>
            </div>
            <?php }}?>
        </div>
    </header>

    <!-- Events Area -->
    <section class="events-area">
        <div class="container">
            <div class="section-title">
                <h4>Our Events</h4>
            </div>
            <div class="events">

            <?php 
						//select event

					
						$select_query="select club_event.*, clublist.*
                         from club_event
                         inner join clublist on club_event.club_id=clublist.id
                         where clublist.id='$club_id'
                         order by club_event.id desc
                         ";
					    $read_club_event=$db->select($select_query);
						if($read_club_event){
							$i=0;
							while($result_club_event=$read_club_event->fetch_assoc()){			
								$i++;

			?>


                <div class="single-event">
                    <h4><?php echo $result_club_event['event_title']; ?></h4>
                    <img src="admin/<?php echo $result_club_event['event_image'];?>" alt="">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-location-dot"></i>Leading University</span>
                        <span><i class="fa-solid fa-calendar-days"></i><?php echo $result_club_event['event_start_date'];?></span>
                        <span><i class="fa-solid fa-clock"></i><?php echo $fm->formattime($result_club_event['event_start_time']);?> </span>
                    </div>
                    <div class="event-content">
                        <p><?php echo $result_club_event['event_description'];?></p>
                        <a href="" class="btn">More Details</a>
                    </div>
                </div>
                <?php }}?>
               
                
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