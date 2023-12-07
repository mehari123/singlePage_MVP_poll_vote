<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brock Purdy MVP Campaign</title>
    <!-- Add your CSS link here -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/poll.css">
</head>

<body>

<div class="navigation">
        <a href="#slider-section">Achievements</a>
        <a href="#statistics-section">Statistics</a>
        <a href="#testimonials-section">Testimonials</a>
        <a href="#special-thanks-section">Special Thanks</a>
        <a href="#footer-section">Footer</a>
    </div>

        <div class="ad">
            <!-- Replace this comment with your Google AdSense code -->
            <!-- Example code -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Replace this placeholder div with your AdSense ad code -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-xxxxxxxxxx"
                 data-ad-slot="1234567890"
                 data-ad-format="auto"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <div class="container">
        <!-- First Row: Slider -->
        <div class="row row1" id= " slider-section">
            <div class="slider">
                <!-- Slider content goes here -->
                <h1>Brock Purdy's Achievements</h1>
                <div class="slide-container">
                    <div class="media-content">
                        <!-- Image or video content will be displayed here -->
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Second Row: Statistics and Fan Vote Poll -->
        <div class="row row2">
            <div class="column1">
                
                <div class="statistics" id = "statistics-section">
                <div><img src="../media/i33.jpg"></img></div>
                <div>
                    <h1>Brock Purdy's Statistics</h1>
                    <ul class="stats-list">
                        <li>Passing Yards: 3,845</li>
                        <li>Touchdown Passes: 28</li>
                        <li>Completion Percentage: 65.7%</li>
                        <li>Rushing Yards: 385</li>
                        <li>Passer Rating: 156.9</li>
                        <li>Games Played: 13</li>
                        <!-- Add more statistics as needed -->
                    </ul>
                    </div>
                </div>

                <div class="testimonials" id = "testimonials-section">
                    <h1>Testimonials/Quotes</h1>
                    <div class="testimonial">
                        <div class="testimonial-text">
                            <p>"Brock Purdy's work ethic and passion for the game are truly inspiring. He sets a high standard for everyone around him."</p>
                            <span>- Analyst XYZ</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-text">
                            <p>"Watching Brock Purdy play is a joy. His talent and decision-making make him a standout player in the league."</p>
                            <span>- Commentator ABC</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-text">
                            <p>"Brock Purdy's impact on the field is undeniable. He's a game-changer and a pivotal player for the team."</p>
                            <span>- Sports Journalist PQR</span>
                        </div>
                    </div>
                </div>


                

            </div>

            <div class="column2">
                <div class="fan-poll">
                    <h1>Fan Vote Poll</h1>
                    <div class="poll-content">
                        <form id="voteForm" method="post">
                            <div id="choices">
                                <div class="choice">
                                    <div class="label">
                                        <button id="yesBtn" type="submit">Yes</button>
                                        <div class="result">
                                            <div class="bar" data-choice="1"></div>
                                        </div>
                                        <div class="label-percent" id="label1"></div>
                                    </div>
                                </div>
                                <div class="choice">
                                    <div class="label">
                                        <button id="noBtn" type="submit">No</button>
                                        <div class="result">
                                            <div class="bar" data-choice="2"></div>
                                        </div>
                                        <div class="label-percent" id="label2"></div>
                                    </div>
                                </div>
                                <div id ="voteMessage"></div>
                                <div class="total">
                                    <h3>total votes</h3>
                                    <div id="total-votes"></div>
                                </div>
                            </div>
                        </form>       
                    </div>
                </div>
                 <!-- <img src="i22.jpg"></img>  -->


                <div class="testimonials">
                    <!-- Testimonials content goes here -->
                    <h1>Tweet (x) feed</h1>
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Loyal, Forever, True. <a href="https://t.co/mjKibAdk5c">pic.twitter.com/mjKibAdk5c</a></p>&mdash; Brock Purdy (@brockpurdy13) <a href="https://twitter.com/brockpurdy13/status/1479965438285070336?ref_src=twsrc%5Etfw">January 8, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <!-- Add testimonials content -->
                </div>
               
            </div>
        
        <!-- Insert Google AdSense ad -->
        
        <div class="special-thanks" id = 'special-thanks-section'>
            <h1>Special Thanks</h1>
            <div class="thanks-text">
                <p>We extend our heartfelt gratitude to all the voters and dedicated fans who support Brock Purdy's journey in the NFL MVP race. Your unwavering support means everything!</p>
            </div>
        </div>

        <!-- Third Row: Testimonials/Quotes -->
    
        <div class="row row3">
            <div class="footer"id = "footer-section">
                <h1>Contact Information</h1>
                <ul class="contact-info">
                    <li><strong>Name:</strong> Your Name</li>
                    <li><strong>Email:</strong> example@email.com</li>
                    <li><strong>Phone:</strong> +1234567890</li>
                    <li><strong>Campaign:</strong> Experimentero's Campaign</li>
                </ul>
            </div>
        </div>

    </div>

    
    <!-- Add your JavaScript link here if needed -->
    <script src="../script/script.js"></script>
    <script src="../script/poll.js"></script>
</body>
</html>
