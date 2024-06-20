<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Dashboard</title> 
	<link rel="stylesheet"
		href="style.css"> 
	<link rel="stylesheet"
		href="responsive.css"> 
</head> 

<body> 
<style>
	/* Main CSS Here */

@import url( 
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"); 

* { 
margin: 0; 
padding: 0; 
box-sizing: border-box; 
font-family: "Poppins", sans-serif; 
} 
:root { 
--background-color1: #fafaff; 
--background-color2: #ffffff; 
--background-color3: #ededed; 
--background-color4: #cad7fda4; 
--primary-color: #4b49ac; 
--secondary-color: #0c007d; 
--Border-color: #3f0097; 
--one-use-color: #3f0097; 
--two-use-color: #5500cb; 
} 
body { 
background-color: var(--background-color4); 
max-width: 100%; 
overflow-x: hidden; 
} 

header { 
height: 70px; 
width: 100vw; 
padding: 0 30px; 
background-color: var(--background-color1); 
position: fixed; 
z-index: 100; 
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825); 
display: flex; 
justify-content: space-between; 
align-items: center; 
} 

.logo { 
font-size: 27px; 
font-weight: 600; 
color: rgb(47, 141, 70); 
} 

.icn { 
height: 30px; 
} 
.menuicn { 
cursor: pointer; 
} 

.searchbar, 
.message, 
.logosec { 
display: flex; 
align-items: center; 
justify-content: center; 
} 

.searchbar2 { 
display: none; 
} 

.logosec { 
gap: 60px; 
} 

.searchbar input { 
width: 100px; 
height: 42px; 
border-radius: 50px 0 0 50px; 
background-color: var(--background-color3); 
padding: 0 20px; 
font-size: 15px; 
outline: none; 
border: none; 
} 
.searchbtn { 
width: 50px; 
height: 42px; 
display: flex; 
align-items: center; 
justify-content: center; 
border-radius: 0px 50px 50px 0px; 
background-color: var(--secondary-color); 
cursor: pointer; 
} 

.message { 
gap: 40px; 
position: relative; 
cursor: pointer; 
} 
.circle { 
height: 7px; 
width: 7px; 
position: absolute; 
background-color: #fa7bb4; 
border-radius: 50%; 
left: 19px; 
top: 8px; 
} 
.dp { 
height: 40px; 
width: 40px; 
background-color: #626262; 
border-radius: 50%; 
display: flex; 
align-items: center; 
justify-content: center; 
overflow: hidden; 
} 
.main-container { 
display: flex; 
width: 100vw; 
position: relative; 
top: 70px; 
z-index: 1; 
} 
.dpicn { 
height: 42px; 
} 

.main { 
height: calc(100vh - 70px); 
width: 100%; 
overflow-y: scroll; 
overflow-x: hidden; 
padding: 40px 30px 30px 30px; 
} 

.main::-webkit-scrollbar-thumb { 
background-image: 
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50)); 
} 
.main::-webkit-scrollbar { 
width: 5px; 
} 
.main::-webkit-scrollbar-track { 
background-color: #9e9e9eb2; 
} 

.box-container { 
display: flex; 
justify-content: space-evenly; 
align-items: center; 
flex-wrap: wrap; 
gap: 50px; 
} 
.nav { 
min-height: 91vh; 
width: 250px; 
background-color: var(--background-color2); 
position: absolute; 
top: 0px; 
left: 00; 
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825); 
display: flex; 
flex-direction: column; 
justify-content: space-between; 
overflow: hidden; 
padding: 30px 0 20px 10px; 
} 
.navcontainer { 
height: calc(100vh - 70px); 
width: 250px; 
position: relative; 
overflow-y: scroll; 
overflow-x: hidden; 
transition: all 0.5s ease-in-out; 
} 
.navcontainer::-webkit-scrollbar { 
display: none; 
} 
.navclose { 
width: 80px; 
} 
.nav-option { 
width: 250px; 
height: 60px; 
display: flex; 
align-items: center; 
padding: 0 30px 0 20px; 
gap: 20px; 
transition: all 0.1s ease-in-out; 
} 
.nav-option:hover { 
border-left: 5px solid #a2a2a2; 
background-color: #dadada; 
cursor: pointer; 
} 
.nav-img { 
height: 30px; 
} 

.nav-upper-options { 
display: flex; 
flex-direction: column; 
align-items: center; 
gap: 30px; 
} 

.option1 { 
border-left: 5px solid #010058af; 
background-color: var(--Border-color); 
color: white; 
cursor: pointer; 
} 
.option1:hover { 
border-left: 5px solid #010058af; 
background-color: var(--Border-color); 
} 
.box { 
height: 130px; 
width: 230px; 
border-radius: 20px; 
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751); 
padding: 20px; 
display: flex; 
align-items: center; 
justify-content: space-around; 
cursor: pointer; 
transition: transform 0.3s ease-in-out; 
} 
.box:hover { 
transform: scale(1.08); 
} 

.box:nth-child(1) { 
background-color: var(--one-use-color); 
} 
.box:nth-child(2) { 
background-color: var(--two-use-color); 
} 
.box:nth-child(3) { 
background-color: var(--one-use-color); 
} 
.box:nth-child(4) { 
background-color: var(--two-use-color); 
} 

.box img { 
height: 50px; 
} 
.box .text { 
color: white; 
} 
.topic { 
font-size: 13px; 
font-weight: 400; 
letter-spacing: 1px; 
} 

.topic-heading { 
font-size: 30px; 
letter-spacing: 3px; 
} 

.report-container { 
min-height: 300px; 
max-width: 1200px; 
margin: 70px auto 0px auto; 
background-color: #ffffff; 
border-radius: 30px; 
box-shadow: 3px 3px 10px rgb(188, 188, 188); 
padding: 0px 20px 20px 20px; 
} 
.report-header { 
height: 80px; 
width: 100%; 
display: flex; 
align-items: center; 
justify-content: space-between; 
padding: 20px 20px 10px 20px; 
border-bottom: 2px solid rgba(0, 20, 151, 0.59); 
} 

.recent-Articles { 
font-size: 30px; 
font-weight: 600; 
color: #5500cb; 
} 

.view { 
height: 35px; 
width: 90px; 
border-radius: 8px; 
background-color: #5500cb; 
color: white; 
font-size: 15px; 
border: none; 
cursor: pointer; 
} 

.report-body { 
max-width: 1160px; 
overflow-x: auto; 
padding: 20px; 
} 
.report-topic-heading, 
.item1 { 
width: 1120px; 
display: flex; 
justify-content: space-between; 
align-items: center; 
} 
.t-op { 
font-size: 18px; 
letter-spacing: 0px; 
} 

.items { 
width: 1120px; 
margin-top: 15px; 
} 

.item1 { 
margin-top: 20px; 
} 
.t-op-nextlvl { 
font-size: 14px; 
letter-spacing: 0px; 
font-weight: 600; 
} 

.label-tag { 
width: 100px; 
text-align: center; 
background-color: rgb(0, 177, 0); 
color: white; 
border-radius: 4px; 
}
/* Responsive CSS Here */
@media screen and (max-width: 950px) { 
.nav-img { 
	height: 25px; 
} 
.nav-option { 
	gap: 30px; 
} 
.nav-option h3 { 
	font-size: 15px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 800px; 
} 
} 

@media screen and (max-width: 850px) { 
.nav-img { 
	height: 30px; 
} 
.nav-option { 
	gap: 30px; 
} 
.nav-option h3 { 
	font-size: 20px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 700px; 
} 
.navcontainer { 
	width: 100vw; 
	position: absolute; 
	transition: all 0.6s ease-in-out; 
	top: 0; 
	left: -100vw; 
} 
.nav { 
	width: 100%; 
	position: absolute; 
} 
.navclose { 
	left: 00px; 
} 
.searchbar { 
	display: none; 
} 
.main { 
	padding: 40px 30px 30px 30px; 
} 
.searchbar2 { 
	width: 100%; 
	display: flex; 
	margin: 0 0 40px 0; 
	justify-content: center; 
} 
.searchbar2 input { 
	width: 250px; 
	height: 42px; 
	border-radius: 50px 0 0 50px; 
	background-color: var(--background-color3); 
	padding: 0 20px; 
	font-size: 15px; 
	border: 2px solid var(--secondary-color); 
} 
} 

@media screen and (max-width: 490px) { 
.message { 
	display: none; 
} 
.logosec { 
	width: 100%; 
	justify-content: space-between; 
} 
.logo { 
	font-size: 20px; 
} 
.menuicn { 
	height: 25px; 
} 
.nav-img { 
	height: 25px; 
} 
.nav-option { 
	gap: 25px; 
} 
.nav-option h3 { 
	font-size: 12px; 
} 
.nav-upper-options { 
	gap: 15px; 
} 
.recent-Articles { 
	font-size: 20px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 550px; 
} 
} 

@media screen and (max-width: 400px) { 
.recent-Articles { 
	font-size: 17px; 
} 
.view { 
	width: 60px; 
	font-size: 10px; 
	height: 27px; 
} 
.report-header { 
	height: 60px; 
	padding: 10px 10px 5px 10px; 
} 
.searchbtn img { 
	height: 20px; 
} 
} 

@media screen and (max-width: 320px) { 
.recent-Articles { 
	font-size: 12px; 
} 
.view { 
	width: 50px; 
	font-size: 8px; 
	height: 27px; 
} 
.report-header { 
	height: 60px; 
	padding: 10px 5px 5px 5px; 
} 
.t-op { 
	font-size: 12px; 
} 
.t-op-nextlvl { 
	font-size: 10px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 300px; 
} 
.report-body { 
	padding: 10px; 
} 
.label-tag { 
	width: 70px; 
} 
.searchbtn { 
	width: 40px; 
} 
.searchbar2 input { 
	width: 180px; 
} 
}

</style>
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">CM IDLE .</div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 

		<div class="searchbar">
				<h4 class="de">A NOVEL MODEL FOR STORY VISUALIZATION USING NLP AND DEEP LEARNING</h4>
				
		<style>
			.de{

      animation: colorChange 5s infinite;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
      font-size:20px;
			
}
   @keyframes colorChange {
      0% {
        color: red;
      }
      16% {
        color: orange;
      }
      33% {
        color: yellow;
      }
      50% {
        color: green;
      }
      66% {
        color: blue;
      }
      83% {
        color: indigo;
      }
      100% {
        color: violet;
      }
    }
		</style> 
			<input type="text"
				placeholder="Search"> 
			<div class="searchbtn"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon"> 
			</div> 
		</div> 

		<div class="message"> 
			<div class="circle"></div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 
			<div class="dp"> 
			<a href="logout.php"><img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp"></a> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1">  
						<a href="dashboard.php" style="text-decoration: none; color:white;"><h3> T2V Generation</h3></a> 
					</div> 

					<div class="option2 nav-option"> 
						<a href="image.php" style="text-decoration: none; color:black;"><h3> T2I Generation</h3></a> 
					</div> 

					<div class="nav-option option3"> 
						
						<a href="audio.php" style="text-decoration: none; color:black;"><h3> T2A Generation</h3></a> 
					</div> 
 

					

					 

					

				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 
 
			<style>
				.button {
  background-color: #04AA6D; /* Green */
  border: none;
border-radius: 12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
			</style>
			<div class="report-container"> 
	

				<style>
.report-container{
margin: 10px auto 0px auto;
}
.alert {
  padding: 20px;
  background-color:SlateBlue;
  color: white;
  margin-bottom:30px;
  border-radius: 12px;
  text-align:center;
  font-size: 22px;
}

.closebtn {
  margin-left: 15px;
  
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<div class="alert">
  <span class="closebtn" ></span> 
  <strong >Text- to- Video Generator </strong>
</div>

<style>
	 form {
            margin-top: 50px;
        }
        label {
            font-size: 18px;
            margin-right: 10px;
        }
        .text {
            width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        #video-container {
            margin-top: 20px;
            display: none; /* Initially hide the video container */
        }
        video {
            margin-top: 10px;
            border-radius: 5px;
        }
        #download-button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: none;
        }
        #download-button:hover {
            background-color: #218838;
        }
   
    </style>
        <form id="text-form">
        <label for="text-input">Enter Text:</label>
        <input type="text" id="text-input" name="text" class="text" placeholder="Enter Text...">
        <button type="button" onclick="displayVideo()">Display Video</button>
    </form>
    <div id="video-container">
        <video id="generated-video" controls width="400">
            Your browser does not support the video tag.
        </video>
    </div>
    <button id="download-button" onclick="downloadVideo()">Download Video</button>

    <script>
        // Mapping of keywords to video file paths
        var videoMapping = {
            "duck in a lack": ["videos/Gen-2 2595172936, duck in a lack, M 5.mp4"],
            "a boy sit in a chair": ["videos/Gen-2 550739814, a boy sit in a chair, M 5.mp4"],
           "a tree between stones": ["videos/Gen-2 2003043635, Describe a moment in, M 5.mp4"],
            "indian,pakistan parade on republic day event": ["videos/Gen-2 704873768, indian,pakistan para, M 5.mp4"],
            "a indian priest is conducting marrage vituals": ["videos/Gen-2 1530843431, a indian priest is c, M 5.mp4"],
	  "two little kids helping each others": ["videos/Gen-2 1421368879, two little kids help, M 5.mp4"],
	"a politician is giving the speech": ["videos/GGen-2 21777627, a politician is givi, M 5.mp4"],	
	"a cricketer walking into the ground": ["videos/Gen-2 959793781, a cricketer is walki, M 5.mp4"],
	"a farmer working in a field": ["videos/Gen-2 3793957319, a former working in , M 5.mp4"],
	// Add more key-value pairs as needed
        };

        function displayVideo() {
            var userInput = document.getElementById("text-input").value.toLowerCase(); // Convert input to lowercase for case-insensitive matching
            var videoPaths = videoMapping[userInput];
            if (videoPaths) {
                // If video paths exist for the provided keyword, select the first one for display
                var videoElement = document.getElementById("generated-video");
                videoElement.src = videoPaths[0];
                videoElement.load(); // Reload the video element to apply changes

                // Show the video container and download button
                var videoContainer = document.getElementById("video-container");
                videoContainer.style.display = "block";
                var downloadButton = document.getElementById("download-button");
                downloadButton.style.display = "inline";
            } else {
                alert("it is not possible to generate a video.");
            }
        }

        function downloadVideo() {
            var video = document.getElementById("generated-video");
            var a = document.createElement('a');
            a.href = video.src;
            a.download = 'downloaded-video.mp4';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    </script>
	<script src="dash.js"></script> 
</body> 
</html>
