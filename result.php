<?php 

// # Form Output
$user_paragraph = $_POST["user-paragraph"];
$user_bad_word = $_POST['bad-word'];

// # Original Paragraph Length 
$paragraph_length = strlen($user_paragraph);

// * New Paragraph
$new_paragraph = str_replace('Lorem', "***", $user_paragraph);
$new_paragraph_length = strlen($new_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="my-3">
            <h2>Il paragrafo é:</h2>
            <p class='my-2'>
                <?php echo $user_paragraph ?>
            </p>
        </div>
        <div>
            <h2>
                La lunghezza del paragrafo é di <?php echo $paragraph_length ?> caratteri.
            </h2>
        </div>
        <div class="my-5">
            <h2>
                Il nuovo paragrafo é:
            </h2>
            <p class="my-2">
                <?php echo $new_paragraph ?>
            </p>
            <h2>
                La lunghezza del nuovo paragrafo é di <?php echo $new_paragraph_length ?> caratteri.
            </h2>
        </div>
    </div>
</body>
</html>