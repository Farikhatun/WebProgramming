<?php
include 'koneksi.php';
session_start();
if (isset($_GET) && !empty($_GET)) {
    $bookId = $_GET["bookId"];

    $sql = "SELECT b.checkIn, b.checkOut, b.id, u.fullname, u.username, v.nama, v.harga FROM booking b LEFT JOIN user u ON b.userId = u.id_user LEFT JOIN villa v ON b.villaId = v.id WHERE b.id = '$bookId'";
    $data = mysqli_query($koneksi, $sql);
    $res = mysqli_fetch_array($data);

    $checkIn = new DateTime($res['checkIn']);
    $checkOut = new DateTime($res['checkOut']);
    $diff = date_diff($checkIn, $checkOut);
    $total = $res['harga'] * $diff->format("%a");
    $gTotal = $total + 125000;
}

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/confirmation.css">
    <!-- Turn off iOS phone number autodetect -->
    <meta name="format-detection" content="telephone=no">
    <title>Confirmation Page</title>
</head>
<!-- Global container with background styles. Gmail converts BODY to DIV so we
  lose properties like BGCOLOR. -->

<body border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#F7F7F7" style="margin: 0;">
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#F7F7F7">
        <tr>
            <td style="padding-right: 10px; padding-left: 10px;">
                <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#F7F7F7" style="width: 600px; max-width: 600px;">
                    <tr>
                        <td width="66%" valign="middle" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: right; padding-top: 12px; vertical-align: middle;"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>

                <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#F7F7F7" style="width: 600px; max-width: 600px;">
                    <tr>
                        <td colspan="2" style="background: #fff; border-radius: 8px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                <tr class="">
                                    <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 32px 40px; ">
                                        <h2 style="color: #404040; font-weight: 300; margin: 0 0 12px 0; font-size: 20px; line-height: 30px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; ">
                                            Hi <?= $res['username'] ?>,
                                        </h2>
                                        <p style="color: #666666; font-weight: 400; font-size: 15px; line-height: 21px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">Your reservation request for SevenSky Villa, has been confirmed. Please review the details of your booking.</p>

                                        <table width="100%" border="2" cellspacing="0" cellpadding="0" style="margin-top: 12px; margin-bottom: 12px; margin: 24px 0; color: #666666; font-weight: 400; font-size: 15px; line-height: 21px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif;">
                                            <tr>
                                                <td style="padding:20px 20px 0px ; font-weight:700; font-size: 25px; ">
                                                    <?= $res['fullname'] ?> <br>
                                                    <p style="padding-top:0px; font-weight:700; font-size: 12px; ">Booking Confirmation Code: <?= $res['id'] ?></p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:20px 20px 10px ; font-weight:700; font-size: 18px; ">SevenSky
                                                    <p style="padding-top:0px; font-weight:700; font-size: 14px; "><?= $res['nama'] ?> ── <?= $diff->format("%a Malam") ?></p>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;">

                                                        <tr>
                                                            <td colspan=2; style="padding:20px 20px 0px 20px ; font-weight:700; font-size: 14px;">Check-in</td>
                                                            <td></td>
                                                            <td style="  padding:20px 20px 0px 30px ; font-weight:700; font-size: 14px;">Check-out</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2; style="padding: 0px 20px 20px 20px ; font-weight:700; font-size: 18px;"><?= $res['checkIn'] ?></td>
                                                            <td></td>
                                                            <td style="padding: 0px 20px 20px 30px ; font-weight:700; font-size: 18px; "><?= $res['checkOut'] ?></td>
                                                        </tr>


                                                        <tr>
                                                            <td style="padding:20px 20px 0px 20px ; font-weight:700; font-size: 18px; ">Total Payable</td>
                                                        </tr>
                                                        <td colspan=2; style="padding:20px 20px 5px 20px; font-weight:300; font-size: 14px;">Rp <?= number_format($res['harga']) ?> x <?= $diff->format("%a Malam") ?> </td>
                                                        <td></td>
                                                        <td style="  padding:20px 90px 5px 0px ; font-weight:300; font-size: 14px; text-align: right;">Rp <?= number_format($total) ?></td>

                                            </tr>

                                            <td colspan=2; style="padding:5px 20px 10px 20px ; font-weight:400; font-size: 14px;">All Applicable Taxes </td>
                                            <td></td>
                                            <td style="padding:5px 90px 10px 0px ; font-weight:400; font-size: 14px; text-align: right;">Rp 125,000</td>
                                            <tr>
                                                <td colspan=2; style="padding:5px 20px 10px 20px ; font-weight:700; font-size: 14px;" color:#000;>Grand Total </td>
                                                <td></td>
                                                <td style=" padding:5px 90px 10px 0px ; font-weight:700; font-size: 14px; text-align: right;" color:#000;>Rp <?= number_format($gTotal)  ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan=2; style=" padding:5px 20px 10px 20px ; font-weight:700; font-size: 14px;">Payment Mode </td>
                                                <td></td>
                                                <td style=" padding:5px 20px 10px 30px ; font-weight:700; font-size: 14px; ">800 0843 2735 4925</td>
                                            </tr>

                                </tr>
                            </table>
                        </td>

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 12px; margin-bottom: 12px; margin: 24px 0">

                        </table>
                        <p style="color: #666666; font-weight: 400; font-size: 15px; line-height: 21px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">Hope you enjoyed the booking experience and will like the stay too.</p><br>
                        <p style="color: #666666; font-weight: 400; font-size: 17px; line-height: 24px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; margin-bottom: 6px; margin-top: 24px;" class="">Cheers,</p>
                        <p style="color: #666666; font-weight: 400; font-size: 17px;  font-family: 'Helvetica neue', Helvetica, arial, sans-serif; margin-bottom: 6px; margin-top: 10px;">Sevensky Team</p>
            </td>
        </tr>
        </td>
        </tr>
    </table>
    </td>
    </tr>
    </table>
    <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 600px; max-width: 600px; font-family: Helvetica, Arial, sans-serif;">
        <tr>
            <td style="padding-top: 24px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;">
        <tr>
            <td style="-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; border-top: 12px solid; border-bottom: 12px solid; background-color: #db4444; border-color: #db4444; text-align: center;">
                <a href=" index.php" style="color: #fff; font-weight: 400; border-left: 270px solid; border-right: 270px solid; border-top: 12px solid; border-bottom: 12px solid; font-size: 17px; text-decoration: none; 
                    text-align: center; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; background-color: #db4444; border-color: #db4444;" class="btn"> Close
                </a>
            </td>
        </tr>
    </table>

    <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 600px; max-width: 600px; font-family: Helvetica, Arial, sans-serif;">
        <tr>
            <td style="padding-top: 24px;">
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td style="background-color: #dedede;  width: 100%; font-size: 1px; height: 1px; line-height: 1px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="footer-nav">
            <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 9px 0; text-align: center;">
                <table cellspacing="0" cellpadding="0" width='100%' align='' class="col-layout">
                    <tr class=''>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_about&amp;utm_content=&amp;ref=eemail" class="">About</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_help&amp;utm_content=&amp;ref=eemail" class="">Help</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_myaccount&amp;utm_content=&amp;ref=eemail" class="">My Account</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_contactus&amp;utm_content=&amp;ref=eemail" class="">Contact Us</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_privacy_policy&amp;utm_content=&amp;ref=eemail" class="">Privacy</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_tos&amp;utm_content=&amp;ref=eemail" class="">Terms</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.roomstonite.com/views/about.html/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_blog&amp;utm_content=&amp;ref=eemail" class="">Blog</a>
                            </table>
                        </td>
                        <td width='auto' height='' style='display: inline-block; line-height: 11px; padding-left: 10px;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; display: inline-block; height: 22px; vertical-align: middle; margin-left: 5px;" href="https://www.facebook.com/roomstonite" class="">
                                    <img src='https://cdn.evbstatic.com/s3-s3/marketing/emails/images/icons/facebook.png' title='Facebook' alt='Facebook' border="0" width='22' height='22' class="" />
                                </a>
                                <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; display: inline-block; height: 22px; vertical-align: middle; margin-left: 5px;" href="https://twitter.com/roomstonite" class="">
                                    <img src='https://cdn.evbstatic.com/s3-s3/marketing/emails/images/icons/twitter.png' title='Twitter' alt='Twitter' border="0" width='22' height='22' class="" />
                                </a>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td style="background-color: #dedede;  width: 100%; font-size: 1px; height: 1px; line-height: 1px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="">
            <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 24px 0; text-align: center;">
                <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-weight: 300; padding-bottom: 6px;" class="">
                    <span class=''>
                        This email was sent by

                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="mailto:" class="">halosevensky@mail.com</a>
                    </span>

                </div>
                <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-weight: 300; padding-bottom: 6px;" class="">
                    <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="https://www.roomstonite.com/" class="">Sevensky</a> | Jl. Slamet Baharudin | Surakarta | Central Java | Indonesia
                </div>
            </td>
        </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
        </td>
      </tr>
    </table>
  <![endif]-->
    </td>
    </tr>
    </table>
</body>

</html>