<?php
function generateRandomUser($letter) {
    $adjectives = ["efficacious", "economic", "enormous", "horrible", "torpid", "selective", "handsomely", "flaky", "thoughtless", "unaccountable", "fascinated", "materialistic"];
    $nouns = ["Cat", "Dog", "Bird", "Star", "Tree"];
    $randomAdjective = $adjectives[array_rand($adjectives)];
    $randomNoun = $nouns[array_rand($nouns)];

    return $letter . $randomAdjective . $randomNoun;
}

if (isset($_GET['letter'])) {
    $letter = strtoupper($_GET['letter']);
    if (ctype_alpha($letter) && strlen($letter) == 1) {
        $username = generateRandomUser($letter);
        echo "Random username starting with '$letter': $username";
    } else {
        echo "Please only enter one letter.";
    }
} else {
    echo "Please use a letter, e.g A";
}
?>
