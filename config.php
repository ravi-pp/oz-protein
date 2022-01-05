<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('quizUrl','http://localhost/gym-project/');
define('mainUrl','https://www.gainful.com/');

//fieldset variables
$gender_arr = array(
    'm' =>'Male',
    'f' =>'Female',
    'o' => 'Non-Binary'
);
$age_arr = array(
    '18-23' =>'18-23',
    '24-34' =>'24-34',
    '35-49' => '35-49',
    '50' => '50 or Above'
);
$pro_interested = array(
    'Personalized Protein Powder' =>'Personalized Protein Powder',
    'Personalized Hydration' =>'Personalized Hydration',
    'Personalized Pre-Workout' => 'Personalized Pre-Workout',
    'Creatine Performance Boost' => 'Creatine Performance Boost',
    'Collagen Performance Boost' => 'Collagen Performance Boost',
    'Fiber Performance Boost' => 'Fiber Performance Boost',
    'All of the above' => 'All of the above'
);
$sleep_avg = array(
    '4' => '4 or less',
    '5' => '5',
    '6' => '6',
    '7' => '7',
    '8' => '8',
    '9' => '9',
    '10' => '10 or more'
);
$eating_pattern = array(
    '3 meals' => '3 meals + a few snacks per day',
    '4 meals' => '4 or more meals per day',
    'snack' => 'Snacking throughout the day',
    'eat' => 'I eat when I think of it / whenever I\'m hungry',
    'fasting' => 'Periods of fasting between meals'
);
$servings_fruit = array(
    '0' => '0 servings',
    '1-2' => '1-2 servings',
    '3-4' => '3-4 servings',
    '5' => '5+ servings',
);
$servings_vegi = array(
    '0' => '0 servings',
    '1-2' => '1-2 servings',
    '3-4' => '3-4 servings',
    '5' => '5+ servings',
);
$servings_grain = array(
    '0' => '0 servings',
    '1-2' => '1-2 servings',
    '3-4' => '3-4 servings',
    '5' => '5+ servings',
);
$protien_powder = array(
    '1-3' => '1-3 times per week',
    '4-6' => '4-6 times per week',
    '7' => 'Every Day'
);
$exercise_time = array(
    'Early Morning' => 'Early Morning',
    'Late Morning' => 'Late Morning',
    'Midday' => 'Midday',
    'Early Afternoon' => 'Early Afternoon',
    'Late Afternoon' => 'Late Afternoon',
    'Evening' => 'Evening',
);
$exercise_perweek = array(
    '1' => '1 or less',
    '2' => '2 - 3',
    '4' => '4 - 5',
    '6' => '6 - 7',
    '8' => '8 or more'
);
$hear_about = array(
    'news' => 'News Article',
    'instagram' => 'Instagram',
    'tv' => 'TV',
    'mailer' => 'Mailer',
    'friend' => 'From a friend',
    'other' => 'Other',
    'google' => 'Google',
    'podcast' => 'Podcast',
    'youtube' => 'YouTube',
    'snapchat' => 'Snapchat',
    'facebook' => 'Facebook',
    'blog' => 'A Blog',
    'review-site' => 'Review Site',
    'tiktok' => 'TikTok',
);
$dietary = array(
    'Gluten-free' => 'Gluten-free',
    'Lactose-free' => 'Lactose-free',
    'Soy-free' => 'Soy-free',
    'Whey-free' => 'Whey-free',
    'Vegan-plant-based' => 'Vegan / plant-based',
    'Paleo-diet' => 'Paleo diet',
    'Ketogenic-diet' => 'Ketogenic diet',
    'Caffeine-free' => 'Caffeine-free',
    'None' => 'None'
);
$nutrition_goals = array(
    'Gain-weight' => 'Gain weight',
    'Increase calorie intake' => 'Increase calorie intake',
    'Maintain muscle' => 'Maintain muscle',
    'Recover after workouts' => 'Recover after workouts',
    'Sports-fitness performance' => 'Sports/fitness performance',
    'Supplement diet' => 'Supplement diet'
);
$primary_exercise = array(
    'Resistance or weight training' => 'Resistance or weight training',
    'Running' => 'Running',
    'Cycling' => 'Cycling',
    'Yoga or pilates' => 'Yoga or pilates',
    'Dance or aerobics' => 'Dance or aerobics',
    'Swimming' => 'Swimming',
    'Team sports' => 'Team sports',
    'Individual sports' => 'Individual sports',
    'Active lifestyle' => 'Active lifestyle',
    'Other' => 'Other'
);

?>