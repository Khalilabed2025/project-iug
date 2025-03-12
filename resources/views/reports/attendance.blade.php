<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.3">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    use Carbon\Carbon;
    use Alkoumi\LaravelHijriDate\Hijri;

    $currentDate1 = Carbon::now();

    $formattedDate1 = $currentDate1->locale('ar')->isoFormat('DD MMMM YYYY');
    $formattedDate2 = Hijri::Date('j F Y'); 
                          

    ?>
    <style type="text/css" media="print">
        .page
        {
         -webkit-transform: rotate(-90deg); 
         -moz-transform:rotate(-90deg);
         filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
        }
        @media print {
            body {
                -webkit-print-color-adjust: exact;
            }
        }
    </style>

<div dir="rtl">
    <div style="clear:both;">
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
                style="font-family:'Simplified Arabic';" dir="ltr">&nbsp;</span></p>
    </div>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:565.45pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:13pt;">
        <span style="font-family:'Simplified Arabic';">25 ذي الحجــــة
            1444ه</span></p>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:565.45pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:13pt;">
        <span style="font-family:'Simplified Arabic';">13
            يولــــيو 2023م</span></p>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:325.95pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:1pt;">
        <span style="font-family:'Simplified Arabic';">&nbsp;</span></p>
    <p dir="rtl"
        style="margin-top:0pt; margin-bottom:6pt; text-align:center; line-height:115%; font-size:14pt; background-color:#1f3864;">
        <strong><span style="font-family:'Simplified Arabic'; color:#ffffff;">تقرير حضور المتدربين في برنامج
                تدريبي</span></strong></p>
    
    <div dir="rtl" style="text-align:center;">
        <table cellspacing="0" cellpadding="0"
            style="width:729.8pt; margin-right:auto; margin-left:auto; border:0.75pt solid #000000; border-collapse:collapse;">
            <tbody>
                <tr style="height:14.3pt;">
                    <td
                        style="width:8.4%; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">اسم البرنامج</span></strong></p>
                    </td>
                    <td
                        style="width:15.62%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:9.4%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">المجال التدريبي</span></strong></p>
                    </td>
                    <td
                        style="width:15.26%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:9.34%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">الجهة المستفيدة</span></strong></p>
                    </td>
                    <td
                        style="width:14.82%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:7.54%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">فترة التنفيذ</span></strong></p>
                    </td>
                    <td
                        style="width:19.62%; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                        <p dir="rtl"
                            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                            <strong><span style="font-family:'Simplified Arabic';">من - إلى</span></strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <p dir="ltr" style="margin-top:0pt; margin-left:84.95pt; margin-bottom:0pt; line-height:normal; font-size:1pt;">
        <span style="font-family:'Simplified Arabic';">&nbsp;</span></p>
    <div dir="rtl" style="text-align:center;">
        <table cellspacing="0" cellpadding="0"
            style="width:731.7pt; margin-right:auto; margin-left:auto; border:0.75pt solid #000000; border-collapse:collapse;">
            <thead>
                <tr style="height:9.9pt;">
                    <td rowspan="5"
                        style="width: 4.1076%; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">م</span></strong></p>
                    </td>
                    <td rowspan="5"
                        style="width: 3.9756%; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span
                                    style="font-family:'Sakkal Majalla';">رقم&nbsp;</span></strong><br><strong><span
                                    style="font-family:'Sakkal Majalla';">الطالب</span></strong></p>
                    </td>
                    <td
                        style="width: 16.2564%; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">اليوم</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">سبت</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">اثنين</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">أربعاء</span></strong></p>
                    </td>
                    <td
                        style="width: 5.504%; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">سبت</span></strong></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">اثنين</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">أربعاء</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">سبت</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">اثنين</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">أربعاء</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">سبت</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">اثنين</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">أربعاء</span></strong></p>
                    </td>
                </tr>
                <tr style="height:13.85pt;">
                    <td
                        style="width: 16.2564%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">التاريخ</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">01/6</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">03/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">05/06</span></strong></p>
                    </td>
                    <td
                        style="width: 5.504%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">08/06</span></strong></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">10/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">12/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">15/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">17/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">19/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">22/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">24/06</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">26/06</span></strong></p>
                    </td>
                </tr>
                <tr style="height:3.5pt;">
                    <td
                        style="width: 16.2564%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">عدد الساعات</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width: 32.1pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: rgb(222, 235, 246); text-align: left;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">2</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width: 5.504%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width: 32.1pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">2</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width: 32.1pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">2</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                    <td
                        style="width: 32.1pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">2</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">3</span></strong></p>
                    </td>
                </tr>
                <tr style="height:3.5pt;">
                    <td
                        style="width: 16.2564%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">المدرس</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla'; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width: 5.504%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                </tr>
                <tr style="height:3.5pt;">
                    <td
                        style="width: 16.2564%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">المدرس</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla'; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width: 5.504%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top; background-color: rgb(222, 235, 246);">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#deebf6;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                            <strong><span style="font-family:'Sakkal Majalla';">&nbsp;</span></strong></p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td
                        style="width: 4.1076%; border-top-style: solid; border-top-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <ol type="1" style="margin:0pt; padding-right:0pt;  margin-bottom: -25pt;">
                            <li dir="rtl"
                                style="text-align:center; font-family:Arial; font-size:11pt; list-style-position:inside;">
                                <span
                                    style="width:21.83pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;
                            </li>
                        </ol>
                    </td>
                    <td
                        style="width: 9.8099%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">محمد أحمد&nbsp;</span></p>
                    </td>
                
                    <td
                        style="width: 16.2564%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 5.504%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 4.1076%; border-top-style: solid; border-top-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <ol start="2" type="1" style="margin:0pt; padding-right:0pt; margin-bottom: -25pt;">
                            <li dir="rtl"
                                style="text-align:center; font-family:Arial; font-size:11pt; list-style-position:inside;">
                                <span
                                    style="width:21.83pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;
                            </li>
                        </ol>
                    </td>
                    <td
                        style="width: 9.8099%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">علي&nbsp;</span></p>
                    </td>
               
                    <td
                        style="width: 16.2564%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 5.504%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 4.1076%; border-top-style: solid; border-top-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; background-color: rgb(222, 235, 246);">
                        <ol start="3" type="1" style="margin:0pt; padding-right:0pt; margin-bottom: -25pt;">
                            <li dir="rtl"
                                style="text-align:center; font-family:Arial; font-size:11pt; list-style-position:inside;">
                                <span
                                    style="width:21.83pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;
                            </li>
                        </ol>
                    </td>
                    <td
                        style="width: 9.8099%; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">عطية&nbsp;</span></p>
                    </td>
                    
                    <td
                        style="width: 16.2564%; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 5.504%; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width: 6.6622%; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                    <td
                        style="width:32.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                                style="font-family:'Sakkal Majalla';">&nbsp;</span></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:468pt; margin-bottom:0pt; text-indent:36pt; text-align:center; line-height:normal; font-size:12pt;">
        <span style="font-family:'Simplified Arabic';">قسم البحث العلمي والتعليم المستمر&nbsp;</span></p>
    <div style="clear:both;">
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal;"><span
                style="font-family:'Simplified Arabic';" dir="ltr">&nbsp;</span></p>
    </div>
</div>
    <p dir="rtl"
    style="margin-top:0pt; margin-right:440.9pt; margin-bottom:0pt; text-indent:36.1pt; text-align:center; line-height:normal; font-size:13pt;">
    <span style="font-family:'Simplified Arabic';">قسم التعليم المستمر والدورات العليا</span>
    </p>
    <p style="bottom: 10px; right: 10px; position: absolute;"><br></p>
    <button id="printBtn" style="display:none" onclick="myFunction()">print</button>
     <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
    
    $(document).ready(function(){
        $("#printBtn").click();
    });
    function myFunction() {
        document.getElementById("printBtn").style.display = "none";
        window.print();
    }
    </script>
</body>
</html>







