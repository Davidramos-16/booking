<?php

function generateSelectOptions() {
    $url = "https://script.google.com/macros/s/AKfycbxRrWQ5UsJOoBmRIwowFRatmBQtOZVHTw6_iglcmvn4SjFNj9Qw_ZGXTU336QcUjSdhxA/exec";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (isset($data['columnState']) && is_array($data['columnState'])) {
        foreach ($data['columnState'] as $state) {
            echo "<option value='$state' >$state</option>";
        }
    } else {
        echo "Invalid or missing 'columnState' data in the JSON.";
    }
}

?>


