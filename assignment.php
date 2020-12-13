<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Assignmet</title>
   </head>

<body>
<div class="container-fluid  ">
  <div class="justify-content-center row">
    <div class="col-12 col-md-8 col-lg-8 mt-5">
      <div class="card">
      <header class="card-header">
	<h2 class="card-title text-center mt-2">Enter Marks</h2>
</header>

         <div class="card-body">
         <form class=" ">
       <!-- 1 -->
     <div class="form-row">
		<div class="col form-group">
			<label><b>Enter English Marks</b></label>   
		  	<input type="text" name="english" class="form-control" placeholder="" required>
        <small class="form-text text-right ">/100</small>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label><b>Enter Urdu Marks</b></label>
		  	<input type="text" name="urdu" class="form-control" placeholder=" " required>
        <small class="form-text text-right ">/100</small>

		</div> <!-- form-group end.// -->
    </div>

      <!-- 2 -->

      <div class="form-row">
		<div class="col form-group">
			<label><b>Enter Physics Marks</b> </label>   
		  	<input type="text" name="physics" class="form-control" placeholder="" required>
        <small class="form-text text-right ">/100</small>

		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label><b>Enter Chemistry Marks</b></label>
		  	<input type="text" name="chemistry" class="form-control" placeholder=" " required>
        <small class="form-text text-right ">/100</small>

		</div> <!-- form-group end.// -->
    </div>
    
    <!-- 3 -->

    <div class="form-row">
		<div class="col form-group">
			<label><b>Enter Math Marks</b></label>   
		  	<input type="text" name="math" class="form-control" placeholder="" required>
        <small class="form-text text-right ">/100</small>

		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label><b>Pak-Study</b></label>
		  	<input type="text" name="pak-study" class="form-control" placeholder=" " required>
        <small class="form-text text-right ">/50</small>

		</div> <!-- form-group end.// -->
    </div>
    

    <!-- btn -->

    <div class="form-group">
    <a onclick="#table" href="#table"> <button type="submit" class="btn btn-primary btn-block" >Calculate </button></a>
       
    </div>

    </form>
         </div>
      
      </div>
    
    </div>
    
  </div>
  <!-- 2 row -->


  <div class="row justify-content-center mt-5" id="table">
 
    <div class="col-12 col-md-8 col-lg-8 ">
    <div class="card">
    
    <header class="card-header bg-info">
	<h2 class="card-title text-center mt-2">Marks in Table</h2>
</header>
    <?php
       //  variables
    $english=@$_GET['english'];
    $urdu=@$_GET['urdu'];
    $physics=@$_GET['physics'];
    $chemistry=@$_GET['chemistry'];
    $math=@$_GET['math'];
    $pak_study=@$_GET['pak-study'];
    $total=$english+$urdu+$physics+$chemistry+$math+$pak_study;
    $percentage=($total/550*100)."%";
   

 echo '<table class="table text-center table-dark table-striped table-hover">';

//  header

  echo "<tr>";
   echo "<td>". "<b>Subject</b>".  "</td>";
   echo "<td>". "<b>Marks</b>".  "</td>";
   echo "</tr>";
  //  1
  echo "<tr>";
  echo "<td>"."<b>English Marks :</b>".  "</td>";
  echo "<td>".$english.   "</td>";
  echo "</tr>";
  // 2
  echo "<tr>";
  echo "<td>"."<b>Urdu Marks :</b>".  "</td>";
  echo "<td>".$urdu.  "</td>";
  echo "</tr>";
  // 3
  echo "<tr>";
  echo "<td>"."<b>Physics Marks :</b>".   "</td>";
  echo "<td>".$physics.  "</td>";
  echo "</tr>";
  // 4
  echo "<tr>";
  echo "<td>"."<b>Chemistry Marks :</b>".   "</td>";
  echo "<td>".$chemistry.   "</td>";
  echo "</tr>";
  // 5
  echo "<tr>";
  echo "<td>"."<b>Math Marks :</b>".   "</td>";
  echo "<td>".$math.   "</td>";
  echo "</tr>";
  // 6
  echo "<tr>";
  echo "<td>"."<b>Pak-Study Marks :</b>".   "</td>";
  echo "<td>".$pak_study.   "</td>";
  echo "</tr>";

  // 7 total

  echo '<tr class="bg-secondary">';
  echo "<td>"."<b>Total Marks :</b>".   "</td>";
  echo "<td>".$total.   "</td>";
  echo "</tr>";

  // 8 Average

  echo "<tr>";
  echo '<td class="bg-success">'."<b>Percentage :</b>".   '</td>';
  echo '<td class="bg-danger">'.$percentage.   '</td>';
  echo "</tr>";


  
  echo '</table>';

 
    
   
?>

    
    </div>

    </div>
  </div>
</div>

</body>
</html>