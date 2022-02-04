const createAndPrintTable = async(courrier) => {
    console.log(courrier)
    const html = `<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Print</title>
            <link rel="stylesheet" href="/systeme_courrier/public/assets/css/print-style.css">
        </head>

        <body>
            <div class=WordSection1>
                <div align=center>
                    <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt; mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.0pt'>
                            <td width=392 colspan=2 valign=top style='width:293.95pt;border:none; padding:0in 5.4pt 0in 5.4pt;height:28.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span lang=FR style='font-size:13.0pt;font-family: "Calibri Light",sans-serif;mso-ascii-theme-font:major-latin;mso-hansi-theme-font: major-latin;mso-bidi-theme-font:major-latin;color:black;mso-ansi-language: FR'>REPUBLIQUE ISLAMIQUE DE MAURITANIE<o:p></o:p></span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><span lang=FR style='font-size:13.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Honneur – Fraternité – Justice<o:p></o:p></span></p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span lang=FR style='font-size:12.0pt;font-family: "Calibri Light",sans-serif;mso-ascii-theme-font:major-latin;mso-hansi-theme-font: major-latin;mso-bidi-theme-font:major-latin;color:black;mso-ansi-language: FR'>Ministère de l’Action Sociale, de L’Enfance st de la Famille<o:p></o:p></span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span lang=FR style='font-size:13.0pt;font-family: "Calibri Light",sans-serif;mso-ascii-theme-font:major-latin;mso-hansi-theme-font: major-latin;mso-bidi-theme-font:major-latin;color:black;mso-ansi-language: FR'><o:p>&nbsp;</o:p></span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><span lang=FR style='font-size:14.0pt;mso-ansi-language: FR'><o:p>&nbsp;</o:p></span></p>
                            </td>
                            <td width=98 valign=top style='width:73.35pt;border:none;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><span lang=FR style='font-size:14.0pt;mso-ansi-language: FR;mso-no-proof:yes'> </v:shape><![endif]--><![if !vml]> <img width=55 height=55 src="/systeme_courrier/public/images/logo.png" v:shapes="Picture_x0020_1"><![endif]></span>
                                    <span lang=FR style='font-size:14.0pt;mso-ansi-language:FR'>
                                        <o:p></o:p>
                                        </span>
                                </p>
                            </td>
                            <td width=357 colspan=2 valign=top style='width:267.45pt;border:none; padding:0in 5.4pt 0in 5.4pt;height:28.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span lang=AR-SA dir=RTL style='font-size:14.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;color:black;mso-ansi-language:FR'>&#1575;&#1604;&#1580;&#1605;&#1607;&#1608;&#1585;&#1610;&#1577; &#1575;&#1604;&#1573;&#1587;&#1604;&#1575;&#1605;&#1610;&#1577; &#1575;&#1604;&#1605;&#1608;&#1585;&#1610;&#1578;&#1575;&#1606;&#1610;&#1577;</span></b><b><span lang=FR style='font-size:14.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;color:black; mso-ansi-language:FR'><o:p></o:p></span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><span lang=AR-SA dir=RTL style='font-size:14.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;color:black; mso-ansi-language:FR'>&#1588;&#1585;&#1601; – &#1573;&#1582;&#1575;&#1569; - &#1593;&#1583;&#1575;&#1604;&#1577;</span>
                                    <span lang=FR style='font-size:14.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>
                                        <o:p></o:p>
                                        </span>
                                </p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span lang=AR-SA dir=RTL style='font-size:14.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;color:black;mso-ansi-language:FR'>&#1608;&#1586;&#1575;&#1585;&#1577; &#1575;&#1604;&#1593;&#1605;&#1604; &#1575;&#1604;&#1575;&#1580;&#1578;&#1605;&#1575;&#1593;&#1610; &#1608;&#1575;&#1604;&#1591;&#1601;&#1608;&#1604;&#1577; &#1608;&#1575;&#1604;&#1571;&#1587;&#1585;&#1577;</span></b><b><span lang=FR style='font-size:14.0pt;font-family:"Calibri Light",sans-serif;mso-ascii-theme-font: major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin; color:black;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span lang=AR-SA dir=RTL style='font-size:14.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;color:black; mso-ansi-language:FR'><o:p>&nbsp;</o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:1;height:28.0pt'>
                            <td width=287 style='width:215.25pt;border:none;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:14.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Service Secrétariat Central</span></b><b><span lang=FR style='font-size:16.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border:none;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span style='font-size:16.0pt'><o:p>&nbsp;</o:p></span></p>
                            </td>
                            <td width=287 style='width:215.3pt;border:none;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span lang=AR-SA dir=RTL style='font-size:15.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;color:black'>&#1605;&#1589;&#1604;&#1581;&#1577; &#1575;&#1604;&#1587;&#1603;&#1585;&#1578;&#1575;&#1585;&#1610;&#1575; &#1575;&#1604;&#1605;&#1585;&#1603;&#1586;&#1610;&#1577;</span></b><b><span style='font-size:15.0pt;font-family:"Calibri Light",sans-serif;mso-ascii-theme-font: major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin'><o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:2;height:28.0pt'>
                            <td width=287 style='width:215.25pt;border:none;border-bottom:solid windowtext 1.0pt; mso-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Courrier Arrivée</span></b><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border:none;border-bottom:solid windowtext 1.0pt; mso-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><span style='font-size:18.0pt;font-family:"Cambria",serif; color:black'>${courrier.designateur}</span><span style='font-size:12.0pt'><o:p></o:p></span></p>
                            </td>
                            <td width=287 style='width:215.3pt;border:none;border-bottom:solid windowtext 1.0pt; mso-border-bottom-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt; height:28.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span lang=AR-SA dir=RTL style='font-size:12.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;color:black'>&#1576;&#1585;&#1610;&#1583; &#1608;&#1575;&#1585;&#1583;</span></b><b><span style='font-size:12.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin'><o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:3;height:14.0pt'>
                            <td width=287 style='width:215.25pt;border:solid windowtext 1.0pt;border-top: none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Date :</span></b><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Cambria",serif; color:black'>${courrier.date_arrive}</span></b><span style='font-size:12.0pt'><o:p></o:p></span></p>
                            </td>
                            <td width=287 style='width:215.3pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black'>:<span dir=RTL></span><span dir=RTL></span><span lang=AR-SA dir=RTL><span dir=RTL></span><span dir=RTL></span> &#1608;&#1589;&#1608;&#1604; &#1575;&#1604;&#1576;&#1585;&#1610;&#1583;</span><o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:4;height:14.0pt'>
                            <td width=287 style='width:215.25pt;border:solid windowtext 1.0pt;border-top: none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Numéro Inscription :</span></b><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Cambria",serif; color:black'>${courrier.numero_inscription}</span></b><span style='font-size:12.0pt'><o:p></o:p></span></p>
                            </td>
                            <td width=287 style='width:215.3pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black'>:<span dir=RTL></span><span dir=RTL></span><span lang=AR-SA dir=RTL><span dir=RTL></span><span dir=RTL></span> &#1585;&#1602;&#1605; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604;</span><o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:5;height:14.0pt'>
                            <td width=287 style='width:215.25pt;border:solid windowtext 1.0pt;border-top: none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Destination :</span></b><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Cambria",serif; color:black'>${courrier.destination}</span></b><span style='font-size:12.0pt'><o:p></o:p></span></p>
                            </td>
                            <td width=287 style='width:215.3pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black'>:<span dir=RTL></span><span dir=RTL></span><span lang=AR-SA dir=RTL><span dir=RTL></span><span dir=RTL></span> &#1575;&#1604;&#1580;&#1607;&#1577; &#1575;&#1604;&#1605;&#1585;&#1587;&#1604; &#1573;&#1604;&#1610;&#1607;&#1575;</span><o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:6;height:14.0pt'>
                            <td width=287 style='width:215.25pt;border:solid windowtext 1.0pt;border-top: none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Date Départ :</span></b><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;mso-ansi-language:FR'><o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Cambria",serif; color:black'>${courrier.date_depart}</span></b><span style='font-size:12.0pt'><o:p></o:p></span></p>
                            </td>
                            <td width=287 style='width:215.3pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black'>:<span dir=RTL></span><span dir=RTL></span><span lang=AR-SA dir=RTL><span dir=RTL></span><span dir=RTL></span> &#1575;&#1604;&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1584;&#1610; &#1608;&#1589;&#1604;&#1578;&#1607;&#1605; &#1601;&#1610;&#1607;</span><o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:14.0pt'>
                            <td width=287 style='width:215.25pt;border:none;mso-border-top-alt:solid windowtext .5pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'><o:p>&nbsp;</o:p></span></b></p>
                                <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height: normal'><b><span lang=FR style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black;mso-ansi-language:FR'>Cachet<o:p></o:p></span></b></p>
                            </td>
                            <td width=272 colspan=3 style='width:204.15pt;border:none;mso-border-top-alt: solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Cambria",serif; color:black'><o:p>&nbsp;</o:p></span></b></p>
                            </td>
                            <td width=287 style='width:215.3pt;border:none;mso-border-top-alt:solid windowtext .5pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span style='font-size:12.0pt;font-family:"Calibri Light",sans-serif; mso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font: major-latin;color:black'><o:p>&nbsp;</o:p></span></b></p>
                                <p class=MsoNormal align=right style='margin-bottom:0in;text-align:right; line-height:normal'><b><span lang=AR-SA dir=RTL style='font-size:12.0pt; font-family:"Calibri Light",sans-serif;mso-ascii-theme-font:major-latin; mso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;color:black'>&#1575;&#1604;&#1582;&#1578;&#1605;<o:p></o:p></span></b></p>
                            </td>
                        </tr>
                        <![if !supportMisalignedColumns]>
                        <tr height=0>
                            <td width=242 style='border:none'></td>
                            <td width=83 style='border:none'></td>
                            <td width=94 style='border:none'></td>
                            <td width=54 style='border:none'></td>
                            <td width=235 style='border:none'></td>
                        </tr>
                        <![endif]>
                    </table>
                </div>
            </div>
        </body>

        </html>`

    const win = window.open(',')
    win.document.write(html)
    win.document.close()

    await sleep(100)
    win.print()
}
