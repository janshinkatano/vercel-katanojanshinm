<!DOCTYPE html>
<html>
<head>
<title>Katano Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://3.bp.blogspot.com/-UTA2Kino1i0/WnCoxFnuiwI/AAAAAAAAAvI/LZCgzCbbpzgMSRFJkcz0WLawCkjsYWdoACLcBGAs/s1600/photography-logo.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-6/394540045_3654698254786363_1026098659879401799_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF2oyWMMI1KoHj9XqF6BBgHM5yP17AKmHoznI_XsAqYerKs0pLff9whd-g6oSfGvYbFwZ95NeJfSQ5BpSwTyuWr&_nc_ohc=ntzAgj8MhvkQ7kNvgGL7fdO&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYCUYOWD2UJjqPJQB8e9HhlCvsh-dvvgrfjVtsG-8n0H7Q&oe=665047E3");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url(" https://scontent.fcrk2-1.fna.fbcdn.net/v/t39.30808-6/331258386_737830647755746_733837950347262272_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFBh8gEK08rD7FsS8PvyMk0e1mjF6OVvTx7WaMXo5W9PEnEztsQl3UinlFj6e0DzJX5EPHIDL17_Meg7cmgbl0U&_nc_ohc=AUQ66so9QHUQ7kNvgGbc0Km&_nc_ht=scontent.fcrk2-1.fna&oh=00_AYAReIOXW-rAs1ZiYQAU8xSwlL28A_dl6Av46RPr3WXU1w&oe=66503130");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love photography</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. This was a our quiz 1 in this term finals, creating websites and deploying through git, github, and vercel to finally be able to see it in public. The course were under IT119 Application Development and Emerging Technology, here I can both showcase my talent and knowledge about technologies since both of them requires understanding of how digital technologies work to implement quality and efficiency of delivering products and services to people. It was one prerequisite to pass this course but other than that it can enhance my skills regarding with creation and deploting websites to public. </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>My Name is KATANO, Janshin M.</b></p><br>
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-6/441044537_3790740071182180_7625943474552326723_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEqdgatj7s5Ss4bYIpMB6N3dVd-U8-dsD51V35Tz52wPgEG5g2rIk2R9ddR7zdBr_50AD8KNbGHd6drbtgcS6n6&_nc_ohc=KWffjqdpGuEQ7kNvgHoPjVj&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYDOrdc2ezFOMX-MBZ0UN75hUY9JBb4DPhTSO6-SPXyQBw&oe=6650416B" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am Janshin showing my photography skills through creating a websites to prove that technology has the dominant power to deliver and execute certain things for us to experience the advancement of the emerging technologies out there to aid our daily tasks.
         Having talent in photography is skill to present emotions through image or representing the value of that image since we can feel and see how the photographer's emotion through the photos they took because every snap of them has deep meaning for them why they choose to take a snap of it. We all have different taste when it comes to photograpgy because there are people who engage in sceneries, subjects, or etc.</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here are some of my latest photos.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t39.30808-6/298954942_3314776345445224_47567933943837060_n.jpg?stp=cp6_dst-jpg&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHy62eMQUjmfDdGFNeQU29Po5BvpRPNdTWjkG-lE811NWQon0Xl630kYuQEcCnfC1JDT3wpHzptTBM-8zZkbbzS&_nc_ohc=yWVXtjZbGBQQ7kNvgGirGqT&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYAehsl6ngxpmwCYYvIj4DHdihwypNQKuoqMb8EdNB_WDw&oe=6650289B" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="https://scontent.fcrk4-2.fna.fbcdn.net/v/t1.6435-9/59656713_2333313493591519_4089043328056688640_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEzOKJplSCUrmACMxpOpxnCCHefJONWn1YId58k41afVoGrj36G1jMBFaTwBkF2diKNC3ubfk_i5ueJwj7EkgEw&_nc_ohc=o8h2jInQeuAQ7kNvgE36Y5W&_nc_ht=scontent.fcrk4-2.fna&oh=00_AYALs3itznYkxMcMt71NdzkVilJ-q7xyeb5IrLEvgXrTkg&oe=6671CB39" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t39.30808-6/298527346_3313135138942678_2689836802504296475_n.jpg?stp=cp6_dst-jpg&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFCn53aCDrsIPB9ZgkM9FDbkgwkzVmlWE-SDCTNWaVYT47wpgHnQ0RJWymYgvKbE_lnfDqvRgdPsw2DdY-ITxXF&_nc_ohc=b66QDHhm1qcQ7kNvgFyiF20&_nc_ht=scontent.fcrk2-2.fna&oh=00_AYDQkxRZqqoaaHM09GVNJgo4LaiutYK2KmgNBC1CsZVS-A&oe=6650303A" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t1.6435-9/58809733_2327057904217078_1809927316210450432_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGdZxel9BPcdFnTLjRIRkhfNEgNoplVdmw0SA2imVV2bBMz13ThjvpZIQA80gfCvCH1pFQfwxPXTQcug5L9TYgh&_nc_ohc=94nyJ038YgsQ7kNvgGYycCZ&_nc_ht=scontent.fcrk4-1.fna&oh=00_AYC9vbSXagGnlTBdMBvVGMlPP8BSuTpiHHS-jMFsHBxnKA&oe=6671F782" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="https://scontent.fcrk4-2.fna.fbcdn.net/v/t1.6435-9/69122135_2413830072206527_4024791708230221824_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFeZioc80FWEgi7ce4Nyfh9qNj8UMRhgMGo2PxQxGGAwfDhXuuxZvwHqF5U0qSc_DHXeB7092nMsIwHzVoM18Nb&_nc_ohc=yRbtZOWaHXwQ7kNvgGjPAim&_nc_ht=scontent.fcrk4-2.fna&oh=00_AYBuZ9wJC9edKG7HWAkaOG6W9dJfTVHGzRqJhpVnIuYGxw&oe=6671BC5F" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t1.6435-9/69357879_2413187552270779_2697369607987003392_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHBuHq50XrFpdz3RCZP_SAAOhCFMcp1glE6EIUxynWCUb9-7zA74UP3MfjZjJYIJOelD1P0Fn2eY5Wl5uP4nQ-8&_nc_ohc=8OLA9QdzSjQQ7kNvgHwW1k9&_nc_oc=AdhnKL-j5C5L4SxvxTt4PpjqTCJz8VRRlWDjGfb6WAix3GIc7-dH2yXb0HoRRpdoJp7Oxlr0kt225GZLVMXHT1ph&_nc_ht=scontent.fcrk2-2.fna&oh=00_AYAWSGsENBRE29STY8fItPCkSgICBlf6w0_i92PS0WbkmA&oe=6671D761" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t1.6435-9/68320743_2407514556171412_7990948462805909504_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFmAwwIodwShviso7I-wV0LW0Ied-ebyWxbQh5355vJbG41mb2tceny3e18KJgxnyumhqQgvBy-YQ8Ri4dFD5u0&_nc_ohc=ULcyMVkMurYQ7kNvgFMHYcu&_nc_ht=scontent.fcrk2-2.fna&oh=00_AYBRMqKT1B6bTnP1aYoMYLVDVAsQHFsEo-B9s452UVDCAQ&oe=6671C954" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t1.6435-9/57370528_2333313750258160_7496494780965191680_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH-edVD5iv3X4SVVJfEhbendy9MB-0LfeR3L0wH7Qt95BKDJPAz9hregVyIePRHpTLDSL3Ikzopa_7OBRaWoyKK&_nc_ohc=gWNcKpMttA8Q7kNvgGxKjAl&_nc_ht=scontent.fcrk2-2.fna&oh=00_AYBjWMlgQzYvX6MW2sVH0-evIL5dP4brgDslbo001mX1ew&oe=6671E6B5" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> City of San Fernando, La Union<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +63 123 545 695<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: janshinmkatano@mail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
