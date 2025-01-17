<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une activité</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        main {
            max-width: 500px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        input:focus, select:focus, button:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 3px rgba(0, 123, 255, 0.5);
        }

        button {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ajouter une activité</h1>
    </header>
    <main>
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/ajouter-activite') }}" method="POST">
            @csrf
            <label for="type">Type d'activité :</label>
            <select id="type" name="type" required>
                <option value="transport">Transport</option>
                <option value="alimentation">Alimentation</option>
                <option value="énergie">Énergie</option>
            </select>

            <label for="details">Détails :</label>
            <input type="text" id="details" name="details" placeholder="Ex : 5 km en voiture">

            <label for="quantite_co2">Émissions (kg CO₂) :</label>
            <input type="number" id="quantite_co2" name="quantite_co2" step="0.01" required>

            <label for="date">Date de l'activité :</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Ajouter l'activité</button>
        </form>
    </main>
</body>
</html>
