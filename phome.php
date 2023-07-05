<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homestyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/ph.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-medium" style="font-size: 17px;float: left;" >
      <a href="" class="w3-bar-item w3-button"><i class="fa fa-home"></i>Home</a>
      <a href="G_index.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i>learning Module</a>
      <a href="Login.php" class="w3-bar-item w3-button"><i class="fa fa-edit"></i>Take Quiz</a>
      <a href="Login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login</a>
      <a href="Register.php" class="w3-bar-item w3-button"><i class="fa fa-address-book"></i>Register</a>
    </div>

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
    
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar" >
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="" onclick="w3_close()" class="w3-bar-item w3-button">Learning Module</a>
  <a href="Login.php" onclick="w3_close()" class="w3-bar-item w3-button">Take Quiz</a>
  <a href="Login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
  <a href="Register.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Learn something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Learn something that matters</span><br>
    <span class="w3-large">“Study without desire spoils the memory, and it retains nothing that it takes in.”</span>
    <p><a href="" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
 
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">What you learn here!</h3>
  <p class="w3-center w3-large">Key features of our learning module.</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px;margin-left: 230px;" >
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Learning Module</p>
      <p>This Website lots of subjects to learn related to your stream or your related to your interested topis.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Quiz Section</p>
      <p>Engage yourself and know your knowledge by taking interesting quiz daily. </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Out User friendly design helps user to easily access the website without any difficulty. </p>
    </div>
   
  </div>
</div>

<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h1 >Take a quick Quiz.</h1>
      <p>Why are quizzes good for students?
Quizzes encourage pupils' self awareness of progress and self assessment.</p>
      <p><a href="Login.php" class="w3-button w3-black"><i class="fa fa-th"> </i> Enter Quiz section</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://wallpaperaccess.com/full/2384073.jpg" alt="Buildings" width="600" height="200">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h1 class="w3-center"> Interview Subjects</h1>
  <p class="w3-center w3-large">Most Trending Subjects For Interview</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <a href="DS.php"> <img src="https://msatechnosoft.in/blog/wp-content/uploads/2018/09/Data-Structure-tutorial-MSA-Technosoft.jpg" alt="John" style="width:100%"></a>
        <div class="w3-container">
            <h2>Data Structure</h2>
          <p>Data structure is the hot topic to be asked in every IT related interview.Most asked in top MNC's</p>
         
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
         <a href="RDBMS.php"><img src="https://learnsql.com/blog/what-is-dbms/DBMS.png" alt="Jane" style="width:100%"></a>
        <div class="w3-container">
          <h2>DBMS</h2>
          <p>DBMS is easy to learn and does not expect you to have a great command of coding languages.</p>
         
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
          <a href="Operating.php"><img src="https://www.ionos.com/digitalguide/fileadmin/DigitalGuide/Teaser/operating-system-t.jpg" alt="Mike" style="width:100%"></a>
        <div class="w3-container">
          <h2>Operating System</h2>
         
          <p>OS is the most essential and vital part of a computer without which it is considered useless.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
          <a href="SE.php"> <img src="https://artoftesting.com/wp-content/uploads/2020/01/software-engineering-featured-1280x720.jpg" alt="Dan" style="width:100%"></a>
        <div class="w3-container">
          <h2>Software Engineering</h2>
          
          <p>Many interview questions will focus on your tech skills, such as what programming languages you know. </p>
        
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">10+</span>
    <br>learning module
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">15+</span>
    <br>Quizs Module
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">1000+</span>
    <br>Happy Students
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">20+</span>
    <br>Upcoming Modules
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h1 class="w3-center">Learning Module</h1>
  <p class="w3-center w3-large">Make strong your grip on any subjects.</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
        <a href="Cnetworks.php"><img src="https://img.brainkart.com/subject/221.jpg" style="width:100%" onclick="" class="w3-hover-opacity" alt="Computer Networks"></a>
    </div>
    <div class="w3-col l3 m6">
        <a href="Operating.php"><img src="https://www.ionos.com/digitalguide/fileadmin/DigitalGuide/Teaser/operating-system-t.jpg" style="width:100%" onclick="#Operating.php" class="w3-hover-opacity" alt="Operating System"></a>
    </div>
    <div class="w3-col l3 m6">
      <a href="RDBMS.php">  <img src="https://learnsql.com/blog/what-is-dbms/DBMS.png" style="width:100%" onclick="" class="w3-hover-opacity" alt="DBMS"></a>
    </div>
    <div class="w3-col l3 m6">
       <a href="SE.php"> <img src="https://artoftesting.com/wp-content/uploads/2020/01/software-engineering-featured-1280x720.jpg" style="width:100%" onclick=" class="w3-hover-opacity" alt="Software Engineering"></a>
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <a href="DS.php">  <img src="https://msatechnosoft.in/blog/wp-content/uploads/2018/09/Data-Structure-tutorial-MSA-Technosoft.jpg" style="width:100%" onclick="" class="w3-hover-opacity" alt="Data Strucure"></a>
    </div>
    <div class="w3-col l3 m6">
       <a href=""> <img src="https://cdn.educba.com/academy/wp-content/uploads/2018/12/Computer-Architecture.jpg" style="width:100%" onclick= class="w3-hover-opacity" alt="Computer Architecture"></a>
    </div>
    <div class="w3-col l3 m6">
       <a href="">   <a href=""><img src="https://4.bp.blogspot.com/-BWCLw1tX-64/WnnRJiEG6eI/AAAAAAAAAc4/75SaGwvjTJA_t5cnBX78jyMOoagc-4NBACLcBGAs/s1600/algoDesign.jpg" style="width:100%" onclick="" class="w3-hover-opacity" alt="DAA"></a>
    </div>
    <div class="w3-col l3 m6">
        <a href=""> <img src="https://i2.wp.com/1.bp.blogspot.com/-ggRh-2-uGws/XPgZ3Z9GEgI/AAAAAAAABmY/pM8ZbI1evs8m26r5UChIOHaMC8AHeu4ygCLcBGAs/s1600/X5gFB1559764843.png?ssl=1" style="width:100%" onclick="" class="w3-hover-opacity" alt="Network Security"></a>
    </div>
  </div>
</div>

<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
    <h1><b>Participate Now</b></h1>
  <p class="w3-large">Our Most Attempted Subjects.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Operating System</li>
        <li class="w3-padding-16"><b>50</b> Questions </li>
        <li class="w3-padding-16"><b>30</b> Minutes</li>
        <li class="w3-padding-16"><b>50</b> Marks</li>
        <li class="w3-padding-16"><b>NO</b> Negative Marks</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">Passing Marks</h2>
          <span class="w3-opacity">30</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
            <a href="Login.php"> <button class="w3-button w3-black w3-padding-large">Attemp</button></a></a>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">DBMS</li>
        <li class="w3-padding-16"><b>50</b> Questions</li>
        <li class="w3-padding-16"><b>30</b>  Minutes</li>
        <li class="w3-padding-16"><b>50</b> Marks</li>
        <li class="w3-padding-16"><b>NO</b> Negative Marks</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">Passing Marks</h2>
          <span class="w3-opacity">30</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
            <a href="Login.php"><button class="w3-button w3-black w3-padding-large">Attemp</button></a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Data Structure</li>
        <li class="w3-padding-16"><b>50</b> Questions</li>
        <li class="w3-padding-16"><b>30</b> Minutes</li>
        <li class="w3-padding-16"><b>50</b> Marks</li>
        <li class="w3-padding-16"><b>NO</b>Negative Marks</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">Passing Marks</h2>
          <span class="w3-opacity">40</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
            <a href="Login.php"><button class="w3-button w3-black w3-padding-large">Attemp</button></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
 
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
