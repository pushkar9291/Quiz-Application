<?php
session_start();
include 'header.php';
include '../Connection.php';
if(!isset($_SESSION["admin"]))
{
     ?>
<script type="text/javascript">
    window.location="index.php";
</script>
    <?php
}
?>



  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>All Exam Results</h1>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <center><h3 style="margin-bottom: 50px">Old Exam Results</h3></center>
                <?php
                        $count=0;
                        $res= mysqli_query($link, "select * from exam_results order by id desc");
                        $count= mysqli_num_rows($res);
                        if($count==0)
                        {
                            ?>
                                <center><h1>No Results Found!</h1></center>
                            <?php
                        }
                        else
                        {
                            echo "<table class='table table-bordered'>";
                            echo "<tr style='background-color: #056105; color:white'>";
                            echo "<th>"; echo "Username";        echo "</th>";
                            echo "<th>"; echo "Exam Type";       echo "</th>";
                            echo "<th>"; echo "Total Question";  echo "</th>";
                            echo "<th>"; echo "Correct Answer";  echo "</th>";
                            echo "<th>"; echo "Wrong Answer";    echo "</th>";
                            echo "<th>"; echo "Exam Time";       echo "</th>";
                            echo "</tr>";
                            while($row=mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                echo "<td>"; echo $row["username"];        echo "</td>";
                                echo "<td>"; echo $row["exam_type"];       echo "</td>";
                                echo "<td>"; echo $row["total_question"];  echo "</td>";
                                echo "<td>"; echo $row["correct_answer"];  echo "</td>";
                                echo "<td>"; echo $row["wrong_answer"];    echo "</td>";
                                echo "<td>"; echo $row["exam_time"];       echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                ?>
                                

                            </div>
                        </div>
                    </div>
     </div>
    </div><!-- .animated -->
  </div><!-- .content -->
                                
<?php
include 'footer.php';
?>