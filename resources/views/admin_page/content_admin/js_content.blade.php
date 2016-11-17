<script type="text/javascript">
  $(document).ready(function(){
    
    $("#load").hide();
      $(".detail").click(function(){
         $("#load").show();
          var dataId = {
            id : $(this).attr('id') 
          }

          $.ajax({
            type      : "GET",
            url       : "/content/{content}",
            data      : dataId,
            dataType  : "json",
            success   : function(data){
              console.log(data);
              $("#load").delay(5000).hide();
              $("#show_title").html(data.img_name);
              $("#img_nameEdt").val(data.img_name).html(data.img_name);
              $("#imgId").val(data.id);
              $("#show_img").attr("src",'uploads/'+data.id+'/thumb_'+data.img);
              $("#show_dateCreated").html(data.created_at);
            },
          });//close ajax
      }); //close function

      $("#updateBtn").click(function(){
        var id = $("#imgId").val();
        var data = {
          id : $("#imgId").val(),
        };
        $.ajax({
          type : "POST",
          url  : "{{route('update')}}",
          data : data,
          dataType : "json",
          success : function(data){
            console.log(data);
          }, error: function (xhr, status, error){
              console.log(error);
          }
        });//close ajax
      });
      	
      $("#deleteBtn").click(function(){
        var id = $("#imgId").val();
        $.ajax({
          type : "DELETE",
          url  : "/content/"+id,
          success : function(data){
            console.log(data);
          }, error: function (xhr, status, error){
              console.log(error);
          }
        });//close ajax
      });


        
			$('.grid').masonry({
        columnWidth: 200,
        itemSelector: '.grid-item'
      });	
		 }); // close 
	</script>