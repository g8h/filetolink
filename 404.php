<html>

<head>
    <title>404</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php echo "<link rel=\"stylesheet\" href=\"src/css/main.css\" />\n";?>

    <style>
        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
            margin-top: 50%;
            margin-bottom: 50%;
        }

        h1 {
            color: #555;
            font-size: 2em;
            font-weight: 400;
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (max-width: 280px) {

            body,
            p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }

        }
    </style>
</head>

<body center>
    <br/>
    <h1>Page Not Found</h1>
    <p>Sorry, but the page you were trying to view does not exist.</p><br/>
    <a href="index.php"><button class="dd-btn hover"> Home</button></a>