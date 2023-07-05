<!DOCTYPE html>
<html lang="en">
<head>
<title>Online quiz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="learning.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    
    <a href="Cnetworks.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Computer Networks</a>
    <a href="Operating.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Operating System</a>
    <a href="DS.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Data Structure</a>
    <a href="SE.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Software Engineering</a>
    <a href="RDBMS.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">RDBMS</a>
    <a href="Interview.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Interview Preparation</a>
    <a href="phome.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="Cnetworks.php" class="w3-bar-item w3-button w3-padding-large">Computer Networks</a>
    <a href="OS.php" class="w3-bar-item w3-button w3-padding-large">Operating System</a>
    <a href="DS.php" class="w3-bar-item w3-button w3-padding-large">Data Structure</a>
    <a href="SE.php" class="w3-bar-item w3-button w3-padding-large">Software Engineering</a>
    <a href="RDBMS.php" class="w3-bar-item w3-button w3-padding-large">RDBMS</a>
    <a href="Interview.php" class="w3-bar-item w3-button w3-padding-large">Interview Preparation</a>
    <a href="phome.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
     
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Software Engineering</h1>
  <p class="w3-xlarge">Software Engineering problem and solution!</p>
 
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">1)What is Software Engineering?</h5>

      <p class="w3-text-grey">Software engineering is defined as the process of identifying user needs, then designing, creating,
          and testing software to meet those requirements. It is a discipline of engineering concerned with the growth of software
          products by the use of well-defined scientific concepts, methodologies, and procedures. It follows a set of principles, 
          best practices, and procedures that have been fine-tuned through time,evolving as software and technology evolves. Software
          engineering results in a product that is dependable, efficient, and effective in its function.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">2)What are the various categories of software?</h5>

      <p class="w3-text-grey">Software products are mainly categorized into:<br>
      <ul>
          <li><b>System software:</b> Softwares like operating systems, compilers, drivers, etc. fall into this category.</li>
          <li><b>Networking and web development software:</b> Computer networking software offers the necessary functionality
              for computers to communicate with one another and with data storage facilities.</li>
          <li><b>Embedded Software:</b> Software used in instrumentation and control applications such as washing machines, satellites, microwaves, TVs, etc.</li>
           <li><b>Artificial Intelligence Software:</b> Expert systems, decision support systems, pattern recognition software, artificial neural networks, and other
               types of software are included in this category.</li>
          <li><b>Scientific software:</b> These support a scientific or engineering user's requirements for performing
              enterprise-specific tasks. Examples include MATLAB, AUTOCAD, etc</li>
      </ul>
      
      </p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">3) What is a framework?</h5>

      <p class="w3-text-grey">A framework is a well-known method of developing and deploying software. 
          It is a set of tools that allows developing software by providing information on how to make 
          it on an abstract level, rather than giving exact details. The Software Process Framework is the basis of the entire software development process.
          The umbrella activities are also included in the software process structure.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">4)What is the main difference between a computer program and computer software?</h5>

      <p class="w3-text-grey">The key difference between software is a collection of several programs used to complete tasks, 
          whereas a program is a set of instructions expressed in a programming language. A program can be software, but software the vice versa is not true.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">5) Describe the Software Development Process in Brief.</h5>

      <p class="w3-text-grey">The Software Development Life Cycle (SDLC) is a number of fundamental phases that teams must follow in order to produce and deliver high-quality software. Software typically goes through the following phases:

      <br><strong>1)Requirements Gathering:</strong> The team identifies, collects, and defines core issues, requirements, requests, and customer expectations related to the software application or service during this stage of the project. Generating software specifications, creating a thorough strategy, documentation, issue tracking, and project or product planning, including allocating the resources, are some tasks done during this phase.
<br><strong>2)Software Design:</strong> The team makes software design decisions regarding the architecture and make of the software solution throughout this design phase of development.
<br><strong>3)Software Development:</strong> Teams develop software solutions based on the design decisions made during earlier stages of the project
<br><strong>4)Testing and Integration:</strong> Software is packaged and tested to ensure quality. Quality assurance, often known as testing, ensures that the solutions deployed fulfil the specified quality and performance criteria.
<br><strong>5)Deployment:</strong> The software is installed in a production setting. The gathered, designed, built, and tested work is shared with the software service's customers and users.
<br><strong>6)Operation and Maintenance:</strong> The software is installed in a production setting. The work is shared with the software service's customers and users.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">6)What are different SDLC models available?</h5>

      <p class="w3-text-grey">
      <ul class="w3-text-grey">
          <li>Waterfall model</li>
          <li>Spiral model</li>
          <li>Incremental model</li>
          <li>Agile Model</li>
          <li>Big bang model</li>
          <li>Iterative model</li>
      </ul>
      </p>
      <img src="https://www.testingdocs.com/wp-content/uploads/SDLC.png" alt="Image" class="w3-left w3-margin-right" style="width:600px">
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">7)Which SDLC model is the best?</h5>

      <p class="w3-text-grey">According to the annual State of Agile report, Agile is the best SDLC methodology and also one of the most
          widely used SDLC in the IT industry. The reason is that it is a hybrid of incremental and iterative approaches and works well in
          a flexible environment. That being said, select the model that suits your requirements.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">8)What is Debugging?</h5>

      <p class="w3-text-grey">Debugging is the process of finding a software bug, in the context of software engineering. To put it another way, it refers to 
          the process of finding, evaluating, and correcting problems. Debugging is essential once the software fails to run properly.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">9)What does a software project manager do?</h5>

      <p class="w3-text-grey">A software product manager leads and manages the software product management department.
          They are in charge of the software product's specialization, goals, structure, and expectations. They also head the planning, backlog grooming,
          stakeholder management, and providing roadmap necessary to create the best software.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">10)What is the waterfall method and what are its use cases?</h5>

      <p class="w3-text-grey">The waterfall is the easiest and most straightforward SDLC approach in software development. In this approach, the development process is linear, and each step is finished one by one. As the name implies, development progresses downwards, much like a waterfall. The software has to cover the following phases in a waterfall model:

          <br><b>Requirements</b>
          <br><b>Design</b>
          <br><b>Implementation</b>
          <br><b>Testing and integration</b>
          <br><b>Deployment</b>
          <br><b>Maintenance</b>
      </p>
      <img src="https://static.javatpoint.com/tutorial/jira/images/jira-waterfall-model.png" alt="Image" class="w3-left w3-margin-right" style="width:600px">
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">11)What is Software scope?</h5>

      <p class="w3-text-grey">The scope of a software project is a well-defined boundary that incorporates all the activities involved in 
          developing and delivering a software product.  The scope defines what the product will and will not do, as well as what the final
          product will and will not contain.All capabilities and objects to be delivered as part of the software are explicitly defined in the software scope.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99"></h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">12)What is Software prototyping and POC?</h5>

      <p class="w3-text-grey">A software prototype is a working model with limited functionality. The prototype may or may not contain the exact
          logic used in the final software program, and therefore is an additional work that should be considered in the calculation. Users can
          review developer proposals and try them out before they are implemented through prototyping. It also helps in comprehending user-specific
          details that may have been missed by the developer during product development.

<br>POC (Proof of Concept) is a method used by organizations to validate an idea or concept's practicality. The stage exists prior to the start of the
software development process. On the basis of technical capability and business model, a mini project is built to see if a concept can be executed</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">13)What are the drawbacks of the spiral model?</h5>

      <p class="w3-text-grey">The spiral model is a hybrid of the iterative development process and the waterfall model, with a
          focus on risk analysis. In the SDLC Spiral model, the development process begins with a limited set of requirements and 
          progresses through each development phase.  Until the application is ready for production,
          the software engineering team adds functionality for the increased requirement in ever-increasing spirals.
      <img src="https://www.sovereignconsult.com/wp-content/uploads/2021/09/Spiral-Model-Methodology.png" alt="Image" class="w3-left w3-margin-right" style="width:600px"></p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">14)What is baseline in Software Development?</h5>

      <p class="w3-text-grey">A baseline is a software development milestone and reference point marked by the completion 
          or delivery of one or more software deliverables. The main objective of the baseline is to decrease and regulate vulnerability,
          or project weaknesses that can easily damage the project and lead to uncontrollable changes</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">15)What are Verification and Validation?</h5>

      <p class="w3-text-grey"><b>Verification:</b> The process of ensuring that software accomplishes its objectives without defects is known 
          as verification. It's the procedure for determining whether the product being developed is correct or not. It determines whether the 
          resulting product meets our specifications. It is mainly focused on functionality.
          <br><b>Validation: </b>Validation is the process of determining whether a software product meets the required standards, or in other
          words, whether it meets the product's quality criteria. It is the process of verifying product validation or ensuring that the product
          we are building is correct. Validation focuses on the quality of the software.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">16)What do you mean by Software Re-engineering?</h5>

      <p class="w3-text-grey">The process of updating software is known as software reengineering. This procedure entails adding new 
          features and functionalities to the software in order to make it better and more efficient.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">17)What is the feasibility study?</h5>

      <p class="w3-text-grey">s the name implies, a feasibility study is a measurement of a software product in terms of how useful product 
          development will be for the business from a practical standpoint. Feasibility studies are conducted for a variety of reasons, including
          determining whether a software product is appropriate in terms of development, implementation, and project value to the business.
          The feasibility study concentrates on the following areas:
      <ul >
          <li>Economic feasibility</li>
          <li>Technical feasibility</li>
          <li>Operational feasibility</li>
          <li>Legal feasibility</li>
          <li>Schedule feasibility</li>
      </ul>
      </p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">18)Define black box testing and white box testing?</h5>

      <p class="w3-text-grey">
          
      <ul>
          <li>Blak box testing</li><p class="w3-text-grey">is a type of high-level testing in which the primary goal is to evaluate functionalities from a behavioural standpoint. In black-box testing,
              the tester does not test the code; instead, they utilize the program to see if it works as expected. </p>
          <li></li><p class="w3-text-grey">When you have insight into the code or broad information about the architecture of the software in question,
              you can perform white box testing, also known as clear box testing. It falls under the category of low-level testing and is mostly concerned with integration and unit testing.  White box testing requires 
              programming expertise or at the very least a thorough grasp of the code that implements a particular functionality. </p>
      </ul>
          
      </p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">19)What is Concurrency?</h5>

      <p class="w3-text-grey">software engineering, concurrency refers to a set of techniques and mechanisms that allow the software to do 
          many tasks at the same time. Concurrency can be achieved by using languages like C++ or Java because these languages support the 
          concept of thread. New hardware and software features are required to achieve concurrency.</p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">20) What is Data Flow Diagram?</h5>

      <p class="w3-text-grey">A Data Flow Diagram (DFD) shows the flow of information flows through a system. It shows data inputs, 
          outputs, storage sites, and paths between each destination using symbols such as rectangles, circles, and arrows, as well 
          as short text labels. Data flowcharts can range from simple to in-depth DFDs that go deeper into how data is processed. They
          can be used to evaluate a current system or to create a new system. A DFD can effortlessly express things that are difficult to describe in words,
          and it can be used by both technical and non-technical audiences.</p>
      <img src="https://www.tutorialspoint.com/software_engineering/images/DFD_level_one.png" alt="Image" class="w3-left w3-margin-right" style="width:600px">
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">21)Explain the concept of modularization.</h5>

      <p class="w3-text-grey">Modularization is ‌breaking down a program's functionality into separate, independent modules,
          each of which includes just the information needed to carry out one part of the intended capability. In simple terms,
          it is the practice of dividing the program into smaller modules so that we can deal with them separately. We can simply
          add independent and smaller modules to a program using modularization without being hampered by the complexity of the 
          program's other functionalities. Modularization is based on the notion of designing applications that are easier to develop
          and maintain, self-contained components. In monolithic design, on the other hand, there's always the risk of
          a simple change knocking the entire application down. The final step would be to combine these independent modules.
      <img src="https://miro.medium.com/max/1400/0*iJTwe1UxDx4VV020.jpg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
      </p>
    </div>
  </div>
    <!--***********-->
    
    <div class="w3-content">
    <div class="w3-twothird">
      
      <h5 class="w3-padding-99">22)What is Software Configuration Management?</h5>

      <p class="w3-text-grey">When a piece of software is created, there is always room for improvement. To modify or improve an existing solution or to establish 
          a new solution for a problem, changes may be required. Changes to the existing system should be examined before being implemented, recorded before being
          implemented, documented with details of before and after, and controlled in a way that improves quality and reduces error. This is where System Configuration Management is required.

<br>During the Software Development Life Cycle, Software Configuration Management (SCM) is a technique for systematically managing, organizing, and controlling changes in documents,
codes, and other entities. The main goal is to enhance production while making as few mistakes as possible.</p>
    </div>
  </div>
    
</div>

<!-- Second Grid -->


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life and word hard for your dream.</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
