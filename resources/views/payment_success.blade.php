<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt</title>
    <style>
        body {
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f9fafb;
            padding: 40px 0;
        }
        .email-content {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .email-header {
            background-color: #1da724;
            /* background-color: #0d9488; */

            padding: 30px;
            text-align: center;
            color: white;
        }
        .email-header img {
            max-height: 60px;
            margin-bottom: 10px;
        }
        .email-body {
            padding: 30px;
        }
        .email-body h2 {
            color: #0f172a;
            font-size: 22px;
            margin-top: 0;
        }
        .invoice-details {
            margin: 20px 0;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            padding: 15px 0;
        }
        .invoice-details p {
            margin: 6px 0;
            color: #334155;
        }
        .invoice-details strong {
            color: #0f172a;
        }
        .thank-you {
            margin-top: 20px;
            color: #475569;
            font-size: 15px;
        }
        .email-footer {
            text-align: center;
            font-size: 13px;
            color: #94a3b8;
            padding: 20px;
            background-color: #f1f5f9;
        }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-content">
        <div class="email-header">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Company Logo">
            <h1>Payment Receipt</h1>
        </div>
        <div class="email-body">
            <h2>Hi {{ $user->name ?? 0 }},</h2>
            <p>Thank you for your purchase! Below are the details of your transaction:</p>

            <div class="invoice-details">
                <p><strong>Package:</strong> {{ $package->name ?? 0 }}</p>
                <p><strong>Price:</strong> ${{ number_format($package->price ?? 80, 2) }}</p>
                <p><strong>Points Added:</strong> {{ $package->coins?? 0 }}</p>
                {{-- <p><strong>Payment Method:</strong> PayPal</p> --}}
            </div>

            <div class="thank-you">
                Your subscription has been successfully activated. We hope you enjoy your experience with us.
            </div>
        </div>
        <div class="email-footer">
            &copy; {{ date('Y') }} Your Company. All rights reserved.<br>
            This is an automated email. Please do not reply.
        </div>
    </div>
</div>
</body>
</html>
