<?php include "lib/database.php"?>
<?php  $db= new database();?>
<?php include "helper/format.php"?>
<?php $fm= new Format();?>

<?php 
if(isset($_GET['clubid'])){
   $club_id=$_GET['clubid'];
}
?>

<?php 
	//select club
    $select_query="select * from clublist
    where id='$club_id'";
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

                <?php }}?>

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
        </div>
    </header>


    <!-- About Area -->
    <section class="about-area">
        <div class="container">
            <div class="about">
            <?php 
				//select post
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

            <?php 
						//select event

					
						$select_query="select club_event.*, clublist.*
                         from club_event
                         inner join clublist on club_event.club_id=clublist.id
                         where clublist.id='$club_id'
                         order by club_event.id desc limit 3
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
                        <a href="event.php?event_id=<?php echo $result_club_event['id'];?>" class="btn">More Details</a>
                    </div>
                </div>
                <?php }}?>
               
                
            </div>
        </div>
    </section>

    <!-- Service Area -->
    <section class="activity-area">
        <div class="container">
            <div class="section-title">
                <h4>Our Services</h4>
            </div>
            <div class="activities">
                <div class="single-activity">
                    <i class="fa-regular fa-calendar"></i>
                    <h4>Event Organizing</h4>
                    <p>Event Organizing create a great potentials in members as soft skills.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <h4>Fund Raising</h4>
                    <p>Different events are planned for fund raising in an interesting way.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-shirt"></i>
                    <h4>Cloth Distribution</h4>
                    <p>During social calamities members do this for each needy people.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-plate-wheat"></i>
                    <h4>Food Distribution</h4>
                    <p>This initiative became every helpful for homeless people.</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <h4>Volunteers</h4>
                    <p>Volunteering is an opportunity to earn good deeds by serving people .</p>
                </div>
                <div class="single-activity">
                    <i class="fa-solid fa-list-check"></i>
                    <h4>Management</h4>
                    <p>Management skills earned by managing diffrent activities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activity Area -->
    <section class="services-area">
        <div class="container">
            <div class="section-title">
                <h4>Our Activities</h4>
            </div>
            <div class="services">
            <?php 
						//select activity
					
						$select_query="select club_activities.*, clublist.*
                         from club_activities
                         inner join clublist on club_activities.club_id=clublist.id
                         where clublist.id='$club_id'
                         order by club_activities.id desc limit 3
                         ";
					    $read_club_activity=$db->select($select_query);
						if($read_club_activity){
							$i=0;
							while($result_club_activity=$read_club_activity->fetch_assoc()){			
								$i++;

			?>
                <div class="single-services" style="background-image: url('admin/<?php echo $result_club_activity['activity_image'];?>');">
                    <div class="single-service-overlay">
                        <h4><?php echo $result_club_activity['activity_title']; ?></h4>
                        <p><?php echo $result_club_activity['activity_description']; ?></p>
                        <a href="" class="btn">Read More</a>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </section>

    <!-- Members Area -->
    <section class="members-area">
        <div class="container">
            <div class="section-title">
                <h4>Team Members</h4>
            </div>
            <div class="members">
            <?php 
						//select team
					
						$select_query="select club_team.*, clublist.*
                         from club_team
                         inner join clublist on club_team.club_id=clublist.id
                         where clublist.id='$club_id'
                         order by club_team.id desc limit 4
                         ";
					    $read_club_team=$db->select($select_query);
						if($read_club_team){
							$i=0;
							while($result_club_team=$read_club_team->fetch_assoc()){			
								$i++;

			?>
                <div class="single-member">
                    <img src="admin/<?php echo $result_club_team['member_image'];?>" alt="">
                    <h4><?php echo $result_club_team['member_name']; ?>
                    <span><?php echo $result_club_team['member_designation']; ?></span></h4>
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