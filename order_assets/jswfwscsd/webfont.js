/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
if (typeof WebFontConfig === "undefined") {
    WebFontConfig = new Object();
}
WebFontConfig['google'] = {
    families: ['Rubik:500,400', 'Poppins:400,700,500']
};

(function () {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();