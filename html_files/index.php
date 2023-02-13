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
                <h1>Form Handlig with PHP & HTML</h1>

                <p>
                    <?php if (isset($_GET['fName']) && !empty($_GET['fName'])) { ?>
                        First Name : <?php echo $_GET['fName']; ?>
                    <?php } ?>

                    <br />

                    <?php if (isset($_GET['lName']) && !empty($_GET['lName'])) { ?>
                        Last Name : <?php echo $_GET['lName']; ?>
                    <?php } ?>


                </p>
            </div>

        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="">
                    <label for="fName">First Name</label>
                    <input type="text" name="fName" id="fName" />
                    <label for="lName">Last Name</label>
                    <input type="text" name="lName" id="lName" />
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>