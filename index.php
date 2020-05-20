<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="js/script.js"></script>
    <title>About Me</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="ico/favicon.ico" type="image/x-icon" />
</head>

<body>
    <header class='masthead'>
        <div id='stars'><?php require 'php/script.php'; ?></div>
        <div><p class='masthead-intro'>Hi, I'm</p>
            <h1 class='masthead-heading'>Chris<br>Zarlengo</h1>
        </div>
    </header>
    <section class="details">
      <h1>Introduction</h1>
      <p>Chris is a manufacturing engineer, with experience designing inventive solutions for a wide variety of issues. 
         With companies moving to more completely digital systems there has been a large transition from the tradition solutions towards developing these as automated computer based solutions.
         <br><br>Recently as the 'Internet of Things' has become a vital resource to offer customers, skill sets have increased to include full database integration and installing low voltage hardware in the systems to output real time data to the collection system.</p>
      <h1>Where I'm From</h1>
      <p>Kent, WA</p>
      <h1>What are your favorite hobbies?</h1>
      <span class="favs"><div class="buttons">
            <button class="btn hover_img" onmouseover="show('rock');"   onmouseout="hide('rock');"      onmousedown="text('rock');"     onmouseup="text();"     >Rock Climbing</button>
            <button class="btn hover_img" onmouseover="show('back');"   onmouseout="hide('back');"      onmousedown="text('back');"     onmouseup="text();"     >Backpacking</button>  
            <button class="btn hover_img" onmouseover="show('snow');"   onmouseout="hide('snow');"      onmousedown="text('snow');"     onmouseup="text();"     >Snowboarding</button> 
            <button class="btn hover_img" onmouseover="show('tri');"    onmouseout="hide('tri');"       onmousedown="text('tri');"      onmouseup="text();"      >Triathlons</button>   
            <button class="btn hover_img" onmouseover="show('karate');" onmouseout="hide('karate');"    onmousedown="text('karate');"   onmouseup="text();"   >Martial Arts</button> 
        </div><div class="images container" width="75%" height="500px">
            <span><img id="rock"    class="hobby" src="img/rock.jpg"    alt="image" height="0px" /></span>
            <span><img id="back"    class="hobby" src="img/back.jpg"    alt="image" height="0px" /></span>
            <span><img id="snow"    class="hobby" src="img/snow.jpg"    alt="image" height="0px" /></span>
            <span><img id="tri"     class="hobby" src="img/tri.jpg"     alt="image" height="0px" /></span>
            <span><img id="karate"  class="hobby" src="img/karate.jpg"  alt="image" height="0px" /></span>
            <span id="hoverText" class="centered"></span>
      </div></span>
      <h1>What's your dream job?</h1>
      <p>Making peoples lives easier by developing solutions to automate their capabilities. Find interesting and new solutions utilizing innovative ideas to achieve this goal.</p>
      <h1>Where do you live?</h1>
      <p>Auburn, WA</p>
      <h1>Why do you want to be a web developer?</h1>
      <p>Transition the things done for fun as a hobby and part-time at work into a full-time career.</p>
    </section>

    <footer id="footer">
        <ul class="social">
          <li><a href="http://www.github.com/Zarlengo"><img src="img/GitHub-Mark-Light-32px.png" alt="GitHub" height="42" width="42">Github</a></li>
        </ul>
    </footer>
</body>

</html>