    <?php 
    include("../Includes/session.php");
    include("../Includes/config.php");

    
    $id=$_SESSION['uid'];
    $comp=$_POST["complaint"];
    $aid    = 1;
    $stat   ="NOT PROCESSED"; 
    
    if(isset($_POST["complaint"]))
    {
         if($con){
             echo "tusher";
         }            

        $query  =mysqli_query($con,"INSERT INTO complaint(uid,aid,complaint,status)VALUES('$id','$aid','$comp','$stat')"); 
        
    }
    
    header("Location:complaint.php");   
    ?>