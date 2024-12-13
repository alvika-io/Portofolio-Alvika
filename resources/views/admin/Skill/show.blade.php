<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Skill</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Global Style untuk Body */
        body {
            font-family: 'Roboto', sans-serif;
            background: radial-gradient(circle, rgba(0,123,255,1) 0%, rgba(98,0,234,1) 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
        }

        /* Style untuk Container */
        .container {
            max-width: 600px;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.85);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            text-align: center;
            transform: translateY(50px);
            opacity: 0;
            animation: fadeIn 1s ease forwards, slideUp 0.8s ease forwards;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover efek pada Container */
        .container:hover {
            transform: translateY(0);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        /* Style untuk Heading */
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(98,0,234,1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Garis di bawah heading */
        h1::after {
            content: '';
            width: 100px;
            height: 4px;
            background-color: rgba(0,123,255,1);
            display: block;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 2px;
            animation: grow 0.8s ease;
        }

        /* Style untuk Paragraf */
        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        /* Style untuk Bold Text */
        p strong {
            color: #007bff;
            font-weight: 700;
        }

        /* Style untuk Tombol */
        .btn-primary {
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            background: linear-gradient(45deg, rgba(0,123,255,1), rgba(98,0,234,1));
            border: none;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
        }

        /* Hover efek untuk Tombol */
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.6);
        }

        /* Style untuk Gambar */
        .icon {
            width: 120px; /* Atur lebar sesuai kebutuhan */
            height: auto;
            border-radius: 50%;
            border: 5px solid rgba(98,0,234,1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        /* Hover efek untuk Gambar */
        .icon:hover {
            transform: scale(1.05);
        }

        /* Animasi Slide Up */
        @keyframes slideUp {
            to {
                transform: translateY(0);
            }
        }

        /* Animasi Fade In */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Animasi untuk Garis Heading */
        @keyframes grow {
            from {
                width: 0;
            }
            to {
                width: 100px;
            }
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 600px) {
            .container {
                padding: 30px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 16px;
            }

            .btn-primary {
                padding: 12px 25px;
                font-size: 16px;
            }

            .icon {
                width: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('asset-landing-page/img/garuda.jpeg') }}" alt="Icon" class="icon">
        <h1>Data Skill</h1>
        <p><strong>Title:</strong> {{ $skill->title }}</p>
        <p><strong>Description:</strong> {{ $skill->description }}</p>
        <a class="btn-primary" href="{{ route('skill.index') }}">Back</a>
    </div>
</body>
</html>
