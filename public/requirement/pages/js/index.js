//This function will be called when user click changing language
function translate(lng, tagAttr) {
  var translate = new Translate();
  translate.init(tagAttr, lng);
  translate.process();
  /*  if (lng == "en") {
    $("#enTranslator").css("color", "#f4623a");
    $("#arTranslator").css("color", "#212529");
  }
  if (lng == "ar") {
    $("#arTranslator").css("color", "#f4623a");
    $("#enTranslator").css("color", "#212529");
  } */
}
$(document).ready(function () {
  $("#langSelect").on("change", function () {
    translate(this.value, "lng-tag");
    // alert(this.value);
  });

  // $("#enTranslator").click(function () {
  //   console.log("clicked");
  //   translate("en", "lng-tag");
  // });

  // $("#arTranslator").click(function () {
  //   console.log("clicked");
  //   translate("ar", "lng-tag");
  // });
});
