<?php
$redirect_base = '/pr/';
$slogan = urldecode(str_replace($redirect_base, '', $_SERVER['REQUEST_URI']));
?>

<!DOCTYPE html >
<!--

-->
<head>
<title><? echo $slogan ?></title>
<meta name=viewport content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
<link href="//i.imgur.com/3CoStij.png" rel="icon" type="image/png" />
</script>
<style type="text/css">
body {
    margin: 0;
}
a {
    text-decoration: none;
    color: #2a6496;
}
a:hover,
a:focus {
    color: #428bca;
    cursor: pointer;
}
.slogan-outer {
    overflow: hidden;
    font-family: 'Oswald', wide;
    position: absolute;
    -ms-transform: skewX(+25deg);
    -webkit-transform: skewX(+20deg);
    transform: skewX(+20deg);
    text-align: center;
    display: flex;        
    justify-content: center;
    align-items: center;
    color: #444;
text-shadow: 1px -1px 0px #b1a096, 2px -2px 0px #ac9f96, 3px -3px 0px #ae9d95, 4px -4px 0px #cbaea4, 5px -5px 0px #e2d6c4, 6px -6px 0px #f4ece1;
}
.slogan-inner {
    vertical-align: middle;
    word-wrap: break-word;
    overflow: auto;
    padding: .25em;
    }
@media screen and (max-width: 799px) {
    img.big {
        display: none
    }
    img.small{
        width: 100%;
    }
    .slogan-outer {
        font-size: 8.5vw;
        left: 30vw;
        top: 1vw;
        height: 49vw;
        width: 60vw;

    }
}

@media screen and (min-width: 800px) {  
    .container {
        font-size 16px;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        display: block;

        }
    img.small {
        display: none
    }
    .slogan-outer {
        font-size: 70px;
        left: 32.5%;
        top: 1%;
        height: 49%;
        width: 550px;
    
}
@media screen and (min-width: 1271px) {  
    .container {
        position: absolute;
        display: block;
        left: 0;
        -webkit-transform: translateX(0%);
    }
}

</style>
</head>
<body>


<div class="container"><img class="big" alt="<? echo $slogan ?>" src="//i.imgur.com/8A8CGJp.png"><img class="small" alt="<? echo $slogan ?>" src="//i.imgur.com/LK8smIQ.png"><div class="slogan-outer"><div class="slogan-inner" id="slogan"><? echo $slogan ?></div></div>
</body>
</html>
</html>