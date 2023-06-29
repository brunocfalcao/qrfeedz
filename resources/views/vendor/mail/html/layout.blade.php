<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            font-family: 'Verdana', sans-serif;
            line-height: 1.8;
            font-size: 18px;
            color: #000000;
        }

        @media (max-width: 600px) {
            /* Center QRFeedz component on mobile devices */
            .qrfeedz-component {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    {{ $header ?? '' }}
    <!-- /Header -->

    <!-- Component Content -->
    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 0 auto;">
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px; font-size: 18px; color: #000000;">
            {{ Illuminate\Mail\Markdown::parse($slot) }}
            </td>
        </tr>
    </table>
    <!-- /Component Content -->

    <!-- Component Footer -->
    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff;">
        <tr>
            <td align="center" style="padding: 20px 0; color: #999999; font-size: 12px; color: #000000;">
                &copy; {{ date('Y') }} QRFeedz, All Rights Reserved.
            </td>
        </tr>
    </table>
    <!-- /Component Footer -->
</body>
</html>
