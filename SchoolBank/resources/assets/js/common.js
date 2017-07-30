
$(document).ready(function(){

    /***************GREETINGS***************/
    var thehours = new Date().getHours();
	var themessage;
	var morning = ('GOOD MOorning');
	var afternoon = ('Good Afternoon');
	var evening = ('Good Evening');

	if (thehours >= 0 && thehours < 12) {
        $('#morning-greetings').removeClass('hidden');
        $('#afternoon-greetings').addClass('hidden');
        $('#evening-greetings').addClass('hidden');
		themessage = morning;

	} else if (thehours >= 12 && thehours < 17) {
        $('#morning-greetings').addClass('hidden');
        $('#afternoon-greetings').removeClass('hidden');
        $('#evening-greetings').addClass('hidden');
		themessage = afternoon;

	} else if (thehours >= 17 && thehours < 24) {
        $('#morning-greetings').addClass('hidden');
        $('#afternoon-greetings').addClass('hidden');
        $('#evening-greetings').removeClass('hidden');
		themessage = evening;
	}

	$('.greeting').append(themessage);
    /***************END GREETINGS***************/

//////// END GRAPH /////

       //HOME TABLE CHECKBOX
       $('#theadcheckbox').change(function () {
            if ($(this).prop('checked')) {
            $('.tbodycheckbox').prop('checked', true);
            } else {
                $('.tbodycheckbox').prop('checked', false);
            }
        }); 
        $('#theadcheckbox').trigger('change');

        $('.datepicker').bootstrapMaterialDatePicker({
            time:false,
            date:true,
            
        });
        $('.datepicker').on('change',function(){
            
            var today = new Date(), // today date object
            birthday_val = $(".datepicker").val().split('-'), // input value
            birthday = new Date(birthday_val[0],birthday_val[2]-1,birthday_val[1]), // birthday date object
            todayYear = today.getFullYear(), // today year
            todayMonth = today.getMonth(), // today month
            todayDay = today.getDate(), // today day of month
            birthdayYear = birthday.getFullYear(), // birthday year
            birthdayMonth = birthday.getMonth(), // birthday month
            birthdayDay = birthday.getDate(), // birthday day of month
            // calculate age
            age = (todayMonth == birthdayMonth && todayDay > birthdayDay) ? 
                    todayYear - birthdayYear : (todayMonth > birthdayMonth) ? 
                        todayYear - birthdayYear : todayYear - birthdayYear;
            $('#ageAddC').val(age);
            
        });

        /////
        

        //////// SEARCH ACCID

        if(window.location.pathname == "/view/page/clients.php"){
           
            $(window).keypress(function (e) {
                if (e.keyCode === 32) {
                     if($('#modalAdd').hasClass('in') || $('#mdl-view-client').hasClass('in') || $('#mdl-deposit').hasClass('in') || $('#mdl-withdrawal').hasClass('in')){

                     }else{
                         $('#mdl-search-accid').modal('show');
                     }  
                }
            });
        }

        

        $('#form-search').on('click',function(){
            $('#mdl-search-accid.in').modal('hide');
            console.log($('#input-accid-search').val());
            $('#myTable').DataTable().search($('#input-accid-search').val()).draw();
            
        });

        //////  MODAL ADD SHOW
        $('#mdl-add').on('click',function(){
            $('#contact_noAddC').val('');
            $('#contact_noAddC').attr('placeholder', '+(63) Phone Number');
            $('#tel_noAddC').val('');
            $('#contact_noAddC').on('focus',function(){
                $('#contact_noAddC').val('63');
            });
            $('#modalAdd').modal('show');
        });
       
        //HOME TABLE LIST
       $('#myTable').DataTable();

        //DROPDOWN
        
        
       $(".select").dropdown({ "autoinit" : "withripple" });

       //
      
       ///******************* CHANGE PASS ************************///
       $('#btn-changepass').on('click',function(){
           var btn = $(this);
           if($('#oldpass').val() == "" || $('#newpass').val() == "" || $('#renewpass').val() == ""){
               swal("error", "Fill out Fields", "error");
               return false;
           }else if($('#newpass').val() != $('#renewpass').val()){
                swal("error", "password not matched !", "error");
                return false;
           }
            $.ajax({
                type:"POST",
                url:"/app/controller/auth/session.php",
                dataType:"json",
                success:function(session){
                    if($('#oldpass').val() != session.password){
                        swal("error", "Invalid Old Password", "error");
                        return false;
                    }
                    var id = btn.data('id');
                    var frm = btn.closest('form');
                    var url = frm.attr('action');
                    var type = frm.attr('method');
                    $.ajax({
                            url:url,
                            type:type,
                            data:frm.serialize()+"&UID="+id+"&mode=userChangePass",
                            dataType:"json",
                            success:function(data){
                                if(data == true){
                                    $.ajax({
                                        type:"POST",
                                        url:"/app/controller/auth/session.php",
                                        dataType:"json",
                                        success:function(session){

                                        }
                                    });
                                    swal({title: "Success", text: "Success !", type: "success"});
                                    window.location.href = "/view/page/home.php";  
                                }else{
                                    swal("Cancelled !", "there is an error", "error");
                                }
                            }
                    });
                }
            });
            

            return false; 
       });
       ///******************* END CHANGE PASS ************************///
       
       ///******************* TRANSACTION ************************///

       /******************* DEPOSIT VIEW *********************/
       $('.btn-deposit').on('click',function(){
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            var name = "";
            
            $.ajax({
            url:url,
            type:type,
            data:{id_view:id,mode:"viewTrans"},
            dataType:"json",
            success:function(data){
                $('#ACCID').val(data.ACID);
                name = data.lastname + ", " + data.firstname + " " + data.middlename;
                $('#mdl_deposit_AID').val(data.AID);
                $('#mdl_deposit_status').val(data.stat);
                $('#deposit_name').val(name);
                $('#deposit_dept').val(data.dept_name);
                $('#deposit_prod').val(data.prod_name);
                $('#deposit_totbal').val(data.total_amount);
                var date = new Date(Date.now());
                $('#deposit_date').val(date.getFullYear()+" - "+date.getMonth()+" - "+date.getDay());
                $('#deposit_teller').val(data.nickname);
             }
            });
            $('#mdl-deposit').modal('show');
            return false;
       });
       /******************* END DEPOSIT VIEW *********************/

       /******************* DEPOSIT *********************/
      
        $('#mdl-btn-post-trans-deposit').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');   
            var type = frm.attr('method');
            swal({
                title: "Continue Transaction?",
                text: "Post Transaction",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Update",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                    url:url,
                    type:type,
                    data:frm.serialize()+"&mode=transPostDeposit",
                    dataType:"json",
                    success:function(data){
                        
                        if(data == true){
                            swal({title: "Success", text: "Success !", type: "success"},
                                function(){ 
                                    location.reload();
                                }
                            );
                        }else{
                            swal("Cancelled !", "there is an error", "error");
                        }
                    }
                    });
                    
                } else {
                    swal("Cancelled", "Transaction Cancelled !", "error");
                }
            });
            
            return false;
        });
       /******************* END DEPOSIT *********************/
       
       /******************* WITHDRAWAL VIEW*********************/
       $('.btn-withdrawal').on('click',function(){
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            var name = "";
            
            $.ajax({
            url:url,
            type:type,
            data:{id_view:id,mode:"viewTrans"},
            dataType:"json",
            success:function(data){
                $('#accIdWithdrawal').val(data.ACID);
                name = data.lastname + ", " + data.firstname + " " + data.middlename;
                $('#withdrawal_name').val(name);
                $('#withdrawal_dept').val(data.dept_name);
                $('#withdrawal_prod').val(data.prod_name);
                $('#withdrawal_totbal').val(data.total_amount);
                var date = new Date(Date.now());
                $('#withdrawal_date').val(date.getFullYear()+" - "+date.getMonth()+" - "+date.getDay());
                
                $('#withdrawal_teller').val(data.nickname);
                }
            });

           $('#mdl-withdrawal').modal('show');
           return false;
       });
       /******************* END WITHDRAWAL VIEW *********************/

       /******************* WITHDRAWAL *********************/
            $('#mdl-btn-post-trans-withdrawal').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');   
            var type = frm.attr('method');
            swal({
                title: "Continue Transaction?",
                text: "Post Transaction",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Update",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                    url:url,
                    type:type,
                    data:frm.serialize()+"&mode=transPostWithdrawal",
                    dataType:"json",
                    success:function(data){
                        
                        if(data == true){
                            swal({title: "Success", text: "Success !", type: "success"},
                                function(){ 
                                    location.reload();
                                }
                            );
                        }else{
                            swal("Cancelled !", "there is an error", "error");
                        }
                    }
                    });
                    
                } else {
                    swal("Cancelled", "Transaction Cancelled !", "error");
                }
            });
            
            return false;
        });

       /******************* END WITHDRAWAL *********************/
       
       $('.btn-delete-trans').on('click',function(){
            var btn = $(this);
            $.ajax({
                type:"POST",
                url:"/app/controller/auth/session.php",
                dataType:"json",
                success:function(session){
                   
                    swal({
                        title: "Confirm Delete.",
                        text: "You want to Delete this?",
                        type: "info",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Delete",
                        cancelButtonText: "Cancel",
                        closeOnConfirm: false,
                        closeOnCancel: false,
                        allowOutsideClick: false,
                        },
                        function(isConfirm) {
                            
                            if (isConfirm) {
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    var id = btn.data('id');
                                    var frm = btn.closest('form');
                                    var url = frm.attr('action');
                                    var type = frm.attr('method');
                                    
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:{id_del:id,mode:"deleteTrans"},
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Deleted !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Deleting", "error");
                                        }
                                    }
                                    });
                                }
                            
                            });
                        
                        } else {
                            swal("Cancelled", "Delete Cancelled !", "error");
                        }
                    });
                }
            });
            
            return false;
       });

       ///******************* END TRANSACTION ************************///
        
        ///******************* CLIENT ************************///
        
        /******************* VIEW CLIENT *********************/
        $('.btn-view-user').on('click', function(){
            
            
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            
             $.ajax({
                url:url,
                type:type,
                data:{id_view:id,mode:"viewClient"},
                dataType:"json",
                success:function(data){
                   $('#mdl-view-client').modal('show');
                   $('#AID').val(data.AID);
                   $('#stat').val(data.stat);
                   $('#ACID').val(data.ACID);
                   $('#firstname').val(data.firstname);
                   $('#middlename').val(data.middlename);
                   $('#lastname').val(data.lastname);
                   $('#age').val(data.age);   
                   $('#city').val(data.cityprovince);
                   $('select[data-dropdownjs][disabled]#city + .dropdownjs > input').val(data.cityprovince);
                   $('#zipcode').val(data.zipcode);
                   var date = data.birthdate.split(' ');
                   $('#birthdate').val(date[0]);
                   $('#birthplace').val(data.birthplace);
                   $('#tel_no').val(data.tel_no);
                   $('#zipcode').val(data.zipcode);
                   $('#civilstatus').val(data.civilstatus);
                   $('select[data-dropdownjs][disabled]#civilstatus + .dropdownjs > input').val(data.civilstatus);
                   $('#gender').val(data.gender);
                   $('select[data-dropdownjs][disabled]#gender + .dropdownjs > input').val(data.gender);
                   $('#email').val(data.email);
                   $('#address').val(data.address);
                   $('#contact_no').val(data.contact_no);
                   $('#department').val(data.DID);
                   $('select[data-dropdownjs][disabled]#department + .dropdownjs > input').val(data.dept_name);
                   $('#product').val(data.PID);
                   $('select[data-dropdownjs][disabled]#product + .dropdownjs > input').val(data.prod_name);
                   $('#stat').val(data.stat);
                   $('#created_at').val(data.created_at);
                   $('#user_level').val(data.user_level);
                   
                }
            });
            
            
            return false;
        });
        /**************************************************/
        /******************** ADD CLIENT ************************/
        $('#btnActAcc').on('click',function(){
            var btn = $(this);
            
            swal({
                title: "Are you sure?",
                text: "You want to Activate this Account ?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Activate",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    swal({
                    title: "Confirmation !",
                    text: "Enter Admin Password",
                    type: "input",
                    inputType: "password",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    inputPlaceholder: "Enter Password"
                    }, function (inputValue) {
                        
                        $.ajax({
                            type:"POST",
                            url:"/app/controller/auth/permission.php",
                            dataType:"json",
                            success:function(session){
                                
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                console.log(inputValue);
                                console.log(session.cro);
                                console.log(session.cashier);
                                if (inputValue == session.cro || inputValue == session.cashier) {
                                    var frm = btn.closest('form');
                                    var url = frm.attr('action');   
                                    var type = frm.attr('method');
                                    $.ajax({
                                        url:url,
                                        type:type,
                                        data:frm.serialize()+"&mode=addClient",
                                        dataType:"json",
                                        success:function(data){
                                                
                                            if(data['validation'] == true){
                                                    swal({ html:true, title: "Activated", text: "Client ID: "+data["client_id"]+"<br><p class='float:left;'>Account ID: "+data["acc_no"]+"</p>", type: "success"},
                                                        function(){ 
                                                            location.reload();
                                                        }   
                                                    );
                                            }else{
                                                swal("Error !", "there was an error in Activating Account please Check The Details and try again.", "error");
                                            }
                                        }
                                    });
                                    
                                }else
                                {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }
                            }
                        });

                        
                    });

                    
                    
                } else {
                    swal("Cancelled", "Account Activation Cancelled !", "error");
                }
            });
            
            return false;
        });
        /***********************************************************/
        /******************** VIEW CLIENT ACCOUNT************************/
        $('.btn-view-account-client').on('click',function(){
            var btn = $(this);
            var id = btn.data('id');
            var acid = btn.data('acid');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            var table = $('#clientTransTbl').DataTable();
            table.clear();
             $.ajax({
                url:url,
                type:type,
                data:{id_view:id,acid:acid,mode:"viewClientTransaction"},
                dataType:"json",
                success:function(data){
                    for(var key in data.trans){
                        var transtype;
                        if(data.trans[key]['trans_type'] == 1){
                            transtype = "Deposit";
                        }else{
                            transtype = "Withdrawal";
                        }
                        table.row.add([
                            data.trans[key]['ID'],
                            transtype,
                            data.trans[key]['trans_date'],
                            data.trans[key]['amount'],
                            data.trans[key]['teller'],
                            data.trans[key]['total_amount']
                        ]).draw(false);
                        
                    }
                        
                    $('#totbalnce').val(data.totbal.total_amount);
                    $('#viewClientTransACID').val(data.client.ACID);
                    $('#viewClientTransName').val(data.client.lastname + ", " + data.client.firstname + " " + data.client.middlename);
                    $('#viewClientTransProduct').val(data.client.prod_name);
                    $('#viewClientTransDepartment').val(data.client.dept_name);
                    
                }
            });
            
            $('#mdl--client-Account-details').modal('show');
            return false;
        });

        /******************** END VIEW CLIENT ACCOUNT************************/
        /******************** UPDATE CLIENT ************************/
        $('#mdl-btn-update-client').on('click',function(e){
            e.preventDefault();
            $(this).addClass('hidden');
            $('.mdl-user-input-update').prop('disabled', false);
            $('#mdl-btn-saveUpdate-client').removeClass('hidden');
            $('#clientEditDropdownButton').dropdown('toggle');
            
        });

        $('#mdl-btn-saveUpdate-client').on('click',function(e){
            e.preventDefault();
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');   
            var type = frm.attr('method');
            swal({
                title: "Are you sure?",
                text: "You want to update this profile ?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Update",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type:"POST",
                        url:"/app/controller/auth/session.php",
                        dataType:"json",
                        success:function(session){
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:frm.serialize()+"&mode=updateClient",
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Updated !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );
                    
                                        if(data == true){

                                        }else{
                                            swal("Cancelled !", "there is an error in Updating Profile", "error");
                                        }
                                    }
                                    });
                                }
                            });
                        }
                    });
                    
                    
                } else {
                    swal("Cancelled", "Update Cancelled !", "error");
                }
            });
            
            
            
            return false;
        });
        $('#mdl-view-client').on('hidden.bs.modal', function () {
            $('.mdl-user-input-update').prop('disabled', true);
            $('#mdl-btn-saveUpdate-client').addClass('hidden');
            $('#mdl-btn-update-client').removeClass('hidden');
            
        });
        /**************************************************/

        /******************** DELETE CLIENT ********************/
        $('.btn-delete-client').on('click',function(){
            var btn = $(this);
            $.ajax({
                type:"POST",
                url:"/app/controller/auth/session.php",
                dataType:"json",
                success:function(session){
                    var frm = btn.closest('form');
                    var url = frm.attr('action');
                    var type = frm.attr('method');
                    var id = btn.data('id');
                    swal({
                        title: "Confirm Delete.",
                        text: "You want to Delete this profile ?",
                        type: "info",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Delete",
                        cancelButtonText: "Cancel",
                        closeOnConfirm: false,
                        closeOnCancel: false,
                        allowOutsideClick: false,
                        },
                        function(isConfirm) {
                        if (isConfirm) {
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:{del_id:id,mode:"deleteClient"},
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Deleted !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    
                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Deleting Profile", "error");
                                        }
                                    }
                                    });
                                }
                            });
                            
                            
                        } else {
                            swal("Cancelled", "Delete Cancelled !", "error");
                        }
                    });
                }
            });

            
            
            return false;
        });
        /**************************************************/

        ///***********************************************///

        ///******************* PRODUCT **********************///
        
        /****************** ADD PRODUCT **************/
       
       $('#mdl-btnAdd-product').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');   
            var type = frm.attr('method');
            swal({
                title: "Are you sure?",
                text: "You want to Add this Product ?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Add",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url:url,
                        type:type,
                        data:frm.serialize()+"&mode=addProd",
                        dataType:"json",
                        success:function(data){
                        if(data == true){
                                    swal({title: "Success", text: "Successfully Added !", type: "success"},
                                        function(){ 
                                            location.reload();
                                        }   
                                    );
                            }else{
                                swal("Error !", "there was an error in Adding Product please Check The Details and try again.", "error");
                            }
                        }
                    });
                }
            });

            
            return false;
       });
        /********************* END ADD PRODUCT *****************/
        /********************* VIEW PRODUCT *****************/
       
        $('.btn-view-prod').on('click', function(){
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            
             $.ajax({
                url:url,
                type:type,
                data:{id_view:id,mode:"viewProd"},
                dataType:"json",
                success:function(data){
                   $('#PID').val(data.PID);
                   $('#prod_name').val(data.prod_name);
                   $('#inter_rate').val(data.inter_rate);
                }
            });
            $('#mdl-view-prod').modal('show');
            return false;
        });
        /***************************************************/

         /****************** UPDATE PRODUCT *************/
       $('#mdl-btn-update-prod').on('click',function(){
            
            $(this).addClass('hidden');
            $('.mdl-prod-input-update').prop('disabled', false);
            $('#mdl-btn-saveUpdate-prod').removeClass('hidden');
            return false;
        });

        $('#mdl-btn-saveUpdate-prod').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            swal({
                title: "Are you sure?",
                text: "You want to update this ?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Update",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                        $.ajax({
                        type:"POST",
                        url:"/app/controller/auth/session.php",
                        dataType:"json",
                        success:function(session){
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:frm.serialize()+"&mode=updateProd",
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Updated !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Updating", "error");
                                        }
                                    }
                                    });
                                }
                            });
                        }
                    });
                    
                    
                } else {
                    swal("Cancelled", "Update Cancelled !", "error");
                }
            });
            
            return false;
        });
       /************************************************/

       /****************** DELETE PRODUCT ****************/
        $('.btn-delete-prod').on('click',function(){
            var btn = $(this);
            $.ajax({
                type:"POST",
                url:"/app/controller/auth/session.php",
                dataType:"json",
                success:function(session){
                   
                    swal({
                        title: "Confirm Delete.",
                        text: "You want to Delete this?",
                        type: "info",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Delete",
                        cancelButtonText: "Cancel",
                        closeOnConfirm: false,
                        closeOnCancel: false,
                        allowOutsideClick: false,
                        },
                        function(isConfirm) {
                            
                            if (isConfirm) {
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    var id = btn.data('id');
                                    var frm = btn.closest('form');
                                    var url = frm.attr('action');
                                    var type = frm.attr('method');
                                    
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:{id_del:id,mode:"deleteProd"},
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Deleted !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Deleting", "error");
                                        }
                                    }
                                    });
                                }
                            
                            });
                        
                        } else {
                            swal("Cancelled", "Delete Cancelled !", "error");
                        }
                    });
                }
            });
            
            return false;
        });
       /************************************************** */

        ///**************************************************///

        ///******************* DEPARTMENT *****************///

        /******************* DELETE DEPT **********************/

        $('.btn-delete-dept').on('click',function(){
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            swal({
                title: "Confirm Delete.",
                text: "You want to Delete this?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type:"POST",
                        url:"/app/controller/auth/session.php",
                        dataType:"json",
                        success:function(session){
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:{id_del:id,mode:"deptDelete"},
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Deleted !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Deleting", "error");
                                        }
                                    }
                                    });
                                }
                            });
                        }
                    });
                    
                } else {
                    swal("Cancelled", "Delete Cancelled !", "error");
                }
            });
            
            return false;
        });
        /*************************************************/
        /**************** UPDATE DEPT ****************/
        $('#mdl-btn-update-dept').on('click',function(){
            
            $(this).addClass('hidden');
            $('.mdl-dept-input-update').prop('disabled', false);
            $('#mdl-btn-saveUpdate-dept').removeClass('hidden');
            return false;
        });

        $('#mdl-btn-saveUpdate-dept').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            swal({
                title: "Are you sure?",
                text: "You want to update this ?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Update",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type:"POST",
                        url:"/app/controller/auth/session.php",
                        dataType:"json",
                        success:function(session){
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:frm.serialize()+"&mode=deptUpdate",
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Updated !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    
                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Updating", "error");
                                        }
                                    }
                                    });
                                }
                            });
                        }
                    });
                    
                } else {
                    swal("Cancelled", "Update Cancelled !", "error");
                }
            }); 
             return false;
        });

       /*************************************************/

       /****************** VIEW DEPARTMENT **************/
       $('.btn-update-dept').on('click', function(){
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');

             $.ajax({
                url:url,
                type:type,
                data:{id:id,mode:"deptView"},
                dataType:"json",
                success:function(data){
                    $('#DID').val(data.DID);
                    $('#dept_name').val(data.dept_name);
                }
            });

            $('#mdl-View-dept').modal('show');
            return false;
        });
       
       /************************************************/
       /****************** ADD DEPARTMENT **************/
       
       $('#mdl-addDepartment').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');   
            var type = frm.attr('method');
            swal({
                title: "Are you sure?",
                text: "You want to Add it?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Add",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url:url,
                        type:type,
                        data:frm.serialize()+"&mode=addDept",
                        dataType:"json",
                        success:function(data){
                        if(data == true){
                                    swal({title: "Success", text: "Successfully Added !", type: "success"},
                                        function(){ 
                                            location.reload();
                                        }   
                                    );
                            }else{
                                swal("Error !", "there was an error in Adding Department please Check The Details and try again.", "error");
                            }
                        }
                    });
                } else {
                    swal("Cancelled", "Cancelled !", "error");
                }
            });
            
            return false;
       });
       /****************** END ADD DEPARTMENT **************/
      
       ///***********************************************///

       ///****************** USER **********************///

       /******************* UPDATE USER *********************/
       $('.btn-update-user').on('click',function(){
           var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
             $.ajax({
                url:url,
                type:type,
                data:{id:id,mode:"viewAccount"},
                dataType:"json",
                success:function(data){
                    $('#update_UID').val(data.UID);
                    $('#update_username').val(data.username);
                    $('#update_nickname').val(data.nickname);
                    $('#update_userlevel').val(data.user_level);
                }
            });
           $('#modalUserUpdate').modal('show');
            return false;
       });


        $('#mdl-btn-user-save-update').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            swal({
                title: "Are you sure?",
                text: "You want to update this ?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Update",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type:"POST",
                        url:"/app/controller/auth/session.php",
                        dataType:"json",
                        success:function(session){
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:frm.serialize()+"&mode=userUpdate",
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Updated !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    
                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Updating", "error");
                                        }
                                    }
                                    });
                                }
                            });
                        }
                    });
                    
                    
                } else {
                    swal("Cancelled", "Update Cancelled !", "error");
                }
            }); 
             return false;
        });
       
       /******************* END UPDATE USER *********************/
       
       /******************* DELETE USER *********************/

       $('.btn-delete-user').on('click',function(){
            var btn = $(this);
            var id = btn.data('id');
            var frm = btn.closest('form');
            var url = frm.attr('action');
            var type = frm.attr('method');
            swal({
                title: "Confirm Delete.",
                text: "You want to Delete this?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false,
                allowOutsideClick: false,
                },
                function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type:"POST",
                        url:"/app/controller/auth/session.php",
                        dataType:"json",
                        success:function(session){
                            swal({
                            title: "Confirmation !",
                            text: "Enter Admin Password",
                            type: "input",
                            inputType: "password",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            inputPlaceholder: "Enter Password"
                            }, function (inputValue) {
                                if (inputValue === false) return false;
                                if (inputValue === "") {
                                    swal.showInputError("Fill Out Field");
                                    return false
                                }
                                if (inputValue != session.password) {
                                    swal.showInputError("Incorrect Password");
                                    return false
                                }else
                                {
                                    $.ajax({
                                    url:url,
                                    type:type,
                                    data:{id_del:id,mode:"delAccount"},
                                    dataType:"json",
                                    success:function(data){
                                    
                                        swal({title: "Success", text: "Successfully Deleted !", type: "success"},
                                            function(){ 
                                                location.reload();
                                            }
                                        );

                                    if(data == true){
                                        }else{
                                            swal("Cancelled !", "there is an error in Deleting", "error");
                                        }
                                    }
                                    });
                                }
                            });
                        }
                    });
                    
                } else {
                    swal("Cancelled", "Delete Cancelled !", "error");
                }
            });
            
            return false;
        });
       /******************* END DELETE USER *********************/

       /******************* ADD USER *********************/
        $('#addUser').on('click',function(){
            var btn = $(this);
            var frm = btn.closest('form');
            var url = frm.attr('action');   
            var type = frm.attr('method');
            
            $.ajax({
                url:url,
                type:type,
                data:frm.serialize()+"&mode=addUser",
                dataType:"json",
                success:function(data){
                   if(data == true){
                            swal({title: "Success", text: "User Successfully Added !", type: "success"},
                                function(){ 
                                    location.reload();
                                }   
                            );
                    }else{
                        swal("Error !", "there was an error in Activating User please Check The Details and try again.", "error");
                    }
                }
            });
            return false;
        });
       /******************* END ADD USER *********************/
       
       ///****************** END USER **********************///

});