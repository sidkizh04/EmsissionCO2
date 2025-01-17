<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi CO₂ - Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            margin: 10px 0;
            font-size: 1.2rem;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        section p {
            margin: 5px 0;
        }

        section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        section ul li {
            background: #f9f9f9;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        section ul a {
            color: #007BFF;
            text-decoration: none;
        }

        section ul a:hover {
            text-decoration: underline;
        }

        strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <!-- En-tête -->
    <header>
        <h1>Bienvenue sur Suivi CO₂</h1>
        <p>Suivez et réduisez votre empreinte carbone.</p>
        <nav>
            <a href="/ajouter-activite">Ajouter une activité</a> 
        </nav>
    </header>

    <!-- Contenu principal -->
    <main>
    <!-- Section Activités récentes -->
    <section>
        <h2>Activités récentes</h2>
        @if($Act->isEmpty())
            <p>Aucune activité enregistrée pour le moment.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Type d'activité</th>
                        <th>Détails</th>
                        <th>Émissions (kg CO₂)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Act as $activ)
                    <tr>
                        <td>{{ $activ->type }}</td>
                        <td>{{ $activ->details }}</td>
                        <td>{{ $activ->quantite_co2 }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>

    <!-- Section Conseils -->
    <section>
        <h2>Conseils pour réduire votre empreinte carbone</h2>
        <ul>
            <li><a href="/Conseil">Voir les conseils</a></li>
        </ul>
    </section>
</main>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 1rem;
        text-align: left;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
    }

    table thead {
        background-color: #007BFF;
        color: white;
    }

    table th, table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #f1f1f1;
    }

    table th {
        text-transform: uppercase;
    }
</style>

</body>
</html>
