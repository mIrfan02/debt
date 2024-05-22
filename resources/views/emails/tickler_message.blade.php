<!DOCTYPE html>
<html>
<head>
    <title>New Message Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .message {
            background-color: #e3e3e3;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Message Notification</h1>
        <p>Hello, {{ $userName }}</p>

        <div class="message">
            <p>You have a new message:</p>
            <p>{{ $messages }}</p>
        </div>

        <p>Thank you for using our service.</p>
    </div>
</body>
</html>
