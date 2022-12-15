<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $arrFaq = [
        $firstPart = [
            'question' => 'Come stai?',
        ],

        $answer1 = [
            'paragraph1' => 'Tutto bene, grazie.',
            'paragraph2' => 'Te come stai?',
        ],

        $secondPart = [
            'question' => 'Nevica?',
        ],
    
        $answer2 = [
            'paragraph1' => 'No, piove.',
        ],
    ];
    ?>

    <div class="container">
    <?php
        foreach ($firstPart as $value) {
                echo " $value" . '<br>';     
            foreach ($answer1 as $value) {
                echo " $value" . '<br>';                
            }
        }
    ?>
    </div>
</body>
</html>