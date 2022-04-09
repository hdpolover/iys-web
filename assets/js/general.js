function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function space(evt){
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if(charCode == 32){
      return false
    }
    return true
  }

$(".flatpickr").flatpickr({
    dateFormat: "j F Y",
});
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}

$("#boxImg").click(function() {
  $('#imgPoster').click();
});

$("#imgPoster").change(function() {
  readURL(this);
});
