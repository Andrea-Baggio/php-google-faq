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
       [
        'question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer' => [
            'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',
            'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.',
        ],
       ],
       [
        'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'answer' => [
            'Buonasera',
            'Buongiorno',
        ],
       ],
       [
        'question' => 'Perché il mio account è associato a un paese?',
        'answer' => [],
       ],
    ];
    ?>

    <div class="container">
    <?php
        foreach ($arrFaq as $value) {
            echo "<h2>" . $value['question'] . "</h2>";
            foreach ($value['answer'] as $val) {
            // echo "<p>" . $val['answer'] . "</p>";
            }
        }
    ?>
    </div>
</body>
</html>