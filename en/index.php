<!DOCTYPE html>
<html>
  <?php
    $page_name = "Wanna get help!";
  ?>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <!-- <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" /> -->
    <meta http-equiv="pragma" content="no-cache" />
    <title><?php echo $page_name; ?></title>
    <link rel="icon" href="/pics/logo2.png" type="image/x-icon" />
  </head>
  <style>
    :root {
      --shadow-blur: 5px;
      --shadow-width: 2px;
      --shadow-width-neg: -2px;
    }

    a {
      color: #de2100;
      text-decoration: none;
      font-weight: bold;
    }

    .linkbutton {
      padding: 0.2em;
      border-radius: 1em;
    }

    a:hover,
    a:focus {
      font-weight: bold;
      color: #260000;
      text-decoration: underline;
    }

    a:focus {
      outline: thin dotted;
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px;
    }

    .default-text, .block {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .centered {
      text-align: center;
    }

    .button {
      padding: 4% 8%;
      margin-left: 5%;
      margin-top: 2%;

      color: black;
      background-color: #ffea5e;

      border-radius: 2em;
    }

    .shadow {
      -moz-box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
      -webkit-box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
    }

    #site {
      background: #fff;
      border: 1px solid #ddd;
      border-width: 0 1px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
      width: 90%;
      margin: 0 auto;
      padding: 20px;
      border-radius: 1em;
      margin-top: 3em;
    }

    #login {
      border: 2px solid white;

      color: white;
      background-color: #d7111b;

      text-align: center;

      padding: 0.5em 1.5em;
      margin-bottom: 3em;
      margin-top: 3em;
    }
    .flexbox {
      display: flex;
    }
    .button:hover,
    .button:focus {
      color: white;
      background-color: #260000;
      text-decoration: underline;
      cursor: pointer;
    }

    table {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      width: 100%;
      border-collapse: collapse;
      margin-top: 2em;
      text-align: center;
    }
    th {
      border: 1px solid rgb(0, 0, 0);
    }
    td.category {
      border: 1px solid rgb(0, 0, 0);
      padding: 8px;
      text-align: center;
      font-weight: bold;
    }

    td.static {
      color: white;
      text-shadow: -2px 2px 5px#000, 2px 2px 5px#000, 2px -2px 5px#000,
        -2px -2px 5px#000;
    }
    td.dynamic {
      text-shadow: var(--shadow-width-neg) var(--shadow-width)
          var(--shadow-blur) #fff,
        var(--shadow-width) var(--shadow-width) var(--shadow-blur) #fff,
        var(--shadow-width) var(--shadow-width-neg) var(--shadow-blur) #fff,
        var(--shadow-width-neg) var(--shadow-width-neg) var(--shadow-blur) #fff;
    }

    td.category:hover {
      background-color: lightblue;
    }

    div {
      font-size: 16px;
    }

    /* .visibledevice {display:none;}
    .visibledesktop {display:display;} */

    @media (max-width : 400px) {
        div {font-size: 1vh;}
        /* .visibledevice {display:block;}
        .visibledesktop {display:none;} */
    }

    .parent {
      display: flex;
      flex-direction: row;
      /* align-items: center; */
      /* align-content: center; */
      justify-content: center;
      flex-wrap: wrap;

      text-align: center;
      margin: 1%;
      border-radius: 1em;
      padding: 1em;
    }

    .block {
      display: flex;
      justify-content: center;
      align-content: center;
      flex-direction: column;
      
      /* vertical-align: middle;
      display: inline-block; */

      text-align: center;
      margin: 1%;
      border-radius: 1em;
      width: 20em;
      padding: 1em;
    }

    div.light {
      background-color: white;
      border: 3px solid rgb(255, 110, 85);
    }

    div.filled {
      background-color: rgb(251, 148, 130);
    }

    #OPED {background-color: #ff8;}
    #OPES {background-color: #ff0;}
    #OPAD {background-color: #ddd;}
    #OPAS {background-color: #fff;}

    #OMED {background-color: #f88;}
    #OMES {background-color: #f00;}
    #OMAD {background-color: #f8f;}
    #OMAS {background-color: #f0f;}

    #IPED {background-color: #8f8;}
    #IPES {background-color: #0f0;}
    #IPAD {background-color: #8ff;}
    #IPAS {background-color: #0ff;}

    #IMED {background-color: #888;}
    #IMES {background-color: #000;}
    #IMAD {background-color: #88f;}
    #IMAS {background-color: #00f;}
  </style>
  <body>
    <!-- <a href="/account/login/"><div id="login" class="button">Login</div></a> -->
    <div id="site" class="default-text">
      <h2 class="centered">Hello! </h2><br />
        <div class="parent light"><span>
      Wanna get help? You'll have to wait, until this site gets ready, I'm
      sorry... <br />
      But until then:<br />
      </span></div>
      <div class="parent">
        <div class="block light"><span>
          <a href="https://youtube.com/c/3blue1brown">3Blue1Brown</a>
          <br>this guy is a genius in explaining <br><b>math</b> and computer science.
          <br>Check his <a href="https://youtube.com/c/3blue1brown">YouTube channel</a> out!
        </span></div>
        <div class="block light"><span>
          Are you excited, which tool he uses?
          <br><a href="https://youtu.be/d9nbtyO2YcU">Watch this video!</a><br />
        </span></div>
        <div class="block light"><span>
          Do you want to start studying? <br><a href="https://www.bachelorsportal.com/">Bachelorsportal</a>'s got something for you!
        </span></div>
      </div>
    </div>
    <div id="site" class="default-text centered">
      <h2>On-coming:</h2>
      <div class="parent">
        <div class="block filled">
            A <b>well-structured</b> reference guide.
        </div>
        <div class="block filled"><b> Links</b> to other useful websites.
        </div>
        <div class="block filled">
            A <b>platform</b> to find people willing to help for free (there are dozens
            of them, believe me, I am also one of them:) Of course if you are a
            person like that, you will able to registrate!
        </div>
      </div>
      That's all for today. Now I go and get my sleep. All the best!:)<br /><br />
    </div>
    <div id="site">
      <span
        class="default-text">
        If you would want to contact me, please write to
        <a class="linkbutton" href="mailto:info@wannagethelp.com">this email</a
        >. <br />The code of the website is open-source. <br />If you spot an
        issue, have suggestions / ideas, or want to contribute,
        <a class="linkbutton" href="https://github.com/Benkex/wanna_get_help"
          >click here
        </a>
        :)
      </span>
    </div>
    <table>
      <tr>
        <td colspan="2"></td>
        <th colspan="2">Mediated</th>
        <th colspan="2">Face-to-Face</th>
      </tr>
      <tr>
        <td colspan="2"></td>
        <th>Dynamic</th>
        <th>Static</th>
        <th>Dynamic</th>
        <th>Static</th>
      </tr>
      <tr>
        <th rowspan="2">Formal</th>
        <th>Personal</th>
        <td id="OPED" class="category dynamic">Virtual Support</td>
        <td id="OPES" class="category static">Online Professional Help</td>
        <td id="OPAD" class="category dynamic">
          In-Person Professional Support
        </td>
        <td id="OPAS" class="category static">
          Private Professional Assistance
        </td>
      </tr>
      <tr>
        <th>Impersonal</th>
        <td id="OMED" class="category dynamic">Online Group Support</td>
        <td id="OMES" class="category static">Online Self-Help Resources</td>
        <td id="OMAD" class="category dynamic">Group Therapy</td>
        <td id="OMAS" class="category static">Self-Help Materials</td>
      </tr>
      <tr>
        <th rowspan="2">Informal</th>
        <th>Personal</th>
        <td id="IPED" class="category dynamic">Remote Personal Support</td>
        <td id="IPES" class="category static">Personal Communication</td>
        <td id="IPAD" class="category dynamic">In-Person Personal Support</td>
        <td id="IPAS" class="category static">Personal Reflection</td>
      </tr>
      <tr>
        <th>Impersonal</th>
        <td id="IMED" class="category dynamic">Online Community Support</td>
        <td id="IMES" class="category static">Self-Help Media</td>
        <td id="IMAD" class="category dynamic">In-Person Support Group</td>
        <td id="IMAS" class="category static">Mindfulness Practices</td>
      </tr>
    </table>

    <?php
      session_start();
      $counter_name = "counter.txt";

      // Check if a text file exists.
      // If not create one and initialize it to zero.
      if (!file_exists($counter_name)) {
        $f = fopen($counter_name, "w");
        fwrite($f,"0");
        fclose($f);
      }

      // Read the current value of our counter file
      $f = fopen($counter_name,"r");
      $counterVal = fread($f, filesize($counter_name));
      fclose($f);

      // Has visitor been counted in this session?
      // If not, increase counter value by one
      if(!isset($_SESSION['hasVisited'])){
        $_SESSION['hasVisited']="yes";
        $counterVal++;
        $f = fopen($counter_name, "w");
        fwrite($f, $counterVal);
        fclose($f);
      }

      echo "You are visitor number $counterVal to this site";
    ?>
  </body>
</html>
