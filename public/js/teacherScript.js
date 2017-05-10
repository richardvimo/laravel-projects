$(document).ready(function() {

  $("#menu").hover(function() {
    $(this).toggleClass("cor");
  });

  $("#menu").click(function() {
    $(this).toggleClass("on");
    $("#sideNav").toggleClass("move");
  });

});