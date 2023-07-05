<!DOCTYPE html>
<html>
<head>
<title>Online quiz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
</head>
<body class="w3-light-grey">
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">
    
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    
    <a href="Cnetworks.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Computer Networks</a>
    <a href="Operating.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Operating System</a>
    <a href="DS.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Data Structure</a>
    <a href="SE.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Software Engineering</a>
    <a href="RDBMS.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">RDBMS</a>
    <a href="Interview.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Interview Preparation</a>
    <a href="phome.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
  </div>

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>Quiz World</b></h1>
    <h6>Welcome to the world of <span class="w3-tag">Quiz </span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
      
      
      
    <img class="" src="img/index.jpg" alt="Fashion Blog" width="1600" height="800px">
    
    
    
    
    
    
    
    <div class="w3-display-left w3-padding-large">
        
       
        
        
      <h1 class="w3-text-white">Your's</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Preparation adda</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.geyId('subsconclick="document.geyId('').style.display='block'">Learn more</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>What we Provide for you</h3>
          <h5>Quiz Pop <span class="w3-opacity">June 1, 2022</span></h5>
        </div>

        <div class="w3-justify">
          <img src="img/intro.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>Welcome! </strong> We provide you to prepare your subjects along with preparation of that subject by taking quiz. This section contains
          both module to learn and practice.Online Quiz System is a web-based examination system where the quiz is taken online. The project quiz application 
          is a collection of several different types of subjects. A user can access/play all of the quizzes and can attempt any of the ones. there will be a
          limited number of questions and for each correct answer, the user will get a credit score.
          Along with quiz we also provide e-learning topis on several topics belongs to core branch.E-learning, also known as online learning or electronic 
          learning, refers to the acquisition of knowledge through the use of electronic technologies and media channels. In a simpler language, e-learning is
          defined as “electronically enabled learning” that range from the countless “how-to” videos on YouTube to e-learning platforms of universities or entire 
          online study programs and digital masterclasses. </p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="img/sumit.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Sumit Shubham <span class="w3-opacity w3-medium">May 29, 2022, 6:32 PM</span></h4>
                <p>Best platform for elearning.</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Learning fundamentals</h3>
          <h5>Learn how to study and work more effectively. </h5>
        </div>

        <div class="w3-justify">
            <a href=""> <img src="https://webevolmind.b-cdn.net/wp-content/uploads/2018/05/guia-elearning-1024x484-2.jpg" alt="Men in Hats"  style="width:95%;height:50%;" class="w3-padding-16"></a>
          <p><strong>Hats!</strong> The trend of elearning is only for you!</p>
          <p>We firmly believe this and therefore we have created many courses, in online mode with the idea of imparting programming
              knowledge tolike y ou! The Courses platform has many Free Courses that you can join to improve your technical knowledge and also prepare 
              for placements or competitive exams. There are also online courses that can teach you from the comfort of your home and in case you want to join a 
              classroom program for a face to face education, then come join our courses in RVSCET!!!</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l2 m3">
                <img src="img/sac.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Rahul Kumar <span class="w3-opacity w3-medium">May 26, 2022, 10:52 PM</span></h4>
                <p>Love your blog page! Simply the best!.</p><br>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="img/puskar.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Pushkar <span class="w3-opacity w3-medium">May 28, 2022, 9:12 PM</span></h4>
                <p>Love hats!!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Online Quizs</h3>
          <h5>Check skills and experience.</h5>
        </div>

        <div class="w3-justify">
            <a href=""><img src="https://startupbonsai.com/wp-content/uploads/2020/07/Best-Online-Quiz-Makers-Social.jpg" alt="Runway" style="width:100%" class="w3-padding-16"></a>
          <p><strong>Dont miss!</strong> Don't miss the opportunity of checking your skill!</p>
          <p>In out platform you can check your skill and test your knowledge by taking the quiz free of cost which is user friendly and highly attractive.online quizzes are set up
              to actually test knowledge or identify a person's attributes. Some companies use online quizzes as an efficient way 
              of testing a potential hire's knowledge without that candidate needing to travel. Online dating services often use personality quizzes to find 
              a match between similar members.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Replies  </b> <span class="w3-tag w3-white">3</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/girl_mountain.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Bhoomi priya <span class="w3-opacity w3-medium">April 10, 2022, 7:22 PM</span></h4>
                <p>Helps alot for the interview preparation.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/boy.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Ashwini singh <span class="w3-opacity w3-medium">April 28, 2022, 10:32 PM</span></h4>
                <p> Really enjoyed from learning this platform.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="img/quiz2.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          
          <p>Take a quick quiz to practice and check your knowledge.A quiz at the end of a lesson or a unit of work is an entertaining way to find out how much pupils have learned. It can also inform any further follow up needed.</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Subjects</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
              <a href="DS.php"> <img src="img/data.png" alt="Image" class="w3-left w3-margin-right" style="width:50px"><a>
            <span class="w3-large">Data Strucure</span>
            <br>
            
          </li>
          <li class="w3-padding-16">
           <a href="OS.php"><img src="img/operating.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px"><a>
            <span class="w3-large">Operating System</span>
            <br>
           
          </li>
          <li class="w3-padding-16">
            <a href="Cnetworks.php">  <img src="img/cn.png" alt="Image" class="w3-left w3-margin-right" style="width:50px"><a>
            <span class="w3-large">Computer Networks</span>
            <br>
         
          </li>
          <li class="w3-padding-16">
             <a href="SE.php"> <img src="img/sd.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px"><a>
            <span class="w3-large">Software Development</span>
            <br>
            
          </li>
        </ul>
      </div>
      <hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Current Popular subject</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
              <span class="w3-display-middle"><b>Python</b></span>
            
          </div>
        </div>
      </div>
      <hr>

      <!-- Tags -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">Subjects</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Data Structure</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">HTML</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">C++</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">MySQL</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">CSS</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Java</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">PHP</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">JavaScript</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Python</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DAA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Bootstrap</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Web Development</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">c</span>
          </p>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Interview Subjects</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
              <a href="Operating.php"> <p><img src="https://1.bp.blogspot.com/-ji0b2CRNVaA/YDZ3V5AEjyI/AAAAAAAABFE/LT_3uc1x3goZGKlJ6iBVmZHbDtWDTcpuwCLcBGAsYHQ/w1200-h630-p-k-no-nu/5_Advantages_and_Disadvantages_of_Operating_System_Limitations_%2526_Benefits_of_Operating_System.jpg" alt="Jeans" style="width:100%"></p></a>
            <a href="Cnetworks.php"> <p><img src="https://i.ytimg.com/vi/bY5OfBrBg1M/maxresdefault.jpg" alt="Jeans" style="width:100%"></p></a>
          </div>
          <div class="w3-col s6">
           <a href="RDBMS.php">  <p><img src="https://media.geeksforgeeks.org/wp-content/uploads/20200427225738/RDBMS.png" alt="Men in Hats" style="width:100%" class="w3-grayscale"></p></a>
           <a href="SE.php">  <p><img src="https://www.computerhope.com/jargon/s/software-engineering.jpg" alt="Jeans" style="width:100%"></p></a>
         </div>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
           <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
    </div>

  </div>

</div>
<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  
</footer>

<script>
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
