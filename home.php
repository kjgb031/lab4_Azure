<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 30px;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: palevioletred;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .welcome {
            color: black;
            padding: 40px;
            background: pink;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>This is a sample webpage</h1>
        
        <?php
        // Simple PHP code
        $visitorName = "Guest";
        if (isset($_GET['name'])) {
            $visitorName = htmlspecialchars($_GET['name']);
        }
        
        $currentTime = date("H:i:s");
        $visitorCount = rand(50, 200); // Simulating a visitor count
        ?>
        
        <div class="welcome">
            <p>Hello, <?php echo $visitorName; ?>!</p>
            <p>The current time is <?php echo $currentTime; ?></p>
            <p>Visitor count today: <?php echo $visitorCount; ?></p>
        </div>
        
        <h2>About This Page</h2>
        <p>This is a simple PHP webpage demonstrating basic PHP functionality.</p>
        
        <h2>Try It Out</h2>
        <form method="GET" action="">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>