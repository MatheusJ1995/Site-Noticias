var sPag = "#menu_home";

$(document).ready(function(){
    $("#menu_ul a").click(function(){
    $(sPag).hide();
    sPag= $(this).attr("id");
    sPag="#menu"+sPag;
    $(sPag).show();
    });
});