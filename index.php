<?php
class Movie{
    public $title;
    public $year;
    public $durata;
    public $genere;
    public $voto;

    function __construct($_title, $_year, $_durata, $_genere){
        $this->title = $_title;
        $this->year = $_year;
        $this->durata = $_durata;
        $this->genere = $_genere;
    }

    public function GetAverage($num){

        $starsTotal = 5;

        $starPercentage = ($num / $starsTotal) * 100;

        $starPercentageRounded = round($starPercentage / 10) * 10 .'%';

        $stringa = "width='$starPercentageRounded'";

        $this->voto = $stringa;
    }
}


$hunger_games = new Movie('Hunger Games', 2012, '142 min', 'avventura, azione, drammatico, fantascienza, thriller');
$hunger_games-> GetAverage(5);

$fast_and_furious = new Movie('Fast and Furious', 2001, '103 min', 'azione, drammatico, poliziesco, sportivo');
$fast_and_furious-> GetAverage(3);

$array_mobies = [
    $hunger_games,
    $fast_and_furious
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container row m-auto">
        
        <?php foreach ($array_mobies as $elem) : ?>
        <div class="col-4 mt-4">
            <div class="card">
              <img src="" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $elem->title ?></h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Anno di produzione: <?php echo $elem->year ?></li>
                <li class="list-group-item">Durata: <?php echo $elem->durata ?></li>
                <li class="list-group-item">Genere: <?php echo $elem->genere ?></li>
              </ul>
              <div class="stars-outer">
                <div class="stars-inner" ></div>
            </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>