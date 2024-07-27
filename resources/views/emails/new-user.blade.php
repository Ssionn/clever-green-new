<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Clever Green</title>
    <style>
        body {
            background-color: #f7fafc;
            padding: 24px;
            font-family: Arial, sans-serif;
        }
        .email-container {
            background-color: #ffffff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .email-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 16px;
            color: #2d3748;
            text-align: center;
        }
        .email-text {
            color: #4a5568;
            margin-bottom: 16px;
        }
        .email-footer {
            display: flex;
            justify-content: center;
            margin-top: 24px;
            font-size: 14px;
            color: #a0aec0;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <img src="{{ asset('storage/images/logo.png') }}" alt="Clever Green Logo" class="logo" width="100" height="100">
        <h1 class="email-header">Hello, {{ $user->name }}</h1>
        <p class="email-text">Your account has been created successfully. Here are your login details:</p>
        <p class="email-text">Email: {{ $user->email }}</p>
        <p class="email-text">Password: {{ $password }}</p>
        <p class="email-text">Please change your password after logging in.</p>
        <div class="email-footer">
            <p>Thank you for joining Clever Green!</p>
        </div>
    </div>
</body>
</html>

