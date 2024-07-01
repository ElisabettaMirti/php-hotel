<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

$hotelsCopy = $hotels;

if (isset($_GET["parking"])){
    $parking = $_GET["parking"];

    if ($parking == 1){
        $newArray = [];

        foreach ($hotelsCopy as $hotel) {
            if ($hotel["parking"] === true){
                $newArray[] = $hotel;
            }
        }

        $hotelsCopy = $newArray;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <header class="container-fluid p-4">
        <h1 class="text-center">
            PHP Hotel
        </h1>
    </header>
    <main class="container p-3">
        <section class="searchbar row">
            <div class="col-8">
                <form action="./hotel_list.php" method="GET">
                    <div class="options mb-3">
                        <label for="parking">Parking required?</label>
                        <select name="parking" id="parking">
                            <option value="0" selected>No</option>
                            <option value="1">Yes, please</option>
                        </select>
                        <button type="submit">Filter</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="hotels row">
            <table class="table table-striped table-hover col-8 mt-2">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Parking
                        </th>
                        <th>
                            Vote
                        </th>
                        <th>
                            Distance to city center
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotelsCopy as $hotel) { ?>
                        <tr>
                            <?php foreach ($hotel as $value) { ?>
                                <td>
                                    <?php echo "$value" ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>


<!-- <ul> <?php foreach ($hotels as $hotel) { ?>
            <li>
                <?php foreach ($hotel as $key => $value) { 
                    echo "$key : $value"; 
                    echo "<br>";
                    } ?>
            </li>
        <?php } ?></ul>  -->
