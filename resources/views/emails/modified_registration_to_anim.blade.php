<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>

</head>
<body class="" style="font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
<table  border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
            <div class="content" style=" display: block; margin: 0 auto; max-width: 580px; padding: 10px;">

                <!-- START CENTERED WHITE CONTAINER -->
                <table  class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding: 20px;" valign="top">
                            <table  border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                <tr>
                                    <td align="center" style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                                        <a href="https://osezzerodechet.bzh/" target="_blank"><img src="{{ asset('images/logo.png') }}" alt="Useful alt text" width="auto" height="300" border="0" style="border:0; outline:none; text-decoration:none; display:block;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family: roboto, sans-serif; font-size: 20px; vertical-align: top;" valign="top">
                                        <p style="font-family: roboto, sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">Bonjour,</p>
                                        <p style="font-family: roboto,sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">{{$data_user->first_name}} a modifié sa reservation à votre animation "{{$data_event->title}}".</p>
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;" width="100%">

                                            <p style="font-family: roboto, sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">Sa réservation compte maintenant pour {{$data_nb_user_to_add}} @if($data_nb_user_to_add > 1)personnes. @else personne. @endif</p>
                                            <p style="font-family: roboto, sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">Voici l'état de votre niveau de réservation : {{$data_totalNbPlayers}} / {{$data_event->nb_max_user}}</p>
                                            <p style="font-family: roboto, sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">Bonne journée !</p>
                                            </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- END MAIN CONTENT AREA -->
                            </table>
                            <!-- END CENTERED WHITE CONTAINER -->

                            <!-- START FOOTER -->
                            <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                    <tr>
                                        <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center">
                                            <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Osez Zéro Déchet, 2 rue Bécot 22500 Paimpol</span>

                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <!-- END FOOTER -->

            </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
    </tr>
</table>
</body>
</html>

