<?php

    /*
    // check for posted data
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data found </br>';
    } else {
        echo 'No Data </br>';
    }

    if (filter_has_var(INPUT_POST, 'data')) {

        $email = $_POST['data'];

        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }

    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL


    $var = 23;

    if (filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var.' is a number';
    } else {
        echo $var. ' is not a number';
    }


//    $var = '123HLKJ1232';
//    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    $var = '<script>alert(1)</script>';
//    echo $var;
    echo filter_var($var, FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    $filters = array(
            "data" => FILTER_VALIDATE_EMAIL,
            "data2" => array(
                    "filter" => FILTER_VALIDATE_INT,
                    "options" => array(
                            "min_range" => 1,
                            "max_range" => 100
                    )
            ),
            "data3" => FILTER_VALIDATE_URL
    );

    print_r(filter_input_array(INPUT_POST, $filters));

*/

    $arr = array(
            "name" => "thando mini",
            "age" => 34,
            "email" => "thando@minitech.com"
    );

    $filters = array(
            "name" => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords"
            ),
            "age" => array(
                    "filter" => FILTER_VALIDATE_INT,
                    "options" => array(
                            "min_range" => 1,
                            "max_age" => 120
                    )
            ),
            "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <input type="text" name="data3">
    <button type="submit">Submit</button>
</form>

