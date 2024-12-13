<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            font-weight: 500;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-label {
            font-size: 14px;
            color: #555;
        }

        /* Small screen adjustments */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            input[type="text"], textarea {
                padding: 8px;
            }

            button {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Contact</h1>
        <form action="{{ route('contact.update', $contact) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{ $contact->name }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label> 
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{ $contact->email }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Link</label> 
                <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" value="{{ $contact->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date</label> 
                <input type="text" class="form-control" name="socialmedia" aria-describedby="emailHelp" value="{{ $contact->socialmedia }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</body>
</html>