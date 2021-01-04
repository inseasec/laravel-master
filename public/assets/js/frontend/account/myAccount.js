function validateForm(){
   
    $("#account_details_form").validate({
   // $("form[name='registration_form']").validate({
        rules: {
            
            name: {
                required: true
            },
            
            company: {
                required: true
            },
            
            country: {
                required: true
            },
            
            state: {
                required: true
            },
            
            city: {
                required: true
            },
            
            street: {
                required: true
            },
            
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            postcode: {
                required: true
            }
        },
        messages: {
            
            name: {
                required: "Please enter name"
            },
            
            company: {
                required: "Please enter name"
            },
            
            country: {
                required: "Please enter name"
            },
            
            state: {
                required: "Please enter name"
            },
            
            city: {
                required: "Please enter name"
            },
            
            street: {
                required: "Please enter name"
            },
            
            phone: {
                required: "Please enter your mobile number"
            },
            postcode: {
                required: "Please enter your address"
            }
        },
//        submitHandler: function(form) {
//            form.submit();
//        }
    });
}
function updateAccountDetails(){
    var token = $('#csrf-token').val();
    var data = $('#account_form').serialize();
    console.log(data);
    // var qty = $('#'+product_id+'_qty').val();
   $.ajax({
        url: site_url + '/frontend/account/updateAccountDetails',
        data: data,
        method: "post",
//        headers: {
//            'X-CSRF-Token': token 
//        },
        
    }).done(function(response){
        console.log(response);
        if(response == 'true'){
            //bootbox.alert('Cart updatedsuccessfully');
            Swal.fire({
                position: 'top',
                type: 'success',
                title: 'Account Detail Updated Successfully',
                showConfirmButton: false,
                timer: 4000,
                width: 300,
                toast: true
            });
         window.location.href = site_url + "/frontend/home";
        }else{
            Swal.fire({
                position: 'top',
                type: 'error',
                title: 'Problem occured during updation',
                showConfirmButton: false,
                timer: 4000,
                width: 300,
                toast: true
            });
        }
    });
}
$(document).ready(function(){
    validateForm();
});


