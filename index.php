<?php
session_start();
if(!$_SESSION['user_id'])
header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
          margin: 0;
          overflow-x: hidden;
        }
      
        .navbar {
          overflow: hidden;
          background-color: #3366ff;
          position: fixed;
          top: 0;
          width: 100%;
          font-family:fantasy;
          font-size: 80px;  color: whitesmoke;

        }
        .navbar a {
          float: left;
          display: block;
          color: #eeeeee;
          text-align: center;
          padding: 15px 18px;
          text-decoration: none;
          font-size: 18px;
          letter-spacing: 1px;
        }
       
        .navbar a:hover {
          color: yellow;
        }
        .container {
          padding: 18px;
          margin-top: 35px;
          height: 2000px;
        }
        .ticket-img img{
          height: 500px;
          width: 1562px;
          
        }
        .kbfc1 img{
          height: 100%;
          width: 100%;
        }
        .kbfc2 img{
          height: 40%;
          width: 50%;
          
        }
        .stadium-dig img{
          padding-top: 5%;
          width: 100%;
        }
       .gallery img{
        padding-top: 5%;
        padding-bottom: 3%;
        padding-left: 10%;
        width: 80%;
        height: 100%;
       }
       #t1{
        font-size:medium;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       color: #b3b3b3;
       }
       .list0{
        padding-left: 0%;
       }
       .list1{
        list-style: none;
       }
       
       .list1 img{
        width: 60%;
        height: 60%;
     
       }
       .list2{
        list-style: none;
        padding-right: 20%;
        
       }
       #latest{
        text-align: center;
      }

      #location-1{
        padding-right: 50%;
        margin-left: 20%;
      }
      #about{
        font-size:larger;
        font-weight:700;
      }
      .footer-1{
        background-color: #3366ff;
        color: white;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding-left: 10%;
        padding-right: 10%;
      }
      .kbfclogo{
        
    

      }
      .kbfclogo img{
        width: 50px;
        height: 50px;
      }
      #copyright{
        text-align: center;
        margin-right:20%;
      }

      
        
      </style>
</head>
<body>
<table>
<tr>
    <div class="navbar">
        <a href="#home">HOME</a>
        <a href="#club">CLUB</a>
        <a href="#team">TEAM</a>
        <a href="#tickets">TICKETS</a>
        <a href="#matchcenter">MATCH CENTER</a>  
        <a href="#news">NEWS</a>
        <a href="#youngblasters">YOUNG BLASTERS</a>
        <a href="#contactus">CONTACT US</a>
        <a href="parkingslot.php">PARKING</a>
        <a href="logout.php">LOGOUT </a>
        <a href="followus">FOLLOW US:</a>
        <a href="https://www.facebook.com/keralablasters/"><i class="fa fa-fw fa-facebook"></i> </a>
        <a href="https://www.youtube.com/channel/UCCRfkpYF70QoUffbC5emuyw"><i class="fa fa-fw fa-youtube"></i> </a>
        <a href="https://www.instagram.com/keralablasters/?hl=en"><i class="fa fa-fw fa-instagram"></i> </a>
        <a href="https://twitter.com/KeralaBlasters"><i class="fa fa-fw fa-twitter"></i> </a>
        <a href="https://www.linkedin.com/company/kerala-blasters-football-club/"><i class="fa fa-fw fa-linkedin"></i> </a>
      </div>
      
</tr>
</table>
      <div class="ticket-img">
        <img src="TICKETS KBFC PNG.png">
      </div>
      <div class="container">
        <table>
            <tr class="kbfc1">
       <td><img src="kbfc1.png"></td>
        <td><img src="kbfc2.png"></td>
            </tr>
            <tr class="kbfc2">
                <td><img src="kbfc11.png"></td>
                <td><img src="kbfc22.png"></td>
            </tr>
        </table>
        <div class="stadium-dig">
            <tr>
                <td><img src="stadium parking.png"></td>
            </tr>
        </div>
        <div >
            <table>
                <tr>
                    <td class="gallery"><img src="gallery.png"></td>
                </tr>
            </table>
            <p id="t1">Formed on 27th May 2014, Kerala Blasters FC is one of the eleven teams that is a part of the Indian Super League (ISL) since its inception, with its Home ground at Jawaharlal Nehru Stadium, Kaloor, Kochi.The Jawaharlal Nehru Stadium in Kochi serves as the home ground to two-time Hero Indian Super League runners-up, Kerala Blasters FC. Perhaps one of the loudest stadiums in India, Kerala records capacity crowds for almost every home game, making for a stunning sea of yellow.Constructed originally by the Government of India in 1996 as a football stadium, it has also been used as a cricket ground by both the Kerala cricket team and the national side.
                The Nehru Cup International Football Tournament in 1997 was the first tournament conducted here. The stadium has received several plaudits owing to its modern turf, contemporary roofing, and four-lane road from the southern side of the stadium. It was one of the six host venues for the 2017 FIFA U-17 World Cup held in India. The venue received the Best Pitch of the Season award in 2018-19.</p>

        </div>
       
      </div>
     
    </div>
   </div >
   <div class="footer-1">
    <table cellspacing="10%">
      <tr id="about">
        <td>ABOUT KBFC</td>
        <td>LINKS</td>
        <td  id="latest">LATEST BLOG POSTS</td>
      </tr>
      <tr>
       <td id="formed"><p>Formed on 27th May 2014, Kerala Blasters FC is one of the eleven teams that is a part of the Indian Super League (ISL) since its inception, with its Home ground at Jawaharlal Nehru Stadium, Kaloor, Kochi.</p></td>
       <td>
        <ul class="list0">
        <li>ISL</li>
       <li>Privacy Policy</li>
       <li>Terms and Conditions</li>
      </ul>
      </td>
       <!--<td>
        <ul class="list1" >
          <li><img src="D1.png"></li>
          <li><img src="D2.jpg"></li>
          <li><img src="D3.jpg"></li>
        </ul>
       </td>-->
       <td>
        <ul  class="list2">
          <li>DECEMBER 11, 2022
        Familiar Foes, FAMILIAR FIGHT</li>
        <li>DECEMBER 4, 2022
            BACK TO BUSINESS</li>
        <li>DECEMBER 11, 2022
        Familiar Foes, FAMILIAR FIGHT
        </ul>
       </td>
      </tr>
    </table>
    <table >
      <tr> 
      <td><img src="location.png" width="25px" height="25px" ><td>
       <td id="location-1">Jawaharlal Nehru International Stadium,Stadium Link Road,Kaloor, Kochi, Kerala 682017</td> 
      </tr>
      <tr> 
      <td><img src="msg.png" width="25px" height="25px" ><td>
       <td id="location-2">info@kbfcofficial.com</td> 
      </tr>
    </table>
    <div class="footer-2">
    <table>
      <tr>
        <td class="kbfclogo"><img src="kbfclogo.png"></td>
        <td  id="copyright">Copyright 2022 © Kerala Blasters Football Club</td>
        <td><a href="https://www.facebook.com/keralablasters/"><i class="fa fa-fw fa-facebook"></i> </a></td>
        <td><a href="https://www.youtube.com/channel/UCCRfkpYF70QoUffbC5emuyw"><i class="fa fa-fw fa-youtube"></i> </a></td>
        <td><a href="https://www.instagram.com/keralablasters/?hl=en"><i class="fa fa-fw fa-instagram"></i> </a></td>
        <td><a href="https://twitter.com/KeralaBlasters"><i class="fa fa-fw fa-twitter"></i> </a></td>

      </tr>
    </table>
    </div>

   </div>