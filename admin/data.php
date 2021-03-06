<?php
include('../config.php');
session_start();
if(!isset($_SESSION['login_id'])){header('Location: ./');}
include('../db.php');
$sel_query = mysqli_query($connect,"SELECT * FROM `tbl_registers` ORDER BY id DESC");
$num = mysqli_num_rows($sel_query);
mysqli_close($connect);
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>OZ-Protein Admin</title>
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo constant('quizUrl'); ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo constant('quizUrl'); ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo constant('quizUrl'); ?>assets/img/favicon/favicon-16x16.png">
    <link href='<?php echo constant('quizUrl'); ?>assets/css/bootstrap.min.css' rel='stylesheet'>
    <link href='<?php echo constant('quizUrl'); ?>assets/css/custom.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='<?php echo constant('quizUrl'); ?>assets/js/jquery.min.js'></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</head>

<body oncontextmenu='return true' class='data-body'>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="p-3"><?php echo $_SESSION['name']; ?></div>
                 <a href="./logout.php">Logout</a>
                </form>
            </div>
        </nav>
        <div class="col-md-12 row mt-3">
            <h3 class="text-center mx-auto mt-2 mb-2">All Survery Data</h3>
        </div>
        <div class="col-md-12 row mt-3 table-responsive">
        <table class="table table-striped table-hover" id="example">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col">Product Interest</th>
                <th scope="col">Weight-KG</th>
                <th scope="col">Height-FT</th>
                <th scope="col">Height-IN</th>
                <th scope="col">Sleep</th>
                <th scope="col">Eating Pattern</th>
                <th scope="col">Dietary</th>
                <th scope="col">Servings Fruit</th>
                <th scope="col">Servings Vegi</th>
                <th scope="col">Servings Grain</th>
                <th scope="col">Protien Powder</th>
                <th scope="col">Nutrition Goals</th>
                <th scope="col">Goal Weight-KG</th>
                <th scope="col">Exercise Time</th>
                <th scope="col">Primary Exercise</th>
                <th scope="col">Exercise Perweek</th>
                <th scope="col">Exercise Intensity</th>
                <th scope="col">Perspiration Level</th>
                <th scope="col">Hear About</th>
                <th scope="col">Email Send</th>
                <th scope="col">Updated At</th>
                <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php if($num>0){
                    $i=1;
                 while($result = $result = mysqli_fetch_assoc($sel_query)){ 
                     //gender
                      if($result['gender'] =='m'){
                        $gender = 'Male';
                      }else if($result['gender'] =='f'){
                        $gender = 'Female';
                      }else{
                        $gender = 'Non-Binary';
                      }
                      //exercise_intensity
                      if($result['exercise_intensity']<40 && $result['exercise_intensity']>=25){
                          $exercise_intensity = 'Light';
                      }else if($result['exercise_intensity']<35){
                        $exercise_intensity = 'Very Light';
                      }else if($result['exercise_intensity']>60 && $result['exercise_intensity'] <=80){
                        $exercise_intensity = 'Intense';
                      }else if($result['exercise_intensity']>80){
                        $exercise_intensity = 'Very Intense';
                      }else if($result['exercise_intensity']>35 && $result['exercise_intensity']<60){
                        $exercise_intensity = 'Moderate';
                      }
                      //perspiration_level
                      if($result['perspiration_level']<40){
                        $perspiration_level = 'Low';
                    }else if($result['perspiration_level']>65){
                        $perspiration_level = 'High';
                    }else if($result['perspiration_level']>40 && $result['perspiration_level']<65){
                        $perspiration_level = 'Medium';
                    }
                ?>
                <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo (empty($result['name'])) ? 'NA' : $result['name']; ?></td>
                <td><?php echo (empty($result['email'])) ? 'NA' : $result['email']; ?></td>
                <td><?php echo (empty($result['phone'])) ? 'NA' : $result['phone']; ?></td>
                <td><?php echo $gender; ?></td>
                <td><?php echo $result['age']; ?></td>
                <td><?php echo $result['pro_interested']; ?></td>
                <td><?php echo $result['weight']; ?></td>
                <td><?php echo $result['height_ft']; ?></td>
                <td><?php echo $result['height_in']; ?></td>
                <td><?php echo $result['sleep']; ?></td>
                <td><?php echo $result['eating_pattern']; ?></td>
                <td><?php echo $result['dietary']; ?></td>
                <td><?php echo $result['servings_fruit']; ?></td>
                <td><?php echo $result['servings_vegi']; ?></td>
                <td><?php echo $result['servings_grain']; ?></td>
                <td><?php echo $result['protien_powder']; ?></td>
                <td><?php echo $result['nutrition_goals']; ?></td>
                <td><?php echo $result['goal_weight']; ?></td>
                <td><?php echo $result['exercise_time']; ?></td>
                <td><?php echo $result['primary_exercise']; ?></td>
                <td><?php echo $result['exercise_perweek']; ?></td>
                <td><?php echo $exercise_intensity; ?></td>
                <td><?php echo $perspiration_level; ?></td>
                <td><?php echo $result['hear_about']; ?></td>
                <td><?php echo ($result['email_send']==0) ? 'Not Sent' : 'Sent'; ?></td>
                <td><?php echo $result['updated_at']; ?></td>
                <td><?php echo $result['created_at']; ?></td>
                </tr>
                <?php $i++; } } ?>
            </tbody>
            </table>
        </div>
    </div>
    <script type='text/javascript' src='<?php echo constant('quizUrl'); ?>assets/js/bootstrap.bundle.min.js'></script>
    <!-- datatable -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
              responsive: true,
              lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10', '25', '50', 'All' ]
              ],
               dom: 'Bfrtip',
                buttons: [
                'pageLength','excel',
                ]
            });
        });
    </script>
    <!-- 'csv', -->
</body>
</html>