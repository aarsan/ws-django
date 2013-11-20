<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>City Corner</title>
        <link rel="stylesheet" href="/styles/welcome.css" type="text/css">
        <SCRIPT LANGUAGE="JavaScript" SRC="/scripts/change_pw.js">
        </script>
        <SCRIPT LANGUAGE="JavaScript">
        function CountLeft(field, count, max) {
        if (field.value.length > max)
        field.value = field.value.substring(0, max);
        else
        count.value = max - field.value.length;
        }
        </script>
        <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28304116-1']);
    _gaq.push(['_setDomainName', 'citycorner.org']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

        </script>
    </head>
    <body>
    <div id="page">
        <div id="header">
           <a href="../?action=logout">logout</a>
        </div>