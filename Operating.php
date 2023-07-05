<!DOCTYPE html>
<html lang="en">
<head>
<title>OS</title>
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
  <h1 class="w3-margin w3-jumbo">Operating System</h1>
  <p class="w3-xlarge">Operating system problem and solution!</p>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container" style="text-align: justify;">
   <!-- ****************-->
   <div class="w3-content" >
       <div class="w3-twothird" style="padding:">
      <h5 class="w3-padding-99">1)What do you mean by an operating system? What are its basic functions?</h5>

      <p class="w3-text-grey">Operating System (OS) is basically a software program that manages and handles all resources of a computer such as hardware and software. The first OS was introduced in the early 1950s known as GMOs. An OS is responsible
          for managing, handling, and coordinating overall activities and sharing of computer resources. It acts as an intermediary among users of computer and computer hardware.</p>
     <img src="img/first.jpg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
     <p class="w3-text-grey"><b>Functions of OS:</b>
    <br>There are many functions of the OS. Some of the important functions of OS are given below:
     <ul><li>Memory and Processor Management.</li>
         <li>Providing user interface to users.</li>
         <li>File Management and Device Management.</li>
         <li>Scheduling of resources and jobs.</li>
         <li>Error Detection</li>
         <li>Security</li>
     </ul>

    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">2)What's the main purpose of an OS? What are the different types of OS?</h5>

      <p class="w3-text-grey">The main purpose of an OS is to execute user programs and make it easier for users to understand and 
          interact with computers as well as run applications. It is specially designed to ensure that the computer system performs
          better by managing all computational activities. It also manages computer memory, processes, and operation of all hardware and software.
          <br><b>Types of OS</b>
      <ul>
          <li>Batched OS </li>
          <li>Multi-Programmed OS</li>
           <li>Timesharing OS</li>
            <li>Distributed OS</li>
             <li>Real-Time OS</li>
      </ul>
          
      </p>
    </div>
</div>

  <!-- ****************-->
  
  
  
   <div class="w3-content">
    <div class="w3-twothird">
        <h5 class="w3-padding-99"><b>Batch Operating system</b></h5>

      <p class="w3-text-grey">This type of operating system does not interact with the computer directly.
          There is an operator which takes similar jobs having the same requirement
          and group them into batches. It is the responsibility of the operator to sort jobs with similar needs. </p>
    </div>
</div>
  
  <div class="w3-content">
    <div class="w3-twothird">
        <h5 class="w3-padding-99"><b>Multi-Programming Operating Systems</b></h5>

      <p class="w3-text-grey">A multiprogramming operating system may run many programs on a single processor computer.
          If one program must wait for an input/output transfer in a multiprogramming operating system, the other programs are ready to use the CPU. As a result,
          various jobs may share CPU time. However, the execution of their jobs is not defined to be at the same time period.</p>
    </div>
</div>
  
  <div class="w3-content">
    <div class="w3-twothird">
        <h5 class="w3-padding-99"><b>Time sharing Operating system</b></h5>

      <p class="w3-text-grey">Each task is given some time to execute so that all the tasks work smoothly.
          Each user gets the time of CPU as they use a single system. These systems are also known as Multitasking Systems. 
          The task can be from a single user or different users also.The time that each task gets to execute is called quantum. 
          After this time interval is over OS switches over to the next task.</p>
    </div>
</div>
  
  <div class="w3-content">
    <div class="w3-twothird">
        <h5 class="w3-padding-99"><b>Distributed Operating system</b></h5>

      <p class="w3-text-grey">These types of the operating system is a recent advancement in the world of computer technology 
          and are being widely accepted all over the world and, that too, with a great pace. Various autonomous interconnected 
          computers communicate with each other using a shared communication network Independent systems possess their own memory
          unit and CPU. These are referred to as loosely coupled systems or distributed systems</p>
    </div>
</div>
  
  <div class="w3-content">
    <div class="w3-twothird">
        <h5 class="w3-padding-99"><b>Real-time Operating system</b></h5>

      <p class="w3-text-grey">These types of OSs serve real-time systems. The time interval required to process and respond to
          inputs is very small. This time interval is called response time.Real-time systems are used when there are time requirements
          that are very strict like missile systems, air traffic control systems, robots, etc. </p>
      <br>Two types of Real-Time Operating System which are as follows: 
      <ul>
          <li>Hard Real-Time Systems: </li>
          <p class="w3-text-grey">These OSs are meant for applications where time constraints are very strict and even the shortest possible delay is not 
              acceptable. These systems are built for saving life like automatic parachutes or airbags which are required to be readily
              available in case of any accident. Virtual memory is rarely found in these systems.</p>
          <li>Soft Real-Time Systems:</li>
          <p class="w3-text-grey">These OSs are for applications where for time-constraint is less strict.</p>
      </ul>
    </div>
</div>
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">3)What is a socket?</h5>

      <p class="w3-text-grey">A socket is used to make connection between two applications. Endpoints of the connection are called socket.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">4)What is a real-time system?</h5>

      <p class="w3-text-grey">Real-time system is used in the case when rigid-time requirements have been placed on the operation of 
          a processor. It contains a well defined and fixed time constraints.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">5)What is kernel?</h5>

      <p class="w3-text-grey">Kernel is the core and most important part of a computer operating system which provides basic services for all parts of the OS.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">6)What do you mean by a process?</h5>

      <p class="w3-text-grey">An executing program is known as process. There are two types of processes:
      <ul>
          <li> Operating System Processes</li>
          <li>User Processes</li>
              
      </ul>
       </p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">7)What are the different states of a process?</h5>

      <p class="w3-text-grey">A list of different states of process:
      <ul>
          <li>New Process</li>
          <li>Running Process</li>
          <li>Waiting Process</li>
          <li>Ready Process</li>
          <li>Terminated Process</li>
      </ul>
          
      </p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">8)What is a Thread?</h5>

      <p class="w3-text-grey">A thread is a path of execution within a process. A process can contain multiple threads.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">9)What is Multithreading</h5>

      <p class="w3-text-grey">A thread is also known as lightweight process. The idea is to achieve parallelism by dividing
          a process into multiple threads. For example, in a browser, multiple tabs can be different threads. MS Word uses 
          multiple threads: one thread to format the text, another thread to process inputs, etc. More advantages of 
          multithreading are discussed below</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">10)What is difference between process and thread?</h5>
     <img src="img/pct.png" alt="Image" class="w3-left w3-margin-right" style="width:800px">
      <p class="w3-text-grey"></p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">11) What are various sections of the process?</h5>

      <p class="w3-text-grey">There are basically four sections in the process as given below:
          <br>Stack: It is used for local variables and returns addresses. 
<br><b>Heap:</b>It is used for dynamic memory allocation.
<br><b>Data:</b> It stores global and static variables.
<br><b>Code or text:</b> It comprises compiled program code
      </p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">12)What is a deadlock in OS? What are the necessary conditions for a deadlock?</h5>

      <p class="w3-text-grey">Deadlock is generally a situation where a set of processes are blocked as each process is holding 
          resources and waits to acquire resources held by another process. In this situation, two or more processes simply try 
          to execute simultaneously and wait for each to finish their execution because they are dependent on each other. We can
          see a hand problem in our system whenever a deadlock occurs in a program. It is one of the common problems you can see
          in multiprocessing. 
          <br><b>Necessary condition for deadlock</b>
      <ul>
          <li>Mutual Exclusion</li>
          <li>Hold and Wait</li>
          <li>No Pre-emption</li>
            <li>Circular Wait or Resource Wait</li>
      </ul>
          
          
</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">13)What is CPU Scheduling?</h5>

      <p class="w3-text-grey">CPU Scheduling is a process of determining which process will own CPU for execution while another process is on hold.
          The main task of CPU scheduling is to make sure that whenever the CPU remains idle, the OS at least select one of the processes available
          in the ready queue for execution. The selection process will be carried out by the CPU scheduler. It selects one of the processes in memory
          that are ready for execution.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">14)Types of CPU Scheduling</h5>

      <p><b>Preemptive Scheduling</b></p>
<p  class="w3-text-grey">In Preemptive Scheduling, the tasks are mostly assigned with their priorities. Sometimes it is important to run a task with a higher priority before 
another lower priority task, even if the lower priority task is still running.The lower priority task holds for some time and resumes when the higher priority task finishes its execution.</p>
     <p><b>NonPreemptive Scheduling</b></p>
     <p  class="w3-text-grey">In this type of scheduling method, the CPU has been allocated to a specific process. The process that keeps the CPU busy will release the CPU either by switching 
         context or terminating. It is the only method that can be used for various hardware platforms. 
         That’s because it doesn’t need special hardware (for example, a timer) like preemptive scheduling.</p>
    
    
    
    
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">15)Types of CPU scheduling Algorithm</h5>
      <p><b>First come first serve(FCFS)</b></p>
      <p class="w3-text-grey">FCFS (First Come First Serve) is a type of OS scheduling algorithm that executes processes in 
          the same order in which processes arrive. In simple words, the process that arrives first will be executed first. 
          It is non-preemptive in nature. FCFS scheduling may cause the problem of starvation if the burst time of the first
          process is the longest among all the jobs. Burst time here means the time that is required in milliseconds by the 
          process for its execution. It is also considered the easiest and simplest OS scheduling algorithm as compared to others. 
          Implementation of FCFS is generally managed with help of the FIFO (First In First Out) queue.
      
      <p><b>Shortest Remaining Time</b></p>
      
      <p class="w3-text-grey">The full form of SRT is Shortest remaining time. It is also known as SJF preemptive scheduling. In this method, 
          the process will be allocated to the task, which is closest
          to its completion. This method prevents a newer ready state process from holding the completion of an older process.</p>
      
      <p><b>Priority Based Scheduling</b></p>
      
      <p class="w3-text-grey">Priority scheduling is a method of scheduling processes based on priority. In this method,
          the scheduler selects the tasks to work as per the priority.Priority scheduling also helps OS to involve priority assignments.
      
      <p><b>Round-Robin Scheduling</b></p>
      
      <p class="w3-text-grey">Round robin is the oldest, simplest scheduling algorithm. The name of this algorithm comes from the
          round-robin principle, where each person gets an equal share of something in turn.It is mostly used for scheduling algorithms
          in multitasking. This algorithm method helps for starvation free execution of processes.
      <p> <br><b>Characteristics of Round-Robin Scheduling</b></p>
      </p>
      <p class="w3-text-grey"><ul>
          <li>Round robin is a hybrid model which is clock-driven.</li>
          <li>Time slice should be minimum, which is assigned for a specific task to be processed. However, it may vary for different processes.</li>
          <li>It is a real time system which responds to the event within a specific time limit.</li>
      </ul></p>
      
      
      
      
      
      <p><b>Shortest Job First</b></p>
      
      <p class="w3-text-grey">SJF is a full form of (Shortest job first) is a scheduling algorithm in which the process
          with the shortest execution time should be selected for execution next. This scheduling method can be preemptive or
          non-preemptive. It significantly reduces the average waiting time for other processes awaiting execution.
      </p>
      
      <p><b>Characteristics of SJF Scheduling</b></p>
      <p>
      <ul>
          <li>It is associated with each job as a unit of time to complete.</li>
          <li>In this method, when the CPU is available, the next process or job with the shortest completion time will be executed first.</li>
           <li>It is Implemented with non-preemptive policy.</li>
           <li>This algorithm method is useful for batch-type processing, where waiting for jobs to complete is not critical.</li>
           <li>It improves job output by offering shorter jobs, which should be executed first, which mostly have a shorter turnaround time.</li>
      </ul>
      </p>
    
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">16)What is the difference between paging and segmentation?</h5>

      <p class="w3-text-grey"><b>Paging:</b> It is generally a memory management technique that allows OS to retrieve processes from secondary storage into main memory. It is a non-contiguous allocation technique that divides each process in the form of pages. 
          <br> <b>Segmentation:</b> It is generally a memory management technique that divides processes into modules and parts of different sizes. These parts and modules are known as segments that can be allocated to process. </p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">17)What are starvation and aging in OS?</h5>

      <p class="w3-text-grey"><b>Starvation:</b> Starvation is a resource management problem where a process
          does not get the resources it needs for a long time because the resources are being allocated to other processes.

          <br><b>Aging:</b> Aging is a technique to avoid starvation in a scheduling system. It works by adding
          an aging factor to the priority of each request. The aging factor must increase the priority of the
          request as time passes and must ensure that a request will eventually be the highest priority request</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">18)What is Context Switching?</h5>

      <p class="w3-text-grey">Switching of CPU to another process means saving the state of the old process 
          and loading the saved state for the new process. In Context Switching the process is stored in the Process Control Block to
          serve the new process, so that the old process can be resumed from the same part it was left.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">19)What is PCB?</h5>

      <p class="w3-text-grey">the process control block (PCB) is a block that is used to track the process’s execution status. 
          A process control block (PCB) contains information about the process, i.e. registers, quantum, priority, etc. 
          The process table is an array of PCBs, that means logically contains a PCB for all of the current processes in the system.</p>
    </div>
</div>

  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">20)What is a critical- section?</h5>

      <p class="w3-text-grey">When more than one processes access the same code segment that
          segment is known as the critical section. The critical section contains shared variables
          or resources which are needed to be synchronized to maintain consistency of data variables. 
          In simple terms, a critical section is a group of instructions/statements or regions 
          of code that need to be executed atomically such as accessing a resource (file, input or output port, global data, etc.).</p>
    </div>
</div>
  
  
  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">21)What is a Banker’s algorithm?</h5>

      <p class="w3-text-grey">The banker’s algorithm is a resource allocation and deadlock avoidance
          algorithm that tests for safety by simulating the allocation for predetermined maximum possible
          amounts of all resources, then makes an “s-state” check
          to test for possible activities, before deciding whether allocation should be allowed to continue.</p>
    </div>
</div>
  
  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">22)What is fragmentation?</h5>

      <p class="w3-text-grey">Fragmentation is memory wasted. It can be internal if we are dealing with systems that have fixed-sized allocation
          units, or external if we are dealing with systems that have variable-sized allocation units.</p>
    </div>
</div>
  
  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">21) Write an advantages of dynamic allocation algorithms?</h5>

      <p class="w3-text-grey">
      <ul>
          <li>When we do not know how much amount of memory would be needed for the program beforehand.</li>
            <li>When we want data structures without any upper limit of memory space.</li>
            <li>When you want to use your memory space more efficiently.</li>
            <li>Dynamically created lists insertions and deletions can be done very easily just by the manipulation
                of addresses whereas in case of statically allocated memory insertions and deletions lead to more movements and wastage of memory.</li>
            <li>When you want you to use the concept of structures and linked list in programming, dynamic memory allocation is a must</li>
      </ul>
         
      
      </p>
    </div>
</div>
  
  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">22)What is caching?</h5>

      <p class="w3-text-grey">Caching is the processing of utilizing a region of
          fast memory for a limited data and process. A cache memory is usually much
          efficient because of its high access speed.</p>
    </div>
</div>
  
  <!-- ****************-->
  
  <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">23)Write down the advantages of virtual memory?</h5>

      <p class="w3-text-grey">A higher degree of multiprogramming.
<br>Allocating memory is easy and cheap
<br>Eliminates external fragmentation
<br>Data (page frames) can be scattered all over PM
<br>Pages are mapped appropriately anyway
<br>Large programs can be written, as virtual space available is huge compared to physical memory.
<br>Less I/O required leads to faster and easy swapping of processes.
<br>More physical memory is available, as programs are stored on virtual memory, so they occupy very less space on actual physical memory.
<br>More efficient swapping</p>
    </div>
</div>
  
  
  
  
  
  
</div>

  <!-- ****************-->
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
