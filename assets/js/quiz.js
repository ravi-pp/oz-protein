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
if(checkConnection()===false){
    alert('Please check your network connection!');
    return false;
}
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
var priVal = [];
$('input[name="primary_exercise"]:checked').each(function(){
    priVal.push($(this).val());
    });
    var join = priVal.join(',');
 if(radioCheck ==false){
    $('#error').text('Please choose atlest one.');
    return false;
 }else if($('input[name="primary_exercise"]:checked').length >2){
    $('#error').text('Please do not choose more than two option.');
    return false;
 }else{
    fieldUpdate('primary_exercise',join);
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
if(checkConnection()===false){
    alert('Please check your network connection!');
    return false;
}
$.ajax({
    type:'POST',
    data:{'type':'submit','perspiration_level':perspirationVal,'exercise_intensity':exerciseVal,'fname':fullName,'email':email,'phno':phno},
    url: 'ajax.php',
    success:function(res){
        $('#error').text('');
        //console.log(res)
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
    if(checkConnection()===false){
        alert('Please check your network connection!');
        return false;
    }
$.ajax({
    type:'POST',
    data:{'type':'field_update','fieldname':fieldName,'fieldvalue':fieldValue},
    url: 'ajax.php',
    success:function(res){
        //console.log(res)
    }
});
}
//email validation
function isEmail(email) {
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email);
}
//check network connection
function checkConnection(){
    return (navigator.onLine);
}