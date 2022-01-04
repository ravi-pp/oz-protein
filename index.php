<?php include('config.php');
      include('db.php');
      if(isset($_COOKIE['quizToken']) && !empty($_COOKIE['quizToken'])){
        $token = $_COOKIE['quizToken'];
        $cookie_query = mysqli_query($connect,"SELECT * FROM `tbl_registers` WHERE `token_id`='$token'");
        $cookie_result = mysqli_fetch_assoc($cookie_query);
        mysqli_close($connect);
    }
    if(isset($cookie_result) && !empty($cookie_result)){
   //print_r($cookie_result);

    }
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>OZ-Protein Quiz</title>
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
</head>

<body oncontextmenu='return true' class='snippet-body'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2" style="opacity:0.9;">
                <div class="card px-3 pt-1 pb-0 mt-3 mb-3">
                    <!-- <h2 id="heading">OZ Protein Quiz</h2> -->
                    <span style="text-align:right;"><a href="<?php echo constant('quizUrl'); ?>" title="Home"
                            style="color:#252525;"><i class="fa fa-times"></i> </a></span>
                    <div class="col-md-12 logo_div">
                        <img src="assets/img/logo.png" alt="logo" style="height:145px;width:243px;">
                    </div>
                    <span class="text-muted">Best product waiting for you!</span>
                    <span class="alert-danger text-center" id="error"></span>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="basic"><strong>Basic</strong></li>
                            <li id="diet"><strong>Diet</strong></li>
                            <li id="goals"><strong>Goals</strong></li>
                            <li id="exercise"><strong>Exercise</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br>

                        <!-- 1 fieldsets -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How do you identify?</h3>
                                    </div>
                                    <?php foreach($gender_arr as $gkey=>$gval){ ?>
                                    <div class="col-md-4 ">
                                        <label class="labl">
                                            <input type="radio" name="gender" value="<?php echo $gkey;?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['gender'] ==$gkey){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $gval;?></div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <!-- end 1 fieldset -->
                        <!-- start 2 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How old are you?</h3>
                                    </div>
                                    <?php $a=0;foreach($age_arr as $agekey=>$ageval){ ?>
                                    <?php if($a<3){ ?>
                                    <div class="col-md-4">
                                        <label class="labl">
                                            <input type="radio" name="age" value="<?php echo $agekey; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['age'] == $agekey){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $ageval; ?></div>
                                        </label>
                                    </div>
                                    <?php }  if($a==3){ ?>
                                    <div class="col-md-12">
                                        <label class="labl">
                                            <input type="radio" name="age" value="<?php echo $agekey; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['age'] == $agekey){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $ageval; ?></div>
                                        </label>
                                    </div>
                                    <?php }?>
                                    <?php $a++;}?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 2 fieldset -->
                        <!-- 3 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">Which Gainful products are you interested in?</h3>
                                    </div>
                                    <?php $a=0;foreach($pro_interested as $prokey=>$proval){ ?>
                                    <?php if($a<=5){ ?>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="pro_interested"
                                                value="<?php echo $prokey; ?>" />
                                            <div class="text-center"><?php echo $proval; ?></div>
                                        </label>
                                    </div>
                                    <?php }  if($a==6){ ?>
                                    <div class="col-md-12">
                                        <label class="labl">
                                            <input type="checkbox" name="pro_interested"
                                                value="<?php echo $prokey; ?>" />
                                            <div class="text-center"><?php echo $proval; ?></div>
                                        </label>
                                    </div>
                                    <?php }?>
                                    <?php $a++;}?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 3 fieldset -->
                        <!-- 4 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What is your current weight and height?</h3>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-8 mx-auto">
                                            <label for="weight">Weight</label>
                                            <input type="text" name="weight" placeholder="KG"
                                                value="<?php if(isset($cookie_result) && !empty($cookie_result)){echo $cookie_result['weight'];} ?>"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-4 mx-auto">
                                            <label for="height_ft">Height</label>
                                            <input type="text" name="height_ft" placeholder="FT"
                                                value="<?php if(isset($cookie_result) && !empty($cookie_result)){echo $cookie_result['height_ft'];} ?>"
                                                class="form-control" />
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="height_in"></label>
                                            <input type="text" name="height_in" placeholder="IN"
                                                value="<?php if(isset($cookie_result) && !empty($cookie_result)){echo $cookie_result['height_in'];} ?>"
                                                class="form-control mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 4 fieldset -->
                        <!-- 5 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">On average, how many hours of sleep do you get per
                                            night?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-7 mx-auto">
                                            <label for="sleep" class="text-left">Average hours of sleep</label>
                                            <select name="sleep" id="sleep_select" class="form-control">
                                                <option value="">Select one</option>
                                                <?php foreach($sleep_avg as $skey=>$sval){ ?>
                                                <option value="<?php echo $skey; ?>"
                                                    <?php if(isset($cookie_result) && !empty($cookie_result)){if($skey == $cookie_result['sleep']){echo 'selected';}} ?>>
                                                    <?php echo $sval; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 5 fieldset -->
                        <!-- 6 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Basic Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What describes your typical eating pattern?</h3>
                                    </div>
                                    <?php $a=0;foreach($eating_pattern as $eatkey=>$eatval){ ?>
                                    <?php if($a<=3){ ?>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="radio" name="eating_pattern" value="<?php echo $eatkey; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['eating_pattern'] == $eatkey){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $eatval; ?></div>
                                        </label>
                                    </div>
                                    <?php }  if($a==4){ ?>
                                    <div class="col-md-12">
                                        <label class="labl">
                                            <input type="radio" name="eating_pattern" value="<?php echo $eatkey; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['eating_pattern'] == $eatkey){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $eatval; ?></div>
                                        </label>
                                    </div>
                                    <?php }?>
                                    <?php $a++;}?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 6 fieldset -->
                        <!-- 7 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Diet Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">Do you have any dietary preferences or
                                            restrictions?</h3>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Gluten-free" />
                                            <div class="text-center">Gluten-free</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Lactose-free" />
                                            <div class="text-center">Lactose-free</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Soy-free" />
                                            <div class="text-center">Soy-free</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Whey-free" />
                                            <div class="text-center">Whey-free</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Vegan / plant-based" />
                                            <div class="text-center">Vegan / plant-based</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Paleo diet" />
                                            <div class="text-center">Paleo diet</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Ketogenic diet" />
                                            <div class="text-center">Ketogenic diet</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="Caffeine-free" />
                                            <div class="text-center">Caffeine-free</div>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="labl">
                                            <input type="checkbox" name="dietary" value="None" />
                                            <div class="text-center">None</div>
                                        </label>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 7 fieldset -->
                        <!-- 8 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Diet Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How many servings of fruit do you eat per day?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="alert alert-secondary">1 serving of fruit ≈ 1 orange, 1 banana, or 1
                                            cup of raspberries</div>
                                    </div>
                                    <?php foreach($servings_fruit as $sf_key=>$sf_val){ ?>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="radio" name="servings_fruit" value="<?php echo $sf_key; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['servings_fruit'] == $sf_key){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $sf_val; ?></div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 8 fieldset -->
                        <!-- 9 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Diet Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How many servings of vegetables do you eat per day?
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="alert alert-secondary">1 serving of vegetables ≈ 1/2 cup cooked
                                            broccoli or 1 cup of raw spinach</div>
                                    </div>
                                    <?php foreach($servings_vegi as $sv_key=>$sv_val){ ?>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="radio" name="servings_vegi" value="<?php echo $sv_key; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['servings_vegi'] == $sv_key){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $sv_val; ?></div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 9 fieldset -->
                        <!-- 10 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Diet Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How many servings of whole grains do you eat per
                                            day?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="alert alert-secondary">1 serving of whole grains ≈ 1 slice whole
                                            wheat bread or 1/2 cup cooked brown rice/oats</div>
                                    </div>
                                    <?php foreach($servings_grain as $sg_key=>$sg_val){ ?>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="radio" name="servings_grain" value="<?php echo $sg_key; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['servings_grain'] == $sg_key){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $sg_val; ?></div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 10 fieldset -->
                        <!-- 11 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Diet Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How often do you plan on having protein powder?
                                        </h3>
                                    </div>
                                    <?php $a=0; foreach($protien_powder as $pp_key=>$pp_val){ ?>
                                    <?php if($a <2){ ?>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="radio" name="protien_powder" value="<?php echo $pp_key; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['protien_powder'] == $pp_key){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $pp_val; ?></div>
                                        </label>
                                    </div>
                                    <?php } if($a ==2){ ?>
                                    <div class="col-md-12">
                                        <label class="labl">
                                            <input type="radio" name="protien_powder" value="<?php echo $pp_key; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['protien_powder'] == $pp_key){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $pp_val; ?></div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    <?php $a++;} ?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 11 fieldset -->
                        <!-- goals part -->
                        <!-- 12 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Goals Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What are your nutrition goals?</h3>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals" value="Build muscle" />
                                            <div class="text-center">Build muscle</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals" value="Gain weight" />
                                            <div class="text-center">Gain weight</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals"
                                                value="Increase calorie intake" />
                                            <div class="text-center">Increase calorie intake</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals" value="Maintain muscle" />
                                            <div class="text-center">Maintain muscle</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals"
                                                value="Recover after workouts" />
                                            <div class="text-center">Recover after workouts</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals"
                                                value="Sports/fitness performance" />
                                            <div class="text-center">Sports/fitness performance</div>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="labl">
                                            <input type="checkbox" name="nutrition_goals" value="Supplement diet" />
                                            <div class="text-center">Supplement diet</div>
                                        </label>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 12 fieldset -->
                        <!-- 13 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Goals Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What is your goal weight?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-7 mx-auto">
                                            <label for="goal_weight" class="text-left">Goal Weight</label>
                                            <input type="text" name="goal_weight" placeholder="KG"
                                                value="<?php if(isset($cookie_result) && !empty($cookie_result)){echo $cookie_result['goal_weight'];} ?>"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 13 fieldset -->
                        <!-- Exercise Part -->
                        <!-- 14 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Exercise Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What time of day do you typically exercise?</h3>
                                    </div>
                                    <?php $a=0; foreach($exercise_time as $et_key=>$et_val){ ?>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="radio" name="exercise_time" value="<?php echo $et_key; ?>"
                                                <?php if(isset($cookie_result) && !empty($cookie_result)){if($cookie_result['exercise_time'] == $et_key){echo 'checked';}} ?> />
                                            <div class="text-center"><?php echo $et_val; ?></div>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 14 fieldset -->
                        <!-- 15 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Exercise Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What are your primary modes of exercise or
                                            training?</h3>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise"
                                                value="Resistance or weight training" />
                                            <div class="text-center">Resistance or weight training</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Running" />
                                            <div class="text-center">Running</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Cycling" />
                                            <div class="text-center">Cycling</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Yoga or pilates" />
                                            <div class="text-center">Yoga or pilates</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Dance or aerobics" />
                                            <div class="text-center">Dance or aerobics</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Swimming" />
                                            <div class="text-center">Swimming</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Team sports" />
                                            <div class="text-center">Team sports</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Individual sports" />
                                            <div class="text-center">Individual sports</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Active lifestyle" />
                                            <div class="text-center">Active lifestyle</div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labl">
                                            <input type="checkbox" name="primary_exercise" value="Other" />
                                            <div class="text-center">Other</div>
                                        </label>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 15 fieldset -->
                        <!-- 16 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Exercise Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How many times per week do you exercise?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-7 mx-auto">
                                            <label for="exercise_perweek" class="text-left">Frequency</label>
                                            <select name="exercise_perweek" id="exercise_perweek" class="form-control">
                                                <option value="" disabled="">Select one</option>
                                                <?php foreach($exercise_perweek as $ex_key=>$ex_val){?>
                                                <option value="<?php echo $ex_key; ?>"
                                                    <?php if(isset($cookie_result) && !empty($cookie_result)){if($ex_key ==$cookie_result['exercise_perweek']){echo 'selected';}} ?>>
                                                    <?php echo $ex_val; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 16 fieldset -->
                        <!-- 17 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Exercise Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">What is the average intensity level of your
                                            exercise?</h3>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <span class="exercise_intensity_light text-muted pull-left">Very Light</span>
                                        <span class="exercise_intensity_moderate">Moderate</span> <span
                                            class="exercise_intensity_intense text-muted pull-right">Very Intense</span>
                                        <input type="range" name="exercise_intensity" min="1" max="100" value="50"
                                            class="slider" id="exercise_intensity">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="alert alert-secondary"><b id="exercise_action_title">Moderate:</b>
                                            <span id="exercise_action_text">Will break a sweat after performing the
                                                activity for 20-30 minutes. Breathing and heart rate are
                                                elevated.</span></div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 17 fieldset -->
                        <!-- 18 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Exercise Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How would you describe your perspiration level
                                            during exercise?</h3>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <span class="perspiration_level_light text-muted pull-left">Low</span> <span
                                            class="perspiration_level_moderate">Medium</span> <span
                                            class="perspiration_level_intense text-muted pull-right">High</span>
                                        <input type="range" name="perspiration_level" min="1" max="100" value="50"
                                            class="slider" id="perspiration_level">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="alert alert-secondary"><b id="perspiration_action_title">Medium:</b>
                                            <span id="perspiration_action_text">After moderate exercise, your shirt is
                                                somewhat sweaty.</span></div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 18 fieldset -->
                        <!-- 19 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Exercise Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="text-center mt-2">How did you hear about OZ Protien?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-7 mx-auto">
                                            <label for="hear_about" class="text-left">Hear about</label>
                                            <select name="hear_about" id="hear_about" class="form-control">
                                                <option value="">Select one</option>
                                                <?php foreach($hear_about as $ha_key=>$ha_val){?>
                                                <option value="<?php echo $ha_key; ?>"
                                                    <?php if(isset($cookie_result) && !empty($cookie_result)){if($ha_key ==$cookie_result['hear_about']){echo 'selected';}} ?>>
                                                    <?php echo $ha_val; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <!-- end 19 fieldset -->
                        <!-- 20 fieldset -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Final Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div> <label class="fieldlabels">Full Name: *</label> <input type="text" name="fname"
                                    placeholder="Full Name" /> <label class="fieldlabels">Email: *</label> <input
                                    type="text" name="email" placeholder="Email" /> <label class="fieldlabels">Contact
                                    No.:
                                    *</label> <input type="text" name="phno" placeholder="Contact No." />
                            </div> <input type="button" name="Submit" class="next action-button" id="submit1"
                                value="Submit" />
                            <!-- <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" /> -->
                        </fieldset>
                        <!-- end 20 fieldset -->
                        <!-- last 21 fieldset -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span
                                                class="total-field"></span></h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="assets/img/tick.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">Thank you for taking the survey, please
                                            check your e-mail for the result.</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!-- end 21 fieldset -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='<?php echo constant('quizUrl'); ?>assets/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='<?php echo constant('quizUrl'); ?>assets/js/quiz.js'></script>
</body>

</html>