<!-- Instructions: Choose from a set of fighters 2 opponents 
                condition: a fighter is never chosen against himself -->

<!-- question: isset checks for null a value, why doesn't it have an effect if i remove empty? -->
<!-- if order doesn't matter and i can call anything anywhere i want, if i move $list_of_fighters from line 8 to the end of the page, why do i get fatal error on array_push on line 14 -->
<?php
$full_name = $_POST['full_name'];  
$list_of_fighters = ['Marc.K', 'Joe', 'Ely', 'Sylvio', 'Peter', 'Elie', 'Joseph', 'Jason', 'Fady', 'Charbel', 'Fadel'];

if (!isset($_POST['full_name']) || empty($_POST['full_name'])){
    echo 'Enter your name to join next time.';
    die;} 
    else{
        array_push($list_of_fighters, $full_name);
    }

// print_r($list_of_fighters);

$number_of_matches = 0;

while ($number_of_matches < 10){
    $number_of_matches+=1;

    $fighter_1_index = array_rand($list_of_fighters);
    $fighter_2_index = array_rand($list_of_fighters);

    if ($fighter_1_index === $fighter_2_index){
        $number_of_matches -=1;
        continue;
    }
    echo $list_of_fighters[$fighter_1_index] . ' vs ' . $list_of_fighters[$fighter_2_index] . "<br/>";
}
?>