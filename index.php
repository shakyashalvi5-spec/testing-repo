<?php
date_default_timezone_set("Asia/Kolkata");

$server = gethostname();
$ip = $_SERVER['SERVER_ADDR'];
$time = date("d M Y, h:i:s A");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CI/CD Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e5e7eb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #020617;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(59,130,246,0.4);
            text-align: center;
        }
        h1 {
            color: #38bdf8;
        }
        .success {
            color: #22c55e;
            font-weight: bold;
            margin: 15px 0;
        }
        .info {
            margin-top: 10px;
            font-size: 14px;
            color: #94a3b8;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 CI/CD Pipeline Active</h1>
    <div class="success">Deployment Successful</div>

    <div class="info">
        <p><strong>Server:</strong> <?= $server ?></p>
        <p><strong>IP:</strong> <?= $ip ?></p>
        <p><strong>Last Deploy:</strong> <?= $time ?></p>
    </div>
</div>

</body>
</html>

