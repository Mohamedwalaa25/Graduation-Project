<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تم تفعيل الاكونت بنجاح</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
    
    {{-- <style> 
        .swal2-confirm {
            display: none !important;
        }
    </style> --}}


    <script>
         document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            title: "تم تفعيل الاكونت بنجاح!",
            text: "الآن يمكنك تسجيل الدخول إلى حسابك.",
            icon: "success",
            confirmButtonText: "حسناً"
        });
    });

    </script>
</body>
