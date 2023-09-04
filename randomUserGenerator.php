<?php
function generateRandomUser($letter) {
    $adjectives = ["efficacious", "economic", "enormous", "horrible", "torpid", "selective", "handsomely", "flaky", "thoughtless", "unaccountable", "fascinated", "materialistic"];
    $nouns = ["Cat", "Dog", "Bird", "Star", "Tree"];
    $randomAdjective = $adjectives[array_rand($adjectives)];
    $randomNoun = $nouns[array_rand($nouns)];

    return $letter . $randomAdjective . $randomNoun;
}
