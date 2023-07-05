<!DOCTYPE html>
<html lang="en">
<head>
<title>RDBMS</title>
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
  <h1 class="w3-margin w3-jumbo">Relational database management system</h1>
  <p class="w3-xlarge">RDBMS problem and solution!</p>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">1)What is a Database?</h5>

      <p class="w3-text-grey">A Database is an organized, consistent, and logical collection of data that can easily be updated,
          accessed, and managed. Database mostly contains sets of tables or objects (anything created using create command is a
          database object) which consist of records and fields. A tuple or a row represents a single entry in a table. An attribute
          or a column represents the basic units of data storage, which contain information 
          about a particular aspect of the table. DBMS extracts data from a database in the form of queries given by the user.</p>
    </div>
</div>
    <!--***********************-->
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">2)What is DBMS?</h5>

      <p class="w3-text-grey">DBMS is a collection of programs that facilitates users to create and maintain a database. 
          In other words, DBMS provides us an interface or tool for performing different operations such as the creation of 
          a database, inserting data into it, deleting data from it, updating the data, etc. DBMS is a software in which data 
          is stored in a more secure way as compared to the file-based system. Using DBMS, we can overcome many problems such
          as- data redundancy, data inconsistency, easy access, more organized and understandable, and so on.
          There is the name of some popular Database Management System- MySQL, Oracle, SQL Server, Amazon simple DB (Cloud-based), etc.</p>
      <img src="https://www.smartsheet.com/sites/default/files/ic-database-management-dbms-gatekeeper.svg" alt="Image" class="w3-left w3-margin-right" style="width:600px">
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">3)Mention the issues with traditional file-based systems that make DBMS a better choice?</h5>

      <p class="w3-text-grey">The absence of indexing in a traditional file-based system leaves us with the only option of scanning the full page and hence making the access of content tedious and super slow. The other issue is redundancy and inconsistency as files have many duplicate and redundant data and changing one of them makes all of them inconsistent. Accessing data is harder in traditional file-based systems because data is unorganized in them.
<br>Another issue is the lack of concurrency control, which leads to one operation locking the entire page, as compared to DBMS where multiple operations can work on a single file simultaneously.
<br>Integrity check, data isolation, atomicity, security, etc. are some other issues with traditional file-based systems for which DBMSs have provided some good solutions.</p>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">4Explain different languages present in DBMS.</h5>

      <p class="w3-text-grey">Following are various languages present in DBMS:<br>
      <ul>
          <li>DDL(Data Definition Language:</li><p  class="w3-text-grey">It contains commands which are required to define the database.
E.g., CREATE, ALTER, DROP, TRUNCATE, RENAME, etc.</p>
          <li>DML(Data Manipulation Language):</li><p class="w3-text-grey">It contains commands which are required to manipulate the data present in the database.
E.g., SELECT, UPDATE, INSERT, DELETE, etc.</p>
           <li>DCL(Data Control Language:</li> <p class="w3-text-grey">It contains commands which are required to manipulate the data present in the database.
<br>E.g., SELECT, UPDATE, INSERT, DELETE, etc. </p>
           <li>TCL(Transaction Control Language:</li><p class="w3-text-grey">It contains commands which are required to deal with the transaction of the database.
E.g., COMMIT, ROLLBACK, and SAVEPOINT.</p>
      </ul>
          
          
      </p>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">5)What is meant by ACID properties in DBMS?</h5>

      <p class="w3-text-grey">ACID properties are some basic rules, which has to be satisfied by every transaction to preserve the integrity. These properties and rules are:

          <br><b>ATOMICITY:</b> Atomicity is more generally known as ?all or nothing rule.' Which implies all are considered as one unit, and they either run to completion or not executed at all.

          <br><b>CONSISTENCY:</b> This property refers to the uniformity of the data. Consistency implies that the database is consistent before and after the transaction.

          <br><b>ISOLATION:</b> This property states that the number of the transaction can be executed concurrently without leading to the inconsistency of the database state.

          <br><b>DURABILITY:</b> This property ensures that once the transaction is committed it will be stored in the non-volatile memory and system crash can also not affect it anymore.</p>
    </div>
</div>
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">6)Are NULL values in a database the same as that of blank space or zero?</h5>

      <p class="w3-text-grey">No, a NULL value is very different from that of zero and blank space as it represents a value that is assigned, unknown, unavailable, or not applicable as compared to blank space which represents a character and zero represents a number.
    <br>Example: NULL value in “number_of_courses” taken by a student represents that its value is unknown whereas 0 in it means that the student hasn’t taken any courses.</p>
    </div>
</div>
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">7)What is Data Warehousing?</h5>

      <p class="w3-text-grey">The process of collecting, extracting, transforming, and loading data from multiple sources and storing 
          them in one database is known as data warehousing. A data warehouse can be considered as a central repository where data flows 
          from transactional systems and other relational databases and is used for data analytics. A data warehouse comprises
          a wide variety of an organization’s historical data that supports the decision-making process in an organization.</p>
      <img src="https://phoenixnap.com/kb/wp-content/uploads/2021/04/two-tier-data-warehouse.png" alt="Image" class="w3-left w3-margin-right" style="width:600px">
    </div>
</div>
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">8)Explain different levels of data abstraction in a DBMS.</h5>

      <p class="w3-text-grey">The process of hiding irrelevant details from users is known as data abstraction. Data abstraction can be divided into 3 levels:<br><!-- comment -->
          <br><b>Physical Level:</b> it is the lowest level and is managed by DBMS. This level consists of data storage descriptions and the details of this level are typically hidden from system admins, developers, and users.
          <br><b>Conceptual or Logical level:</b>  it is the level on which developers and system admins work and it determines what data is stored in the database and what is the relationship between the data points.
          <br><b>External or View level:</b> it is the level that describes only part of the database and hides the details of the table schema and its physical storage from the users. The result of a query is an example of View level data abstraction.  A view is a virtual table created by selecting fields from one or more tables present in the database.</p>
   <img src="https://holycoders.com/content/images/2020/05/levels-of-abstraction-in-dbms.png" alt="Image" class="w3-left w3-margin-right" style="width:600px">
    </div>
</div>
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">9) What is meant by an entity-relationship (E-R) model? Explain the terms Entity, Entity Type, and Entity Set in DBMS.</h5>

      <p class="w3-text-grey">An entity-relationship model is a diagrammatic approach to a database design where real-world objects are represented as entities 
          and relationships between them are mentioned.
          <br><b>Entity:</b> An entity is defined as a real-world object having attributes that represent characteristics of that particular object. For example, a student, an employee, or a teacher represents an entity.
          <br><b>Entity Type:</b> An entity type is defined as a collection of entities that have the same attributes. One or more related tables in a database represent an entity type. Entity type or attributes can be understood as a characteristic which uniquely identifies the entity.  For example, a student represents an entity that has attributes such as student_id, student_name, etc.
<br><b>Entity Set:</b> An entity set can be defined as a set of all the entities present in a specific entity type in a database. For example, a set of all the students, employees, teachers, etc. represent an entity set.
      </p>
    </div>
</div>
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">10) Explain the difference between the DELETE and TRUNCATE command in a DBMS.</h5>

      <p class="w3-text-grey"><br><b>DELETE command:</b> this command is needed to delete rows from a table based on the condition provided by the WHERE clause.

<br>It deletes only the rows which are specified by the WHERE clause.
<br>It can be rolled back if required.
<br>It maintains a log to lock the row of the table before deleting it and hence it’s slow.
<br><b>TRUNCATE command:</b> this command is needed to remove complete data from a table in a database. It is like a DELETE command which has no WHERE clause.

<br>It removes complete data from a table in a database.
<br>It can be rolled back even if required. ( truncate can be rolled back in some databases depending on their version but it can be tricky and can lead to data loss). Check this link for more details
<br>It doesn’t maintain a log and deletes the whole table at once and hence it’s fast</p>
    </div>
</div>
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">11) What do you mean by durability in DBMS?</h5>

      <p class="w3-text-grey">Once the DBMS informs the user that a transaction has completed successfully, its effect should 
          persist even if the system crashes before all its changes are reflected on disk. This property is called durability.
          Durability ensures that once the transaction is committed into the database,
          it will be stored in the non-volatile memory and after that system failure cannot affect that data anymore.</p>
    </div>
    </div><!-- comment -->
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">12) What is normalization?</h5>

      <p class="w3-text-grey">Normalization is a process of analysing the given relation schemas according to their functional dependencies. 
          It is used to minimize redundancy and also used to minimize insertion, deletion and update distractions. Normalization is considered
          as an essential process as it is used to avoid data redundancy, insertion anomaly, updation anomaly, deletion anomaly.
<br>There most commonly used normal forms are:</p>
      <ul>
          <li>First Normal Form(1NF)</li>
          <li>Second Normal Form(2NF)</li>
          <li>Third Normal Form(3NF)</li>
          <li>Boyce & Codd Normal Form(BCNF)</li>
        </ul>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">13) What is Denormalization?</h5>

      <p class="w3-text-grey">Denormalization is the process of boosting up database performance and adding of redundant 
          data which helps to get rid of complex data. Denormalization is a part of database optimization technique. This process
          is used to avoid the use of complex and costly joins. Denormalization doesn't refer to the thought of not to normalize instead 
          of that denormalization takes place after normalization. In this process, firstly the redundancy of the data will be removed using
          normalization process than through denormalization process 
          we will add redundant data as per the requirement so that we can easily avoid the costly joins.</p>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">14)What is functional Dependency?</h5>

      <p class="w3-text-grey">Functional Dependency is the starting point of normalization. It exists when a relation between 
          two attributes allow you to determine the corresponding attribute's value uniquely. The functional dependency is also 
          known as database dependency and defines as the relationship which occurs when one attribute in a relation uniquely determines another attribute.
          It is written as A->B which means B is functionally dependent on A.</p>
    </div>
    </div><!-- comment -->
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">15)What is Join?</h5>

      <p class="w3-text-grey">he Join operation is one of the most useful activities in relational algebra. It is most commonly used way to combine information from two or more relations.
          A Join is always performed on the basis of the same or related column. Most complex queries of SQL involve JOIN command.</p>
      <p>There are following types of join:<br>

          <br><b>Inner joins: Inner join is of 3 categories. They are:</b>
<br>Theta join<br>
Natural join<br>
Equi join<br>
<br><b>Outer joins: Outer join have three types. They are:</b>
<br>Left outer join<br>
Right outer join<br>
Full outer join</p>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">16) What is 1NF?</h5>

      <p class="w3-text-grey">1NF is the First Normal Form. It is the simplest type of normalization that you can implement in a database. The primary objectives of 1NF are to:</p>
      <ul>
          <li>Every column must have atomic (single value).</li>
          <li>To Remove duplicate columns from the same table.</li>
          <li>Create separate tables for each group of related data and identify each row with a unique column.</li><p></p>
      </ul>
    </div>
    </div><!-- comment --><div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">17)What is 2NF?</h5>

      <p class="w3-text-grey">2NF is the Second Normal Form. A table is said to be 2NF if it follows the following conditions:</p>
          <ul>
          <li>The table is in 1NF, i.e., firstly it is necessary that the table should follow the rules of 1NF.</li>
          <li>Every non-prime attribute is fully functionally dependent on the primary key, i.e., every non-key attribute should be dependent on the primary key in such 
              a way that if any key element is deleted, then even the non_key element will still be saved in the database.</li>
           </ul>
      </p>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">18)What is 3NF?</h5>

      <p class="w3-text-grey">3NF stands for Third Normal Form. A database is called in 3NF if it satisfies the following conditions:</p>
          <ul>
          <li>It is in second normal form.</li>
          <li>There is no transitive functional dependency.</li>
          <li>For example: X->Z</li>
      </ul>
      </p>
    </div>
    </div><!-- comment --><div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">19) What is BCNF?</h5>

      <p class="w3-text-grey">BCMF stands for Boyce-Codd Normal Form. It is an advanced version of 3NF, so it is also referred to as 3.5NF. BCNF is stricter than 3NF.
<br>A table complies with BCNF if it satisfies the following conditions:</p>
            <ul>
          <li>It is in 3NF.</li>
          <li>For every functional dependency X->Y, X should be the super key of the table. It merely means that X cannot be a non-prime attribute if Y is a prime attribute.</li>
         
      </ul>
      </p>
    </div>
</div>
    
    <div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">20)What is meant by normalization and denormalization?</h5>

      <p class="w3-text-grey"><br><b>Normalization</b> is a process of reducing redundancy by organizing the data into multiple tables. Normalization leads to better usage of disk spaces and makes it easier to maintain the integrity of the database.  

                  <br><b>Denormalization</b> is the reverse process of normalization as it combines the tables which have been normalized into a single table so that data retrieval becomes faster. JOIN operation allows us to create a denormalized form of the data by reversing the normalization.</p>
    </div>
    </div><!-- comment --><div class="w3-content">
    <div class="w3-twothird">
     
      <h5 class="w3-padding-99">21)Describe the types of keys?</h5>

      <p class="w3-text-grey">There are following types of keys:<br>
          <br><b>Primary key:</b> The Primary key is an attribute in a table that can uniquely identify each record in a table. It is compulsory for every table.
         <br><b>Candidate key:</b> The Candidate key is an attribute or set of an attribute which can uniquely identify a tuple. The Primary key can be selected from these attributes.
                <br><b>Super key:</b> The Super key is a set of attributes which can uniquely identify a tuple. Super key is a superset of the candidate key.
                <br><b>Foreign key:</b> The Foreign key is a primary key from one table, which has a relationship with another table. It acts as a cross-reference between tables.
      </p>
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
