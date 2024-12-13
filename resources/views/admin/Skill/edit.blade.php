<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Skill</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Global Style untuk Body */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(45deg, #ff6b6b, #f06595, #845ef7, #4dabf7);
            background-size: 300% 300%;
            animation: gradientShift 10s ease infinite;
        }

        /* Style untuk Container */
        .container {
            max-width: 600px;
            width: 100%;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            margin: 20px;
            animation: slideIn 1s ease forwards;
            transform: translateY(50px);
            opacity: 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover efek pada container */
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
            background: linear-gradient(90deg, #ff6b6b, #845ef7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Garis di bawah heading */
        h1::after {
            content: '';
            width: 100px;
            height: 4px;
            background-color: #ff6b6b;
            display: block;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 2px;
            animation: grow 0.8s ease;
        }

        /* Label untuk Input */
        label {
            font-weight: 500;
            color: #555;
            margin-bottom: 10px;
            display: block;
            font-size: 16px;
        }

        /* Style untuk Input dan Textarea */
        input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #f3f3f3;
            transition: all 0.3s ease;
            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        /* Fokus pada input */
        input[type="text"]:focus, textarea:focus {
            border-color: #845ef7;
            outline: none;
            background-color: #fafafa;
            box-shadow: 0 4px 10px rgba(132, 94, 247, 0.2);
        }

        /* Textarea Style */
        textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Style untuk Tombol Wrapper */
        .button-wrapper {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* Style untuk Button */
        button, .btn-primary {
            display: block;
            width: 48%; /* Atur lebar tombol agar pas dalam satu baris */
            padding: 15px;
            background: linear-gradient(90deg, #845ef7, #ff6b6b);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(132, 94, 247, 0.4);
        }

        /* Hover efek untuk Button */
        button:hover, .btn-primary:hover {
            background: linear-gradient(90deg, #ff6b6b, #845ef7);
            box-shadow: 0 6px 20px rgba(132, 94, 247, 0.6);
            transform: translateY(-2px);
        }

        /* Style untuk Label kecil */
        .form-label {
            font-size: 14px;
            color: #777;
        }

        /* Animasi untuk Slide In */
        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
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

        /* Animasi untuk Background Gradient */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            h1 {
                font-size: 24px;
            }

            input[type="text"], textarea {
                padding: 10px;
            }

            button, .btn-primary {
                padding: 12px;
                font-size: 16px;
                width: 100%; /* Ubah lebar tombol pada layar kecil */
                margin-bottom: 10px; /* Tambahkan margin bawah */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Skill</h1>
        <form action="{{ route('skill.update', $skill) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" value="{{ $skill->title }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label> 
                <textarea name="description" required>{{ $skill->description }}</textarea>
            </div>
            <div class="form-group">
    <label for="logo">Logo</label>
    <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
</div>

            <div class="button-wrapper">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('skill.index') }}">Back</a>
            </div>
        </form>
    </div>
</body>
</html>