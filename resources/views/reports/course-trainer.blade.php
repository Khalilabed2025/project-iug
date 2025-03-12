<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p dir="rtl"
            style="margin-top:20pt; margin-right:665pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:13pt;">
            <span style="font-family:'Simplified Arabic';">{{$formattedDate2}}ه</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:665pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:13pt;">
            <span style="font-family:'Simplified Arabic';">{{$formattedDate1}}م</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:288pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:13pt;">
            <span style="font-family:'Simplified Arabic';" dir="ltr">&nbsp;</span></p>
        <p dir="rtl"
            style="width:750pt; margin-left: auto; margin-right: auto; margin-top:0pt; margin-bottom:6pt; text-align:center; line-height:175%; font-size:14pt; background-color:#1f3864;">
            <strong><span style="font-family:'Simplified Arabic'; color:#ffffff;">تقرير تقييم مدرب في برنامج
                    تدريبي</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:35.3pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:5pt;">
            <span style="font-family:'Simplified Arabic';">&nbsp;</span></p>
        <div dir="rtl" style="text-align:center;">
            <table cellspacing="0" cellpadding="0"
                style="width:600.25pt; margin-right:auto; margin-left:auto; border:1pt solid #000000; border-collapse:collapse;">
                <tbody>
                    <tr style="height:13.1pt;">
                        <td
                            style="width:18.94%; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;height: 16pt">
                                <strong><span style="font-family:'Simplified Arabic';">اسم البرنامج التدريبي</span></strong></p>
                        </td>
                        <td
                            style="width:30.62%; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                                <strong><span style="font-family:'Simplified Arabic';">{{$course->title}}&nbsp;</span></strong></p>
                        </td>
                        <td
                            style="width:18.38%; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                                <strong><span style="font-family:'Simplified Arabic';">تاريخ انعقاد البرنامج</span></strong>
                            </p>
                        </td>
                        <td
                            style="width:32.06%; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                                <strong><span style="font-family:'Simplified Arabic';">{{$course->start_date}}م-
                                        {{$course->end_date}}م</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:11.05pt;">
                        <td
                            style="width:18.94%; border-top-style:solid; border-top-width:1pt; border-left-style:solid; border-left-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;height: 16pt">
                                <strong><span style="font-family:'Simplified Arabic';">اسم المدرب</span></strong>
                            </p>
                        </td>
                        <td
                            style="width:30.62%; border-top-style:solid; border-top-width:1pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                                <strong><span style="font-family:'Simplified Arabic';">{{$trainer->name}}&nbsp;</span></strong></p>
                        </td>
                        <td
                            style="width:18.38%; border-top-style:solid; border-top-width:1pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl"
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:11pt;">
                                <strong><span style="font-family:'Simplified Arabic';">مكان انعقاد
                                        البرنامج&nbsp;</span></strong></p>
                        </td>
                        <td
                            style="width:32.06%; border-top-style:solid; border-top-width:1pt; border-right-style:solid; border-right-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:11pt;">
                                <strong><span style="font-family:'Simplified Arabic';">{{$course->location}}&nbsp;</span></strong></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:35.3pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:8pt;">
            <span style="font-family:'Simplified Arabic';">&nbsp;</span></p>
        <div dir="rtl" style="text-align:center;">
            <table cellspacing="0" cellpadding="0"
            style="width:650.25pt; margin-right:auto; margin-left:auto; border:1pt solid #000000; border-collapse:collapse;">
            <tbody>
                    <tr>
                        <td rowspan="2"
                            style="width:10.95pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><u><span style="font-family:'Simplified Arabic';">م</span></u></strong></p>
                        </td>
                        <td rowspan="2"
                            style="width:140.35pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><u><span style="font-family:'Simplified Arabic';">عنوان المحاضرة/
                                            اللقاء</span></u></strong></p>
                        </td>
                        <td colspan="2"
                            style="width:113.4pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><u><span style="font-family:'Simplified Arabic';">فترة التنفيذ</span></u></strong>
                            </p>
                        </td>
                        <td colspan="5"
                            style="width:112.3pt; border-right-style:solid; border-right-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><u><span style="font-family:'Simplified Arabic';">تقييم المدرب في المحاور
                                            %</span></u></strong></p>
                        </td>
                        <td rowspan="2"
                            style="width:14.65pt; height:0pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6; -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); overflow:hidden; transform:rotate(180deg); -webkit-transform:rotate(180deg);">
                            <div
                                style="height:0pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;margin-left: -15px;margin-right: -15px;">
                                <p dir="rtl" style="margin:0pt 5.65pt; text-align:center; font-size:10pt;"><strong><u><span
                                                style="font-family:'Simplified Arabic';">المعدل&nbsp;</span></u></strong>
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:123.25pt;">
                        <td
                            style="width:49.55pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><u><span style="font-family:'Simplified Arabic';">من</span></u></strong></p>
                        </td>
                        <td
                            style="width:53.05pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><u><span style="font-family:'Simplified Arabic';">إلى</span></u></strong></p>
                        </td>
                        <td
                            style="width:12.3pt; height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6; -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); overflow:hidden; transform:rotate(180deg); -webkit-transform:rotate(180deg);">
                            <div
                                style="height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;margin-left: -15px;margin-right: -15px;">
                                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                    <strong><span style="font-family:'Simplified Arabic';">الإلمام بمواضيع
                                            المحاضرة</span></strong></p>
                            </div>
                        </td>
                        <td
                            style="width:15.4pt; height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6; -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); overflow:hidden; transform:rotate(180deg); -webkit-transform:rotate(180deg);">
                            <div
                                style="height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;margin-left: -15px;margin-right: -15px;">
                                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                    <strong><span style="font-family:'Simplified Arabic';">توصيل المعلومة وإكساب
                                            المهارات</span></strong></p>
                            </div>
                        </td>
                        <td
                            style="width:13.85pt; height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6; -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); overflow:hidden; transform:rotate(180deg); -webkit-transform:rotate(180deg);">
                            <div
                                style="height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;margin-left: -15px;margin-right: -15px;">
                                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                    <strong><span style="font-family:'Simplified Arabic';">تنظيم المحاضرة (الوضوح
                                            والكفاية)</span></strong></p>
                            </div>
                        </td>
                        <td
                            style="width:15.3pt; height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6; -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); overflow:hidden; transform:rotate(180deg); -webkit-transform:rotate(180deg);">
                            <div
                                style="height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;margin-left: -15px;margin-right: -15px;">
                                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                    <strong><span style="font-family:'Simplified Arabic';">التنويع في الأنشطة
                                            والوسائل</span></strong></p>
                            </div>
                        </td>
                        <td
                            style="width:12.25pt; height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6; -moz-transform:rotate(180deg); -ms-transform:rotate(180deg); overflow:hidden; transform:rotate(180deg); -webkit-transform:rotate(180deg);">
                            <div
                                style="height:123.25pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;margin-left: -15px;margin-right: -15px;">
                                <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                    <strong><span style="font-family:'Simplified Arabic';">القدرة على تحفيز
                                            المشاركين</span></strong></p>
                            </div>
                        </td>
                    </tr>
                    @if(count($myArray))
                        @foreach ($myArray as $key=>$item)     
                            <tr>
                                <td
                                    style="width:10.95pt; border-top-style:solid; border-top-width:1pt; border-left-style:solid; border-left-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$key+1}}</span></p>
                                </td>
                                <td
                                    style="width:78.35pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[0] ?? '-'}}&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:49.55pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[1] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:53.05pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[1] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:12.3pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[3][1] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:15.4pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[3][2] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:13.85pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[3][3] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:15.3pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[3][4] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:12.25pt; border-style:solid; border-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{$item[3][5] ?? '-'}}</span></p>
                                </td>
                                <td
                                    style="width:14.65pt; border-top-style:solid; border-top-width:1pt; border-right-style:solid; border-right-width:1pt; border-bottom-style:solid; border-bottom-width:1pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#deebf6;">
                                    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                            style="font-family:'Simplified Arabic';">{{(array_sum($item[3])/count($item[3]))}}&nbsp;</span></p>
                                </td>
                            </tr>
                         @endforeach
                    @endif
               
                </tbody>
            </table>
        </div>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:35.3pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:6pt;">
            <span style="font-family:'Simplified Arabic';">&nbsp;</span></p>
    
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





