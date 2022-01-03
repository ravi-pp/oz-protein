<?php include('config.php'); ?>
<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>OZ-Protein Quiz</title>
    <link href='<?php constant('quizUrl'); ?>assets/css/bootstrap.min.css' rel='stylesheet'>
    <link href='<?php constant('quizUrl'); ?>assets/css/custom.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='<?php constant('quizUrl'); ?>assets/js/jquery.min.js'></script>
</head>
<style>

</style>
<body oncontextmenu='return true' class='snippet-body'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-3 pt-1 pb-0 mt-3 mb-3">
                    <!-- <h2 id="heading">OZ Protein Quiz</h2> -->
                    <span style="text-align:right;"><a href="<?php echo constant('quizUrl'); ?>" title="Home" style="color:#252525;"><i class="fa fa-times"></i> </a></span>
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How do you identify?</h3>
                                 </div>
                                <div class="col-md-4 ">
                                    <label class="labl">
                                        <input type="radio" name="gender" value="m" />
                                        <div class="text-center">Male</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="radio" name="gender" value="f" />
                                        <div class="text-center">Female</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="radio" name="gender" value="o" />
                                        <div class="text-center">Non-Binary</div>
                                    </label>
                                    </div>
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How old are you?</h3>
                                 </div>
                                <div class="col-md-4 ">
                                    <label class="labl">
                                        <input type="radio" name="age" value="18-23"/>
                                        <div class="text-center">18-23</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="radio" name="age" value="24-34"/>
                                        <div class="text-center">24-34</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="radio" name="age" value="35-49" />
                                        <div class="text-center">35-49</div>
                                    </label>
                                    </div>
                                    <div class="col-md-12">
                                    <label class="labl">
                                        <input type="radio" name="age" value="50" />
                                        <div class="text-center">50 or Above</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">Which Gainful products are you interested in?</h3>
                                 </div>
                                <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="Personalized Protein Powder"/>
                                        <div class="text-center">Personalized Protein Powder</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="Personalized Hydration" />
                                        <div class="text-center">Personalized Hydration</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="Personalized Pre-Workout" />
                                        <div class="text-center">Personalized Pre-Workout</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="Creatine Performance Boost" />
                                        <div class="text-center">Creatine Performance Boost</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="Collagen Performance Boost" />
                                        <div class="text-center">Collagen Performance Boost</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="Fiber Performance Boost" />
                                        <div class="text-center">Fiber Performance Boost</div>
                                    </label>
                                    </div>
                                    <div class="col-md-12">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested" value="All of the above" />
                                        <div class="text-center">All of the above</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">What is your current weight and height?</h3>
                                 </div>
                                 <div class="col-md-12 row">
                                <div class="col-md-8 mx-auto">
                                    <label for="weight">Weight</label>
                                        <input type="text" name="weight" placeholder="LBS" value="" class="form-control"/>
                                    </div>
                                    </div>
                                    <div class="col-md-12 row">
                                    <div class="col-md-4 mx-auto">
                                    <label for="height_ft">Height</label>
                                        <input type="text" name="height_ft" placeholder="FT" value="" class="form-control"/>
                                    </div>
                                    <div class="col-md-4">
                                    <label for="height_in"></label>
                                        <input type="text" name="height_in" placeholder="IN" value="" class="form-control mt-2"/>
                                    </div>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">On average, how many hours of sleep do you get per night?</h3>
                                 </div>
                                 <div class="col-md-12">
                                <div class="col-md-7 mx-auto">
                                    <label for="sleep" class="text-left">Average hours of sleep</label>
                                     <select name="sleep" id="sleep_select" class="form-control">
                                     <option value="">Select one</option>
                                            <option value="4">4 or less </option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10 or more</option>
                                     </select>
                                    </div>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">What describes your typical eating pattern?</h3>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="radio" name="eating_pattern" value="3" />
                                        <div class="text-center">3 meals + a few snacks per day</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="eating_pattern" value="4" />
                                        <div class="text-center">4 or more meals per day</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="eating_pattern" value="snack" />
                                        <div class="text-center">Snacking throughout the day</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="eating_pattern" value="eat" />
                                        <div class="text-center">I eat when I think of it / whenever I'm hungry</div>
                                    </label>
                                    </div>
                                    <div class="col-md-12">
                                    <label class="labl">
                                        <input type="radio" name="eating_pattern" value="fasting" />
                                        <div class="text-center">Periods of fasting between meals</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <!-- end 6 fieldset -->
                        <!-- 868686art -->
                        <!-- 7 fieldset -->
                        <fieldset>
                            <div class="form-card mb-4">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Diet Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">Do you have any dietary preferences or restrictions?</h3>
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
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How many servings of fruit do you eat per day?</h3>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="alert alert-secondary">1 serving of fruit ≈ 1 orange, 1 banana, or 1 cup of raspberries</div>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="radio" name="servings_fruit" value="0" />
                                        <div class="text-center">0 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_fruit" value="1-2" />
                                        <div class="text-center">1-2 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_fruit" value="3-4" />
                                        <div class="text-center">3-4 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_fruit" value="5+" />
                                        <div class="text-center">5+ servings</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How many servings of vegetables do you eat per day?</h3>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="alert alert-secondary">1 serving of vegetables ≈ 1/2 cup cooked broccoli or 1 cup of raw spinach</div>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="radio" name="servings_vegi" value="0" />
                                        <div class="text-center">0 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_vegi" value="1-2" />
                                        <div class="text-center">1-2 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_vegi" value="3-4" />
                                        <div class="text-center">3-4 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_vegi" value="5+" />
                                        <div class="text-center">5+ servings</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How many servings of whole grains do you eat per day?</h3>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="alert alert-secondary">1 serving of whole grains ≈ 1 slice whole wheat bread or 1/2 cup cooked brown rice/oats</div>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="radio" name="servings_grain" value="0" />
                                        <div class="text-center">0 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_grain" value="1-2" />
                                        <div class="text-center">1-2 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_grain" value="3-4" />
                                        <div class="text-center">3-4 servings</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="servings_grain" value="5+" />
                                        <div class="text-center">5+ servings</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How often do you plan on having protein powder?</h3>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="radio" name="protien_powder" value="1-3" />
                                        <div class="text-center">1-3 times per week</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="protien_powder" value="4-6" />
                                        <div class="text-center">4-6 times per week</div>
                                    </label>
                                    </div>
                                    <div class="col-md-12">
                                    <label class="labl">
                                        <input type="radio" name="protien_powder" value="7" />
                                        <div class="text-center">Every Day</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
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
                                        <input type="checkbox" name="nutrition_goals" value="Increase calorie intake" />
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
                                        <input type="checkbox" name="nutrition_goals" value="Recover after workouts" />
                                        <div class="text-center">Recover after workouts</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="nutrition_goals" value="Sports/fitness performance" />
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
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">What is your goal weight?</h3>
                                 </div>
                                 <div class="col-md-12">
                                <div class="col-md-7 mx-auto">
                                    <label for="goal_weight" class="text-left">Goal Weight</label>
                                     <input type="text" name="goal_weight" placeholder="LBS" value=""class="form-control" >
                                    </div>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">What time of day do you typically exercise?</h3>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="radio" name="exercise_time" value="Early Morning" />
                                        <div class="text-center">Early Morning</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="exercise_time" value="Late Morning" />
                                        <div class="text-center">Late Morning</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="exercise_time" value="Midday" />
                                        <div class="text-center">Midday</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="exercise_time" value="Early Afternoon" />
                                        <div class="text-center">Early Afternoon</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="exercise_time" value="Late Afternoon" />
                                        <div class="text-center">Late Afternoon</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="radio" name="exercise_time" value="Evening" />
                                        <div class="text-center">Evening</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">What are your primary modes of exercise or training?</h3>
                                 </div>
                                <div class="col-md-6 ">
                                    <label class="labl">
                                    <input type="checkbox" name="primary_exercise" value="Resistance or weight training" />
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
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
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
                                        <option value="1">1 or less</option>
                                        <option value="2">2 - 3</option>
                                        <option value="4">4 - 5</option>
                                        <option value="6">6 - 7</option>
                                        <option value="8">8 or more</option>
                                     </select>
                                    </div>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">What is the average intensity level of your exercise?</h3>
                                 </div>
                                 <div class="col-md-12 text-center">
                                    <span class="exercise_intensity_light text-muted pull-left">Very Light</span> <span class="exercise_intensity_moderate">Moderate</span> <span class="exercise_intensity_intense text-muted pull-right">Very Intense</span>
                                    <input type="range" name="exercise_intensity" min="1" max="100" value="50" class="slider" id="exercise_intensity">
                                    </div>
                                    <div class="col-md-12">
                                     <div class="alert alert-secondary"><b id="exercise_action_title">Moderate:</b> <span id="exercise_action_text">Will break a sweat after performing the activity for 20-30 minutes. Breathing and heart rate are elevated.</span></div>
                                 </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                 <h3 class="text-center mt-2">How would you describe your perspiration level during exercise?</h3>
                                 </div>
                                 <div class="col-md-12 text-center">
                                    <span class="perspiration_level_light text-muted pull-left">Low</span> <span class="perspiration_level_moderate">Medium</span> <span class="perspiration_level_intense text-muted pull-right">High</span>
                                    <input type="range" name="perspiration_level" min="1" max="100" value="50" class="slider" id="perspiration_level">
                                    </div>
                                    <div class="col-md-12">
                                     <div class="alert alert-secondary"><b id="perspiration_action_title">Medium:</b> <span id="perspiration_action_text">After moderate exercise, your shirt is somewhat sweaty.</span></div>
                                 </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                        <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
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
                                        <option value="news">News Article</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="tv">TV</option>
                                        <option value="mailer">Mailer</option>
                                        <option value="friend">From a friend</option>
                                        <option value="other">Other</option>
                                        <option value="google">Google</option>
                                        <option value="podcast">Podcast</option>
                                        <option value="youtube">YouTube</option>
                                        <option value="snapchat">Snapchat</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="blog">A Blog</option>
                                        <option value="review-site">Review Site</option>
                                        <option value="tiktok">TikTok</option>
                                     </select>
                                    </div>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                                    <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> <label class="fieldlabels">Full Name: *</label> <input type="text" name="fname"
                                    placeholder="Full Name" /> <label
                                    class="fieldlabels">Email: *</label> <input type="text" name="email"
                                    placeholder="Email" /> <label class="fieldlabels">Contact No.:
                                    *</label> <input type="text" name="phno" placeholder="Contact No." />
                            </div> <input type="button" name="Submit" class="next action-button" id="submit1" value="Submit" /> 
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
                                    <h2 class="steps">Step <span class="current-count"></span> - <span class="total-field"></span></h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="assets/img/tick.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully submited, Checked your registered emaild id for products details</h5>
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
    <script type='text/javascript' src='<?php constant('quizUrl'); ?>assets/js/bootstrap.bundle.min.js'></script>
    
    <script type='text/Javascript'>
    $(document).ready(function(){
        //slider A
        var sliderA = document.getElementById("exercise_intensity");
            sliderA.oninput = function() {
            let sliderVal = this.value;
            if(sliderVal<40 && sliderVal>=25){
                $('.exercise_intensity_light').addClass('text-muted');
                $('.exercise_intensity_intense').addClass('text-muted');
                $('#exercise_action_title').text('Light:');
                $('#exercise_action_text').text('Breathing and heart rate slightly elevated but sustainable for 30+ minutes.');
            }else if(sliderVal<35){
                $('.exercise_intensity_light').removeClass('text-muted');
                $('.exercise_intensity_moderate').addClass('text-muted');
                $('#exercise_action_title').text('Very Light:');
                $('#exercise_action_text').text('Can continue activity for 30+ minutes without shortness of breath or breaking a sweat.');
            }else if(sliderVal>60 && sliderVal <=80){
                $('.exercise_intensity_light').addClass('text-muted');
                $('.exercise_intensity_intense').addClass('text-muted');
                $('#exercise_action_title').text('Intense:');
                $('#exercise_action_text').text('Will break a sweat after performing the activity for about 10 minutes. Breathing becomes deeper and more frequent. You can carry on a conversation but not sing.');
            }else if(sliderVal>80){
                $('.exercise_intensity_intense').removeClass('text-muted');
                $('.exercise_intensity_moderate').addClass('text-muted');
                $('#exercise_action_title').text('Very Intense:');
                $('#exercise_action_text').text('Will break a sweat after 3-5 minutes. Breathing is deep and rapid. You can only talk in short phrases.');
            }else if(sliderVal>35 && sliderVal<60){
                $('.exercise_intensity_moderate').removeClass('text-muted');
                $('#exercise_action_title').text('Moderate:');
                $('#exercise_action_text').text('Will break a sweat after performing the activity for 20-30 minutes. Breathing and heart rate are elevated.');
            }
        }
        //slider B
        var sliderB = document.getElementById("perspiration_level");
            sliderB.oninput = function() {
            let sliderVal = this.value;
            if(sliderVal<40){
                $('.perspiration_level_light').removeClass('text-muted');
                $('.perspiration_level_intense').addClass('text-muted');
                $('.perspiration_level_moderate').addClass('text-muted');
                $('#perspiration_action_title').text('Low:');
                $('#perspiration_action_text').text('After moderate exercise, your shirt is mostly dry.');
            }else if(sliderVal>65){
                $('.perspiration_level_intense').removeClass('text-muted');
                $('.perspiration_level_moderate').addClass('text-muted');
                $('.perspiration_level_light').addClass('text-muted');
                $('#perspiration_action_title').text('High:');
                $('#perspiration_action_text').text('After moderate exercise, your shirt is drenched.');
            }else if(sliderVal>40 && sliderVal<65){
                $('.perspiration_level_moderate').removeClass('text-muted');
                $('.perspiration_level_intense').addClass('text-muted');
                $('.perspiration_level_light').addClass('text-muted');
                $('#perspiration_action_title').text('Medium:');
                $('#perspiration_action_text').text('After moderate exercise, your shirt is somewhat sweaty.');
            }
        }

//fieldset code
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;
$('.total-field').text(steps)

setProgressBar(current);

$(".next").click(function(){
current_fs = $(this).parent();
next_fs = $(this).parent().next();
//validation - gender
if(current ==1){
var gender  = $('input[name="gender"]').is(':checked');
var genderVal = $('input[name="gender"]:checked').val();
    if(gender ==false){
        $('#error').text('Please choose gender.');
        return false;
    }else{
        fieldUpdate('gender',genderVal);
        $('#error').text('');
    }
}
//validation - age
if(current ==2){
let age  = $('input[name="age"]').is(':checked');
let ageVal = $('input[name="age"]:checked').val();
    if(age ==false){
        $('#error').text('Please choose age.');
        return false;
    }else{
        fieldUpdate('age',ageVal)
        $('#error').text('');
    }
}
//validation - product interest
if(current ==3){
var pro  = $('input[name="pro_interested"]').is(':checked');
var proVal = [];
$('input[name="pro_interested"]:checked').each(function(){
   proVal.push($(this).val());
});
var join = proVal.join(',');
    if(pro ==false){
        $('#error').text('Please choose atlest one product.');
        return false;
    }else{
        fieldUpdate('pro_interested',join);
        $('#error').text('');
    }
}
//validation - weight OR height
if(current ==4){
var weight  = $('input[name="weight"]').val().trim();
var height_ft = $('input[name="height_ft"]').val().trim();
var height_in = $('input[name="height_in"]').val().trim();
    if(weight ==""){
        $('#error').text('Please enter weight.');
        return false;
    }else if(height_ft =="" || height_in ==""){
        $('#error').text('Please enter height.');
        return false;
    }else{
        $('#error').text('');
    }
    if(weight !=""){
        if($.isNumeric(weight) ==false){
        $('#error').text('Please enter weight in numeric.');
        return false;
        }
        fieldUpdate('weight',weight);
    }
    if(height_ft !="" || height_in !=""){
        if($.isNumeric(height_ft) ==false){
        $('#error').text('Please enter height in numeric.');
        return false;
        }else if($.isNumeric(height_in) ==false){
        $('#error').text('Please enter height in numeric.');
        return false;
        }else{
            fieldUpdate('height_ft',height_ft);
            fieldUpdate('height_in',height_in);
        }
    }
}
//validation - average sleep
if(current ==5){
    var sleepVal = $('#sleep_select').val();
    if(sleepVal ==""){
        $('#error').text('Please select average sleep.');
        return false;
    }else{
        fieldUpdate('sleep',sleepVal);
        $('#error').text('');
    }
}
//validation - eating pattern
if(current ==6){
    var radioCheck = $('input[name="eating_pattern"]').is(':checked');
    var eatingVal = $('input[name="eating_pattern"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose anyone.');
        return false;
     }else{
        fieldUpdate('eating_pattern',eatingVal);
        $('#error').text('');
    }
}
//validation - restrictions
if(current ==7){
var pro  = $('input[name="dietary"]').is(':checked');
var proVal = [];
$('input[name="dietary"]:checked').each(function(){
   proVal.push($(this).val());
});
var join = proVal.join(',');
    if(pro ==false){
        $('#error').text('Please choose atlest one.');
        return false;
    }else{
        fieldUpdate('dietary',join);
        $('#error').text('');
    }
}
//validation - servings of fruit
if(current ==8){
    var radioCheck = $('input[name="servings_fruit"]').is(':checked');
    var fruitVal = $('input[name="servings_fruit"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose anyone.');
        return false;
     }else{
        fieldUpdate('servings_fruit',fruitVal);
        $('#error').text('');
    }
}
//validation - servings of vegetables
if(current ==9){
    var radioCheck = $('input[name="servings_vegi"]').is(':checked');
    var vegetablesVal = $('input[name="servings_vegi"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose anyone.');
        return false;
     }else{
        fieldUpdate('servings_vegi',vegetablesVal);
        $('#error').text('');
    }
}
//validation - servings of whole
if(current ==10){
    var radioCheck = $('input[name="servings_grain"]').is(':checked');
    var grainVal = $('input[name="servings_grain"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose anyone.');
        return false;
     }else{
        fieldUpdate('servings_grain',grainVal);
        $('#error').text('');
    }
}
//validation - protein powder
if(current ==11){
    var radioCheck = $('input[name="protien_powder"]').is(':checked');
    var proteinVal = $('input[name="protien_powder"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose anyone.');
        return false;
     }else{
        fieldUpdate('protien_powder',proteinVal);
        $('#error').text('');
    }
}
//validation - nutrition goals
if(current ==12){
    var radioCheck = $('input[name="nutrition_goals"]').is(':checked');
    var proVal = [];
    $('input[name="nutrition_goals"]:checked').each(function(){
    proVal.push($(this).val());
    });
    var join = proVal.join(',');
     if(radioCheck ==false){
        $('#error').text('Please choose atlest one.');
        return false;
     }else{
        fieldUpdate('nutrition_goals',join);
        $('#error').text('');
    }
}
//validation - goal weight
if(current ==13){
var weight  = $('input[name="goal_weight"]').val().trim();
    if(weight ==""){
        $('#error').text('Please enter weight.');
        return false;
    }else{
        $('#error').text('');
    }
    if(weight !=""){
        if($.isNumeric(weight) ==false){
        $('#error').text('Please enter weight in numeric.');
        return false;
        }else{
            fieldUpdate('goal_weight',weight);
        }
    }
}
//validation - typically exercise
if(current ==14){
    var radioCheck = $('input[name="exercise_time"]').is(':checked');
    var exerciseVal = $('input[name="exercise_time"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose anyone.');
        return false;
     }else{
        fieldUpdate('exercise_time',exerciseVal);
        $('#error').text('');
    }
}
//validation - exercise or training
if(current ==15){
    var radioCheck = $('input[name="primary_exercise"]').is(':checked');
    var primaryVal = $('input[name="primary_exercise"]:checked').val();
     if(radioCheck ==false){
        $('#error').text('Please choose atlest one.');
        return false;
     }else{
        fieldUpdate('primary_exercise',primaryVal);
        $('#error').text('');
    }
}
//validation - exercise frequency
if(current ==16){
    var frequency = $('#exercise_perweek').val();
    if(frequency ==""){
        $('#error').text('Please select anyone.');
        return false;
    }else{
        fieldUpdate('exercise_perweek',frequency);
        $('#error').text('');
    }
}
//validation - hear about OZ Protien
if(current ==19){
    var hearVal = $('#hear_about').val();
    if(hearVal ==""){
        $('#error').text('Please select anyone.');
        return false;
    }else{
        fieldUpdate('hear_about',hearVal);
        $('#error').text('');
    }
}
//validation - Submit
if(current ==20){
    var perspirationVal = $('input[name="perspiration_level"]').val();
    var exerciseVal = $('input[name="exercise_intensity"]').val();
    var fullName = $('input[name="fname"]').val();
    var email = $('input[name="email"]').val();
    var phno = $('input[name="phno"]').val();
    if(fullName ==""){
        $('#error').text('Please enter full name');
        return false;
    }else if(email ==""){
        $('#error').text('Please enter email id');
        return false;
    }else if(phno ==""){
        $('#error').text('Please enter contact no.');
        return false;
    }else{
        $('#error').text('');
    }
    if(isEmail(email) ==false){
        $('#error').text('Please enter valid email id');
        return false;
    }else{
        $('#error').text('');
    }
    if($.isNumeric(phno) ==false){
        $('#error').text('Please enter valid contact no.');
        return false;
    }else{
        $('#error').text('');
    }

    $.ajax({
        type:'POST',
        data:{'type':'submit','perspiration_level':perspirationVal,'exercise_intensity':exerciseVal,'fname':fullName,'email':email,'phno':phno},
        url: 'ajax.php',
        success:function(res){
            $('#error').text('');
            console.log(res)
        }
    });


}
//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){
current_fs = $(this).parent();
previous_fs = $(this).parent().prev();
$('#error').text('');
//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);

});

function setProgressBar(curStep){

var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
$(".progress-bar").text(percent+"%");
$('.current-count').text(curStep);
if(curStep>=20){
    $(".progress-bar").removeClass('progress-bar-striped');
    // $(".progress-bar").addClass('bg-success');
}else{
    $(".progress-bar").addClass('progress-bar-striped');
    // $(".progress-bar").removeClass('bg-success');
}
    if(curStep<=6){
        $("#progressbar li").eq(0).addClass("active");
        $("#progressbar li").eq(1).removeClass("active");
        $("#progressbar li").eq(2).removeClass("active");
    }else if(curStep>=7 && curStep<=11){
        $("#progressbar li").eq(1).addClass("active");
        $("#progressbar li").eq(2).removeClass("active");
    }else if(curStep>=11 &&  curStep<=13){
        $("#progressbar li").eq(2).addClass("active");
        $("#progressbar li").eq(3).removeClass("active");
    }else if(curStep>=14 &&  curStep<=19){
        $("#progressbar li").eq(3).addClass("active");
        $("#progressbar li").eq(4).removeClass("active");
    }else if(curStep>=21){
        $("#progressbar li").eq(4).addClass("active");
    }
}

});
//field update 
function fieldUpdate(fieldName,fieldValue){
    $.ajax({
        type:'POST',
        data:{'type':'field_update','fieldname':fieldName,'fieldvalue':fieldValue},
        url: 'ajax.php',
        success:function(res){
            console.log(res)
        }
    });
}
//email validation
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
</body>

</html>