<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            position: relative;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 28px;
        }
        p {
            color: #444;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.5;
        }
        .btn-primary {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .icon {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }
        .info-block {
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .info-label {
            font-weight: 500;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('asset-landing-page/img/rubah.png') }}" alt="Icon" class="icon">
        <h1>Data Contact</h1>
        
        <div class="info-block">
            <p><span class="info-label">Name:</span> {{ $contact->name }}</p>
        </div>
        <div class="info-block">
            <p><span class="info-label">Email:</span> {{ $contact->email }}</p>
        </div>
        <div class="info-block">
            <p><span class="info-label">Phone:</span> {{ $contact->phone }}</p>
        </div>
        <div class="info-block">
            <p><span class="info-label">Social Media:</span> {{ $contact->socialmedia }}</p>
        </div>
        
        <a class="btn-primary" href="{{ route('contact.index') }}">Back</a>
    </div>
</body>
</html>
