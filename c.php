<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор відсотків</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="number"] {
            padding: 8px;
            width: 200px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Калькулятор відсотків</h2>
    
    <form method="post">
        <div class="form-group">
            <label for="number">Введіть число:</label><br>
            <input type="number" name="number" id="number" step="any" required>
        </div>
        <button type="submit">Розрахувати</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['number'])) {
            $number = floatval($_POST['number']);
            
            // Розрахунок 5 відсотків
            $five_percent = $number * 0.05;
            
            // Розрахунок 1 відсотка
            $one_percent = $number * 0.01;
            
            echo '<div class="result">';
            echo '<h3>Результати розрахунку:</h3>';
            echo '<p>5% від числа ' . number_format($number, 2) . ' = ' . number_format($five_percent, 2) . '</p>';
            echo '<p>1% від числа ' . number_format($number, 2) . ' = ' . number_format($one_percent, 2) . '</p>';
            echo '</div>';
        }
    }
    ?>
</body>
</html> 