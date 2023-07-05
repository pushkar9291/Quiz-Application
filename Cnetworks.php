<!DOCTYPE html>
<html lang="en">
<head>
<title>Computer Networks</title>
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
    <a href="Cnetworks.php" class="w3-bar-item w3-button w3-padding-large w3-white">Computer Networks</a>
    <a href="Operating.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Operating System</a>
    <a href="DS.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Data Structure</a>
    <a href="SE.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Software Engineering</a>
    <a href="RDBMS.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">RDBMS</a>
    <a href="Interview.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Interview Preparation</a>
    <a href="phome.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="Operating.php" class="w3-bar-item w3-button w3-padding-large">Operating System</a>
      <a href="Cnetworks.php" class="w3-bar-item w3-button w3-padding-large">Computer Networks</a>
      <a href="SE.php" class="w3-bar-item w3-button w3-padding-large">Software Engineering</a>
      <a href="RDBMS.php" class="w3-bar-item w3-button w3-padding-large">RDBMS</a>
      <a href="Interview.php" class="w3-bar-item w3-button w3-padding-large">Interview Preparation</a>
    <a href="phome.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Computer Networks</h1>
  <p class="w3-xlarge">Computer network problem and solution</p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container"   style="text-align: justify;" >
  <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">1) What is the network?</h5>

      <p class="w3-text-grey">A network is a set of devices that are connected with a physical media link. In a network, 
          two or more nodes are connected by a physical link or two or more networks are connected by one or more nodes.
         A network is a collection of devices connected to each other to allow the sharing of data.
       Example of a network is an internet. An internet connects the millions of people across the world.</p>
    </div>
  </div>
  <!--** -->
     <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">2) What do you mean by network topology?</h5>

      <p class="w3-text-grey">Network topology specifies the layout of a computer network. It shows how devices and cables are connected to each other. The types of topologies are:</p>
        
      <p class="w3-text-grey"><b>BUS</b>-topology is a network topology in which all the nodes are connected to a single cable known as a central cable or bus.
It acts as a shared communication medium, i.e., if any device wants to send the data to other devices, then it will send the data over the bus which in turn sends the data to all the attached devices.
Bus topology is useful for a small number of devices. As if the bus is damaged then the whole network fails.
<img src="https://www.dnsstuff.com/wp-content/uploads/2019/09/Bus-Topology-1024x536.jpg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
      </p>
      
      
      <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br><br><p class="w3-text-grey"><b>RING -</b> topology is a network topology in which nodes are exactly connected to two or more nodes and thus, forming a single continuous path for the transmission.
It does not need any central server to control the connectivity among the nodes.
If the single node is damaged, then the whole network fails.
Ring topology is very rarely used as it is expensive, difficult to install and manage.
Examples of Ring topology are SONET network, SDH network, etc.
      <img src="https://svg.template.creately.com/Noe2M9jJsLM" alt="Image" class="w3-left w3-margin-right" style="width:600px">
      </p>
      
      <br><br><br> <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br><br> <p class="w3-text-grey"><b>Mesh-</b> topology is a network topology in which all the nodes are individually connected to other nodes.
It does not need any central switch or hub to control the connectivity among the nodes.
Mesh topology is categorized into two parts:
Fully connected mesh topology: In this topology, all the nodes are connected to each other.
Partially connected mesh topology: In this topology, all the nodes are not connected to each other.
It is a robust as a failure in one cable will only disconnect the specified computer connected to this cable.
Mesh topology is rarely used as installation and configuration are difficult when connectivity gets more.
Cabling cost is high as it requires bulk wiring.
      <img src="https://media.geeksforgeeks.org/wp-content/uploads/20200527095711/Untitled-Diagram-336.png" alt="Image" class="w3-left w3-margin-right" style="width:600px">
      </p>
      
      <br><br><br>  <br><br><br> <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br><br><p class="w3-text-grey"><b>Tree-</b> topology is a combination of star and bus topology. It is also known as the expanded star topology.
In tree topology, all the star networks are connected to a single bus.
Ethernet protocol is used in this topology.
In this, the whole network is divided into segments known as star networks which can be easily maintained. If one segment is damaged, but there is no effect on other segments.
Tree topology depends on the "main bus," and if it breaks, then the whole network gets damaged.
       <img src="https://www.itrelease.com/wp-content/uploads/2021/04/Advantages-and-disadvantages-of-tree-topology.jpg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
       </p>

      
       <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br><br><p class="w3-text-grey"><b>Hybrid-</b>topology is a combination of different topologies to form a resulting topology.
If star topology is connected with another star topology, then it remains star topology. If star topology is connected with different topology, then it becomes a Hybrid topology.
It provides flexibility as it can be implemented in a different network environment.
The weakness of a topology is ignored, and only strength will be taken into consideration.
       <img src="https://www.dnsstuff.com/wp-content/uploads/2019/09/Hybrid-Topology-1024x536.jpg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
       </p>
</div>
  </div>
  
  
   <!-- ** -->
   
   <!--** -->
    <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> 3) What are the advantages of Distributed Processing?</h5>

      <p class="w3-text-grey">A list of advantages of distributed processing:

Secure
<br>Support Encapsulation
<br>Distributed database
<br>Faster Problem solving
<br>Security through redundancy
<br>Collaborative Processing</p>
    </div>
  </div>
   <!-- ** -->
   <!--** -->
    <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> 4) What is the criteria to check the network reliability?</h5>

      <p class="w3-text-grey"><b>Network reliability:</b> Network reliability means the ability of the network to carry out the desired operation through a network such as communication through a network.

          Network reliability plays a significant role in the network functionality. The network monitoring systems and devices are the essential requirements for making the network reliable.The network monitoring system identifies the problems that are occurred in the network while the network devices ensure that data should reach the appropriate destination.<br>

          The reliability of a network can be measured by the following factors:<br><b>Downtime:</b> The downtime is defined as the required time to recover.
          <br><b>Failure Frequency:</b> It is the frequency when it fails to work the way it is intended.
          <br><b>Catastrophe:</b> It indicates that the network has been attacked by some unexpected event such as fire, earthquake.             </p>
    </div>
  </div>
   <!-- ** -->
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">5) What is DNS? </h5>

      <p class="w3-text-grey">DNS is an acronym stands for Domain Name System.

DNS was introduced by Paul Mockapetris and Jon Postel in 1983.
<br>It is a naming system for all the resources over the internet which includes physical nodes and applications. It is used to locate to resource easily over a network.
DNS is an internet which maps the domain names to their associated IP addresses.
Without DNS, users must know the IP address of the web page that you wanted to access.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">6) What is DNS forwarder?</h5>

      <p class="w3-text-grey">A forwarder is used with DNS server when it receives DNS queries that cannot be resolved quickly. So it forwards those requests to external DNS servers for resolution.
A DNS server which is configured as a forwarder will behave differently than the DNS server which is not configured as a forwarder.
Following are the ways that the DNS server behaves when it is configured as a forwarder:
When the DNS server receives the query, then it resolves the query by using a cache.
If the DNS server is not able to resolve the query, then it forwards the query to another DNS server.
If the forwarder is not available, then it will try to resolve the query by using root hint.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">7) What are the different types of networks?</h5>

      <p class="w3-text-grey">Networks can be divided on the basis of area of distribution. For example:

<br><b>PAN (Personal Area Network): </b>Its range limit is up to 10 meters. It is created for personal use. Generally, personal devices are connected to this network. For example computers, telephones, fax, printers, etc.
<br><b>LAN (Local Area Network):</b> It is used for a small geographical location like office, hospital, school, etc.
<br><b>HAN (House Area Network):</b> It is actually a LAN that is used within a house and used to connect homely devices like personal computers, phones, printers, etc.
<br><b>CAN (Campus Area Network):</b> It is a connection of devices within a campus area which links to other departments of the organization within the same campus.
<br><b>MAN (Metropolitan Area Network):</b> It is used to connect the devices which span to large cities like metropolitan cities over a wide geographical area.
<br><b>WAN (Wide Area Network):</b> It is used over a wide geographical location that may range to connect cities and countries.
<br><b>GAN (Global Area Network):</b> It uses satellites to connect devices over global are.
</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">8)What is IP address? </h5>

      <p class="w3-text-grey">IP address is a unique 32 bit software address of a computer in a network system.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">9)What is protocol? </h5>

      <p class="w3-text-grey">A protocol is a set of rules which is used to govern all the aspects of information communication.

</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">10) What are the main elements of a protocol?</h5>

      <p class="w3-text-grey">The main elements of a protocol are:

          <br><b>Syntax:</b> It specifies the structure or format of the data. It also specifies the order in which they are presented.
<br><b>Semantics: </b>It specifies the meaning of each section of bits.
<br><b>Timing:</b> Timing specifies two characteristics: When data should be sent and how fast it can be sent.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">11)What is the Domain Name System?</h5>

      <p class="w3-text-grey">There are two types of client/server programs. First is directly used by the users and the second supports application programs.

The Domain Name System is the second type supporting program that is used by other programs such as to find the IP address of an e-mail recipient.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">12)  How many layers are in OSI reference model? </h5>

      <p class="w3-text-grey"><b>OSI reference model:</b> OSI reference model is an ISO standard which defines a networking framework for implementing the protocols in seven layers. These seven layers can be grouped into three categories:

          <br><b>Network layer:</b> Layer 1, Layer 2 and layer 3 are the network layers.
          <br><b>Transport layer:</b> Layer 4 is a transport layer.
          <br><b>Application layer.</b> Layer 5, Layer 6 and Layer 7 are the application layers.
          <br>There are 7 layers in the OSI reference model.
      
          <br> <b>1. Physical Layer</b>
          

It is the lowest layer of the OSI reference model.
It is used for the transmission of an unstructured raw bit stream over a physical medium.
Physical layer transmits the data either in the form of electrical/optical or mechanical form.
The physical layer is mainly used for the physical connection between the devices, and such physical connection can be made by using twisted-pair cable, fibre-optic or wireless transmission media.
<br><b>2. DataLink Layer</b>

It is used for transferring the data from one node to another node.
It receives the data from the network layer and converts the data into data frames and then attach the physical address to these frames which are sent to the physical layer.
It enables the error-free transfer of data from one node to another node.
<br>3. <b>Network Layer</b>

Network layer converts the logical address into the physical address.
It provides the routing concept means it determines the best route for the packet to travel from source to the destination.
<br>4. <b>Transport Layer</b>

It delivers the message through the network and provides error checking so that no error occurs during the transfer of data.
It provides two kinds of services:
Connection-oriented transmission: In this transmission, the receiver sends the acknowledgement to the sender after the packet has been received.
Connectionless transmission: In this transmission, the receiver does not send the acknowledgement to the sender.

<br>5. <b>Session Layer</b>

The main responsibility of the session layer is beginning, maintaining and ending the communication between the devices.
Session layer also reports the error coming from the upper layers.
Session layer establishes and maintains the session between the two users.

<br>6. <b>Presentation Layer</b>

The presentation layer is also known as a Translation layer as it translates the data from one format to another format.
At the sender side, this layer translates the data format used by the application layer to the common format and at the receiver side, this layer translates the common format into a format used by the application layer.
<br><b>Functions of presentation layer:</b>
<br>Character code translation
<br>Data conversion
<br>Data compression
<br>Data encryption

<br>7. <b>Application Layer</b>

Application layer enables the user to access the network.
It is the topmost layer of the OSI reference model.
Application layer protocols are file transfer protocol, simple mail transfer protocol, domain name system, etc.
The most widely used application protocol is HTTP(Hypertext transfer protocol ). A user sends the request for the web page using HTTP.
</p>

<img src="https://miro.medium.com/max/1024/1*17Zz6v0HWIzgiOzQYmO6lA.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
      
    </div>
  </div>
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"><br><br>13)What is the usage of OSI physical layer? </h5>

      <p class="w3-text-grey">The OSI physical layer is used to convert data bits into electrical signals and vice versa. On this layer, network devices and cable types are considered and setup.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">14)Explain the functionality of OSI session layer? </h5>

      <p class="w3-text-grey">OSI session layer provides the protocols and means for two devices on the network to communicate with each other by holding a session. This layer is responsible for setting up the session,
          managing information exchange during the session, and tear-down process upon termination of the session.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">15)What is RIP?</h5>

      <p class="w3-text-grey">RIP stands for Routing Information Protocol. It is accessed by the routers to send data from one network to another.
RIP is a dynamic protocol which is used to find the best route from source to the destination over a network by using the hop count algorithm.
Routers use this protocol to exchange the network topology information.
This protocol can be used by small or medium-sized networks.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">16)What are the different types of VPN? </h5>

      <p class="w3-text-grey">Few types of VPN are:<br>

          <b>Access VPN:</b> Access VPN is used to provide connectivity to remote mobile users and telecommuters. It serves as an alternative to dial-up connections or ISDN (Integrated Services Digital Network) connections. It is a low-cost solution and provides a wide range of connectivity.
          <br>  <b>Site-to-Site VPN:</b> A Site-to-Site or Router-to-Router VPN is commonly used in large companies having branches in different locations to connect the network of one office to another in different locations. There are 2 sub-categories as mentioned below:
          <br><b>Intranet VPN: </b>Intranet VPN is useful for connecting remote offices in different geographical locations using shared infrastructure (internet connectivity and servers) with the same accessibility policies as a private WAN (wide area network).
          <br><b>Extranet VPN:</b> Extranet VPN uses shared infrastructure over an intranet, suppliers, customers, partners, and other entities and connects them using dedicated connections.</p>
    </div>
  </div>
   <!-- ** -->
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">17)What are the HTTP and the HTTPS protocol? </h5>

      <p class="w3-text-grey"><b>HTTP </b>is the HyperText Transfer Protocol which defines the set of rules and standards on how the information can be transmitted on the World Wide 
          Web (WWW).  It helps the web browsers and web servers for communication. It is a ‘stateless protocol’ where each command is independent with respect to the previous command.
          HTTP is an application layer protocol built upon the TCP. It uses port 80 by default.

<br><b>HTTPS </b>is the HyperText Transfer Protocol Secure or Secure HTTP. It is an advanced and secured version of HTTP. On top of HTTP, SSL/TLS protocol is used to provide security.
It enables secure transactions by encrypting the communication and also helps identify network servers securely. It uses port 443 by default</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">18)What is the use of a router and how is it different from a gateway?</h5>

      <p class="w3-text-grey">The router is a networking device used for connecting two or more network segments. It directs the traffic in the network. It transfers information and data like web pages, emails, images, videos, etc. from source to destination in the form of packets. 
          It operates at the network layer. The gateways are also used to route and regulate the network traffic but, they can also send data between two dissimilar networks while a router can only send data to similar networks</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">What is the FTP protocol? </h5>

      <p class="w3-text-grey">FTP is a File Transfer Protocol. It is an application layer protocol used to transfer files and data reliably and efficiently between hosts. It can also be used to download files from remote servers to your computer. It uses p.ort 27 by default</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">19)What is the firewall? </h5>

      <p class="w3-text-grey">The firewall is a network security system that is used to monitor the incoming and outgoing traffic and blocks the same based on the firewall security policies. It acts as a wall between the internet (public network) and the networking devices (a private network).
          It is either a hardware device, software program, or a combination of both. It adds a layer of security to the network.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99">20) What happens when you enter google.com in the web browser? </h5>

      <p class="w3-text-grey">Below are the steps that are being followed:<br>

Check the browser cache first if the content is fresh and present in cache display the same.
<br>If not, the browser checks if the IP of the URL is present in the cache (browser and OS) if not then request the OS to do a DNS lookup using UDP to get the corresponding IP address of the URL from the DNS server to establish a new TCP connection.
<br>A new TCP connection is set between the browser and the server using three-way handshaking.
<br>An HTTP request is sent to the server using the TCP connection.
<br>The web servers running on the Servers handle the incoming HTTP request and send the HTTP response.
<br>The browser process the HTTP response sent by the server and may close the TCP connection or reuse the same for future requests.
<Br>If the response data is cacheable then browsers cache the same.
<br>Browser decodes the response and renders the content.
<br><b>Conclusion<b>
<br>In today’s world, it is very hard to stay away from the Internet and that is what makes networking one of the most important interview topics. As of 2021 if we check the facts, there is a total of 1.3 million kilometers of submarine optical fiber cables set globally to connect the world to the Internet. These cables are more than enough to revolve around the earth more than 100 times.</p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> </h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> </h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> </h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> </h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> </h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
   <!-- ** -->
   
   <div class="w3-content">
    <div class="w3-twothird">
      <h5 class="w3-padding-99"> </h5>

      <p class="w3-text-grey"></p>
    </div>
  </div>
   <!-- ** -->
   <!-- ** -->
   
    
    
    
</div>

<!-- Second Grid -->


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Keep patience and do hardwork</h1>
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
