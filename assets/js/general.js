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
  function addCommaNumeric(evt) {
    $(evt.target).val(function(index, value) {
      return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    });
  }
  function numComma(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) {
        return false;
    }
    return true;
}

$(".flatpickr").flatpickr({
    dateFormat: "F d, Y",
});
$(".flatpickrDT").flatpickr({
    dateFormat: "F d, Y H:i",
    enableTime: true,
    time_24hr: true
});
$(".flatpickrTime").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
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

function readURL2(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
          $('#blah2').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}

$("#boxImg2").click(function() {
  $('#imgPoster2').click();
});

$("#imgPoster2").change(function() {
  readURL2(this);
});
