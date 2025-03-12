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
                 
    
    if($trainee->getFirstMedia('trainees')){
    $trimmedUrl = str_replace('www.', '', $trainee->getFirstMedia('trainees')->getUrl());
    }else{
    $trimmedUrl	='#';
    }

    ?>
    <style type="text/css" media="print">
       
        @media print {
        body {-webkit-print-color-adjust: exact;}
        }
        .center-content {
        text-align: center;
        }
    </style>
    <div dir="rtl">
        <p dir="rtl"
            style="margin-top:20pt; margin-left:20pt; margin-bottom:0pt; text-align:left; line-height:108%; font-size:13pt;">
            <span style="font-family:'Simplified Arabic';">{{$formattedDate2}}ه</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-left:20pt; margin-bottom:0pt; text-align:left; line-height:108%; font-size:13pt;">
            <span style="font-family:'Simplified Arabic';">{{$formattedDate1}}م</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:288pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:13pt;">
            <span style="font-family:'Simplified Arabic';" dir="ltr">&nbsp;</span></p>
        <p dir="rtl"
            style="width:542pt; margin-left: auto; margin-right: auto; margin-top:0pt; margin-bottom:6pt; text-align:center; line-height:175%; font-size:14pt; background-color:#1f3864;">
            <strong><span style="font-family:'Simplified Arabic'; color:#ffffff;">استمارة متدرب جديد 
                    تدريبي</span></strong></p>
     
    </div>
    <div>
        
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:8  pt;"><strong>&nbsp;</strong></p>
        <div dir="rtl" style="text-align:center;">
            <table cellspacing="0" cellpadding="0" style="width:542.3pt; margin-right:auto; margin-left:auto; border:0.75pt solid #000000; border-collapse:collapse;">
                <tbody>
                    <tr style="height:17.45pt;">
                        <td colspan="4" style="width:530.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">بيانات الطالب الأساسية</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">رقم الطالب</span></strong></p>
                        </td>
                        <td colspan="2" style="width:251.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial; color:#000000;">&nbsp; {{$trainee->trainee_id}}</span></strong></p>
                        </td>
                        <td rowspan="5" style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; horizontal-align:middle">
                            <div style="width:100%; height:20.15pt; display:inline-block; overflow:visible;">
                                <img src="{{$trimmedUrl}}"  width="100" height="120" alt="متدرب" style="margin: 0 auto; display: block; ">
                                <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:1pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">اسم الطالب رباعي&nbsp;</span></strong><strong><span style="font-family:Arial;">(</span></strong><strong><span style="font-family:'Simplified Arabic';">باللغة العربية</span></strong><strong><span style="font-family:Arial;">)</span></strong></p>
                        </td>
                        <td colspan="2" style="width:251.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->name_ar}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">اسم الطالب&nbsp;</span></strong><strong><span style="font-family:Arial;">(</span></strong><strong><span style="font-family:'Simplified Arabic';">باللغة الإنجليزية</span></strong><strong><span style="font-family:Arial;">)</span></strong></p>
                        </td>
                        <td colspan="2" style="width:251.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">&nbsp;{{$trainee->name_en}}</span></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الرقم الجامعي</span></strong></p>
                        </td>
                        <td colspan="2" style="width:251.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial; color:#000000;">&nbsp;{{$trainee->university_id}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الوظيفة</span></strong></p>
                        </td>
                        <td colspan="2" style="width:251.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial; color:#000000;">&nbsp;{{$trainee->job}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:10pt;">
                        <td colspan="4" style="width:530.75pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">بيانات الطالب الشخصية</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:24.3pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">مكان الميلاد</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->POB}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">تاريخ الميلاد</span></strong></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->DOB}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td rowspan="2" style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">رقم الهوية</span></strong><strong><span style="font-family:Arial;">/</span></strong><strong><span style="font-family:'Simplified Arabic';">جواز السفر</span></strong></p>
                        </td>
                        <td rowspan="2" style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->identity}}</span></strong></p>
                        </td>
                        <td colspan="2" style="width:221.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الحالة الصحية</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:63.1pt;">
                        <td colspan="2" style="text-align: right; width:221.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span style="font-family:Symbol;" dir="ltr">@if($trainee->health_status =='سليم') ☑ @else ☐ @endif</span>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">سليم</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp;&nbsp;</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style="font-family:'Simplified Arabic';">&nbsp;</span></strong><span dir="ltr">&nbsp;</span><span style="font-family:Symbol;">@if($trainee->health_status =='مريض') ☑ @else ☐ @endif</span>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">مريض</span></strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp; &nbsp;&nbsp;</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp; &nbsp;</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp;&nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->health_status =='مصاب') ☑ @else ☐ @endif</span>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">مصاب</span></strong></p>
                            <p dir="rtl" style="margin-top:0pt; margin-right:36pt; margin-bottom:0pt; text-indent:-29.35pt; line-height:150%; font-size:14pt;"><strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">نوع المرض</span></strong><strong><span style="line-height:150%; font-family:Arial; font-size:10pt;">: @if($trainee->disease_type !=='مزمن' and $trainee->disease_type !=='غير مزمن' and $trainee->disease_type !== Null) {{$trainee->disease_type}} @else........... @endif &nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->disease_type =='مزمن') ☑ @else ☐ @endif</span> <strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">مزمن&nbsp;</span></strong><span style="font-family:Symbol" dir="ltr">@if($trainee->disease_type =='غير مزمن') ☑ @else ☐ @endif</span> <strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">غير مزمن&nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->disease_type !=='مزمن' and $trainee->disease_type !=='غير مزمن' and $trainee->disease_type !== Null) ☑ @else ☐ @endif</span> <strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">أخرى&nbsp;</span></strong><strong><span style="line-height:150%; font-family:Arial; font-size:10pt;">&nbsp;</span></strong></p>
                            <p dir="rtl" style="margin-top:0pt; margin-right:36pt; margin-bottom:0pt; text-indent:-29.35pt; line-height:150%; font-size:14pt;"><strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">نوع الاصابة</span></strong><strong><span style="line-height:150%; font-family:Arial; font-size:10pt;">: @if($trainee->injury_type !=='حركي' and $trainee->injury_type !=='بصري' and $trainee->injury_type !== Null) {{$trainee->injury_type}} @else...........@endif &nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->injury_type =='حركي') ☑ @else ☐ @endif</span> <strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">حركي&nbsp;</span></strong><span style="font-family:Symbol" dir="ltr">@if($trainee->injury_type =='بصري') ☑ @else ☐ @endif</span> <strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">بصري&nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->injury_type !=='حركي' and $trainee->injury_type !=='بصري' and $trainee->injury_type !== Null) ☑ @else ☐ @endif</span> <strong><span style="line-height:150%; font-family:'Simplified Arabic'; font-size:10pt;">أخرى&nbsp;</span></strong><strong><span style="line-height:150%; font-family:Arial; font-size:10pt;">&nbsp;</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.8pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الحالة الاجتماعية</span></strong></p>
                        </td>
                        <td colspan="3" style="text-align: right; width:358.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><span style="font-family:Symbol;" dir="ltr">@if($trainee->marital_status =='أعزب') ☑ @else ☐ @endif</span>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">أعزب</span></strong><strong><span style="font-family:'Simplified Arabic';">&nbsp;</span></strong><strong><span style="font-family:'Simplified Arabic';">&nbsp;</span></strong><span style="font-family:'Simplified Arabic'; font-weight:bold;" dir="ltr">&nbsp;</span> <span dir="ltr">@if($trainee->marital_status =='متزوج') ☑ @else ☐ @endif</span><strong><span style="font-family:Arial;"></span></strong>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">متزوج</span>
                        </td>
                    </tr>
                    <tr style="height:21.8pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الحالة الوظيفية</span></strong></p>
                        </td>
                        <td colspan="3" style="text-align: right; width:358.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><span style="font-family:Symbol;" dir="ltr">@if($trainee->job_status =='حكومي') ☑ @else ☐ @endif</span>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">حكومي</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp;</span></strong><span dir="ltr">@if($trainee->job_status =='خاص') ☑ @else ☐ @endif</span><strong><span style="font-family:Arial;"></span></strong>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">خاص</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->job_status =='مفرز') ☑ @else ☐ @endif</span> <strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">مفرز</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp;</span></strong><span style="font-family:Symbol;">@if($trainee->job_status =='متطوع') ☑ @else ☐ @endif</span><strong><span style="font-family:Arial;"></span></strong>&nbsp;<strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">متطوع</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->job_status =='طالب') ☑ @else ☐ @endif</span> <strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">طالب</span></strong><strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">&nbsp; &nbsp;</span></strong><span style="font-family:Symbol;" dir="ltr">@if($trainee->job_status !=='حكومي' and $trainee->job_status !=='خاص'and $trainee->job_status !=='مفرز' and $trainee->job_status !=='متطوع' and $trainee->job_status !=='طالب' and $trainee->job_status !== Null) ☑ @else ☐ @endif</span> <strong><span style="font-family:'Simplified Arabic'; font-size:10pt;">أخرى&nbsp;</span></strong><strong><span style="font-family:Arial; font-size:10pt;">@if($trainee->job_status !=='حكومي' and $trainee->job_status !=='خاص'and $trainee->job_status !=='مفرز' and $trainee->job_status !=='متطوع' and $trainee->job_status !=='طالب' and $trainee->job_status !== Null) {{$trainee->job_status}} @else .................... @endif</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الوظيفة الحالية</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->current_job}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">فصيلة الدم</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->blood}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:14.65pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">العنوان الوظيفي</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->job_title}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:15.1pt;">
                        <td colspan="4" style="width:530.75pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">عنوان الطالب</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:21.1pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">المحافظة</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp; {{$trainee->state}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">المدينة</span></strong></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp; {{$trainee->city}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:22.1pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">أقرب مكان</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->closest_place}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">أقرب جامعة</span></strong></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->closest_university}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:21pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الحي</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-family:Arial; font-weight:bold; color:#000000;" dir="ltr">&nbsp; {{$trainee->neighborhood}}</span></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الشارع</span></strong></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#ffffff;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial; color:#000000;">&nbsp; {{$trainee->street}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.6pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">رقم الهاتف&nbsp;</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->phone}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">رقم الجوال</span></strong></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp; {{$trainee->mobie1}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.95pt;">
                        <td style="width:161.9pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">رقم الجوال الثاني&nbsp;</span></strong></p>
                        </td>
                        <td style="width:125.65pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->mobile2}}</span></strong></p>
                        </td>
                        <td style="width:114.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">البريد الإلكتروني</span></strong></p>
                        </td>
                        <td style="width:95.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->email}}</span></strong></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span dir="ltr">&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span dir="ltr">&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span dir="ltr">&nbsp;</span></p>
        <div dir="rtl" style="text-align:center;">
            <table cellspacing="0" cellpadding="0" style="width:545.25pt; margin-right:auto; margin-left:auto; border:0.75pt solid #000000; border-collapse:collapse;">
                <tbody>
                    <tr style="height:10.7pt;">
                        <td colspan="6" style="width:533.7pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">بيانات الثانوية العامة</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:21.55pt;">
                        <td style="width:81.85pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">رقم الجلوس</span></strong></p>
                        </td>
                        <td style="width:78.8pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->seat_number}}</span></strong></p>
                        </td>
                        <td style="width:76.4pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-left:14pt; margin-bottom:0pt; text-indent:-14pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">مكان الحصول عليها</span></strong></p>
                        </td>
                        <td style="width:85.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->institution}}</span></strong></p>
                        </td>
                        <td style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">سنة الحصول عليها</span></strong></p>
                        </td>
                        <td style="width:81.9pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->year}}</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.45pt;">
                        <td style="width:81.85pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">المعدل</span></strong></p>
                        </td>
                        <td style="width:78.8pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->GPA}}</span></strong></p>
                        </td>
                        <td style="width:76.4pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">نوع الثانوية</span></strong></p>
                        </td>
                        <td style="width:85.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->certificate_type}}</span></strong></p>
                        </td>
                        <td style="width:75.4pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">مجموع الدرجات</span></strong></p>
                        </td>
                        <td style="width:81.9pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$trainee->grades}}</span></strong></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span dir="ltr">&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span dir="ltr">&nbsp;</span></p>
        <div dir="rtl" style="text-align:center;">
            <table cellspacing="0" cellpadding="0" style="width:545.25pt; margin-right:auto; margin-left:auto; border-collapse:collapse;">
                <tbody>
                    <tr style="height:20.15pt;">
                        <td colspan="6" style="width:533.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الشهادات العلمية الحاصل عليها&nbsp;</span></strong><strong><span style="font-family:Arial;">(</span></strong><strong><span style="font-family:'Simplified Arabic';">عدا شهادة الثانوية العامة</span></strong><strong><span style="font-family:Arial;">)</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td style="width:139.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">نوع الشهادة</span></strong></p>
                        </td>
                        <td style="width:120.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الجهة المانحة</span></strong></p>
                        </td>
                        <td colspan="2" style="width:122.55pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">سنة التخرج</span></strong></p>
                        </td>
                        <td style="width:53.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">المعدل</span></strong></p>
                        </td>
                        <td style="width:54.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">التقدير العام</span></strong></p>
                        </td>
                    </tr>
                     @if(count($certificates))
                        @foreach ($certificates as $certificate)
                            <tr style="height:20.15pt;">
                                <td style="width:139.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$certificate->type}}</span></strong></p>
                                </td>
                                <td style="width:120.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$certificate->institution}}</span></strong></p>
                                </td>
                                <td colspan="2" style="width:122.55pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$certificate->year}}</span></strong></p>
                                </td>
                                <td style="width:53.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$certificate->GPA}}</span></strong></p>
                                </td>
                                <td style="width:54.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;{{$certificate->grades}}</span></strong></p>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    <tr style="height:20.15pt;">
                        <td style="width:139.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                        </td>
                        <td style="width:120.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                        </td>
                        <td colspan="2" style="width:122.55pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                        </td>
                        <td style="width:53.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                        </td>
                        <td style="width:54.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
                        </td>
                    </tr>
                    @endif
                    <tr style="height:20.15pt;">
                        <td colspan="6" style="width:533.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">توقيع الطالب يعتبر بمثابة اقرار بصحة البيانات المذكورة وكذلك تعتبر تعهد بالالتزام بأنظمة الأكاديمية</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:15.5pt;">
                        <td colspan="3" style="width:271.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الطالب</span></strong></p>
                        </td>
                        <td colspan="3" style="width:251.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">قسم التعليم المستمر والدروات العليا</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:20.15pt;">
                        <td rowspan="2" style="width:139.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">التوقيع&nbsp;</span></strong></p>
                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">والتاريخ</span></strong></p>
                        </td>
                        <td rowspan="2" style="width:120.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                        </td>
                        <td colspan="2" style="width:122.55pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">الاسم</span></strong></p>
                        </td>
                        <td colspan="2" style="width:118.9pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:39.8pt;">
                        <td colspan="2" style="width:122.55pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#d9d9d9;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><span style="font-family:'Simplified Arabic';">التوقيع</span></strong></p>
                        </td>
                        <td colspan="2" style="width:118.9pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">&nbsp;</span></p>
    </div>
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




