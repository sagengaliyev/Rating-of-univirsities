<?php
include 'C:\xampp\htdocs\assi6\dbase.php';

?>
<?php
//--SORTING CODE--
if(isset($_POST['subject']))
{
    $subj_query = "SELECT * FROM reiting ORDER BY IT_score DESC ";
    $result=connectQuery($subj_query);
} else if (isset($_POST['subjectM'])){
    $subm_query = "SELECT * FROM reiting ORDER BY MathScore DESC ";
    $result=connectQuery($subm_query);
}
else if (isset($_POST['research'])){
    $rese_query = "SELECT * FROM reiting ORDER BY Research_score DESC ";
    $result=connectQuery($rese_query);
}


else {
    $def_query = "SELECT * FROM reiting ORDER BY Place ASC";
    $result=connectQuery($def_query);
}

// FUNCTION WITHOUT GET AND SET TO CONNECTION DO DATABASE--
function connectQuery($query) 
{
    $connect = mysqli_connect("localhost","unuser","12345678","raiting");
    $result = mysqli_query($connect,$query);
    return $result;
}
// -- CLASS --
class Place {
    // --STATIC PROPERTY--
    static $place;
    // --STATIC FUNCTION--
    public static function getPlace(){
      return self::$place++;
    }
}

Place::$place = 1;

?>

<form action="main2w.php" method="post">
    <!-- TYPES OF SORTING -->
     <input type="submit" name="subject" value="Sorting by subject:IT"><br><br> 
    <input type="submit" name="subjectM" value="Sorting by subject:Maths"><br><br>
    <input type="submit" name="research" value="Sorting by research"><br> 
    </form>
<table style="border:2px solid black;border-collapse: collapse;" >
   <tr >
   <th style="border:1px solid black;" width="10%">Place</th>
   <th style="border:1px solid black;" width="50%">Name</th>
   <th style="border:1px solid black;" width="10%">TotalScore</th>
   <th style="border:1px solid black;" width="10%">IT_score</th>
   <th style="border:1px solid black;" width="10%">MathScore</th>
   <th style="border:1px solid black;" width="10%">Research_Score</th>

   </tr>
   <?php
    
  
  
   while ($row=mysqli_fetch_array($result)) : ?>
   
    <tr style="border:1px solid black;">
<td style="border:1px solid black;"><?php echo Place::getPlace(); ?></td>
<td style="border:1px solid black;"><?php echo  $row['Name']; ?></td>
<td style="border:1px solid black;"><?php echo  $row['Ball']; ?></td>
<td style="border:1px solid black;"><?php echo  $row['IT_score']; ?></td>
<td style="border:1px solid black;"><?php echo  $row['MathScore']; ?></td>
<td style="border:1px solid black;"><?php echo  $row['Research_Score']; ?></td>
</tr>
   <?php endwhile; ?>
</table>    
<!doctype html>
<html>
<head>
    <title>Main page</title>
</head>
<body>

    
 <!-- this table just to show that I created by OOP PHP. It's the second table. In the first table you can do sorting -->
    <table style="border:2px solid black;border-collapse: collapse;" >
       <tr >
       <th  style="border:1px solid black;" width="10%">Place</th>
       <th style="border:1px solid black;" width="50%">Name</th>
       <th style="border:1px solid black;" width="10%">TotalScore</th>
       <th style="border:1px solid black;" width="10%">IT_score</th>
       <th style="border:1px solid black;" width="10%">MathScore</th>
       <th style="border:1px solid black;" width="10%">Research_Score</th>

       </tr>
       <?php 
       // OBJECT
       $data = new Databases;
       $post_data = $data->select('reiting');
        foreach($post_data as $post)
        {
        ?>
        <tr style="border:1px solid black;">
    <td style="border:1px solid black;"><?php echo  $post['Place']; ?></td>
    <td style="border:1px solid black;"><?php echo  $post['Name']; ?></td>
    <td style="border:1px solid black;"><?php echo  $post['Ball']; ?></td>
    <td style="border:1px solid black;"><?php echo  $post['IT_score']; ?></td>
    <td style="border:1px solid black;"><?php echo  $post['MathScore']; ?></td>
    <td style="border:1px solid black;"><?php echo  $post['Research_Score']; ?></td>
    </tr>
    <?php
        }
    ?>
    </table>
   <br><br>
   
   </form>
   <?php
   // --FINAL CLASS--
    final class Message{
        // --CONST--
        const WELCOME_MESSAGE = "Thank you for visiting the website!";
    }
    echo Message::WELCOME_MESSAGE;
   ?>
</body>
</html>