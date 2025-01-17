<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007BFF;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            box-sizing: border-box;
        }

        .card h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            margin: 5px 0;
            font-size: 0.9rem;
            color: #555;
        }

        .card strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Liste des Conseils</h1>
    <div class="cards">
        @foreach($conseil as $cl)
            <div class="card">
                <h2>Catégorie : {{ $cl->categorie }}</h2>
                <p><strong>Conseil :</strong> {{ $cl->conseil }}</p>
                <p><strong>Carbone économisé :</strong> {{ $cl->carbone_saved }} kg CO₂</p>
            </div>
        @endforeach
    </div>
</body>
</html>
