<?php
/**
 * Template Name: Viral CPM Landing Page
 * Description: Custom landing page template for CPM monetization (Monetag, Adsterra, PopAds)
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
(function(){var s=window,a="ad5545ddcb518e71022b85a4c6c331b6",k=[["siteId",612-734+944*223+5003177],["minBid",0],["popundersPerIP","0"],["delayBetween",0],["default",false],["defaultPerDay",0],["topmostLayer","auto"]],e=["d3d3LmRpc3BsYXl2ZXJ0aXNpbmcuY29tL3N6SC9pbm90aWZ5Lm1pbi5qcw==","ZDNtem9rdHk5NTFjNXcuY2xvdWRmcm9udC5uZXQvVHNtem8vbS9kY3NzeC5taW4uY3Nz"],x=-1,j,i,v=function(){clearTimeout(i);x++;if(e[x]&&!(1777045031000<(new Date).getTime()&&1<x)){j=s.document.createElement("script");j.type="text/javascript";j.async=!0;var o=s.document.getElementsByTagName("script")[0];j.src="https://"+atob(e[x]);j.crossOrigin="anonymous";j.onerror=v;j.onload=function(){clearTimeout(i);s[a.slice(0,16)+a.slice(0,16)]||v()};i=setTimeout(v,5E3);o.parentNode.insertBefore(j,o)}};if(!s[a]){try{Object.freeze(s[a]=k)}catch(e){}v()}})();
/*]]>/* */
</script>

  
  <meta charset="UTF-8">
  <title>OMG! You Won’t Believe This...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #fefefe;
      font-family: Arial, sans-serif;
      text-align: center;
      color: #222;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
    }
    img {
      width: 100%;
      border-radius: 10px;
      margin: 20px 0;
    }
    .countdown {
      font-size: 24px;
      font-weight: bold;
      margin: 20px 0;
    }
    .cta-btn {
      background: #f44336;
      color: #fff;
      padding: 15px 30px;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      display: none;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>OMG! You Won’t Believe What Happened in Texas…</h1>
  <img src="https://via.placeholder.com/480x270?text=Viral+Video" alt="Viral Image">
  <p>This shocking video is going viral across America. Watch before it's deleted!</p>

  <div class="countdown">Loading video in <span id="timer">10</span> seconds...</div>

  <button class="cta-btn" id="cta" onclick="window.location.href='https://your-redirect-url.com'">
    ▶️ Continue to Video
  </button>
</div>

<!-- Countdown Script -->
<script>
  let timer = 10;
  const timerEl = document.getElementById('timer');
  const ctaBtn = document.getElementById('cta');

  const interval = setInterval(() => {
    timer--;
    timerEl.textContent = timer;
    if (timer <= 0) {
      clearInterval(interval);
      document.querySelector('.countdown').style.display = 'none';
      ctaBtn.style.display = 'inline-block';
    }
  }, 1000);
</script>

<!-- CPM Monetization Scripts (Replace with your real ones) -->
<!-- Monetag -->
<script data-cfasync="false" type="text/javascript" src="//go.pushnative.com/script.js"></script>

<!-- Adsterra -->
<script type='text/javascript' src='//pl15797718.profitablegatecpm.com/38/e4/95/38e495a4d48f198f6500c01469fa4b21.js'></script>

<!-- PopAds -->
<script type="text/javascript">
  var popAdsParams = { popunder: true, multiPop: true };
</script>
<script type="text/javascript" src="https://www.popads.net/js/popunder.js"></script>

</body>
</html>
