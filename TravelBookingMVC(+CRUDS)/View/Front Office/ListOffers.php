<?php
require_once '../../Controller/TravelOfferController.php';

$travelOfferController = new TravelOfferController();

$offers = $travelOfferController->getOffers();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Des Offres de Voyage</title>
    <style>
        :root {
            --bg-color: #f0f0f5;
            --text-color: #333;
            --table-bg: #fff;
            --primary-color: #4CAF50;
            --danger-color: #f44336;
            --hover-color: #f1f1f1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: var(--table-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: var(--primary-color);
            color: white;
            font-size: 16px;
        }

        tr:hover {
            background-color: var(--hover-color);
        }

        .btn {
            padding: 8px 15px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;
            cursor: pointer;
        }

        .btn-update {
            background-color: var(--primary-color);
        }
        .btn-update:hover {
            background-color: #388E3C;
        }

        form {
            display: inline;
        }

        @media (max-width: 600px) {
            th, td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste Des Offres de Voyage</h1>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Destination</th>
                    <th>Date de départ</th>
                    <th>Date de retour</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offers as $offer): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($offer['title']); ?></td>
                        <td><?php echo htmlspecialchars($offer['destination']); ?></td>
                        <td><?php echo htmlspecialchars($offer['departure_date']); ?></td>
                        <td><?php echo htmlspecialchars($offer['return_date']); ?></td>
                        <td><?php echo htmlspecialchars($offer['price']); ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
