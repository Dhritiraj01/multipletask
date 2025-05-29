<!DOCTYPE html>
<html>
<head>
    <title>PHP Tasks Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .landing {
            text-align: center;
            padding: 60px 20px;
        }

        .landing h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }

        .landing ul {
            list-style: none;
            padding: 0;
            margin: 0 auto;
            max-width: 400px;
        }

        .landing li {
            margin: 15px 0;
        }

        .landing a {
            display: block;
            padding: 12px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .landing a:hover {
            background-color: #45a049;
        }

        @media (max-width: 500px) {
            .landing h1 {
                font-size: 2rem;
            }

            .landing a {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <div class="container landing">
        <h1><marquee>PHP Tasks (dhritiraj barman)</marquee></h1>
        <ul>
            <li><a href='task1_form.php'>Task 1: Form Handling & Validation</a></li>
            <li><a href='task2_upload.php'>Task 2: File Upload</a></li>
            <li><a href='task3_pagination.php'>Task 3: Pagination</a></li>
            <li><a href='task4_login.php'>Task 4: Role-Based Access Control(admin)</a></li>
            <li><a href='task5_api_users.php'>Task 5: JSON API</a></li>
            <li><a href='task6_login.php'>Task 6: user login</a></li>
        </ul>
    </div>
</body>
</html>
