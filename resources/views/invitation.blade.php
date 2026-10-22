<!doctype html>
<html lang="ka">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#2E050B">
<title>{{ config('wedding.title') }}</title>
<meta name="description" content="{{ config('wedding.description') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ config('wedding.title') }}">
<meta property="og:description" content="{{ config('wedding.description') }}">
<meta property="og:url" content="{{ url('/') }}">
@verbatim
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&amp;family=Noto+Serif+Georgian:wght@300;400;500;600&amp;family=Pinyon+Script&amp;display=swap">
<style>
html,body{margin:0;height:100%;background:#2E050B}
[hidden]{display:none !important}
#viewport{position:fixed;inset:0;overflow:hidden;background:#2E050B}
#scaler{position:absolute;left:50%;top:50%;width:540px;height:960px;transform-origin:50% 50%;transform:translate(-50%,-50%)}
a{color:#E9CF92}a:hover{color:#F6E3B0}
.foil{background:linear-gradient(100deg,#A9782F 0%,#E6C27A 22%,#F7E4B2 38%,#C99A4A 55%,#F2D79A 72%,#9E6E2B 100%);background-size:220% 100%;background-position:0% 50%;-webkit-background-clip:text;background-clip:text;color:transparent}
.ln{display:inline-block;padding:0.12em 0.42em;white-space:nowrap}
.armed [data-anim="write"]{-webkit-mask-image:linear-gradient(90deg,#000 0,#000 calc(var(--p,0) * 118% - 18%),transparent calc(var(--p,0) * 118%));mask-image:linear-gradient(90deg,#000 0,#000 calc(var(--p,0) * 118% - 18%),transparent calc(var(--p,0) * 118%));-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat}
.armed [data-anim="draw"] :is(path,rect,line,circle){stroke-dasharray:1 2;stroke-dashoffset:1}
.armed [data-anim="fade"]{opacity:0}
.gate .door{transition:transform 1.6s cubic-bezier(.75,0,.2,1) .45s}
.gate.open{pointer-events:none}
.gate.open .door-l{transform:translateX(-101%)}
.gate.open .door-r{transform:translateX(101%)}
.gate .gate-content{transition:opacity .55s ease,transform .7s ease}
.gate.open .gate-content{opacity:0;transform:scale(.95)}
.compass{animation:spin 26s linear infinite;transform-origin:50% 50%}
.needle{animation:sway 4s ease-in-out infinite;transform-origin:60px 60px}
@keyframes spin{to{transform:rotate(360deg)}}
@keyframes sway{0%,100%{transform:rotate(-14deg)}50%{transform:rotate(18deg)}}
.start-btn{position:relative;overflow:hidden;cursor:pointer;transition:transform .25s ease,box-shadow .25s ease}
.start-btn:hover{transform:translateY(-1px);box-shadow:0 0 0 6px rgba(231,200,130,.14),0 10px 30px rgba(0,0,0,.35)}
.start-btn:focus-visible{outline:2px solid #F6E3B0;outline-offset:4px}
.start-btn::after{content:"";position:absolute;top:0;bottom:0;width:40%;left:-60%;background:linear-gradient(100deg,transparent,rgba(255,250,235,.55),transparent);animation:sheen 3.2s ease-in-out infinite}
@keyframes sheen{0%,55%{left:-60%}100%{left:130%}}
.halo{animation:halo 2.6s ease-out infinite}
@keyframes halo{0%{transform:scale(1);opacity:.55}100%{transform:scale(1.35,1.7);opacity:0}}
.sparkle{opacity:0}
.is-done .sparkle{animation:twinkle 2.8s ease-in-out infinite}
@keyframes twinkle{0%,100%{opacity:0;transform:scale(.4) rotate(0deg)}50%{opacity:1;transform:scale(1) rotate(45deg)}}
.is-done .foil{animation:glint 3.4s ease .2s 1 both}
@keyframes glint{0%{background-position:0% 50%}100%{background-position:100% 50%}}
.icon-btn{cursor:pointer}
.icon-btn:focus-visible,.replay:focus-visible{outline:2px solid #F6E3B0;outline-offset:3px}
.replay{cursor:pointer;animation:rise .8s ease both}
@keyframes rise{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:none}}
.dust{opacity:0}
.is-playing .dust,.is-done .dust{animation-name:drift;animation-timing-function:ease-in-out;animation-iteration-count:infinite}
@keyframes drift{0%{opacity:0;transform:translate(0,0) scale(.5)}20%{opacity:.95}80%{opacity:.55}100%{opacity:0;transform:translate(22px,-160px) scale(1.1)}}
.petal{opacity:0}
.is-done .petal{animation:fall 8s linear 3 both}
@keyframes fall{0%{opacity:0;transform:translate(0,-60px) rotate(0deg)}10%{opacity:.85}85%{opacity:.6}100%{opacity:0;transform:translate(70px,1040px) rotate(560deg)}}
.seal{transition:transform .8s cubic-bezier(.5,0,.7,.4),opacity .6s ease .2s}
.gate.open .seal{transform:scale(1.7) rotate(-14deg);opacity:0}
.seal-pulse{animation:sealpulse 2.6s ease-in-out infinite}
@keyframes sealpulse{0%,100%{transform:scale(1)}50%{transform:scale(1.05)}}
.tipglow{animation:glow 1s ease-in-out infinite}
@keyframes glow{0%,100%{opacity:.3}50%{opacity:.95}}
.countdown{animation:rise 1s ease .5s both}
.map-link{color:inherit;text-decoration:none;border-bottom:1px solid rgba(221,187,118,.45)}
.map-link:hover{color:#F6E3B0;border-bottom-color:#F6E3B0}
</style>
@endverbatim
</head>
<body data-countdown="{{ config('wedding.starts_at') }}">
@verbatim
<div id="viewport">
<div id="scaler">
<div id="stage" class="armed" style="width: 540px; height: 960px; position: relative; overflow: hidden; background-color: #6A0E19; box-shadow: inset 0 0 180px rgba(20, 0, 4, 0.7); font-family: 'Cormorant Garamond', 'Noto Serif Georgian', Georgia, serif; color: #DDBB76">

  <svg aria-hidden="true" width="540" height="960" style="position: absolute; left: 0; top: 0; opacity: 0.32; mix-blend-mode: multiply; pointer-events: none">
    <filter id="grain"><feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="2" stitchTiles="stitch"></feTurbulence><feColorMatrix values="0 0 0 0 0.12  0 0 0 0 0  0 0 0 0 0.02  0 0 0 0.9 0"></feColorMatrix></filter>
    <rect width="540" height="960" filter="url(#grain)"></rect>
  </svg>

  <svg data-anim="draw" data-s="0.9" data-d="2.2" data-w="0.75" aria-hidden="true" width="540" height="960" fill="none" stroke="#D8B46C" style="position: absolute; left: 0; top: 0; pointer-events: none">
    <rect pathLength="1" x="22" y="22" width="496" height="916" stroke-width="1.2"></rect>
    <rect pathLength="1" x="30" y="30" width="480" height="900" stroke-width="0.6" stroke-opacity="0.7"></rect>
  </svg>

  <div style="position: absolute; left: -8px; top: 34px; width: 260px; height: 250px; pointer-events: none">
    <svg data-anim="draw" data-s="1.6" data-d="3.2" data-w="0.32" data-pen="on" aria-hidden="true" viewBox="0 0 260 250" width="260" height="250" fill="none" stroke="#D8B46C" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round">
      <path pathLength="1" d="M14 240 C40 205 70 170 108 136 C140 108 178 78 214 50 C228 39 240 30 252 20"></path>
      <path pathLength="1" d="M108 136 C100 112 102 92 112 72"></path>
      <path pathLength="1" d="M146 104 C166 108 182 118 192 132"></path>
      <g transform="translate(34 212) rotate(-118) scale(1.05)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(50 192) rotate(8)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(72 166) rotate(-112)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(92 150) rotate(12) scale(0.95)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(120 126) rotate(-108) scale(0.95)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(146 104) rotate(-20) scale(0.9)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(176 80) rotate(-104) scale(0.85)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(200 62) rotate(16) scale(0.8)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(226 40) rotate(-100) scale(0.72)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(250 22) rotate(-38) scale(0.7)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(112 70) rotate(-90) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(-18) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(54) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(126) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(198) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <circle pathLength="1" cx="112" cy="70" r="2"></circle>
      <circle pathLength="1" cx="192" cy="135" r="2.8"></circle>
      <circle pathLength="1" cx="181" cy="119" r="2"></circle>
      <circle pathLength="1" cx="102" cy="100" r="2.2"></circle>
    </svg>
  </div>

  <div style="position: absolute; right: -8px; bottom: 34px; width: 260px; height: 250px; transform: rotate(180deg); pointer-events: none">
    <svg data-anim="draw" data-s="2.3" data-d="3.6" data-w="0.32" aria-hidden="true" viewBox="0 0 260 250" width="260" height="250" fill="none" stroke="#D8B46C" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round">
      <path pathLength="1" d="M14 240 C40 205 70 170 108 136 C140 108 178 78 214 50 C228 39 240 30 252 20"></path>
      <path pathLength="1" d="M108 136 C100 112 102 92 112 72"></path>
      <path pathLength="1" d="M146 104 C166 108 182 118 192 132"></path>
      <g transform="translate(34 212) rotate(-118) scale(1.05)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(50 192) rotate(8)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(72 166) rotate(-112)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(92 150) rotate(12) scale(0.95)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(120 126) rotate(-108) scale(0.95)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(146 104) rotate(-20) scale(0.9)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(176 80) rotate(-104) scale(0.85)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(200 62) rotate(16) scale(0.8)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(226 40) rotate(-100) scale(0.72)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(250 22) rotate(-38) scale(0.7)"><path pathLength="1" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path><path pathLength="1" d="M3 0 L24 0"></path></g>
      <g transform="translate(112 70) rotate(-90) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(-18) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(54) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(126) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <g transform="translate(112 70) rotate(198) scale(0.36)"><path pathLength="1" vector-effect="non-scaling-stroke" d="M0 0 C6 -7 20 -8 30 0 C20 8 6 7 0 0 Z"></path></g>
      <circle pathLength="1" cx="112" cy="70" r="2"></circle>
      <circle pathLength="1" cx="192" cy="135" r="2.8"></circle>
      <circle pathLength="1" cx="181" cy="119" r="2"></circle>
      <circle pathLength="1" cx="102" cy="100" r="2.2"></circle>
    </svg>
  </div>

  <div style="position: absolute; left: 40px; right: 40px; top: 84px; display: flex; flex-direction: column; align-items: center; text-align: center">

    <div style="position: relative; width: 236px; height: 156px; margin-bottom: 16px">
      <img data-anim="fade" data-s="4.3" data-d="1.5" src="/images/couple.webp" alt="ოლივია და ალექსანდრე" style="position: absolute; left: 14px; top: 12px; width: 208px; height: 132px; object-fit: cover; border-radius: 50%">
      <svg data-anim="draw" data-s="3.3" data-d="1.6" data-w="0.6" data-pen="on" aria-hidden="true" width="236" height="156" viewBox="0 0 236 156" fill="none" stroke="#D8B46C" stroke-linejoin="round" style="position: absolute; left: 0; top: 0; overflow: visible">
        <path pathLength="1" stroke-width="1.2" d="M118 4 A114 74 0 1 1 117.99 4 Z"></path>
        <path pathLength="1" stroke-width="0.6" stroke-opacity="0.75" d="M118 10 A108 68 0 1 1 117.99 10 Z"></path>
        <path pathLength="1" stroke-width="1" d="M118 148 L123 154 L118 160 L113 154 Z"></path>
      </svg>
    </div>

    <div style="display: flex; flex-direction: column; align-items: center; gap: 2px; font-family: 'Noto Serif Georgian', serif; font-size: 15px; font-weight: 500; letter-spacing: 0.14em; color: #DDBB76">
      <div data-anim="write" data-s="5.2" data-d="1.6" class="ln">მადლობა, რომ ალამაზებთ</div>
      <div data-anim="write" data-s="6.9" data-d="1.1" class="ln">ჩვენს დღეს</div>
    </div>

    <div style="display: flex; flex-direction: column; align-items: center; margin-top: 14px; font-family: 'Noto Serif Georgian', serif; font-weight: 300; line-height: 1.2">
      <div data-anim="write" data-s="8.3" data-d="1.7" class="ln foil" style="font-size: 66px; letter-spacing: 0.02em">ოლივია</div>
      <div data-anim="write" data-s="10.1" data-d="0.6" class="ln" style="font-size: 26px; font-weight: 400; color: #DDBB76; margin-top: -4px; margin-bottom: -4px">და</div>
      <div data-anim="write" data-s="10.8" data-d="2" class="ln foil" style="font-size: 58px; letter-spacing: 0.02em">ალექსანდრე</div>
    </div>

    <svg data-anim="draw" data-s="12.9" data-d="0.8" data-w="0.6" data-pen="on" aria-hidden="true" width="280" height="16" fill="none" stroke="#D8B46C" stroke-width="1" style="margin-top: 20px">
      <path pathLength="1" d="M140 2 L146 8 L140 14 L134 8 Z"></path>
      <path pathLength="1" d="M128 8 L10 8"></path>
      <path pathLength="1" d="M152 8 L270 8"></path>
    </svg>

    <div data-anim="write" data-s="13.6" data-d="0.6" class="ln" style="margin-top: 14px; font-family: 'Noto Serif Georgian', serif; font-size: 15px; font-weight: 500; letter-spacing: 0.3em">ორშაბათი</div>
    <div data-anim="write" data-s="14.3" data-d="1.5" class="ln foil" style="font-size: 50px; font-weight: 500; letter-spacing: 0.06em; line-height: 1.1">02 · 11 · 2026</div>
    <div data-anim="write" data-s="15.9" data-d="0.8" class="ln" style="font-family: 'Noto Serif Georgian', serif; font-size: 15px; font-weight: 500; letter-spacing: 0.18em">16:00 საათზე</div>

    <svg data-anim="draw" data-s="16.8" data-d="0.6" data-w="0.7" data-pen="on" aria-hidden="true" width="120" height="10" fill="none" stroke="#D8B46C" stroke-width="1" style="margin-top: 16px; margin-bottom: 12px">
      <path pathLength="1" d="M60 5 L4 5"></path>
      <path pathLength="1" d="M60 5 L116 5"></path>
    </svg>

    <div data-anim="write" data-s="17.4" data-d="1" class="ln" style="font-family: 'Noto Serif Georgian', serif; font-size: 18px; font-weight: 600; letter-spacing: 0.12em; color: #E6C784">„ბათუმის სახლში“</div>
    <div data-anim="write" data-s="18.5" data-d="1.5" class="ln" style="font-family: 'Noto Serif Georgian', serif; font-size: 15px; font-weight: 400; letter-spacing: 0.03em"><a class="map-link" href="https://www.google.com/maps/search/?api=1&amp;query=%E1%83%91%E1%83%90%E1%83%97%E1%83%A3%E1%83%9B%E1%83%98%E1%83%A1+%E1%83%A1%E1%83%90%E1%83%AE%E1%83%9A%E1%83%98+Batumi+Parnavaz+Mepe+69" target="_blank" rel="noopener">ქ. ბათუმი, ფარნავაზის 69</a></div>

    <div data-anim="write" data-s="20.1" data-d="1.5" class="ln foil" style="margin-top: 16px; font-family: 'Noto Serif Georgian', serif; font-weight: 300; font-size: 19px; line-height: 1.3">ცერემონიის შემდეგ — საზეიმო სუფრა</div>

    <svg data-anim="draw" data-s="21.7" data-d="0.9" data-w="0.6" data-pen="on" aria-hidden="true" width="140" height="24" fill="none" stroke="#D8B46C" stroke-width="1" stroke-linecap="round" style="margin-top: 8px">
      <path pathLength="1" d="M10 12 C30 2 50 2 70 12 C90 22 110 22 130 12"></path>
      <path pathLength="1" d="M70 12 C66 7 66 3 70 0 C74 3 74 7 70 12 Z"></path>
    </svg>
  </div>

  <svg class="sparkle" aria-hidden="true" width="18" height="18" viewBox="0 0 20 20" style="position: absolute; left: 92px; top: 300px; animation-delay: 0.1s"><path d="M10 0 L12 8 L20 10 L12 12 L10 20 L8 12 L0 10 L8 8 Z" fill="#F6E3B0"></path></svg>
  <svg class="sparkle" aria-hidden="true" width="12" height="12" viewBox="0 0 20 20" style="position: absolute; left: 448px; top: 248px; animation-delay: 0.9s"><path d="M10 0 L12 8 L20 10 L12 12 L10 20 L8 12 L0 10 L8 8 Z" fill="#F6E3B0"></path></svg>
  <svg class="sparkle" aria-hidden="true" width="16" height="16" viewBox="0 0 20 20" style="position: absolute; left: 430px; top: 470px; animation-delay: 1.6s"><path d="M10 0 L12 8 L20 10 L12 12 L10 20 L8 12 L0 10 L8 8 Z" fill="#F6E3B0"></path></svg>
  <svg class="sparkle" aria-hidden="true" width="10" height="10" viewBox="0 0 20 20" style="position: absolute; left: 76px; top: 560px; animation-delay: 2.2s"><path d="M10 0 L12 8 L20 10 L12 12 L10 20 L8 12 L0 10 L8 8 Z" fill="#F6E3B0"></path></svg>
  <svg class="sparkle" aria-hidden="true" width="14" height="14" viewBox="0 0 20 20" style="position: absolute; left: 120px; top: 760px; animation-delay: 0.5s"><path d="M10 0 L12 8 L20 10 L12 12 L10 20 L8 12 L0 10 L8 8 Z" fill="#F6E3B0"></path></svg>
  <svg class="sparkle" aria-hidden="true" width="11" height="11" viewBox="0 0 20 20" style="position: absolute; left: 400px; top: 680px; animation-delay: 1.3s"><path d="M10 0 L12 8 L20 10 L12 12 L10 20 L8 12 L0 10 L8 8 Z" fill="#F6E3B0"></path></svg>

  <div class="dust" aria-hidden="true" style="position: absolute; left: 70px; top: 820px; width: 4px; height: 4px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 8px 2px rgba(246, 227, 176, 0.6); animation-duration: 9s; animation-delay: 0s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 150px; top: 700px; width: 3px; height: 3px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 6px 2px rgba(246, 227, 176, 0.5); animation-duration: 11s; animation-delay: 1.4s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 250px; top: 880px; width: 4px; height: 4px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 8px 2px rgba(246, 227, 176, 0.6); animation-duration: 10s; animation-delay: 3s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 330px; top: 600px; width: 3px; height: 3px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 6px 2px rgba(246, 227, 176, 0.5); animation-duration: 12s; animation-delay: 0.7s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 420px; top: 760px; width: 4px; height: 4px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 8px 2px rgba(246, 227, 176, 0.6); animation-duration: 9.5s; animation-delay: 2.2s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 470px; top: 420px; width: 3px; height: 3px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 6px 2px rgba(246, 227, 176, 0.5); animation-duration: 10.5s; animation-delay: 4s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 60px; top: 420px; width: 3px; height: 3px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 6px 2px rgba(246, 227, 176, 0.5); animation-duration: 11.5s; animation-delay: 5s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 380px; top: 300px; width: 4px; height: 4px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 8px 2px rgba(246, 227, 176, 0.6); animation-duration: 9s; animation-delay: 6s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 200px; top: 260px; width: 3px; height: 3px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 6px 2px rgba(246, 227, 176, 0.5); animation-duration: 12s; animation-delay: 2.8s"></div>
  <div class="dust" aria-hidden="true" style="position: absolute; left: 290px; top: 470px; width: 2px; height: 2px; border-radius: 50%; background-color: #F6E3B0; box-shadow: 0 0 6px 2px rgba(246, 227, 176, 0.5); animation-duration: 8.5s; animation-delay: 3.6s"></div>

  <svg class="petal" aria-hidden="true" width="16" height="16" viewBox="0 0 30 30" style="position: absolute; left: 60px; top: 0; animation-delay: 0s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z M15 6 L15 24" fill="none" stroke="#E6C27A" stroke-width="1.4"></path></svg>
  <svg class="petal" aria-hidden="true" width="12" height="12" viewBox="0 0 30 30" style="position: absolute; left: 140px; top: 0; animation-delay: 2.6s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z" fill="#C9A04F" fill-opacity="0.7"></path></svg>
  <svg class="petal" aria-hidden="true" width="18" height="18" viewBox="0 0 30 30" style="position: absolute; left: 230px; top: 0; animation-delay: 1.2s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z M15 6 L15 24" fill="none" stroke="#E6C27A" stroke-width="1.4"></path></svg>
  <svg class="petal" aria-hidden="true" width="11" height="11" viewBox="0 0 30 30" style="position: absolute; left: 320px; top: 0; animation-delay: 4.1s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z" fill="#C9A04F" fill-opacity="0.7"></path></svg>
  <svg class="petal" aria-hidden="true" width="15" height="15" viewBox="0 0 30 30" style="position: absolute; left: 400px; top: 0; animation-delay: 0.6s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z M15 6 L15 24" fill="none" stroke="#E6C27A" stroke-width="1.4"></path></svg>
  <svg class="petal" aria-hidden="true" width="13" height="13" viewBox="0 0 30 30" style="position: absolute; left: 470px; top: 0; animation-delay: 3.3s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z" fill="#C9A04F" fill-opacity="0.7"></path></svg>
  <svg class="petal" aria-hidden="true" width="14" height="14" viewBox="0 0 30 30" style="position: absolute; left: 20px; top: 0; animation-delay: 5.2s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z M15 6 L15 24" fill="none" stroke="#E6C27A" stroke-width="1.4"></path></svg>
  <svg class="petal" aria-hidden="true" width="10" height="10" viewBox="0 0 30 30" style="position: absolute; left: 280px; top: 0; animation-delay: 6.4s"><path d="M15 2 C24 8 24 22 15 28 C6 22 6 8 15 2 Z" fill="#C9A04F" fill-opacity="0.7"></path></svg>

    <div id="countdown" class="countdown" hidden style="position: absolute; left: 0; right: 0; bottom: 52px; display: flex; justify-content: center; gap: 20px; text-align: center">
        <div style="display: flex; flex-direction: column; align-items: center; min-width: 48px">
          <div class="foil" data-cd="d" style="font-size: 30px; font-weight: 500; line-height: 1">0</div>
          <div style="margin-top: 5px; font-family: 'Noto Serif Georgian', serif; font-size: 12px; font-weight: 500; letter-spacing: 0.08em; color: #DDBB76">დღე</div>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; min-width: 48px">
          <div class="foil" data-cd="h" style="font-size: 30px; font-weight: 500; line-height: 1">0</div>
          <div style="margin-top: 5px; font-family: 'Noto Serif Georgian', serif; font-size: 12px; font-weight: 500; letter-spacing: 0.08em; color: #DDBB76">საათი</div>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; min-width: 48px">
          <div class="foil" data-cd="m" style="font-size: 30px; font-weight: 500; line-height: 1">0</div>
          <div style="margin-top: 5px; font-family: 'Noto Serif Georgian', serif; font-size: 12px; font-weight: 500; letter-spacing: 0.08em; color: #DDBB76">წუთი</div>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; min-width: 48px">
          <div class="foil" data-cd="s" style="font-size: 30px; font-weight: 500; line-height: 1">0</div>
          <div style="margin-top: 5px; font-family: 'Noto Serif Georgian', serif; font-size: 12px; font-weight: 500; letter-spacing: 0.08em; color: #DDBB76">წამი</div>
        </div>
    </div>
    <button type="button" class="replay icon-btn" id="replayBtn" hidden aria-label="თავიდან ნახვა" title="თავიდან ნახვა" style="position: absolute; left: 42px; top: 42px; width: 44px; height: 44px; border-radius: 999px; border: 1px solid rgba(221, 187, 118, 0.55); background: rgba(74, 6, 15, 0.5); color: #EBD08F; display: flex; align-items: center; justify-content: center; z-index: 15">
      <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-6.7"></path><path d="M3 4v5h5"></path></svg>
    </button>

      <button type="button" class="icon-btn" id="muteBtn" hidden aria-label="ხმის გამორთვა" style="position: absolute; right: 42px; top: 42px; width: 44px; height: 44px; border-radius: 999px; border: 1px solid rgba(221, 187, 118, 0.55); background: rgba(74, 6, 15, 0.5); color: #EBD08F; display: flex; align-items: center; justify-content: center; z-index: 15">
      <span id="icoOn" style="display: flex">
        <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5 6 9H2v6h4l5 4z"></path><path d="M15.5 8.5a5 5 0 0 1 0 7"></path><path d="M19 5a10 10 0 0 1 0 14"></path></svg>
      </span>
      <span id="icoOff" style="display: none">
        <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5 6 9H2v6h4l5 4z"></path><path d="m22 9-6 6"></path><path d="m16 9 6 6"></path></svg>
      </span>
    </button>

  <div id="pen" aria-hidden="true" style="position: absolute; left: 0; top: 0; width: 70px; height: 70px; opacity: 0; transform-origin: 4px 66px; pointer-events: none; z-index: 12; filter: drop-shadow(3px 6px 6px rgba(20, 0, 4, 0.55))">
    <svg width="70" height="70" viewBox="0 0 70 70" style="overflow: visible">
      <defs>
        <radialGradient id="tipG">
          <stop offset="0" stop-color="#FFF6D6" stop-opacity="1"></stop>
          <stop offset="1" stop-color="#F2D79A" stop-opacity="0"></stop>
        </radialGradient>
        <linearGradient id="penGold" x1="0" y1="1" x2="1" y2="0">
          <stop offset="0" stop-color="#9E6E2B"></stop>
          <stop offset="0.45" stop-color="#F7E4B2"></stop>
          <stop offset="1" stop-color="#B8893E"></stop>
        </linearGradient>
      </defs>
      <circle class="tipglow" cx="4" cy="66" r="9" fill="url(#tipG)"></circle>
      <path d="M20 36 L34 50 L64 20 C68 16 68 10 64 6 C60 2 54 2 50 6 Z" fill="#2A0509" stroke="#C99A4A" stroke-width="1"></path>
      <path d="M52 8 L62 18" stroke="#E6C27A" stroke-width="1.4"></path>
      <path d="M14 42 L20 36 L34 50 L28 56 Z" fill="url(#penGold)"></path>
      <path d="M4 66 L14 42 L28 56 Z" fill="url(#penGold)" stroke="#8A5E22" stroke-width="0.8" stroke-linejoin="round"></path>
      <path d="M4 66 L18 52" stroke="#5A3A12" stroke-width="0.9"></path>
      <circle cx="18.6" cy="51.4" r="1.6" fill="#5A3A12"></circle>
    </svg>
  </div>

  <div id="gate" class="gate" lang="ka" style="position: absolute; inset: 0; z-index: 20">
    <div class="door door-l" style="position: absolute; left: 0; top: 0; bottom: 0; width: 50%; background-color: #560A14; border-right: 1px solid #C99A4A; box-shadow: inset -40px 0 80px rgba(20, 0, 4, 0.55)"></div>
    <div class="door door-r" style="position: absolute; right: 0; top: 0; bottom: 0; width: 50%; background-color: #560A14; box-shadow: inset 40px 0 80px rgba(20, 0, 4, 0.55)"></div>
    <div class="seal" aria-hidden="true" style="position: absolute; left: 50%; top: 118px; width: 84px; height: 84px; margin-left: -42px; filter: drop-shadow(0 6px 10px rgba(20, 0, 4, 0.6))">
      <svg class="seal-pulse" width="84" height="84" viewBox="0 0 80 80">
        <defs>
          <radialGradient id="sealG" cx="0.38" cy="0.32" r="0.75">
            <stop offset="0" stop-color="#F7E4B2"></stop>
            <stop offset="0.55" stop-color="#D3A957"></stop>
            <stop offset="1" stop-color="#8E6224"></stop>
          </radialGradient>
        </defs>
        <path d="M40 3 C50 3 54 9 62 10 C72 12 74 22 76 30 C79 38 76 46 77 52 C76 63 66 68 60 72 C52 77 46 76 40 77 C32 78 24 75 18 70 C10 64 4 56 4 46 C3 38 6 30 8 24 C12 14 20 10 28 6 C33 4 36 3 40 3 Z" fill="url(#sealG)"></path>
        <circle cx="40" cy="40" r="27" fill="none" stroke="#7A531C" stroke-opacity="0.6" stroke-width="1.2"></circle>
        <circle cx="40" cy="40" r="23" fill="none" stroke="#7A531C" stroke-opacity="0.35" stroke-width="0.6" stroke-dasharray="1 2.4"></circle>
        <text x="40" y="47" text-anchor="middle" font-family="Noto Serif Georgian, serif" font-weight="500" font-size="19" fill="#6B4515">ო&amp;ა</text>
      </svg>
    </div>
    <div class="gate-content" style="position: absolute; left: 50px; right: 50px; top: 230px; padding: 40px 20px 36px; background-color: #560A14; display: flex; flex-direction: column; align-items: center; text-align: center; gap: 22px">
      <div style="font-family: 'Cormorant Garamond', serif; font-size: 13px; font-weight: 600; letter-spacing: 0.5em; color: #DDBB76">02 · 11 · 2026</div>
      <svg aria-hidden="true" width="110" height="110" viewBox="0 0 120 120" fill="none" stroke="#D8B46C" stroke-linecap="round" stroke-linejoin="round">
        <g class="compass">
          <circle cx="60" cy="60" r="56" stroke-width="1"></circle>
          <circle cx="60" cy="60" r="49" stroke-width="0.6" stroke-dasharray="1.5 4.2"></circle>
          <path d="M60 4 L60 12 M60 108 L60 116 M4 60 L12 60 M108 60 L116 60" stroke-width="1"></path>
          <path d="M60 22 L66 54 L98 60 L66 66 L60 98 L54 66 L22 60 L54 54 Z" stroke-width="0.9"></path>
          <path d="M60 34 L63 57 L86 60 L63 63 L60 86 L57 63 L34 60 L57 57 Z" stroke-width="0.6" transform="rotate(45 60 60)"></path>
        </g>
        <g class="needle">
          <path d="M60 30 L64 60 L60 64 L56 60 Z" fill="#E6C27A" stroke="none"></path>
          <path d="M60 90 L64 60 L60 56 L56 60 Z" stroke-width="0.8"></path>
          <circle cx="60" cy="60" r="2.6" fill="#560A14" stroke-width="1"></circle>
        </g>
      </svg>
      <h1 class="foil" style="margin: 0; font-family: 'Noto Serif Georgian', serif; font-size: 30px; font-weight: 500; line-height: 1.4">მზად ხარ<br>თავგადასავლისთვის?</h1>
      <div style="position: relative; display: flex; align-items: center; justify-content: center; margin-top: 6px">
        <div class="halo" aria-hidden="true" style="position: absolute; inset: 0; border-radius: 999px; border: 1px solid #E6C27A"></div>
        <button type="button" class="start-btn" id="startBtn" style="height: 54px; padding: 0 46px; border-radius: 999px; border: none; background-color: #E2BF78; color: #3E0710; font-family: 'Noto Serif Georgian', serif; font-size: 17px; font-weight: 600; letter-spacing: 0.06em">დაწყება</button>
      </div>
      <div style="display: flex; align-items: center; gap: 8px; font-family: 'Noto Serif Georgian', serif; font-size: 12px; color: #D4B272">
        <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5 6 9H2v6h4l5 4z"></path><path d="M15.5 8.5a5 5 0 0 1 0 7"></path></svg>
        ჩართე ხმა — მელოდია ჟღერს
      </div>
    </div>
  </div>

</div>
</div>
</div>
<script>
(function () {
  var stage = document.getElementById('stage');
  var pen = document.getElementById('pen');
  var gate = document.getElementById('gate');
  var startBtn = document.getElementById('startBtn');
  var replayBtn = document.getElementById('replayBtn');
  var muteBtn = document.getElementById('muteBtn');
  var countdownEl = document.getElementById('countdown');
  var scaler = document.getElementById('scaler');
  var END = 22.9;
  var phase = 'intro', muted = false;
  var items = null, raf = 0, t0 = 0, pp = null, lastTarget = null, penSeen = false;
  var ac = null, master = null, bus = null, sched = 0, nextBar = 0, audioT0 = 0, beat = 60 / 92, bar = beat * 3;

  function fit() {
    var s = Math.min(window.innerWidth / 540, window.innerHeight / 960);
    scaler.style.transform = 'translate(-50%, -50%) scale(' + s + ')';
  }
  window.addEventListener('resize', fit);
  fit();

  function clamp(v) { return Math.max(0, Math.min(1, v)); }
  function ease(v) { return v < 0.5 ? 2 * v * v : 1 - Math.pow(-2 * v + 2, 2) / 2; }

  function setPhase(p) {
    phase = p;
    stage.className = p === 'done' ? 'is-done' : (p === 'play' ? 'armed is-playing' : 'armed');
    if (p !== 'intro') gate.classList.add('open');
    replayBtn.hidden = p !== 'done';
    countdownEl.hidden = p !== 'done';
    muteBtn.hidden = p === 'intro' || !ac;
    if (p === 'done') { replayBtn.style.animation = 'none'; void replayBtn.offsetWidth; replayBtn.style.animation = ''; }
  }

  function collect() {
    return Array.prototype.slice.call(stage.querySelectorAll('[data-anim]')).map(function (el) {
      var type = el.getAttribute('data-anim');
      return {
        el: el, type: type,
        s: parseFloat(el.getAttribute('data-s')) || 0,
        d: parseFloat(el.getAttribute('data-d')) || 1,
        w: parseFloat(el.getAttribute('data-w')) || 0.5,
        pen: el.getAttribute('data-pen') === 'on',
        shapes: type === 'draw' ? Array.prototype.slice.call(el.querySelectorAll('path,rect,line,circle')) : null
      };
    });
  }

  function resetAnims() {
    (items || collect()).forEach(function (it) {
      it.el.style.removeProperty('--p');
      it.el.style.opacity = '';
      if (it.shapes) it.shapes.forEach(function (sh) { sh.style.strokeDashoffset = ''; });
    });
    items = null; pp = null; lastTarget = null; penSeen = false;
    pen.style.opacity = '0';
  }

  function begin() {
    if (phase === 'play') return;
    resetAnims();
    startAudio();
    setPhase('play');
    t0 = performance.now();
    cancelAnimationFrame(raf);
    raf = requestAnimationFrame(frame);
  }

  function frame(now) {
    if (!items) items = collect();
    var t = (now - t0) / 1000;
    var rr = stage.getBoundingClientRect();
    var z = (rr.width / stage.offsetWidth) || 1;
    var target = null;
    for (var k = 0; k < items.length; k++) {
      var it = items[k];
      var p = clamp((t - it.s) / it.d);
      if (it.type === 'write') {
        it.el.style.setProperty('--p', p.toFixed(4));
        if (p > 0 && p < 1) {
          var r = it.el.getBoundingClientRect();
          target = {
            x: (r.left - rr.left) / z + (r.width / z) * (0.06 + 0.86 * p),
            y: (r.top - rr.top) / z + (r.height / z) * 0.66 + Math.sin(t * 26) * 2.4
          };
        }
      } else if (it.type === 'draw') {
        var n = it.shapes.length, w = n > 1 ? it.w : 1, active = null, activeQ = 0;
        for (var i = 0; i < n; i++) {
          var st = n > 1 ? (i / (n - 1)) * (1 - w) : 0;
          var q = clamp((p - st) / w);
          it.shapes[i].style.strokeDashoffset = String(1 - ease(q));
          if (q > 0 && q < 1) { active = it.shapes[i]; activeQ = ease(q); }
        }
        if (it.pen && active && active.getPointAtLength) {
          try {
            var pt = active.getPointAtLength(activeQ * active.getTotalLength());
            var m = active.getScreenCTM();
            target = { x: (m.a * pt.x + m.c * pt.y + m.e - rr.left) / z, y: (m.b * pt.x + m.d * pt.y + m.f - rr.top) / z };
          } catch (e) {}
        }
      } else if (it.type === 'fade') {
        it.el.style.opacity = String(p);
      }
    }

    if (target) { lastTarget = target; penSeen = true; }
    var leaving = t > END - 1.1;
    var tgt = leaving ? { x: 640, y: 1080 } : (target || lastTarget || { x: 600, y: 1000 });
    if (!pp) pp = { x: 620, y: 1040 };
    var kk = target ? 0.3 : 0.12;
    pp.x += (tgt.x - pp.x) * kk;
    pp.y += (tgt.y - pp.y) * kk;
    var rot = target ? Math.sin(t * 19) * 2.5 : -6;
    pen.style.opacity = (penSeen || t > 1.2) && !leaving ? '1' : (leaving ? String(clamp((END - t) / 1.1)) : '0');
    pen.style.transform = 'translate(' + (pp.x - 4).toFixed(1) + 'px,' + (pp.y - 66).toFixed(1) + 'px) rotate(' + rot.toFixed(2) + 'deg)';

    if (t >= END) {
      pen.style.opacity = '0';
      if (ac && bus) { try { [77, 81, 84, 89].forEach(function (m, q) { bell(m, ac.currentTime + 0.05 + q * 0.12, 0.07); }); } catch (e) {} }
      setPhase('done');
      tickCountdown();
      return;
    }
    raf = requestAnimationFrame(frame);
  }

  /* ---------- music ---------- */
  function freq(m) { return 440 * Math.pow(2, (m - 69) / 12); }

  function startAudio() {
    try {
      var AC = window.AudioContext || window.webkitAudioContext;
      if (!AC) return;
      clearInterval(sched);
      if (ac) { try { ac.close(); } catch (e) {} }
      ac = new AC();
      if (ac.state === 'suspended' && ac.resume) ac.resume();
      master = ac.createGain();
      master.gain.setValueAtTime(0.0001, ac.currentTime);
      if (!muted) master.gain.linearRampToValueAtTime(0.55, ac.currentTime + 1.6);
      var comp = ac.createDynamicsCompressor();
      master.connect(comp); comp.connect(ac.destination);
      var conv = ac.createConvolver();
      var len = Math.floor(ac.sampleRate * 3);
      var buf = ac.createBuffer(2, len, ac.sampleRate);
      for (var c = 0; c < 2; c++) {
        var d = buf.getChannelData(c);
        for (var i = 0; i < len; i++) d[i] = (Math.random() * 2 - 1) * Math.pow(1 - i / len, 2.6);
      }
      conv.buffer = buf;
      var wet = ac.createGain(); wet.gain.value = 0.34;
      conv.connect(wet); wet.connect(master);
      bus = ac.createGain(); bus.gain.value = 1;
      bus.connect(master); bus.connect(conv);
      [65, 69, 72, 77, 81, 84, 89].forEach(function (m, q) { bell(m, ac.currentTime + 0.08 + q * 0.075, 0.055); });
      audioT0 = ac.currentTime + 1.1;
      nextBar = 0;
      scheduleAudio();
      sched = setInterval(scheduleAudio, 200);
    } catch (e) {}
  }

  var F = [57, 60, 65], Dm = [57, 62, 65], Bb = [58, 62, 65], C = [55, 60, 64], Am = [57, 60, 64];
  var BASS = [41, 38, 46, 48, 41, 45, 46, 41];
  var CH = [[F, F], [Dm, Dm], [Bb, Bb], [C, C], [F, F], [Am, Am], [Bb, C], [F, F]];
  var MEL = [
    [[72, 0], [69, 2]],
    [[74, 0], [72, 1.5], [69, 2]],
    [[70, 0], [74, 1], [77, 2]],
    [[76, 0], [72, 2]],
    [[81, 0], [79, 2], [77, 2.5]],
    [[76, 0], [72, 1.5], [76, 2]],
    [[74, 0], [77, 1], [76, 2]],
    [[77, 0], [76, 2], [74, 2.5]]
  ];

  function scheduleAudio() {
    if (!ac) return;
    while (nextBar < 48 && audioT0 + nextBar * bar < ac.currentTime + 1.2) {
      var b = nextBar, i = b % 8, pass = Math.floor(b / 8), t = audioT0 + b * bar;
      tone(BASS[i], t, 0.2, 'sine', 2.2);
      CH[i].forEach(function (ch, j) { ch.forEach(function (m) { tone(m, t + (j + 1) * beat, 0.035, 'triangle', 0.7); }); });
      MEL[i].forEach(function (n) {
        bell(n[0], t + n[1] * beat, 0.15);
        if (pass >= 1) bell(n[0] + 12, t + n[1] * beat + 0.01, 0.045);
      });
      if (pass >= 1 && i === 7) [84, 81, 77, 72].forEach(function (m, q) { bell(m, t + 2 * beat + q * beat / 4, 0.04); });
      nextBar++;
    }
    if (nextBar >= 48 && ac.currentTime > audioT0 + 47 * bar) {
      clearInterval(sched);
      master.gain.setTargetAtTime(0, ac.currentTime, 0.8);
    }
  }

  function bell(m, t, g) {
    var f = freq(m), env = ac.createGain();
    env.gain.setValueAtTime(0.0001, t);
    env.gain.linearRampToValueAtTime(g, t + 0.006);
    env.gain.exponentialRampToValueAtTime(0.0001, t + 2.4);
    env.connect(bus);
    [[1, 1], [2.005, 0.28], [3.01, 0.07], [4.2, 0.03]].forEach(function (h) {
      var o = ac.createOscillator(), hg = ac.createGain();
      o.type = 'sine'; o.frequency.value = f * h[0]; hg.gain.value = h[1];
      o.connect(hg); hg.connect(env);
      o.start(t); o.stop(t + 2.5);
    });
  }

  function tone(m, t, g, type, dur) {
    var o = ac.createOscillator(), env = ac.createGain(), lp = ac.createBiquadFilter();
    lp.type = 'lowpass'; lp.frequency.value = 1400;
    o.type = type; o.frequency.value = freq(m);
    env.gain.setValueAtTime(0.0001, t);
    env.gain.linearRampToValueAtTime(g, t + 0.02);
    env.gain.exponentialRampToValueAtTime(0.0001, t + dur);
    o.connect(lp); lp.connect(env); env.connect(bus);
    o.start(t); o.stop(t + dur + 0.05);
  }

  function toggleMute() {
    muted = !muted;
    document.getElementById('icoOn').style.display = muted ? 'none' : 'flex';
    document.getElementById('icoOff').style.display = muted ? 'flex' : 'none';
    muteBtn.setAttribute('aria-label', muted ? 'ხმის ჩართვა' : 'ხმის გამორთვა');
    if (master && ac) {
      master.gain.cancelScheduledValues(ac.currentTime);
      master.gain.setTargetAtTime(muted ? 0 : 0.55, ac.currentTime, 0.12);
    }
  }

  /* ---------- countdown ---------- */
  var target = Date.parse(document.body.getAttribute('data-countdown') || '2026-11-02T16:00:00+04:00');
  function pad(n) { return String(n).padStart(2, '0'); }
  function tickCountdown() {
    var s = Math.floor(Math.max(0, (isNaN(target) ? 0 : target) - Date.now()) / 1000);
    var vals = { d: String(Math.floor(s / 86400)), h: pad(Math.floor((s % 86400) / 3600)), m: pad(Math.floor((s % 3600) / 60)), s: pad(s % 60) };
    Object.keys(vals).forEach(function (k) {
      var el = stage.querySelector('[data-cd="' + k + '"]');
      if (el) el.textContent = vals[k];
    });
  }
  setInterval(function () { if (phase === 'done') tickCountdown(); }, 1000);

  startBtn.addEventListener('click', begin);
  replayBtn.addEventListener('click', begin);
  muteBtn.addEventListener('click', toggleMute);
})();
</script>
@endverbatim
</body>
</html>
