!function(){const e=document.documentElement,t=document.querySelector("#site-header"),a=document.querySelector("#site-header .header__container"),s=(document.querySelectorAll(".header__logo path"),document.querySelectorAll(".menu-hamburger line"),document.querySelector(".homepage .masthead--video video"),document.querySelector("#site-masthead"),document.querySelector(".nav-traditional")),o=document.querySelectorAll(".nav-traditional > ul > li"),r=document.querySelectorAll(".nav-traditional > ul > li > a"),l=document.querySelectorAll(".nav-traditional .nav-sub"),n=document.querySelector(".overlay-nav-toggle"),d=document.querySelector(".overlay-nav"),i=document.querySelectorAll(".overlay-nav .nav-item"),c=document.querySelectorAll(".overlay-nav .nav-link");window.onload=e=>{document.querySelector("body").classList.remove("preload")};(()=>{const e=()=>{r.forEach((e=>{e.classList.remove("is-focused")})),o.forEach((e=>{e.classList.remove("is-focused")})),l.forEach((e=>{e.classList.remove("is-focused")}))};r.forEach((t=>{t.addEventListener("focus",(()=>{e(),t.classList.add("is-focused");let a=t.parentElement;a&&a.classList.add("is-focused");let s=t.nextElementSibling;s&&s.classList.add("is-focused")})),t.addEventListener("click",(()=>{e()}))})),document.querySelectorAll("a").forEach((t=>{t.addEventListener("focus",(()=>{t.classList.contains("nav-link")||e()}))})),document.addEventListener("keydown",(t=>{r.forEach((a=>{a.classList.contains("is-focused")&&27==t.keyCode&&e()}))})),document.addEventListener("click",(t=>{r.forEach((a=>{if(a.classList.contains("is-focused")){let a=t.target;do{if(a==s)return;a=a.parentNode}while(a);e()}}))}))})();(()=>{const t=null!=a?a.offsetHeight:0;e.style.setProperty("--nav-dropdown-top",t+"px")})();(()=>{const e=()=>{c.forEach((e=>{e.setAttribute("tabindex","-1")}))};e();const t=()=>{d.classList.toggle("show"),c.forEach((e=>{e.setAttribute("tabindex","0")})),d.setAttribute("tabindex","0"),d.focus(),n.classList.add("overlay-nav--visible")},a=()=>{d.classList.remove("show"),e(),d.setAttribute("tabindex","-1"),n.focus(),n.classList.remove("overlay-nav--visible")};n.addEventListener("click",(e=>{d.classList.contains("show")?a():t(),e.preventDefault()})),document.addEventListener("keydown",(e=>{d.classList.contains("show")&&27==e.keyCode&&a()})),document.addEventListener("click",(e=>{if(d.classList.contains("show")){let t=e.target;do{if(t==d||t==n)return;t=t.parentNode}while(t);a()}}))})();i.forEach((e=>{const t=e.querySelector(".nav-sub"),a=e.querySelector(".nav-link");null!==t&&(e.classList.add("has-dropdown"),a.insertAdjacentHTML("beforeend",'<span class="dropdown-toggle" aria-label="Expand or Collapse Dropdown" role="button" tabindex="-1"></span>'))})),d.querySelectorAll(".has-dropdown").forEach((e=>{const t=e.querySelector(".dropdown-toggle"),a=e.querySelector(".nav-sub");t&&(t.addEventListener("click",(function(e){this.classList.toggle("show"),a.classList.toggle("show"),e.preventDefault()})),t.addEventListener("keydown",(function(e){13==e.keyCode&&(this.classList.toggle("show"),a.classList.toggle("show"),e.preventDefault())})))})),n.addEventListener("click",(e=>{const t=document.querySelectorAll(".dropdown-toggle");d.classList.contains("show")?t.forEach((e=>{e.setAttribute("tabindex","0")})):t.forEach((e=>{e.setAttribute("tabindex","-1")}))}));const u=null!=t?t.offsetHeight:0;e.style.setProperty("--header-height",u+"px");(()=>{const a=t.offsetHeight;e.style.setProperty("--scroll-padding",a+0+"px")})(),gsap.registerPlugin(ScrollTrigger);document.querySelectorAll(".animate-children-scroll-fade-in").forEach((e=>{e.querySelectorAll(":scope > *").forEach((t=>{t.classList.add("animate-scroll-fade-in"),e.dataset.delay&&(t.dataset.delay=parseFloat(e.dataset.delay)),e.dataset.duration&&(t.dataset.duration=parseFloat(e.dataset.duration)),e.dataset.trigger&&(t.dataset.trigger=e.dataset.trigger),e.dataset.scroller&&(t.dataset.scroller=e.dataset.scroller),e.dataset.markers&&(t.dataset.markers=e.dataset.markers)}))})),gsap.utils.toArray(".animate-scroll-fade-in").forEach((e=>{let t=0;e.dataset.delay&&(t=parseFloat(e.dataset.delay));let a=1;e.dataset.duration&&(a=parseFloat(e.dataset.duration));let s="top";e.dataset.trigger&&(s=e.dataset.trigger);let o="bottom";e.dataset.scroller&&(o=e.dataset.scroller);let r=!1;e.dataset.markers&&(r=e.dataset.markers),gsap.timeline({scrollTrigger:{trigger:e,start:s+" "+o,markers:r,toggleActions:"play none none none",toggleClass:"visible"}}).from(e,{opacity:0,delay:t,duration:a})})),gsap.utils.toArray(".animate-scroll-slide-horizontal").forEach((e=>{let t=0;e.dataset.delay&&(t=parseFloat(e.dataset.delay));let a=1;e.dataset.duration&&(a=parseFloat(e.dataset.duration));let s="top";e.dataset.trigger&&(s=e.dataset.trigger);let o="bottom";e.dataset.scroller&&(o=e.dataset.scroller);let r=!1;e.dataset.markers&&(r=e.dataset.markers);let l="100px";e.dataset.position&&(l=parseFloat(e.dataset.position)),gsap.timeline({scrollTrigger:{trigger:e,start:s+" "+o,markers:r,toggleActions:"play none none none",toggleClass:"scrolled"}}).from(e,{x:l,opacity:0,delay:t,duration:a})}))}();
//# sourceMappingURL=scripts.js.map