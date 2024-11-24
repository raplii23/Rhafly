<?php
session_start();

// Proteksi halaman: Redirect ke login jika pengguna belum login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Ambil nama pengguna untuk ditampilkan
$username = $_SESSION['username'] ?? 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden State Warriors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <br>
            <h1>THE WARRIORS FROM GOLDEN STATE BRIDGE OF SAN FRANCISCO</h1>
            <br>
            <p>Welcome, <?php echo htmlspecialchars($username); ?>!</p>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#roster">Players</a></li>
                <li><a href="#schedule">Schedule</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#social-discussion">Diskusi</a></li>
                <li><a href="logout.php">Logout</a></li> <!-- Logout jika sudah login -->
            </ul>
        </div>
    </nav>

    <!-- Slideshow -->
    <div class="slideshow-container">
        <div class="slideshow-wrapper">
            <div class="slide">
                <img src="https://i.pinimg.com/736x/fb/f5/0f/fbf50faa499ec3acf4d8b9defef249bf.jpg" alt="Golden State Warriors 1">
            </div>
            <div class="slide">
                <img src="1.jpg" alt="Golden State Warriors 2">
            </div>
            <div class="slide">
                <img src="2.jpg" alt="Golden State Warriors 3">
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Warriors</h2>
            <p>The Golden State Warriors are an American professional basketball team based in San Francisco</p>
        </div>
    </section>

    <!-- Roster Section -->
    <section id="roster">
        <div class="container">
            <h2>Starting Line-Up of Warriors</h2>
            <div class="roster-container">
                <!-- Player Cards -->
                <div class="roster-card">
                    <img src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3975.png&w=350&h=254" alt="Player 1">
                    <h3>Stephen Curry</h3>
                    <p>Curry is considered one of the greatest shooters in basketball history and is credited with revolutionizing the game with his three-point shooting. He's the only NBA player to average over five made 3-pointers per game for an entire season.</p>
                </div>
                <div class="roster-card">
                    <img src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3059319.png&w=350&h=254" alt="Player 2">
                    <h3>Andrew Wiggins</h3>
                    <p>A Canadian professional basketball player for the Golden State Warriors, has been known by several nicknames, including Maple Jordan, Junior Jordan, and Mr. Fantastic.</p>
                </div>
                <div class="roster-card">
                    <img src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/6589.png&w=350&h=254" alt="Player 3">
                    <h3>Draymond Green</h3>
                    <p>Green is considered one of the NBA's best defensive players. He was the 2017 NBA Defensive Player of the Year and has been named to the All-Defensive Team eight times.</p>
                </div>
                <div class="roster-card">
                    <img src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4066317.png&w=350&h=254" alt="Player 3">
                    <h3>Lindy Waters III</h3>
                    <p>Lindy Waters III is known by his family as Trey. He is a professional basketball player for the Golden State Warriors and is also known for his work with the Lindy Waters III Foundation, which supports Native American youth.</p>
                </div>
                <div class="roster-card">
                    <img src="https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4431684.png&w=350&h=254" alt="Player 3">
                    <h3>Tracye Jackon-Davis</h3>
                    <p>Jackson-Davis was one of the top college basketball players during the 2022-2023 season. He had an impressive career at Indiana University, earning two Big Ten All-Defense nods and being in the running for the Naismith College Player of the Year. </p>
                </div>            </div>
        </div>
    </section>

    <section id="full-roster">
            <div class="container">
                <h2 class="section-title">Roster</h2>
                <div class="roster-grid">
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1627780.png" 
                            alt="Gary Payton II" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Gary</span>
                                <span class="last-name">Payton II</span>
                                <span class="number">0</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1627780/gary-payton-ii/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630228.png" 
                            alt="Jonathan Kuminga" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Jonathan</span>
                                <span class="last-name">Kuminga</span>
                                <span class="number">00</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/1630228/jonathan-kuminga/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/203937.png" 
                            alt="Kyle Anderson" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Kyle</span>
                                <span class="last-name">Anderson</span>
                                <span class="number">1</span>
                            </h3>
                            <div class="position">Forward-Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/203937/kyle-anderson/bio">Player Bio</a>
                        </div>
                    </div>

                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1641764.png" 
                            alt="Brandon Podziemski" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Brandon</span>
                                <span class="last-name">Podziemski</span>
                                <span class="number">2</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1641764/brandin-podziemski/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1641736.png" 
                            alt="Recce Beekman" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Recce</span>
                                <span class="last-name">Beekman</span>
                                <span class="number">3</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1641736/reece-beekman/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630541.png" 
                            alt="Moses Moody" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Moses</span>
                                <span class="last-name">Moody</span>
                                <span class="number">4</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1630541/moses-moody/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1626172.png" 
                            alt="Kevon Looney" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Kevon</span>
                                <span class="last-name">Looney</span>
                                <span class="number">5</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/1626172/kevon-looney/bio">Player Bio</a>
                        </div>
                    </div>

                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1627741.png" 
                            alt="Buddy Hield" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Buddy</span>
                                <span class="last-name">Hield</span>
                                <span class="number">7</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1627741/buddy-hield/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1629001.png" 
                            alt="De'Anthony Melton" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">De'Anthony</span>
                                <span class="last-name">Melton</span>
                                <span class="number">8</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1629001/deanthony-melton/bio">Player Bio</a>
                        </div>
                    </div>

                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630611.png" 
                            alt="Gui Santos" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Gui</span>
                                <span class="last-name">Santos</span>
                                <span class="number">15</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/1630611/gui-santos/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1642366.png" 
                            alt="Quinten Post" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Quinten</span>
                                <span class="last-name">Post</span>
                                <span class="number">21</span>
                            </h3>
                            <div class="position">Center</div>
                            <br>
                            <a href="https://www.nba.com/player/1642366/quinten-post/bio">Player Bio</a>
                        </div>
                    </div>

                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/203952.png" 
                            alt="Andrew Wiggins" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Andrew</span>
                                <span class="last-name">Wiggins</span>
                                <span class="number">22</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/203952/andrew-wiggins/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/203110.png" 
                            alt="Draymond Green" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Draymond</span>
                                <span class="last-name">Green</span>
                                <span class="number">23</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/203110/draymond-green/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/201939.png" 
                            alt="Stephen Curry" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Stephen</span>
                                <span class="last-name">Curry</span>
                                <span class="number">30</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/201939/stephen-curry/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1631218.png" 
                            alt="Trayce Jackson-Davies" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Trayce</span>
                                <span class="last-name">Jackson-Davies</span>
                                <span class="number">32</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/1631218/trayce-jackson-davis/bio">Player Bio</a>
                        </div>
                    </div>

                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630322.png" 
                            alt="Lindy Waters III" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Lindy</span>
                                <span class="last-name">Waters III</span>
                                <span class="number">43</span>
                            </h3>
                            <div class="position">Forward</div>
                            <br>
                            <a href="https://www.nba.com/player/1630322/lindy-waters-iii/bio">Player Bio</a>
                        </div>
                    </div>
                    <div class="player-card">
                        <img 
                            src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630311.png" 
                            alt="Pat Spencer" 
                            class="player-image"
                            loading="lazy"
                        >
                        <div class="player-info">
                            <h3 class="player-name">
                                <span class="first-name">Pat</span>
                                <span class="last-name">Spencer</span>
                                <span class="number">61</span>
                            </h3>
                            <div class="position">Guard</div>
                            <br>
                            <a href="https://www.nba.com/player/1630311/pat-spencer/bio">Player Bio</a>
                        </div>
                    </div>  
                </div>
            </div>
        </section>


    <section id="coaching-staff">
        <div class="container">
            <h2 class="section-title">Coaching Staff</h2>
            <div class="staff-grid">
                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/204005.png" 
                        alt="Steve Kerr"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Steve</span>
                            <span class="last-name">Kerr</span>
                        </h3>
                        <div class="title">Head Coach</div>
                    </div>
                </div>

                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1796.png" 
                        alt="Ron Adams"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Ron</span>
                            <span class="last-name">Adams</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>

                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/204260.png" 
                        alt="Bruce Fraser"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Bruce</span>
                            <span class="last-name">Fraser</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>

                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1627666.png" 
                        alt="Chris DeMarco"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Chris</span>
                            <span class="last-name">DeMarco</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>

                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1628831.png" 
                        alt="Kris Weems"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Kris</span>
                            <span class="last-name">Weems</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>

                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630857.png" 
                        alt="Dejan Milojevic"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Dejan</span>
                            <span class="last-name">Milojevic</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>
                <div class="coach-card">
                    <img
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/711.png"
                        alt="Jerry Stackhouse"
                        Class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Jerry</span>
                            <span class="last-name">Stackhouse</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>

                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1337.png" 
                        alt="Terry Stotts"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Terry</span>
                            <span class="last-name">Stotts</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>
                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/202805.png" 
                        alt="Anthony Verren"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Anthony</span>
                            <span class="last-name">Verren</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>
                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1630858.png" 
                        alt="Jacob Rubin"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Jacob</span>
                            <span class="last-name">Robbin</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>
                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1642718.png" 
                        alt="Khalid Robinson"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Khalid</span>
                            <span class="last-name">Robinson</span>
                        </h3>
                        <div class="title">Assistant Coach</div>
                    </div>
                </div>
                <div class="coach-card">
                    <img 
                        src="https://cdn.nba.com/headshots/nba/latest/1040x760/1628227.png" 
                        alt="Drew Yoder"
                        class="coach-image"
                    >
                    <div class="coach-info">
                        <h3 class="coach-name">
                            <span class="first-name">Drew</span>
                            <span class="last-name">Yoder</span>
                        </h3>
                        <div class="title">Trainer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule">
        <div class="container">
            <h2>Upcoming Schedule</h2>
            <p>Check out the latest games and events featuring the Warriors!</p>
            <img src="schedule.jpg">
        </div>
    </section>

    <section id="news">
        <div class="container">
            <h2>Latest News</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://cdn.nba.com/teams/uploads/sites/1610612744/2024/11/feat-image_-in-game-20241123.png" width="250px">
                    <h3>Warriors Surrender 17-Point Lead in San Antonio in Loss to Spurs</h3>
                    <p>The Warriors led by as many as 17 points but scored a season-low 13 points in the fourth quarter in their 104-94 loss to the Spurs in San Antonio on Saturday. Victor Wembanyama led all players is points (25), assists (9), blocks (3) and plus-minus (+10). Wembanyama also tied Andrew Wiggins for the game-high in made 3-pointers (4), as Wiggins paced the Dubs with his fourth straight 20-point game.</p>
                    <a href="https://www.nba.com/warriors/news/gameday-recap-20241123">For More Information Click Here!</a>
                </div>
                <div class="card">
                    <img src="https://cdn.nba.com/teams/uploads/sites/1610612744/2024/11/feat-image_-wiggs-20241120.png" width="250px">
                    <h3>Warriors of the Week: Week 5 Nov. 18 - Nov. 23<br>
                    Top Performers from Week 5 of the Warriors Season
                    </h3>
                    <p>Andrew Wiggins scored a season-high 30 points to lead the Warriors to a 112-108 NBA Cup win over the Pelicans in New Orleans on Friday. Wiggins opened the game with a perfect first quarter, scoring 13 points on 5-for-5 from the field and 3-for-3 from three. He made the Warriors' first basket of the game and then scored 11 straight points for the Dubs later in the frame. Wiggins finished 9-for-14 from the field and a perfect 9-for-9 from the foul line, marking his first game this season with more points (30) than minutes played (28).</p>
                    <a href="https://www.nba.com/warriors/news/warriors-of-the-week-week-5-20241118">For More Information Click Here!</a>
                </div>
                <div class="card">
                    <img src="https://cdn.nba.com/teams/uploads/sites/1610612744/2024/11/feat-image_-nba-cup-20241122.png" width="250px">
                    <h3>Warriors Become First Team to Advance to Knockout Stage of NBA Cup</h3>
                    <p>The Warriors are 3-0 in Group Play for the Emirates NBA Cup and have clinched first place in West Group C with a win over the New Orleans Pelicans and the Dallas Mavericks' win over the Denver Nuggets on Friday. The Dubs have won their three NBA Cup games by a combined 12 points, with a thrilling three-point win over the Mavericks, a five-point win against the Memphis Grizzlies and a four-point win against the New Orleans Pelicans. Their final group play game is in Denver, visiting the Nuggets on Dec. 3.</p>
                    <a href="https://www.nba.com/warriors/news/warriors-become-first-team-to-advance-to-knockout-stage-of-nba-cup-20241122">For More Information Click Here!</a>
                </div>  
            </div>
        </div>
    </section>

    <section id="social-discussion">
    <div class="container">
        <h2>Discussion Board</h2>
        <!-- Form untuk membuat thread baru -->
        <form id="thread-form">
            <textarea id="new-thread-content" placeholder="Write something..." required></textarea>
            <button type="submit">Post</button>
        </form>

        <div class="thread-list">
            <!-- Komentar utama dan balasan akan dimuat di sini -->
        </div>
    </div>
    </section>

    <footer>
        <p>&copy; 2024 Golden State Warriors Fan Site</p>
        <div class="social-media">
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://www.instagram.com/">Instagram</a>
            <a href="https://x.com/">Twitter</a>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>
