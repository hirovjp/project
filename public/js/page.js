$(document).ready(function(){
	//khi click vào nút input có id="search" thì thực hiện việc tìm kiếm
	$("#timkiem").on("click",function(){
		$.ajax({
			type:"get",  //gửi bằng phương thức get
			url:"page/search",
			datatype:"text",
			data:{'text':$("#value").val()},    // lấy giá trị tại input có id="value"
			success:function(load_data){
				$(".content").html(load_data.data);    //trả về dữ liệu sao khi tìm kiếm xong vào vị trí có class="content"
			}
		});
	});
	$('#value').keypress(function(event){
	    var keycode = (event.keyCode ? event.keyCode : event.which);
	    if(keycode == '13'){
			$.ajax({
				type:"get",  //gửi bằng phương thức get
				url:"page/search",
				datatype:"text",
				data:{'text':$("#value").val()},    // lấy giá trị tại input có id="value"
				success:function(load_data){
					$(".content").html(load_data.data);    //trả về dữ liệu sao khi tìm kiếm xong vào vị trí có class="content"
				}
			});
	    }

	});

	$('#buttonAddCart').on("click", function() {
		console.log($("#id").text());
		$.ajax({
			type:"get",
			url: '../addcart',
			datatype:"text",
			data:{'id':$("#id").text()},
			success:function(load_data){
				$(".cart").html(load_data.data);
			}
		});
	});
});
