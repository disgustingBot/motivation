d=document;w=window;c=console;


var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = this.txt;
    // this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }
    this.el.style.animationIterationCount = "1";

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
      this.el.style.animationIterationCount = "infinite";
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
      this.el.style.animationIterationCount = "infinite";
    }

    setTimeout(function() {
      that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};













const options = {
  root: null, // it is the viewport, that's the default
  threshold: .6, // that's the default
  // rootMargin: "3rem 0px 0px 0px" // that's the default
};

const observer = new IntersectionObserver((entries, observer)=>{
  entries.forEach(entry => {
    id=entry.target.getAttribute('data-target')
    if (entry.isIntersecting) {
      d.getElementById(id).classList.add('active');
      // c.log(d.getElementById(id));
    } else {
      d.getElementById(id).classList.remove('active');
    }
    // c.log(entry);
  })
}, options);

const sections = d.querySelectorAll('section');
// c.log(sections);
// observer.observe(sections);
sections.forEach(e => {
  observer.observe(e);
})



// NAVBAR
const alternateNavBar=()=>{const navBar=d.querySelector("#mobileMenu");if(navBar.classList.contains("active")){navBar.classList.remove("active")}else{navBar.classList.add("active")}}
