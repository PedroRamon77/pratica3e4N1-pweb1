<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Blog Simples</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        header, footer {
            background-color: #1f1f1f;
            color: white;
            padding: 25px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            letter-spacing: 1px;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 30px auto;
            gap: 25px;
            padding: 0 20px;
        }

        main, aside {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        main {
            flex: 3;
        }

        aside {
            flex: 1;
        }

        h2, h3 {
            margin-bottom: 15px;
            color: #111;
        }

        p {
            margin-bottom: 15px;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            background: #ececec;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 6px;
            transition: background 0.3s;
        }

        ul li:hover {
            background: #dcdcdc;
        }

        a {
            color: #007acc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 40px;
        }
    </style>
</head>
<body>
<header>
    <h1>Meu Blog</h1>
</header>
<div class="container">
