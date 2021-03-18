
	function sizeBig(id,data,job)
	{
		 
		
		/*var customer = $('#pcustomer').val();
		var no = $('#pno').val();
		var name = $('#pname').val();
		var jobtype = $('#pjobtype').val();
		var qty = '';//$('#pqty').val();
		var status = $('#pstatus').val();
		var receive = $('#preceive').val();
		var due = $('#pdue').val();
		var out = $('#pout').val();
		var pr = $('#ppr').val();
		var priority = $('#ppriority').val();*/
				
		var check;
		if($(id).is(":visible")){
			check=true;
		}else{
			check=false;
		}
		$('.expland').html("");
		$('.expland').hide();
		
		if(check==false){
			$(id).toggle("slow");
			$.post( "modules/customer/child_shop.php",{data:data,id:job, job:job}, function( data ) {
				$(id).html( data );
				
			});
			window.history.replaceState("", "", "index.php?content=customer&customerID=id");
		}else {
			window.history.replaceState("", "", "index.php?content=customer&customerID=id");
		}
	}
	
	

	
	