<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe Pricing Plans</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0e0e0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .header-container {
            background-color: white;
            padding: 50px 30px;
            margin-bottom: 40px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .header-container h3 {
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .header-container p {
            font-size: 16px;
            color: #7a7a7a;
        }

        .pricing-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .card {
            width: 220px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            background: #f9f9f9;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #ffd54f;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            padding: 12px 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom: 1px solid #ddd;
        }

        .card-professional {
            border-top: 5px solid #66bb6a;
        }

        .price {
            font-size: 32px;
            margin: 20px 0;
            color: #333;
        }

        .price span {
            font-size: 14px;
            color: #7a7a7a;
        }

        .popular-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #66bb6a;
            color: #fff;
            padding: 5px 20px;
            font-size: 12px;
            border-radius: 15px;
        }

        .btn-upgrade {
            background-color: #ffd54f;
            color: #333;
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 12px;
            font-weight: bold;
            transition: transform 0.2s, background-color 0.2s;
            margin-top: 15px;
        }

        .btn-upgrade:hover {
            background-color: #ffca28;
            transform: scale(1.05);
        }

        .list-unstyled li {
            font-size: 14px;
            padding: 5px 0;
            color: #4d4d4d;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <!-- Header Section with White Box -->
        <div class="header-container">
            <h3>Select a Plan</h3>
            <p>Affordable plans for any situation
                Choose a Premium plan and listen to ad-free music without limits on your phone, speaker, and other devices. Pay in various ways. Cancel anytime.</p>
        </div>

        <div class="pricing-container">
            <!-- Individual Plan -->
            <div class="card">
                <div class="card-header">INDIVIDUAL</div>
                <div class="card-body">
                    <h3 class="price">$50<span>/MO</span></h3>
                    <ul class="list-unstyled">
                        <li>1 Premium account</li>
                        <li>Discount for new user or first timer</li>
                        
                        <li>Cancel anytime</li>
                        <li>Subscribe or one-time payment</li>
                        
                        
                    </ul>
                   
                    <button class="btn btn-upgrade">Upgrade</button>
                </div>
            </div>

            <!-- Student Plan with Popular Badge -->
            <div class="card card-professional">
                <span class="popular-badge">POPULAR</span>
                <div class="card-header">STUDENT</div>
                <div class="card-body">
                    <h3 class="price">$100<span>/MO</span></h3>
                    <ul class="list-unstyled">
                        <li>1 verified Premium account</li>
                        <li>Discount for eligible students</li>
                        <li>Cancel anytime</li>
                        <li>Subscribe or one-time payment</li>
                        
                    </ul>
                    <button class="btn btn-upgrade">Upgrade</button>
                </div>
            </div>

            <!-- Family Plan -->
            <div class="card">
                <div class="card-header">FAMILY</div>
                <div class="card-body">
                    <h3 class="price">$225<span>/MO</span></h3>
                    <ul class="list-unstyled">
                        <li>Up to 6 Premium accounts</li>
                        <li>Discount for new user or first timer</li>
                        <li>Control content marked as explicit</li>
                        <li>Cancel anytime</li>
                       
                        
                        
                    </ul>
                    <button class="btn btn-upgrade">Upgrade</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
