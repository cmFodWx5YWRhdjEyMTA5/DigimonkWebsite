 $(document).on("click", "#add_data", function () {

  $("#show-my-services").append('<div class="row remove_div"><div class="col-md-12"> <label class="control-label"><i class=""></i>Youtube Url</label><input class="form-control" placeholder="Enter Youtube Url"  name="youtube_linl1[]" id="youtube_linl1"></div> <div class="col-md-6"><button type="button" class="btn btn-danger remove_services_btn" style="margin-top:26px;"><i class="fa fa-trash"></i> Remove</button> </div>  </div>');

 });

$(document).on("click", ".remove_services_btn", function (e) {
  $(this).closest(".remove_div").remove();
});
 

   
