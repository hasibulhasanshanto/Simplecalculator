<?php 
  $result ='';
  $firstNum ='';
  $secondNum ='';
  $thirdNum ='';
  $fourthNum =''; 
  $fifthNum ='';
  if (isset($_POST['submit'])) {
    $firstNum = $_POST['first_num'];
    $secondNum = $_POST['second_num'];
    $thirdNum = $_POST['third_num'];
    $fourthNum = $_POST['fourth_num'];
    $fifthNum = $_POST['fifth_num'];

    $result = $firstNum + $secondNum + $thirdNum + $fourthNum +$fifthNum ;
    // return $result;
  }

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Simple Calculator</title>
</head>
<body> 
 <div class="container">
  <div class="col-md-6 offset-md-3 mt-3">
   <div class="card">
    <h5 class="card-header text-center">Simple Calculator by Shanto</h5>
    <div class="card-body"> 
     
      <form method="POST"> 
        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-3 offset-sm-1 col-form-label shanto">First Num:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="first_num">
          </div>
        </div> 

        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-3 offset-sm-1 col-form-label shanto">Second Num:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="second_num">
          </div>
        </div> 

        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-3 offset-sm-1 col-form-label shanto">Third Num:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="third_num">
          </div>
        </div> 

        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-3 offset-sm-1 col-form-label shanto">Fourth Num:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="fourth_num">
          </div>
        </div> 

        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-3 offset-sm-1 col-form-label shanto">Fifth Num:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="fifth_num">
          </div>
        </div> 
        <br>
        <!-- Ends form here -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="result-table mt-2 col-md-10 offset-md-1">
    <h4 class="text-center">- Result Area -</h4>
    <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Second</th>
      <th scope="col">Third</th>
      <th scope="col">Fourth</th>
      <th scope="col">Fifth</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      <td><?php echo $firstNum ?></td>
      <td><?php echo $secondNum ?></td>
      <td><?php echo $thirdNum ?></td>
      <td><?php echo $fourthNum ?></td>
      <td><?php echo $fifthNum ?></td>
      <td><?php echo $result ?></td>
    </tr> 
  </tbody>
</table>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>