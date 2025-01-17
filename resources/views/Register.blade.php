<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
        }
        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .login-link {
            display: block;
            text-align: right;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .login-link a {
            color: #007BFF;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-link">
            <a href="/Login">Login</a>
        </div>
        <h1>Register</h1>
        <form method="post" action="/Register">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="nom" id="name" required>
            </div>
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
