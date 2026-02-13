
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mooncrypt</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Press Start 2P',monospace;
  background:linear-gradient(to bottom,#05070a,#0b1117,#000);
  color:#e5e7eb;
  overflow-x:hidden;
}

/* fog */
.fog-layer{
  position:fixed;
  inset:0;
  pointer-events:none;
  z-index:-1;
  opacity:.22;
  background:
    radial-gradient(circle at 20% 30%,rgba(255,255,255,.05),transparent 40%),
    radial-gradient(circle at 70% 60%,rgba(255,255,255,.04),transparent 45%),
    radial-gradient(circle at 40% 80%,rgba(255,255,255,.03),transparent 50%);
  animation:fogMove 90s linear infinite;
}
@keyframes fogMove{
  from{transform:translate(0,0)}
  to{transform:translate(-300px,-200px)}
}

/* HUD */
.hud{
  position:fixed;
  top:16px;
  left:50%;
  transform:translateX(-50%);
  display:flex;
  gap:16px;
  z-index:10;
}
.hud-box{
  background:#020617;
  border:1px solid #1e293b;
  padding:8px 12px;
  font-size:9px;
  color:#cbd5f5;
}

/* layout */
.container{max-width:1200px;margin:auto;padding:140px 24px}
.hero{
  min-height:100vh;
  display:flex;
  align-items:center;
}
.hero-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:64px;
  align-items:center;
}
.hero h1{
  font-size:42px;
  line-height:1.3;
}
.hero h1 span{
  color:#38bdf8;
  text-shadow:0 0 25px rgba(56,189,248,.5);
}
.hero p{
  margin-top:24px;
  font-size:12px;
  color:#94a3b8;
  line-height:1.9;
}
.download_btn{
  display:inline-block;
  margin-top:36px;
  padding:18px 28px;
  background:linear-gradient(to right,#38bdf8,#0ea5e9);
  color:#020617;
  text-decoration:none;
  font-size:12px;
  box-shadow:0 0 35px rgba(56,189,248,.5);
  transition:.2s;
}
.download_btn:hover{transform:scale(1.05)}

img{
  width:100%;
  border-radius:16px;
  border:1px solid rgba(56,189,248,.15);
}

/* sections */
.section{padding:140px 24px}
.row{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:64px;
  align-items:center;
}
.row h2{
  font-size:22px;
  margin-bottom:24px;
}
.row p{
  font-size:11px;
  line-height:2;
  color:#94a3b8;
}
.row ul{
  margin-top:24px;
  font-size:10px;
  line-height:2.1;
  color:#cbd5f5;
}
.reverse{direction:rtl}
.reverse>*{direction:ltr}

/* scroll anim */
.reveal{
  opacity:0;
  transform:translateY(60px);
  transition:1s ease;
}
.reveal.show{
  opacity:1;
  transform:none;
}

/* footer */
footer{
  padding:40px;
  text-align:center;
  font-size:9px;
  color:#64748b;
}

@media(max-width:900px){
  .hero-grid,.row{grid-template-columns:1fr}
}
</style>
</head>

<body>

<div class="fog-layer"></div>

<!-- HUD -->


<!-- HERO -->
<section id="demo" class="hero container reveal">

  <div class="hero-grid">
    <div>
      <h1>Face the abyss.<br><span>Together.</span></h1>
      <p>
        Mooncrypt is a dark co-op action roguelite built entirely around boss encounters.
There is no grind, no safe path, and no room for mistakes.

Every run drops you straight into danger.
You either learn, adapt, and survive as a team —
or the dungeon ends you.

      </p>
   
 
       <a href="#demo" class="px-5 py-3 rounded-lg bg-indigo-500 text-black font-semibold shadow-lg hover:scale-102 transition">
      <a href="https://gofile.io/d/nfxIAR" class="download_btn">Download (.exe)</a>
    </div>
    <img src="2doyun3.png">
  </div>
</section>

<!-- INFO 1 -->
<section class="section reveal">
  <div class="row">
    <div>
      <h2>Bosses Are the Game</h2>
      <p>
        Boss fights are not obstacles between content — they are the content.
Each boss is designed to break habits, punish panic, and force pattern recognition.
Attacks are delayed, openings are deceptive,
and every phase exists to test awareness rather than raw reflex.

      </p>
      
    </div>
    <img src="boss.jpg">
  </div>
</section>

<!-- INFO 2 -->
<section class="section reveal">
  <div class="row reverse">
    <div>
      <h2>Spell Synergy, Not Spam</h2>
      <p>
        Magic is built to interact.
        Lightning chains through fire.
        Shields block breath attacks.
        Wrong timing kills the whole team.
      </p>
      
    </div>
    <img src="screenshots1.jpg">
  </div>
</section>

<!-- INFO 3 -->
<section class="section reveal">
  <div class="row">
    <div>
      <h2>Built for Co-op Pressure</h2>
      <p>
       The game is designed around shared responsibility.
Aggro, cooldowns, and survival are interconnected across the team.
There is no solo carry.
One mistake can end the run for everyone.
      </p>
     
    </div>
    <img src="screenshots4.jpg">
  </div>
  <section class="section reveal">
  <div class="row reverse">
    <div>
      <h2>Don't Just Be a Player, Be a Hunter: The Art of Defeating Bosses</h2>
      <p>
        Seeing that 'Victory' screen after pouring in all that sweat and tears is an incredible feeling. Especially when you’ve taken down a boss as relentless as a dragon, the taste of victory is on a whole different level.
      </p>
      
    </div>
    <img src="victory.jpg">
  </div>
</section>
</section>

<!-- DOWNLOAD -->
<section id="demo" class="section reveal" style="text-align:center">
  <h2 style="font-size:24px;margin-bottom:24px">Are You Ready?</h2>
   <a href="#demo" class="download_btn">Download (.exe)</a>
</section>

<footer>
  © 2025 Mooncrypt — Early Access
</footer>

<div class="menu">
<?php 

include 'server.php';

?>
</div>>


</body>
</html>


