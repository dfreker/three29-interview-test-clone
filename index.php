<?php

//some settings
$random_images = array(
	'http://icons.iconarchive.com/icons/zairaam/bumpy-planets/256/07-jupiter-icon.png',
	'http://www.princeton.edu/~willman/planetary_systems/Sol/Saturn/Saturn.gif',
	'http://www.solstation.com/stars/venus.gif',
	'https://mars.nasa.gov/images/flckrEclipse-full2.jpg'
);

$cover_image = 'http://www.androidguys.com/wp-content/uploads/2016/01/summer-sunset-293095.jpg';

//php code here

$ran_image_num = rand(0, 3);
$image_to_display = $random_images[$ran_image_num];

// Define Cookies here

setcookie('div1_100vw', 'no', time() + 84600);
setcookie('div2_100vw', 'no', time() + 84600);
setcookie('div3_100vw', 'no', time() + 84600);
setcookie('div4_100vw', 'no', time() + 86400);

?>


<!doctype html>
<html lang="en">
<head>
<title>Three29 Test</title>
<style>

/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
</style>
<style>

/* css here */

.divitem {
    height: 25vh;
}

.divitem:hover {
    cursor: pointer;
}

#div1 {
    background-image: url(http://www.androidguys.com/wp-content/uploads/2016/01/summer-sunset-293095.jpg);
    background-size: cover;
    width: 25%;
    transition: width 0.4s;
}

#div1.div-clicked {
    width: 100%;
}

#div2 {
    background: orange;
    width: 75%;
    transition: width 0.4s;
}

#div2.div-clicked {
    width: 100%;
}

#div2 img {
    height: 70%;
    display: block;
    margin: auto;
}

#div3 {
    background-color: blue;
    width: 50%;
    transition: background-color 0.4s, width 0.4s;
}

#div3.div-clicked {
    width: 100%;
}

#div3.bg-red {
    background-color: red;
}

#div4 {
    background: yellow;
    padding-top: 10px;
    width: 90%;
    transition: width 0.4s;
    text-align: center;
    font-size: 28px;
}

#div4.div-clicked {
    width: 100%;
}


@media (max-width:600px) {
    #div3, #div4 {
        display: none;
    }

    #div1, #div2 {
        height: 50vh;
    }
}

</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>

//javascript code here

function divWidthToggle(x) {
    document.getElementById(x).classList.toggle("div-clicked")
}

function div3Toggle(x) {
    document.getElementById(x).classList.toggle("bg-red")
    divWidthToggle(x)
}
	
</script>
</head>
<body>
<div id="wrapper">
<!-- DIV1 -->
<?php 
if ($_COOKIE['div1_100vw'] == 'no' ) {
	echo '<div id="div1" class="divitem" onclick="divWidthToggle(this.id)">
	</div>';} else {
    echo '<div id="div1" class="divitem div-clicked" onclick="divWidthToggle(this.id)">
</div>';}
?>


<!-- DIV2 -->
<?php  
if ($_COOKIE['div2_100vw'] == 'no' ) {  
    echo '<div id="div2" class="divitem" onclick="divWidthToggle(this.id)">

    <img src="'.$image_to_display.'">

</div>';
} else {
    echo '<div id="div2" class="divitem div-clicked" onclick="divWidthToggle(this.id)">

    <img src="'.$image_to_display.'">

</div>';
}

?>
<!-- DIV3 -->

    <?php 
if ($_COOKIE['div3_100vw'] == 'no' ) {
	echo '<div id="div3" class="divitem" onclick="div3Toggle(this.id)">
	</div>';} else {
    echo '<div id="div3" class="divitem div-clicked bg-red" onclick="div3Toggle(this.id)">
</div>';}
?>

	<!-- <div id="div3" class="divitem" onclick="div3Toggle(this.id)"> -->
	</div>

<!-- DIV4 -->

<?php
if ($_COOKIE['div4_100vw'] == 'no' ) {
	echo '<div id="div4" class="divitem" onclick="divWidthToggle(this.id)">';

            $num = -1;
            for ($x = 1; $x <= 9; $x++) { 
              if ($x <= 5) {
              $num = $num + 2;
              echo "$num "  ;
              } else {
              $num = $num -2;
              echo "$num " ;
              }
            }

	echo '</div>';
} 
    
    else {
        echo '<div id="div4" class="divitem div-clicked" onclick="divWidthToggle(this.id)">';

            $num = -1;
            for ($x = 1; $x <= 9; $x++) { 
              if ($x <= 5) {
              $num = $num + 2;
              echo "$num "  ;
              } else {
              $num = $num -2;
              echo "$num " ;
              }
            }
	echo '</div>';
    }
    ?>

</div>


</body>
</html>