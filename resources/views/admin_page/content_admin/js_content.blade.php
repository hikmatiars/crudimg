<script type="text/javascript">
$(document).ready(function(){
    //var url = "content/{content}";
    $("#load").hide();
      $("#btn_input").click(function(){
        $.ajax({
          url : 'content/',
          data : new FormData($("#upload_form")[0]),
          dataType : 'json',
          type : 'POST',
          cache : false,
          contentType :false ,
          processData : false,
          success : function(data){
            // $("#item"+data.id).append("<div class='grid-item'><div class='panel-body'></div></div>");
          }, error : function(xhr, error){
            console.log(error);
          }
        });
      });
      $(".detail").click(function(){
         $("#load").show();

          var dataId = {
            id : $(this).attr('id') 
          }
          var id = $(this).attr('id');

          $.ajax({
            type      : "GET",
            url       : "/content/"+id+"/edit",
            //data      : dataId,
            //dataType  : "json",
            success   : function(data){
              console.log(data);
              $("#load").delay(5000).hide();
              $("#show_title").html(data.img_name);
              $("#img_nameEdt").val(data.img_name);
              $("#imgId").val(data.id);
              $("#img").val(data.img);
              $("#imgEdt").html(data.img);
              $("#show_img").attr("src",'uploads/'+data.id+'/'+data.img);
              $("#show_dateCreated").html(data.created_at);
              $("#content").val(data.content);
            }, error(xhr, status, error){
              //console.log(error);
            }
          });//close ajax
      }); //close function

      $("#updateBtn").click(function(){
        var id = $("#imgId").val();
        var data = {
          '_token'   : $('input[name=_token]').val(),
          'id'       : $("#imgId").val(),
          'img_name' : $("#img_nameEdt").val(),
          'content'  : $("#content").val()
        };
        $.ajax({
          type : "PUT",
          url  : "/content/"+id,
          data : data,
          dataType  : "json",
          success   : function(data){
            console.log(data);
          }, error: function (xhr, status, error){
              console.log(error);
          }
        });//close ajax
      });
      
      	
      $("#deleteBtn").click(function(){
        var id = $("#imgId").val();
       var data = {
          '_token': $('input[name=_token]').val(),
          'id' : $("#imgId").val()
        };
        $.ajax({
          type : "DELETE",
          url  : 'content/'+id,
          data : data,
          dataType : "json",
          success : function(data){
            $("#item"+data.id).remove().slideDown("slow");
            //tostr().success("data berhasil di hapus");
          }, error: function (xhr, status, error){
              console.log(error);
          }
        });//close ajax
      });


        
			$('.grid').masonry({
        columnWidth: 300,
        itemSelector: '.grid-item'
      });	
		 }); // close 
	</script>