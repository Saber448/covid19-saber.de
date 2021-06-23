!(function (t) {
    "use strict";
    t("#sidebarToggle, #sidebarToggleTop").on("click", function (o) {
        t("body").toggleClass("sidebar-toggled"), t(".sidebar").toggleClass("toggled"), t(".sidebar").hasClass("toggled") && t(".sidebar .collapse").collapse("hide");
    }),
        t(window).resize(function () {
            t(window).width() < 768 && t(".sidebar .collapse").collapse("hide");
        }),
        t("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function (o) {
            if (768 < t(window).width()) {
                var e = o.originalEvent,
                    l = e.wheelDelta || -e.detail;
                (this.scrollTop += 30 * (l < 0 ? 1 : -1)), o.preventDefault();
            }
        }),
        t(document).on("scroll", function () {
            100 < t(this).scrollTop() ? t(".scroll-to-top").fadeIn() : t(".scroll-to-top").fadeOut();
        }),
        t(document).on("click", "a.scroll-to-top", function (o) {
            var e = t(this);
            t("html, body")
                .stop()
                .animate({ scrollTop: t(e.attr("href")).offset().top }, 1e3, "easeInOutExpo"),
                o.preventDefault();
        });
})(jQuery);


var Hfinput = document.getElementById("Hfinput");
var valuehf = document.getElementById("valuehf");
valuehf.innerHTML = Hfinput.value + "%";

Hfinput.oninput = function() {
  valuehf.innerHTML = this.value+ "%";
}
var vCoughinput = document.getElementById("vCoughinput");
var valueCough = document.getElementById("valueCough");
valueCough.innerHTML = vCoughinput.value + "%";

vCoughinput.oninput = function() {
  valueCough.innerHTML = this.value+ "%";
}
var Stinput = document.getElementById("Stinput");
var valueSt = document.getElementById("valueSt");
valueSt.innerHTML = Stinput.value + "%";

Stinput.oninput = function() {
  valueSt.innerHTML = this.value+ "%";
}
var Headacheinput = document.getElementById("Headacheinput");
var valueHeadache = document.getElementById("valueHeadache");
valueHeadache.innerHTML = Headacheinput.value + "%";

Headacheinput.oninput = function() {
  valueHeadache.innerHTML = this.value+ "%";
}

function getresult(){
var Hfinput = parseInt(document.getElementById("Hfinput").value);
var vCoughinput = parseInt(document.getElementById("vCoughinput").value);
var Stinput = parseInt(document.getElementById("Stinput").value);
var Headacheinput = parseInt(document.getElementById("Headacheinput").value);

var resultid = document.getElementById("resultid");
var x=(((Hfinput*25)/100)+((vCoughinput*25)/100)+((Stinput*25)/100)+((Headacheinput*25)/100));

resultid.innerHTML=x  + "%";
if(x<=50){
	document.getElementById("ifone").style.display="block";
document.getElementById("iftwo").style.display="none";
}
else{
	document.getElementById("ifone").style.display="none";
document.getElementById("iftwo").style.display="block";
}
}