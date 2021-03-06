<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<style>
  * {
  	margin: 0;
  	padding: 0;
  	border: 0;
  }

  article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
      display:block;
  }
  /* font(s) that i'm using */
  header {
  	width: 90%;
  	margin: 0	auto;
  }

  header p {
  	font-family: 'Montserrat Thin', sans-serif;
  	text-align: center;
  	font-size: .81em;
  	color:#ffffff;
  }
  body {
  	font-family: 'Montserrat', sans-serif;
  	background: #090837;
  	margin: 0 auto;
  	min-width: 320px;
  	max-width: 1500px;
  	padding-top: 15px;
  }
  	/* original color
  	background-color: #334057;	*/
  	/* I might like this one better */


  main, h2 p, footer p  {
  	color: #ffffff;
  }
  main p {
  	font-size: .85em;
  	line-height: 1.5em;
  	margin-bottom: 20px;
  }
  h1 {
  	color: #ffffff;
  	font-size: 2em;
  	text-align: center;
  	margin: 15px auto;
  }
  h2 {
  	margin-top: 40px;
  	text-align: center;
  	font-size: 1em;
  }
  ul li{
  	list-style-type: none;
  	}
  ul li a {
  	color: #ffffff;
  	text-decoration: none;
  }

  figure {
  	width: 100%;
  	margin-bottom: 3em;
  }
  .orangeletter {
  	color:#FF8B00;
  }
  .thelogo{
  	width: 15%;
  	clear: none;
  	/* clear: both */;
  	}
  main, aside {
  	margin: 0 auto;
  	width:90%;
  	display: block;
  }
  main h3, aside h3 {
  	text-align: center;
  }
  article {
  	max-width: 900px;
  	margin: 0 auto;
  }
  footer {
  	text-align: center;
  	display: inline-block;
  	width: 100%
  	}
  footer p {
  	font-size: .6em;
  	margin: 2% auto;
  	padding: 0 2em;
  }
  figure img{
  	width: 100%;
  }
  figcaption p {
  	text-align: center;
  	color: #FF8B00;
  }
  .backbutton {
  	font-family: 'Montserrat', sans-serif;
  	border: 0;
  	margin: 0 auto;
  	background-color: #FF8B00;
  	width: 15em;
  	padding: .5em .3em;
  	font-size: .75em;
  	text-align: center;
  	color: #ffffff;
  	}
  .artwork li{
  	display:inline-block;
  }
  .desktop-menu {
  	display: none;
  }

  footer img {
  	width: 3em;
  	margin-top: 1em;
  }

  .work {
  	background-color: #ffffff;
  	border-radius: 5px;
  	transition: 3.5s;
  	box-shadow: 0 0 0px #23273D;
  	filter: contrast(100%);
  }

  label {
  		font-size: .9rem;
  	  color: #ffffff;
      display: block;
      width: 100%;
  		margin: 5px 0 5px 0;
  		}
  input {
  	width: 100%;
  	height: 1.4rem;
  }
  textarea {
  	width: 100%;
  	height: 4rem;
  }
  .buttons {
  	width: 30%;
  	margin: 10px 2.5% 0 0;
  	background-color: #FF8B00;
  	color: #ffffff;
  	border-radius: 3px;
  }

  /*-----------------------Animation-----------------------------*/


  .work:hover {
  	border-radius: 15px;
    -webkit-box-shadow:0 15px 6px #00000A;
    -ms-box-shadow:0 15px 6px #00000A;
    -moz-box-shadow:0 15px 6px #00000A;
    box-shadow: 0 15px 6px #00000A;
    transition: .5s;
  	filter: contrast(100%);
  	filter: grayscale(0);
  }


  /* -------- Hamburger CSS Code
  						https://codepen.io/g13nn/pen/eHGEF  ------------- */

  .hamburger{
  	background: inherit;
  	    position: absolute;
  	    top: 6px;
  	    right: 0;
  	    line-height: 35px;
  	    padding: 5px 15px 0px 15px;
  	    color: #ffffff;
  	    border: 0;
  	    font-size: 3em;
  	    font-weight: bold;
  	    cursor: pointer;
  	    outline: none;
  	    z-index: 10000000000000;
  }
  .cross{
    background:none;
    position:absolute;
    top:0px;
    right:0;
    padding:7px 15px 0px 15px;
    color:#999;
    border:0;
    font-size:3em;
    line-height:65px;
    font-weight:bold;
    cursor:pointer;
    outline:none;
    z-index:10000000000000;
  }
  .menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:100%; background:#f1f1f1;  position:absolute; text-align:center; font-size:12px;}
  .menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
  .menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
  .menu li:hover{display: block;    background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
  .menu ul li a { text-decoration:none;  margin: 0px; color:#666;}
  .menu ul li a:hover {  color: #666; text-decoration:none;}
  .menu a{text-decoration:none; color:#666;}
  .menu a:hover{text-decoration:none; color:#666;}

  .glyphicon-home{
    color:white;
    font-size:1.5em;
    margin-top:5px;
    margin:0 auto;
  }

  .edmisc {
  	clear:both;
  	width: 100%;
  }
  /* ------  Media Query 320px --------*/
  @media (min-width:320px) {
  	body {min-width: 320px;}
  	.thelogo {
  		width: 45px;
  	}
  	 .artwork li {
  	 width: 100%;
  		margin: 2% 0;
  	 }
  	 .work {
  		 width: 100%;
  		 height: 12em;
  		 object-fit:cover;
  	 }
  	 .aboutimage	 {
  		 width: 100%;
  		  margin: 2% 0;
  		}
  		.about-bio {
  			width: 100%;
  		}
  		main {
  			margin:20px auto 0 auto;
  			}
  		aside {
  			background-color: #334057;
  			width: 84%;
  			padding: 2%;
  			max-width: 488px;
  			min-width: 270px;
  			clear:both;
  		}
  /* for popup menu */
  .menu {
      z-index: 1000000;
      font-weight: bold;
      font-size: 0.8em;
      width: 71%;
      background: #1d1b8e;
      margin-bottom: -1%;
      position: absolute;
      text-align: center;
      font-size: 2em;
      color: white;
  }

  .menu li {
      display: block;
      padding: 16px 0 15px 0;
      border-bottom: #090837 7px solid;
      box-shadow: black;
  }

  .menu ul li a {
      text-decoration: none;
      margin: 0px;
      color: #ffffff;
  }
  }

  /* ------  Media Query 550px --------*/
  @media (min-width:550px) {
  	.thelogo {
  		width: 65px;
  	}
  	 .artwork li {
  		 width: 45%;
  		margin: 2% 2%;
  	 }
  	 .work {
  		 width: 100%;
  		 height: 12em;
  		 object-fit:cover;
  	 }
  	 .hamburger {
  		position: absolute;
  		top: 35px;
  		right: 20px;
  		font-size: 5em;
  	 }
  	 .aboutimage	 {
  		width: 40%;
  		 margin: 2% 0;
  		float:right;
  		clear:right;
  	 }
  	 .edmisc {
  		 clear: none;
  	 }
  	 .about-misc {
      clear: both;
      float: left;
      width: 50%;
  		 }
  	 .about-ed {
  		 width: 55%;
       float: left;
  	  }
  	}
  	aside {
  		width: 30%;
  		margin: 0 auto;
  		}
  		/* ------  Media Query 1024px --------*/
  	 @media (min-width:1024px) {
  		 .thelogo {
  			 width: 88px;
  		 }
  		 .artwork li {
  	 		width: 30%;
  	 		margin: 10px 10px;
  	 	 }
  	 	 .work {
  	 		 width: 100%;
  	 		 height: 12em;
  	 		 object-fit:cover;
  	 	 }
  		 .hamburger {
  			position: absolute;
      	top: 35px;
      	right: 20px;
      	font-size: 5em;
      }
  		.edmisc {
  			clear: left;
  		}
  		.about-misc {
  			clear: none;
       float: left;
       width: 45%;
  			}
  		.about-ed {
  			width: 40%;
  			float: left;
  		 }

  	 }
  	 /* ------  Media Query 1440px --------*/

  	 @media (min-width:1440px) and (max-width:1920px) {
  		 .work {
  		 	border-radius: 5px;
  		 	transition: 3.5s;
  		 	box-shadow: 0 0 0px #23273D;
  		 	filter: contrast(200%);
  		 	filter: grayscale(70%);
  		 }

  		 header h1 {
  			 clear: both;
  		 }
  		 .thelogo {
  			 float: left;
  			 width: 88px;
  		 }
  		 .artwork li {
  	 		width: 23%;
  	 		margin: 10px 10px;
  	 	 }
  	 	 .work {
  	 		 width: 100%;
  	 		 height: 12em;
  	 		 object-fit:cover;
  	 	 }
  		 .hamburger {
  			 display:none;
  		 }
  		 .desktop-menu {
  			 margin: 63px 0 0 50%;
  		    padding: 0;
  		    display: inline-block;
  		    float: right;
  		/*	margin: 35px 0 0 62%;
      	padding: 0;
      	display: inline-block; */
  		 }
  			.desktop-menu ul li {
  				list-style-type: none;
  		    display: inline-block;
  		    float: right;
  			}
  			.desktop-menu ul li a {
  				font-size: 1em;
  				margin: 0 20px;
  				float: right;
  				color: #FF8B00
  			}
  			.desktop-menu ul li a:hover {
  				color: #FFFFFF;
  				font-family: 'Montserrat SemiBold', sans-serif;
  			}

  			.backbutton {
  				font-family: 'Montserrat', sans-serif;
      		margin: 1em auto;
  		    width: 15em;
  		    font-size: 1em;
  			}
  			.edmisc {
  				clear:none;
  			}
  			.about-ed, .about-misc {
  				float:left;
  				width: 30%

  			}
  			.aboutimage {
  				max-width: 30%
  			}
  }



	</style>






<h1>Thank you for your enquiry</h1>
<p>Thanks for your interest. we have received your message, and we will be in touch shortly.</p>
<p>Form processor provided by <a href="http://www.inventpartners.com">Invent Partners web design York</a>.</p>



</body>
</html>
