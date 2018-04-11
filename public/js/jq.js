$(function () {'use strict';$(".navbar-toggler").click(function (e) {e.preventDefault();if ($(".overhead").width() === 0) {$(".overhead").css("width", "100%");$(".main-container").css("display", "none");} else if ($(".overhead").width() > 10) {$(".overhead").css("width", "0px");$(".main-container").css("display", "block");}});});

// $(function () {'use strict';$(".arrowReverse").click(function (e) {e.preventDefault();$(".glider").css("display", "block");$(".glider").animate({"left": "-=700px"}, "fast");});$(".arrow").click(function (e) {e.preventDefault();$(".gliderLeft").css("display", "block");$(".gliderLeft").animate({"right": "-=700px"}, "fast");});});

// $('.overhead, .arrow, .arrowReverse, .sky').bind('contextmenu', function () { 'use strict';return false; });

$(function () {'use strict';$("#opener,.clicker").click(function () {$("#preBlind,.grayscale,.arrowOut").addClass("blindClass");});$("#opener,.clicker").click(function () {$(".minimaLeft").removeClass("minimaLeft").addClass("minimaLeftSmall");});$("#opener,.clicker").click(function () {$(".minimaRight").removeClass("minimaRight ").addClass("maxRight");});$("#opener,.clicker ").click(function () {$(".minText").removeClass("minText").addClass("minTextTwist");});});

$(function () {'use strict';$("#closerArr").click(function () {$("#preBlind,.grayscale,.arrowOut").removeClass("blindClass");});$("#closerArr").click(function () {$(".minimaLeftSmall").removeClass("minimaLeftSmall").addClass("minimaLeft");});$("#closerArr").click(function () {$(".maxRight").removeClass("maxRight ").addClass("minimaRight");});$("#closerArr ").click(function () {$(".minTextTwist").removeClass("minTextTwist").addClass("minText");});});




$(function () {'use strict';
$("#bigUI").click(function (e) {e.preventDefault();								   
$(".glider").css("display", "block");
$('.ux-area,.readingHeadUX').css('display', 'none');
$('.ui-area,.readingHeadUI').css('display', 'block');
$('#bigUI').css('pointer-events', 'none');	
$(".glider").animate({"left": "-=700px"}, 100);});
			   
});	

$(function () {'use strict';			   
$("#bigUX").click(function (e) {e.preventDefault();
$(".gliderLeft").css("display", "block");
$('.ux-area,.readingHeadUX').css('display', 'block');
$('.ui-area,.readingHeadUI').css('display', 'none');
$('#bigUX').css('pointer-events', 'none');									
$(".gliderLeft").animate({"right": "-=700px"}, 100);
});
});


//
//
//$(function () {
//'use strict';
//$("#bigUX").click(function () {
//$('.uxMain,.uxHeader').css('display','none');
//$('.ux-area,.readingHeadUX').css('display', 'block');
//$('.ui-area,.readingHeadUI').css('display', 'none');
//});
//});
//
//$(function () {
//'use strict';
//$("#bigUI, #go-UI").click(function () {
//$('.uxMain,.uxHeader').css('display','none');
//$(".linkUX, .linkUI").css('background-color', '#000');
//$('.uxHeaderSub').css('display', 'none');
//$('.ui-area,.readingHeadUI').css('display', 'block');
//$('.ux-area,.readingHeadUX').css('display', 'none');
//});
//});
//
//$(function () {
//'use strict';
//$("#go-UXUI").click(function () {
//$('.uxHeaderSub').css('display', 'block');
//$('.ui-area, .ux-area, .uxHeader').css('display', 'none');
//$('.uxui-area').css('display', 'block');
//});
//});




$(function () {
'use strict';
$(".php-area .titleText").click(function () {
$("#phpText").is(":visible") ? ($(".php-area").removeClass("activeArea"), $("#phpText").css("display", "none")) : ($("#phpText").css("display", "block"), $(".php-area").addClass("activeArea"), $("#vueText,#cssText,#jqText,.linxText").css("display", "none"), $(".vue-area,.css-area,.jq-area,.linx-area").removeClass("activeArea"));
});
});

$(function () {"use strict";
$(".vue-area .titleText").click(function () {

$("#vueText").is(":visible") ? ($(".vue-area").removeClass("activeArea"), $("#vueText").css("display", "none")) : ($("#vueText").css("display", "block"), $(".vue-area").addClass("activeArea"), $("#phpText,#cssText,#jqText,.linxText").css("display", "none"), $(".php-area,.css-area,.jq-area,.linx-area").removeClass("activeArea"));
});
});

$(function () {"use strict";
$(".css-area .titleText").click(function () {
$("#cssText").is(":visible") ? ($(".css-area").removeClass("activeArea"), $("#cssText").css("display", "none")) : ($("#cssText").css("display", "block"), $(".css-area").addClass("activeArea"), $("#vueText,#phpText,#jqText,.linxText").css("display", "none"), $(".php-area,.vue-area,.jq-area,.linx-area").removeClass("activeArea"));
});
});

$(function () {"use strict";
$(".jq-area .titleText").click(function () {
$("#jqText").is(":visible") ? ($(".jq-area").removeClass("activeArea"), $("#jqText").css("display", "none")) : ($("#jqText").css("display", "block"), $(".jq-area").addClass("activeArea"), $("#vueText,#cssText,#phpText,.linxText").css("display", "none"), $(".php-area,.vue-area,.css-area,.linx-area").removeClass("activeArea"));
});
});

$(function () {"use strict";
$(".linx-area .titleText").click(function () {
$(".linxText").is(":visible") ? $(".linxText").css("display", "none") : ($(".linxText").css("display", "block"), $("#vueText,#cssText,#jqText,#phpText").css("display", "none"), $(".php-area,.vue-area,.css-area,.jq-area").removeClass("activeArea"));
});
});



$(function(){
"use strict";
$('#seeMeNow').click(function(){
$('.seeMe').css('display','block');$('.uxHeaderSub').css('height','35vh');
$('.openSection').css('display','none');
});
});

