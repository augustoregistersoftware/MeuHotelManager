<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Financeiro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
        }
        .dashboard {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
        }
        .card h3 {
            margin-bottom: 15px;
            color: #fff;
        }
        .card p {
            font-size: 24px;
            color: #27ae60;
        }
        .credit-card {
            background: linear-gradient(135deg, #1E5799 0%, #2989D8 50%, #207cca 100%);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 200px;
            position: relative;
        }
        .credit-card .card-logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
        }
        .credit-card .card-chip {
            position: absolute;
            top: 60px;
            left: 20px;
            width: 40px;
            height: 30px;
            background: #f2c94c;
            border-radius: 5px;
        }
        .credit-card .card-details {
            position: absolute;
            bottom: 20px;
            left: 20px;
        }
        .credit-card .card-details .card-number {
            font-size: 18px;
            letter-spacing: 2px;
        }
        .credit-card .card-details .card-holder {
            font-size: 14px;
            margin-top: 5px;
        }
        .credit-card .card-details .expiration-date {
            font-size: 14px;
            margin-top: 5px;
        }
        .credit-card .mastercard-logo {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Dashboard Financeiro</h1>
    <div class="dashboard">
        <div class="card">
            <h3>Lucro Financeiro</h3>
            <p>15%</p>
        </div>
        <div class="card">
            <h3>Lucro Financeiro</h3>
            <p>20%</p>
        </div>
        <div class="card">
            <h3>Lucro Financeiro</h3>
            <p>25%</p>
        </div>
        <div class="card credit-card">
            <div class="card-logo">PayPal</div>
            <div class="card-chip"></div>
            <div class="card-details">
                <div class="card-number">**** **** **** 1234</div>
                <div class="card-holder">Meu Hotel</div>
                <div class="expiration-date">12/26</div>
            </div>
            <img class="mastercard-logo" src="https://via.placeholder.com/50x30" alt="Mastercard Logo">
        </div>
    </div>
</body>
</html>
