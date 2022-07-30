<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tilen Hudrap</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body style="margin: 0; padding: 50px; box-sizing: border-box; background: #f1f5f9; font-family: 'Roboto'; color: #64748b; width: 100%; height: 100%;">

        <div style="width: 100%; height: 100%;">
            <div style="margin: auto; width: 600px; height: min-content;">

                <div>
                    <div style="text-align: center;">
                        <svg style="width: 80px; height: 80px;" fill="#cbd5e1" id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                            <path d="M1199.88,402H1080v94h-49V352h240V232.59C1201.36,254.15,1092.87,268,971,268s-230.36-13.85-300-35.41V352H911V496H862V402H742.12c14,24.79,22.88,60.64,22.88,100.5s-8.85,75.77-22.93,100.57L862,723V616h49V772l60,60,60-60V616h49V723l119.93-119.93C1185.85,578.27,1177,542.4,1177,502.5S1185.83,426.79,1199.88,402Z" transform="translate(-671 -232.59)"/>
                        </svg>
                    </div>
                    <div style="background: white; padding: 30px; border-radius: 30px; margin: 30px 0; box-shadow: 5px 5px 20px #cbd5e1;">
                        <table style="width: 100%; font-size: 0.8rem; border-bottom: 1px solid #cbd5e1; margin-bottom: 20px; padding-bottom: 20px;">
                            <tr>
                                <td style="width: 100px; font-weight: bold;">Date:</td>
                                <td>{{ $datetime }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">From:</td>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Email:</td>
                                <td>{{ $email }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">IP:</td>
                                <td>{{ $ip }}</td>
                            </tr>
                        </table>

                        <h1 style="font-size: 1.2rem; margin-bottom: 20;">{{ $subject }}</h1>

                        {{ $msg }}
                    </div>
                    <div style="text-align: center; font-size: 0.7rem; color: #94a3b8;">
                        &copy; {{ date('Y') }} - Tilen Hudrap. All rights reserved!
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>
