var Events = function(){
    
    // -------------------------------------------------------------------------
    
    this.__construct = function(){
        
	Template = new Template;
        console.log('events created');
	country_select();
	province_select();
	fetch_course_category();
        fetch_category_subject();
	insert_form_submit();
	delete_some_data();
	add_another();
	add_another_d();
    };
    
    // -------------------------------------------------------------------------
    
    var add_another_d = function(){
	$('#add-another-d').on('click',function(e){
	    
	    e.preventDefault();
	    var $i = $('#number-d').val();
	    $i++;
	    var $output  = '<div class="row ">';
                $output += '<div class="form-group col-sm-5">';
                $output += '<label >Description</label>';
		$output += '<input type="text" name="item_name_d_' + $i + '" style="color: white" class="form-control" placeholder="Item Description" >';
		$output += '</div>';
		$output += '<div class="form-group col-sm-2">';
		$output += '</div>';
		$output += '<div class="form-group col-sm-2">';
		$output += '<label class="margin_left">Amount</label>';
		$output += '<input type="text" name="item_amount_d_' + $i + '" style="color: white" class="form-control" placeholder="Amount" >';
		$output += '</div>';
		$output += '</div>';
	    $('#add-another-one-d').append($output);	
	    $('#number-d').val($i);
	});
    };
    // -------------------------------------------------------------------------
    
    var add_another = function(){
	
	$('#add-another').on('click',function(e){
	    
	    e.preventDefault();
	    var $i = $('#number').val();
	    $i++;
	    var $output  = '<div class="row ">';
                $output += '<div class="form-group col-sm-5">';
		$output += '<label >Description</label>';
                $output += '<select  name="item_name_' + $i + '" class="form-control" style="background:#444D53; color:white;">';
		$output += '<option>Select desired option</option>';
                $output += '<option value="Intermediate Series">Intermediate Series</option>';
                $output += '<option value="Higher Series">Higher Series</option>';
                $output += '<option value="Starter Series">Starter Series</option>';
		$output += '<option value="Pre-Starter Series">Pre-Starter Series</option>';
		$output += '<option value="Elementary">Elementary</option>';
		$output += '<option value="C.PEL">C.PEL</option>';
		$output += '<option value="IELTS">IELTS</option>';
		$output += '<option value="Grammar">Grammar</option>';
		$output += '<option value="Information Technology">Information Technology</option>';
		$output += '<option value="Monthly Fee of IT/EL">Monthly Fee of IT/EL</option>';
		$output += '<option value="Certificate Fee of IT/EL">Certificate Fee of IT/EL</option>';
		$output += '<option value="Old Balance of IT/EL">Old Balance of IT/EL</option>';
		$output += '<option value="ID Card Fee">ID Card Fee</option>';
		$output += '<option value="D.I.T Exam Fee">D.I.T Exam Fee</option>';
		$output += '<option value="Entry Test Fee">Entry Test Fee</option>';
		$output += '<option value="Promotion Fee">Promotion Fee</option>';
                $output += '<option value="ECC">ECC</option>';
                $output += '<option value="Photostate">photostat</option>';
		$output += '<option value="Unit 001">Unit 001</option>';
		$output += '<option value="Unit 002">Unit 002</option>';
		$output += '<option value="Unit 003">Unit 003</option>';
		$output += '</select>';
		$output += '</div>';
		$output += '<div class="form-group col-sm-4">';
		$output += '<label>V.No</label>';
		$output += '<input type="text" name="v_number_' + $i + '" style="color: white" class="form-control" placeholder="V.No" >';
		$output += '</div>';
		$output += '<div class="form-group col-sm-2">';
		$output += '<label class="margin_left">Amount</label>';
		$output += '<input type="text" name="item_amount_' + $i + '" style="color: white" class="form-control" placeholder="Amount" >';
		$output += '</div>';
		$output += '</div>';
	    $('#add-another-one').append($output);	
	    $('#number').val($i);
	});
	
    }; 
    
    // -------------------------------------------------------------------------

    var fetch_course_category = function(){
	$('#coursename_dropdown').on('change',
		function(){
		    $( '#subcategory_dropdown' ).html('<option>Select Course Category</option>');
		    var data = $(this).val();
		    var href = window.location.href;
		    href = href.replace('courses/subject_add','');
                    href = href.replace('admin/student_add','');
                    href = href.replace('admin/new_courses/' + $('#id').val() ,'');
		    var url = href + 'courses/fetch_courses/' + $(this).val();
		    $.get(url, '',
		    
			function(data){
			    var $output = Template.fetch_course_category( data['data'] );
			    $( '#subcategory_dropdown' ).append($output);
			}
			    
		    ,'json');
		}
	    );
    };
    
    //--------------------------------------------------------------------------
    
    var fetch_category_subject = function(){
	$('#subcategory_dropdown').on('change',
		function(){
		    $( '#subjectname_dropdown' ).html('<option>Select Category Subject</option>');
		    var data = $(this).val();
		    var href = window.location.href;
		    href = href.replace('courses/subject_add','');
                    href = href.replace('admin/student_add','');
                    href = href.replace('admin/new_courses/' + $('#id').val() ,'');
		    var url = href + 'courses/fetch_coursescategory/' + $(this).val();
		    $.get(url, '',
		    
			function( data ){
                            console.log(data);
			    var $output = Template.fetch_category_subject( data['data'] );
			    $( '#subjectname_dropdown' ).append($output);
			}
			    
		    ,'json');
		}
	    );
    };
    
    // -------------------------------------------------------------------------

    var country_select = function(){
	$('#country').on('change',function(){
	    $( '#province' ).html('<option>Select Province</option>');
	    var href = window.location.href;
	        href = href.replace('admin/teacher_add','');
	        href = href.replace('admin/student_add','');
	        href = href.replace('reception/visitor_add','');
	    var url = href + '/fetch_per_select/fetch_country/' + $(this).val();
	    $.get( url , '', 
		function( data ){
		    var $output = Template.fetch_states( data['data'] , data['role'] );
		    //console.log($output);
		    $( '#province' ).append($output);
		}
	    ,'json');
	});
    };
    
    // -------------------------------------------------------------------------

    var province_select = function(){
	$('#province').on('change',function(){
	    $( '#city' ).html('<option>Select City</option>');
	    var href = window.location.href;
	    var href = href.replace('admin/teacher_add','');
	    var href = href.replace('admin/student_add','');	    
	    var href = href.replace('reception/visitor_add','');
	    var url = href + '/fetch_per_select/fetch_city/' + $(this).val();
	    $.get( url , '', 
		function( data ){
		    var $output = Template.fetch_cities( data['data'] );
		    console.log($output);
		    $( '#city' ).append($output);
		}
	    ,'json');
	});
    };
    
    // -------------------------------------------------------------------------
    
    var create_invoice_after_post = function(){
	
	$('#create_invoice_after_post').submit(
	    function(e){
		
		e.preventDefault();
		var url  = $(this).attr('action');
		var data = $(this).serialize();
		$.post( url , data , 
		    function( result ){
			$('body').scrollTop();
			$('#some_message').addClass('alert alert-success alert-dismissable');    
			var $output  = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
			$output     += '<h4><i class="icon fa fa-info"></i> Success !</h4>';
			$output     += result['success'] + '<br />';
			$output     += 'You will be redirect to see the record within few seconds';
			$('#some_message').html($output);
			setTimeout(
			    function (){
				$('#some_message').removeClass('alert alert-success alert-dismissable');
				$('#some_message').html('');
				window.location.href = window.location.protocol + "//" + window.location.host + "/marblefactory/";
			    }
			, 6000);
		    }
		, "json");

	    }
	);

    };
    
    // -------------------------------------------------------------------------
    
    var create_sale_after_post = function(){
	
	$('#create_sale_after_post').submit(
	    function(e){
		
		e.preventDefault();
		var url  = $(this).attr('action');
		var data = $(this).serialize();
		$.post( url , data , 
		    function( result ){
			$('body').scrollTop();
			$('#some_message').addClass('alert alert-success alert-dismissable');    
			var $output  = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
			$output     += '<h4><i class="icon fa fa-info"></i> Success !</h4>';
			$output     += result['success'] + '<br />';
			$output     += 'You will be redirect to see the record within few seconds';
			$('#some_message').html($output);
			setTimeout(
			    function (){
				$('#some_message').removeClass('alert alert-success alert-dismissable');
				$('#some_message').html('');
				window.location.href = window.location.protocol + "//" + window.location.host + "/marblefactory/";
			    }
			, 6000);
		    }
		, "json");

	    }
	);

    };
    
    // -------------------------------------------------------------------------
        
    var add_more_fields = function(){
	
	$('#add_more_fields').click(
	    function(e){
		
		e.preventDefault();
		var counter = $('#counter').val();
		counter ++;
		$('#counter').val( counter );
		var data  = '<div class="form-group col-md-6">';
		    data += '<label for="patty_size_'+counter+'">Patty Size</label>';
		    data += '<input type="text" name="patty_size_'+counter+'" id="patty_size_'+counter+'" class="form-control">';
		    data += '</div>';
		    data += '<div class="form-group col-md-6">';
		    data += '<label for="number_of_items_'+counter+'">Number Of Patty</label>';
		    data += '<input type="text" name="number_of_items_'+counter+'" id="number_of_items_'+counter+'" class="form-control">';
		    data += '</div>';
		    data += '<div class="form-group col-md-12">';
		    data += '<label for="price">Price</label>';
		    data += '<input type="text" name="price_'+counter+'" id="price_'+counter+'" class="form-control">';
		    data += '</div>';
		$('#sale_view_add').append(data);
		console.log(counter);
	    }
	);

    };
    
    // -------------------------------------------------------------------------
    
    var registration_form = function(){
        
        
        
        $('#id_pass').on('input',
            function(){
                var id  = $('#id_pass').val();
                var url = $('#url').val();
                //console.log(url);return false;
                if(id.length === 13){
                    $.post(url,{ name: id },function(o){
                        if(o.result === 1){
                            var returneddata = o.data[o.data.length-1];
                            //console.log(returneddata);
                            $('#address').val(returneddata.Address);
                            $('#name').val(returneddata.Name);
                            $('#nationality').val(returneddata.Nationality);
                            $('#profession').val(returneddata.Profession);
                            //$('#id_pass').val(returneddata.Id_Card_Passport);
                            $('#company').val(returneddata.Company);
                            $('#date_of_issue').attr({type:"text"}).val(returneddata.Date_of_Issue);
                            $('#date_of_birth').attr({type:"text"}).val(returneddata.Date_of_birth);
                            $('#profession').val(returneddata.Profession);
                            $('#telephone_no').val(returneddata.Telephon_No);
                            $('#registeration_no_value').html(returneddata.Reg_No);
                            $('#reg_no').val(returneddata.Reg_No);
                            $('#bool').val(1);
                        }else{
                            $('#bool').val(0);
                        }
                    });
                }
                
            }
        );
        
        $('#name').click(
            function(){
                if( $('#name-error') ){
                    $('#name-error').hide();
                    $('#name-label').show();
                }
            }
        );
        
        $('#nationality').click(
            function(){
                if( $('#nationality-error') ){
                    $('#nationality-error').hide();
                    $('#nationality-label').show();
                }
            }
        );
        
        $('#id_pass').click(
            function(){
                if( $('#id_pass-error') ){
                    $('#id_pass-error').hide();
                    $('#id_pass-label').show();
                }
            }
        );
        
        $('#purpose_of_visit').click(
            function(){
                if( $('#purpose_of_visit-error') ){
                    $('#purpose_of_visit-error').hide();
                    $('#purpose_of_visit-label').show();
                }
            }
        );
        
        $('#telephone_no').click(
            function(){
                if( $('#telephone_no-error') ){
                    $('#telephone_no-error').hide();
                    $('#telephone_no-label').show();
                }
            }
        );
        
        $('#profession').click(
            function(){
                if( $('#profession-error') ){
                    $('#profession-error').hide();
                    $('#profession-label').show();
                }
            }
        );
        
        $('#date_of_issue').click(
            function(){
                if( $('#date_of_issue-error') ){
                    $('#date_of_issue-error').hide();
                    $('#date_of_issue-label').show();
                }
            }
        );
        
        $('#date_of_birth').click(
            function(){
                if( $('#date_of_birth-error') ){
                    $('#date_of_birth-error').hide();
                    $('#date_of_birth-label').show();
                }
            }
        );
        
        $('#address').click(
            function(){
                if( $('#address-error') ){
                    $('#address-error').hide();
                    $('#address-label').show();
                }
            }
        );
        
        $('#date_of_departure').click(
            function(){
                if( $('#date_of_departure-error') ){
                    $('#date_of_departure-error').hide();
                    $('#date_of_departure-label').show();
                }
            }
        );
        
        $('#time_of_departure').click(
            function(){
                if( $('#time_of_departure-error') ){
                    $('#time_of_departure-error').hide();
                    $('#time_of_departure-label').show();
                }
            }
        );
        
        $('#from').click(
            function(){
                if( $('#from-error') ){
                    $('#from-error').hide();
                    $('#from-label').show();
                }
            }
        );
        
        $('#destination').click(
            function(){
                if( $('#destination-error') ){
                    $('#destination-error').hide();
                    $('#destination-label').show();
                }
            }
        );
        
        $('#company').click(
            function(){
                if( $('#company-error') ){
                    $('#company-error').hide();
                    $('#company-label').show();
                }
            }
        );
        
        $('#room_no').click(
            function(){
                if( $('#room_no-error') ){
                    $('#room_no-error').hide();
                    $('#room_no-label').show();
                }
            }
        );
        
        $('#persons').click(
            function(){
                if( $('#persons-error') ){
                    $('#persons-error').hide();
                    $('#persons-label').show();
                }
            }
        );
        
        $('#rate').click(
            function(){
                if( $('#rate-error') ){
                    $('#rate-error').hide();
                    $('#rate-label').show();
                }
            }
        );
        
        $('#deposited').click(
            function(){
                if( $('#deposited-error') ){
                    $('#deposited-error').hide();
                    $('#deposited-label').show();
                }
            }
        );
        
        $('#remarks').click(
            function(){
                if( $('#remarks-error') ){
                    $('#remarks-error').hide();
                    $('#remarks-label').show();
                }
            }
        );

        $('#registeration-form').submit(function(e){
            e.preventDefault();
            
            var name                  = $('#name').val();
            var nationality           = $('#nationality').val();
            var id_pass               = $('#id_pass').val();
            var telephone_no          = $('#telephone_no').val();
            var purpose_of_visit      = $('#purpose_of_visit').val();
            var profession            = $('#profession').val();
            var date_of_issue         = $('#date_of_issue').val();
            var date_of_birth         = $('#date_of_birth').val();
            var address               = $('#address').val();
            var date_of_departure     = $('#date_of_departure').val();
            var time_of_departure     = $('#time_of_departure').val();
            var from                  = $('#from').val();
            var destination           = $('#destination').val();
            var company               = $('#company').val();
            var room_no               = $('#room_no').val();
            var persons               = $('#persons').val();
            var rate                  = $('#rate').val();
            var deposited             = $('#deposited').val();
            var remarks               = $('#remarks').val();
            
            if( name === '' || nationality === '' || id_pass === '' || telephone_no === '' || purpose_of_visit === '' 
                || profession === '' || date_of_issue === '' || date_of_birth === '' || address === '' || date_of_departure === ''
                || time_of_departure === '' || from === '' || destination === '' || company === '' || room_no === '' || persons === ''
                || rate === '' || deposited === '' || remarks === ''
            ){
                
                if( name === ''){
                    if( $('#name-error') ){
                        $('#name-error').hide();
                    }
                    $('#name-div').prepend( '<div id="name-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Name </label></div>' );
                    $('#name-label').hide();
                }
                
                if( nationality === ''){
                    if( $('#nationality-error') ){
                        $('#nationality-error').hide();
                    }
                    $('#nationality-div').prepend( '<div id="nationality-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Nationality </label></div>' );
                    $('#nationality-label').hide();
                }
                
                if( id_pass === ''){
                    if( $('#id_pass-error') ){
                        $('#id_pass-error').hide();
                    }
                    $('#id_pass-div').prepend( '<div id="id_pass-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Id Card or Passport </label></div>' );
                    $('#id_pass-label').hide();
                }
                
                if( telephone_no === ''){
                    if( $('#telephone_no-error') ){
                        $('#telephone_no-error').hide();
                    }
                    $('#telephone_no-div').prepend( '<div id="telephone_no-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Telephone No </label></div>' );
                    $('#telephone_no-label').hide();
                }
                
                if( purpose_of_visit === ''){
                    if( $('#purpose_of_visit-error') ){
                        $('#purpose_of_visit-error').hide();
                    }
                    $('#purpose_of_visit-div').prepend( '<div id="purpose_of_visit-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Purpose </label></div>' );
                    $('#purpose_of_visit-label').hide();
                }
                
                if( profession === ''){
                    if( $('#profession-error') ){
                        $('#profession-error').hide();
                    }
                    $('#profession-div').prepend( '<div id="profession-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Profession </label></div>' );
                    $('#profession-label').hide();
                }
                
                if( date_of_issue === ''){
                    if( $('#date_of_issue-error') ){
                        $('#date_of_issue-error').hide();
                    }
                    $('#date_of_issue-div').prepend( '<div id="date_of_issue-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Date of issue </label></div>' );
                    $('#date_of_issue-label').hide();
                }
                
                if( date_of_birth === ''){
                    if( $('#date_of_birth-error') ){
                        $('#date_of_birth-error').hide();
                    }
                    $('#date_of_birth-div').prepend( '<div id="date_of_birth-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Date of birth </label></div>' );
                    $('#date_of_birth-label').hide();
                }
                
                if( address === ''){
                    if( $('#address-error') ){
                        $('#address-error').hide();
                    }
                    $('#address-div').prepend( '<div id="address-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Address </label></div>' );
                    $('#address-label').hide();
                }
                
                if( date_of_departure === ''){
                    if( $('#date_of_departure-error') ){
                        $('#date_of_departure-error').hide();
                    }
                    $('#date_of_departure-div').prepend( '<div id="date_of_departure-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Date of Deprature </label></div>' );
                    $('#date_of_departure-label').hide();
                }
                
                if( from === ''){
                    if( $('#from-error') ){
                        $('#from-error').hide();
                    }
                    $('#from-div').prepend( '<div id="from-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert From </label></div>' );
                    $('#from-label').hide();
                }
                
                if( destination === ''){
                    if( $('#destination-error') ){
                        $('#destination-error').hide();
                    }
                    $('#destination-div').prepend( '<div id="destination-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Destination </label></div>' );
                    $('#destination-label').hide();
                }
                
                if( company === ''){
                    if( $('#company-error') ){
                        $('#company-error').hide();
                    }
                    $('#company-div').prepend( '<div id="company-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Company </label></div>' );
                    $('#company-label').hide();
                }
                
                if( room_no === ''){
                    if( $('#room_no-error') ){
                        $('#room_no-error').hide();
                    }
                    $('#room_no-div').prepend( '<div id="room_no-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Room No </label></div>' );
                    $('#room_no-label').hide();
                }
                
                if( persons === ''){
                    if( $('#persons-error') ){
                        $('#persons-error').hide();
                    }
                    $('#persons-div').prepend( '<div id="persons-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Person </label></div>' );
                    $('#persons-label').hide();
                }
                
                if( rate === ''){
                    if( $('#rate-error') ){
                        $('#rate-error').hide();
                    }
                    $('#rate-div').prepend( '<div id="rate-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Rate </label></div>' );
                    $('#rate-label').hide();
                }
                
                if( deposited === ''){
                    if( $('#deposited-error') ){
                        $('#deposited-error').hide();
                    }
                    $('#deposited-div').prepend( '<div id="deposited-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Deposited </label></div>' );
                    $('#deposited-label').hide();
                }
                
                if( remarks === ''){
                    if( $('#remarks-error') ){
                        $('#remarks-error').hide();
                    }
                    $('#remarks-div').prepend( '<div id="remarks-error" class="form-group has-error"><label style="margin-bottom:0px;" class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Insert Remarks </label></div>' );
                    $('#remarks-label').hide();
                }
                
                
                return false;
            }
            
            var url  = $(this).attr('action');
            var data = $(this).serialize();
            $.post(url,data,function(o){
                if(o.result === 1){
                    var output  = '<div id="message-iner" class="alert alert-success alert-dismissable">';
                    output     += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    output     += '<h4>	<i class="icon fa fa-check"></i> Success!</h4>';
                    output     += 'Customer data is being inserted...';
                    output     += '</div>';
                }else{
                    var output  = '<div id="message-iner" class="alert alert-danger alert-dismissable">';
                    output     += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    output     += '<h4><i class="icon fa fa-ban"></i> Alert!</h4>';
                    output     += o.error;
                    output     += '</div>'; 
                }
                //console.log(o);
                $('body').scrollTop();
                $('#message').html(output);
                if( o.result === 1 ){
                    var reg_no  = o.reg_no;
                    var bill_no = o.bill_no;
                $( "#message-iner" ).delay( 4000 ).fadeOut( 900 );
                window.setTimeout( function(o){
                    var url_f = window.location.href;
                    url_f = url_f.replace('registration','felio');
                    url_f = url_f + '/index/' + name + '/' + company + '/' + room_no +'/' + reg_no + '/' + bill_no;
                    window.location = url_f;  }
                 , 6 * 1000 );
                }
            }, "json");
        });
    };

    // -------------------------------------------------------------------------
    
    var insert_form_submit = function(){
	
	$('#insert-form-submit').submit(function(e){
            
	    e.preventDefault();
	    
	    var url  = $(this).attr('action');
	    var $data = $(this).serialize();
	    $.post(url,$data,function(o){
		var $output  = '<span class="glyphicon glyphicon-check"></span>';
		    $output += o.success;
		    $('#message').addClass("alert bg-info");
		    $('#message').html($output);
		    $("html, body").animate({ scrollTop: 0 }, "slow");
		    setTimeout(
			function (){
			    $('#message').removeClass('alert bg-info');
			    $('#message').html('');
			    window.location.href = $('#url').val();
			}
		    , 6000);
	    }, "json");
	    
	});
	
    };
    
    // -------------------------------------------------------------------------
    
    var delete_some_data = function(){
	
	$('.delete-some-data-data').on('click',function(e){
	    e.preventDefault();
	    var url  = $(this).attr('href');
	    console.log(url);
	});
	
    };
    
    // -------------------------------------------------------------------------

    this.__construct();

};


