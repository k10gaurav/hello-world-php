<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sample Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to PHP Sample Page</h1>
    </header>

    <section>
        <p>This is a simple PHP web page to demonstrate dynamic content.</p>

        <?php
        // PHP code for dynamic content
        $currentDate = date("Y-m-d");
        $currentTime = date("H:i:s");
        $greeting = "Hello, Guest!";
        
        // Check if a name is provided in the URL
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']);
            $greeting = "Hello, $name!";
        }
        ?>

        <p><?php echo $greeting; ?> Today is <?php echo $currentDate; ?> and the current time is <?php echo $currentTime; ?>.</p>

        <form method="get" action="">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name">
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> PHP Sample Page</p>
    </footer>

</body>
</html>
