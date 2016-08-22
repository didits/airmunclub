$(document).ready(function(){
//play when video is visible
var videos = document.getElementsByClassName("waveform"), fraction = 0.8;
var player = SC.Widget($('iframe.sc-widget')[0]);

function checkScroll() {

  for(var i = 0; i < videos.length; i++) {
    var video = videos[i];
    var x = 0,
        y = 0,
        w = video.width,
        h = video.height,
        r, //right
        b, //bottom 
        visibleX, visibleY, visible,
        parent;
        console.log(h);
    parent = video;
    while (parent && parent !== document.body) {
      x += parent.offsetLeft;
      y += parent.offsetTop;
      parent = parent.offsetParent;
    }

    r = x + parseInt(w);
    b = y + parseInt(h);
   

    visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
    visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));
    

    visible = visibleX * visibleY / (w * h);


    if (visible > fraction) {
      console.log("play");
      playVideo();
    } else {
      pauseVideo();

    }
  }

};


// var tag = document.createElement('script');

// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
// var player;

// function onYouTubeIframeAPIReady() {
//   player = new YT.Player('player', {
//     events: {
//       'onReady': onPlayerReady,
//       'onStateChange': onPlayerStateChange
//     }
//   });
// };

// 4. The API will call this function when the video player is ready.
function go() {
    console.log("putar video");
    window.addEventListener('scroll', checkScroll, false);
    window.addEventListener('resize', checkScroll, false);

    //check at least once so you don't have to wait for scrolling for the    video to start
    window.addEventListener('load', checkScroll, false);
};

go();

function stopVideo() {
    player.stop();
};

function playVideo() {
  player.play();
};

function pauseVideo() {
  player.pause();
};

});