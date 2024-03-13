<!DOCTYPE html>
<html>
<head>
    <title>Конвертер валют</title>
</head>
<body>
    <h2>Конвертер валют</h2>
    <form method="post" action="">
        <label for="amount">Введите сумму:</label><br>
        <input type="text" id="amount" name="amount" required><br>

        <label for="currency">Выберите валюту для конвертации:</label><br>
        <select id="currency" name="currency" required>
            <option value="USD">Доллар США</option>
            <option value="EUR">Евро</option>
            <option value="GBP">Фунт стерлингов</option>
        </select><br>

        <input type="submit" name="submit" value="Конвертировать">
    </form>

    <?php
    // Проверяем, были ли отправлены данные из формы
    if(isset($_POST['submit'])) {
        // Получаем введенную сумму и выбранную валюту
        $amount = floatval($_POST['amount']); // Преобразуем введенное значение в число с плавающей запятой
        $currency = $_POST['currency'];

        // Выполняем конвертацию в зависимости от выбранной валюты
        switch($currency) {
            case 'USD':
                $converted_amount = $amount * 0.85; // Курс доллара к евро
                echo "<p>Сумма в евро: €" . number_format($converted_amount, 2) . "</p>";
                break;
            case 'EUR':
                $converted_amount = $amount * 1.18; // Курс евро к доллару
                echo "<p>Сумма в долларах: $" . number_format($converted_amount, 2) . "</p>";
                break;
            case 'GBP':
                $converted_amount = $amount * 1.37; // Курс фунта к доллару
                echo "<p>Сумма в долларах: $" . number_format($converted_amount, 2) . "</p>";
                break;
            default:
                echo "<p>Ошибка: неверная валюта</p>";
        }
    }
    ?>
</body>
</html>
