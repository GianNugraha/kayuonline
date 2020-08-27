$(document).ready(function () {
  $('.image').click(function(){
    var gameIdd = (this).getAttribute("data-gameId");
    $("div #platform").empty();
    var url = base_url+'discipline/getGameById/'+gameIdd
    $.ajax({
        url: url,
        type: "GET",
        dataType:"json",
        success: function (data) {
            for (var i = 0; i < data.data['platforms_available'].length; i++) {
              $("div #platform").append(" <div class='col-md-3 col-6 mb-2'><label class='platform-select'><input name='platforms[]' type='checkbox' value="+data.data['platforms_available'][i]+" id='platform'><span class='checkmark'>"+data.data['platforms_available'][i]+"</span></label></div>");
            }
            $('#discipline').val(data.data['id']).attr("selected", "selected");
          var lg =  $('#id_game').attr('value',gameIdd);
           console.log(lg);
        }
    });
  })
  $('#discipline').on('change',function(){
    var gameIdd = $(`#discipline option:selected`).val()
    $("div #platform").empty();
    var url = base_url+'discipline/getGameById/'+gameIdd
    $.ajax({
        url: url,
        type: "GET",
        dataType:"json",
        success: function (data) {
            for (var i = 0; i < data.data['platforms_available'].length; i++) {
              $("div #platform").append(" <div class='col-md-3 col-6 mb-2'><label class='platform-select'><input name='platforms[]' type='checkbox' value="+data.data['platforms_available'][i]+" id='platform'><span class='checkmark'>"+data.data['platforms_available'][i]+"</span></label></div>");
            }
            $('#discipline').val(data.data['id']).attr("selected", "selected");
        }
    });
  })
})
