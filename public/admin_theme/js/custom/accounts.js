$(document).ready(function($) {
	

	$.get($("#url").val(), function(data) {
		$("#accountData").html(data);
	});
   

	$('.nav-item a[href="#tabe-2"]').tab('show');
	

});

$(document).on("click","#saveAccount",function(e){
	e.preventDefault();

	var url = $("#url").val();

	$("#saveAccount").html('<i class="fa fa-spinner" aria-hidden="true"></i> Submiting');
	$(this).attr('disabled','true');


	var params = $("#account_add_form").serializeArray();
	var formData = new FormData();

	$(params).each(function(index, el) {
		formData.append(el.name, el.value);
	});
	

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});


	$.ajax({
		url: url,
		type: 'POST',
		data: formData,
		processData: false,
		contentType:false,
		success: function(result){
			swal("Done!", result, "success");
			$("#saveAccount").attr('disabled',false);
			$("#saveAccount").html('<i class="icon-lock" ></i> Save');

			// Destroy previous datatable object
			$('#datatable').DataTable().clear().destroy();

			$.get($("#url").val(), function(data) {
				$("#accountData").html(data);
			});
				

	        setTimeout(function(e){

	        	var table = $('#datatable').DataTable( {			  
				  lengthChange: false,
				  buttons: [
				        'copy', 'excel', 'pdf', 'print', 'colvis'
				    ]     
		        });

	        	table.buttons().container().appendTo( '#datatable_wrapper .col-md-6:eq(0)' ); 

	        },500);

			$('.nav-item a[href="#tabe-2"]').tab('show');
		},
		error: function(data,textStatus, errorThrown){
			console.log(textStatus + " -" + errorThrown);

			jQuery.each(data, function(index, item) {

			 	jQuery.each(item.errors,function(i, el){
			 		swal("Somthing Wrong!", el[0], "error");
	           		//alert(el[0]);
	           });
	        });	
			$("#saveAccount").html('<i class="icon-lock" ></i> Save');
	        $("#saveAccount").attr('disabled',false);	
		}
		
	});


});



$(document).on('click','.edit',function(e){
	e.preventDefault();

	$key = $(this).attr('key');

	$url = '/Account/'+$key+'/edit';
	$.ajax({
		url: $url,
		type: 'GET',		
		data: {key: $key},
	})
	.done(function(data) {
		//console.log(data);
		

		$("#_method").val("PUT");
		$("#url").val(APP_URL+"/Account/"+data.id);
		$("#accountName").val(data.accountName);
		$("#printName").val(data.printName);
		$('.nav-item a[href="#tabe-1"]').tab('show');

	})
	.fail(function(data) {
		jQuery.each(data, function(index, item) {

		 	jQuery.each(item.errors,function(i, el){
		 		swal("Somthing Wrong!", el[0], "error");
           		//alert(el[0]);
           });
        });
	});

})