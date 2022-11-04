# Three29 Web Developer Test #

## Requirements: ##
- build a page that has 4 divs and they look exactly like in the screenshots provided at the end of this requirements
- use the template provided in this repository (index.php)
- initial state of each div:
- div1 - has width 25%, a responsive background image ( see $cover_image ), on click width becomes 100%
- div2 - has width 75%, background color orange, contains a random image from $random_images array - every refresh should pull a random image, on click width becomes 100%
- div3 - has width 50%, background color blue, on click width becomes 100% and background color animates into a red
- div4 - has with 90%, shows an iteration of numbers (see details below)
- **iteration of numbers**: *using PHP and only a SINGLE for loop (no arrays, string manipulation/string reversing) please output: 1 3 5 7 9 7 5 3 1*
- the page needs to be responsive - all divs will fill in the entire vertical space - please see screenshot - if page resizes their sizes are changed accordingly see screenshot 
- when you click one of the divs (#div1,#div2, #div3, #div4) their state needs to toogle
  - if you click #div1 - width goes 100% - if you click again it goes back to initial state ( width 25%) - if you click again it goes back to width 100% etc
  - if you click #div2 - width goes 100% - the image is still centered - if you click again it goes back to initial state - if you click again it goes back to width 100% etc
  - if you click #div3 - width goes 100% and at the same time the background color changes to red - if you click again it goes back to initial state (background color as well) - if you click again it goes back to width 100% and background color red etc
  - if you click #div4 - width goes 100% - the text is always centered -  if you click again it goes back to initial state - if you click again it goes back to width 100% etc
              
## IMPORTANT! ##
- For every click on any of the divs (#div1, #div2, #div3, #div4) you need to make an AJAX call to [**save a cookie with the state of that div in PHP**](https://www.php.net/manual/en/features.cookies.php). Do not set cookies any cookies with JavaScript. - if you refresh the page the div should have the same state as the last time you clicked it:
  - if I click #div1 and the width goes 100% - if I refresh the page that div needs to have width 100% - please take a look at the video at the end of this readme file;
  - if I click #div3 and the width goes 100% and background red - that means if I refresh the page that div will have width 100% and and background red - please take a look at the video at the end of this readme file
  - If the browser width is smaller or equal than 600px then the div3 and div4 should be hidden.
    
- Other: there are no restrictions on what to use and change, use as many php variables you want/need, css classes, any javascript libraries etc - here at Three29 we like to work clean so we encourage you to make this script as clean and optimized as possible

### Working example screenshot: ###

![screenshot1.png](example.png)


## Video of working example ##
https://youtu.be/9MzGSaebcDU

**Good Luck!**
