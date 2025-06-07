<x-mail::message>
# Hello {{ $userName }},

We hope you are doing well.

Thank you for registering with {{ config('app.name') }}.  
To complete your registration and activate your account, please click the button below:

<x-mail::button :url="$activationLink">
    Activate Your Account
</x-mail::button>

If you did not create an account, please ignore this email or contact our support team immediately.  
This link is valid for a limited time for security purposes.

Thank you for choosing {{ config('app.name') }}.  
We appreciate your trust and are always here to assist you.

Best regards,  
The {{ config('app.name') }} Team
</x-mail::message>