<!DOCTYPE html>
<html>
    <head>
        <title>Woodstown High School Marching Band Practice Page</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <link rel="icon" type="image/png" href="favicon.png"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="gradient"></div>
        <div id="container">
            <div id="heading">
                <h1>Woodstown High School Marching Band <br>Practice Page</h1>
            </div>
            <div id="directions">
                <p>You can use this web page to practice your music for the 2014
                    marching band show.  To get started, follow the steps below:</p>
                <ul>
                    <li>Select your instrument from the list</li>
                    <li>Select your playback options
                        <ul>
                            <li><strong>All Parts</strong> - Hear all parts, including
                                yours</li>
                            <li><strong>Only Your Part</strong> - Hear only your part</li>
                            <li><strong>Minus One</strong> - Hear all parts except yours</li>
                        </ul>
                    <li>Select whether you would like to hear the click track or not</li>
                    <li>Click 'Submit'</li>
                </ul>
                <p>After submitting, you will be given options to listen to your selection,
                    or download/print a copy of your part</p>
                <p><strong>Note:</strong> All parts will begin with a 6-beat count-off,
                    even if the click track is turned off.</p>
                <p>For help with this website, please send an e-mail to 
                    <a href="mailto:bob@derricowebdesign.com">D'Errico Web Design</a></p>
            </div>
            <div id="playbackSelections">
                <label for="selectPart">Select your part:</label>
                <select name="selectPart" id="selectPart" class="dropdown">
                    <option value="01">Flute</option>
                    <option value="02">Clarinet</option>
                    <option value="03">Bass Clarinet</option>
                    <option value="04">Alto Saxophone</option>
                    <option value="05">Tenor Saxophone</option>
                    <option value="06">Trumpet 1</option>
                    <option value="07">Trumpet 2</option>
                    <option value="08">Trombone</option>
                    <option value="09">Tuba</option>
                    <option value="10">Piano</option>
                </select><br>
                <label for="selectOpts">Select your playback options:</label>
                <select name="selectOpts" id="selectOpts" class="dropdown">
                    <option value="full">All Parts</option>
                    <option value="only">Only Your Part</option>
                    <option value="minus">Minus One</option>
                </select><br>
                <label for="selectClick">Click Track:</label>
                <select name="selectClick" id="selectClick" class="dropdown">
                    <option value="c">On</option>
                    <option value="">Off</option>
                </select><br>
                <input type="button" id="submit" value="Submit"/>
            </div>
            <div id="display">

            </div>
            <div id="spacer"></div>
        </div>
        <script>
            //event listener for dropdown lists
            $(".dropdown").change(function(){
                $("#display").slideUp();
                $("#display").html("");                
            });
            
            //event listener for submit button
            $("#submit").click(function(){
               $.ajax({
                   url : "getAudio.php",
                   data : {
                       part : $("#selectPart").val(),
                       opts : $("#selectOpts").val(),
                       click : $("#selectClick").val()
                   },
                   type : "GET",
                   success : function(response){
                       $("#display").html(response);
                       $("#display").slideDown();
                   }
               }) 
            });
        </script>
    </body>
</html>
