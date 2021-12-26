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
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">OZ Protein Quiz</h2>
                    <p>Best product waiting for you!</p>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="basic"><strong>gitBasic</strong></li>
                            <li id="diet"><strong>Diet</strong></li>
                            <li id="goals"><strong>Goals</strong></li>
                            <!-- <li id="exercise"><strong>Exercise</strong></li> -->
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
                                        <input type="radio" name="gender" value="m" checked="checked"/>
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
                                        <input type="radio" name="age" value="24-34" />
                                        <div class="text-center">24-34</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="radio" name="age" value="24-34" />
                                        <div class="text-center">24-34</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
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
                                <div class="col-md-4 ">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="Personalized Protein Powder"/>
                                        <div class="text-center">Personalized Protein Powder</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="Personalized Hydration" />
                                        <div class="text-center">Personalized Hydration</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="Personalized Pre-Workout" />
                                        <div class="text-center">Personalized Pre-Workout</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="Creatine Performance Boost" />
                                        <div class="text-center">Creatine Performance Boost</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="Collagen Performance Boost" />
                                        <div class="text-center">Collagen Performance Boost</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="Fiber Performance Boost" />
                                        <div class="text-center">Fiber Performance Boost</div>
                                    </label>
                                    </div>
                                    <div class="col-md-4">
                                    <label class="labl">
                                        <input type="checkbox" name="pro_interested[]" value="All of the above" />
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
                                     <select name="sleep" id="" class="form-control">
                                     <option value="" disabled="" selected="">Select one</option>
                                            <option value="4">4 or less </option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7" selected="">7</option>
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
                                        <input type="checkbox" name="eating_pattern" value="4" />
                                        <div class="text-center">4 or more meals per day</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="eating_pattern" value="snack" />
                                        <div class="text-center">Snacking throughout the day</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="eating_pattern" value="eat" />
                                        <div class="text-center">I eat when I think of it / whenever I'm hungry</div>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="labl">
                                        <input type="checkbox" name="eating_pattern" value="fasting" />
                                        <div class="text-center">Periods of fasting between meals</div>
                                    </label>
                                    </div>
                               </div>
                            </div> <!-- end form card -->
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <!-- end 6 fieldset -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname"
                                    placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input
                                    type="text" name="lname" placeholder="Last Name" /> <label
                                    class="fieldlabels">Contact No.: *</label> <input type="text" name="phno"
                                    placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.:
                                    *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file"
                                    name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature
                                    Photo:</label> <input type="file" name="pic" accept="image/*">
                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='<?php constant('quizUrl'); ?>assets/js/bootstrap.bundle.min.js'></script>
    
    <script type='text/Javascript'>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;
$('.total-field').text(steps)

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();
console.log(next_fs)
//Add Class Active
// $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

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
console.log(current_fs)
//Remove class active
// $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

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
     console.log(curStep)
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
$('.current-count').text(curStep);
if(curStep<=6){
    $("#progressbar li").eq(0).addClass("active");
    $("#progressbar li").eq(1).removeClass("active");
    $("#progressbar li").eq(2).removeClass("active");
}else if(curStep>=7 && curStep<8){
    $("#progressbar li").eq(1).addClass("active");
}else if(curStep>=9){
    $("#progressbar li").eq(2).addClass("active");
}
}

$(".submit").click(function(){
return false;
})

});</script>
</body>

</html>