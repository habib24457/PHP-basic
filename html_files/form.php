<?php
include_once "./form_functions.php";
$fruits = ["mango", "apple", "banana"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTML</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Form Handlig and Validation, Centization</h1>

                <?php
                $fName = '';
                $lName = '';
                ?>

                <p>
                    <?php if (isset($_REQUEST['fName']) && !empty($_REQUEST['fName'])) {
                        $fName = htmlspecialchars($_REQUEST['fName']);
                    } ?>

                    <?php if (isset($_REQUEST['lName']) && !empty($_REQUEST['lName'])) {
                        $lName = htmlspecialchars($_REQUEST['lName']);
                    } ?>

                </p>

                <p>
                    <span>Selected fruit name</span>
                    <br />
                    <?php
                    if (isset($_POST['fruits']) && $_POST['fruits'] != '') {
                        printf("You have selected: %s", filter_input(INPUT_POST, 'fruits'));
                    }
                    ?>
                </p>
            </div>

        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="">
                    <label for="fName">First Name</label>
                    <input type="text" name="fName" id="fName" value="<?php echo $fName ?>" />
                    <label for="lName">Last Name</label>
                    <input type="text" name="lName" id="lName" value="<?php echo $fName ?>" />
                    <label for="fruits">Select from the field</label>
                    <select name="fruits" id="fruits">
                        <option value="">Select fruit..</option>
                        <?php displayOptions($fruits) ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>