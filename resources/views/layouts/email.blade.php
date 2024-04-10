<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>Email Template</title>
        <style>
            body {background:#F1F1F1}    
        </style>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #000000;">
    <div style="width: 680px;">
        <table border="0" cellpadding="0" cellspacing="0" width="650" align="center" style="background: #fff;border: #ccc 1px solid;padding:20px">
            <tr>
                <td width="50%" height="100"  align="left" style="padding:0 15px"><img src="{{ asset('images/logo.png') }}" height="70" alt="{{ env('STORE_NAME') }}"></td>
                <td width="50%" align="right" style="padding:0 15px"><a href="{{ url('contact-us') }}"><img src="{{ asset('images/email/btn-contact.png') }}" alt="contact"></a>
                </td>
            </tr>
            <tr><td colspan="2" style="background: #fafafa;padding:15px">{{ $slot }}</td></tr>
            <tr>
                <td height="80" align="center" style="border-top:#e7e7e7 1px solid; border-bottom:#e7e7e7 1px solid; padding-left:20px">
                    <table border="0" cellpadding="0" cellspacing="5" align="center">
                        <tbody>
                            <tr>
                                <td>
                                    <img data-imagetype="External" src="{{ asset('images/android-app.png') }}" height="40" alt="Download app">
                                </td>
                                <td>
                                    <img data-imagetype="External" src="{{ asset('images/ios-app.png') }}" height="40" alt="Download app">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center" style="border-top:#e7e7e7 1px solid; border-bottom:#e7e7e7 1px solid; padding-right:20px">
                    <p>
                        <a href="https://www.facebook.com/megamaxservicespvtltd/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1"><img data-imagetype="External" src="{{ asset('images/facebook.png') }}" height="24" width="24" alt="Facebook"></a>&nbsp;&nbsp; 
                        <a href="https://www.linkedin.com/company/megamax-services/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2"><img data-imagetype="External" src="{{ asset('images/linkedin.png') }}" height="24" width="24" alt="Linked in"></a>&nbsp;&nbsp;
                        <a href="https://www.instagram.com/megamaxservices/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="3"><img data-imagetype="External" src="{{ asset('images/instagram.png') }}" height="24" width="24" alt="Instagram"></a>&nbsp;&nbsp;
                        <a href="https://twitter.com/MegamaxServices/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="4"><img data-imagetype="External" src="{{ asset('images/twitter.png') }}" height="24" width="24" alt="Twitter"></a>&nbsp;&nbsp;
                        <a href="https://www.youtube.com/channel/UCG2zNEVBVd8SI8J8KK5mboA/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="5"><img data-imagetype="External" src="{{ asset('images/youtube.png') }}" height="24" width="24" alt="Youtube"></a>&nbsp;&nbsp;
                        <a href="https://in.pinterest.com/megamaxservices/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="6"><img data-imagetype="External" src="{{ asset('images/pinterest.png') }}" height="24" width="24" alt="Pinterest">
                        </a>
                    </p>
                </td>
            </tr>
            <tr><td colspan="2" style="padding:10px 30px; text-align:center; background:#ffffff"><p style="font-family:Arial,sans-serif; font-size:11px; line-height:18px">©{{ now()->year }}-{{ env('STORE_NAME') }}, All rights reserved.<br aria-hidden="true">Megamax Services Pvt Ltd • Noida, Uttar Pradesh, India</p></td></tr>
            <tr>
                <td colspan="2" style="padding: 10px 30px;background: #111111;color:#ffffff"><p style="font-family: Arial, sans-serif;font-size: 12px;line-height: 20px;padding: 0;margin:0;font-style: italic;">{{ env('STORE_NAME') }} employees or representatives will NEVER ask you for your personal information i.e. your bank account details, password, PIN, CVV, OTP etc. For your own safety, DO NOT share these details with anyone over phone, SMS, or email.</p></td>
            </tr>
        </table>
    </body>
</html>