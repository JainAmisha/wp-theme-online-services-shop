jQuery(document).ready(function()
{
    jQuery(document).on('click', '.clear-tracking-info', function(){
        jQuery('input[name=tracking_id]').val('');
    });

    jQuery('.track-now').on('click', function(e){
        e.preventDefault();
        url = "tracking.php";
        tracking_id = jQuery("input[name=tracking_id]").val();
        if(tracking_id == '')
        {
            return;
        }
        data = {
          "shop_id": 3,
          "tracking_id": tracking_id
        }
        jQuery('.tracking-info').html('Please wait....');
        button = $(this);
        button.prop('disabled', true);
        jQuery.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: 'json', // added data type
            success: function(res) {
                if(res.tracking_id)
                {   
                    html = `<div class="tracking-info-inner text-left">
                                <table class="table table-sm mb-0" style="font-size:14px;">
                                    <tbody>
                                        <tr>
                                            <th>Service Name</th>
                                            <td>`+res.service.name+`</td>
                                        </tr>
                                        <tr>
                                            <th>Start Date</th>
                                            <td>`+res.created_at+`</td>
                                        </tr>
                                        <tr>
                                            <th>Estimated Date</th>
                                            <td>`+res.expected_date+`</td>
                                        </tr>
                                        <tr>
                                            <th>Work Status</th>
                                            <td>`+res.workstatus.name+`</td>
                                        </tr>
                                        <tr>
                                            <th>Payment Status</th>
                                            <td>`+res.paymentstatus.name+`</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>`;
                    
                    Swal.fire({
                        title: '<u>Work Details</u>',
                        // icon: 'info',
                        html: html,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Close',
                        confirmButtonAriaLabel: 'Close',
                    });
                    jQuery('.tracking-info').html('');
                    button.prop('disabled', false);
                }
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No data found!',
                        showCloseButton: true,
                    });
                    jQuery('.tracking-info').html('');
                    button.prop('disabled', false);
                }
            },
            error: function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Some Error Ocurred. Please Try Again.!',
                    showCloseButton: true,
                });
                jQuery('.tracking-info').html('');
                button.prop('disabled', false);
            }
        });       
    });

    jQuery('.contact-form').on('submit', function(e){
        e.preventDefault();
        url   = "email/contact-email-send.php";
        data  = $(this).serialize();
        if(data == '')
        {
            return;
        }
        form = $(this);
        $(form).find('button[type=submit]').prop('disabled', true);
        jQuery('.contact-wait').html('&nbsp;&nbsp;Please wait....');
        jQuery.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(res) 
            {
                if(res.success)
                {
                    jQuery('button[type=submit]').prop('disabled', false);
                    jQuery('.contact-wait').html('');
                    Swal.fire(
                        'Success!', res.message, 'success'
                    );
                    form.trigger('reset');
                }
                else
                {
                    jQuery('button[type=submit]').prop('disabled', false); 
                    Swal.fire(
                        'OOPS!', res.message, 'error'
                    );
                    jQuery('.contact-wait').html('');
                    form.trigger('reset');
                }
            },
            error: function()
            {
                jQuery('button[type=submit]').prop('disabled', false);
                Swal.fire(
                    'OOPS!', 'Some Error Ocurred. Please Try Again.', 'error'
                );
                jQuery('.contact-wait').html('');
                form.trigger('reset');
            }
        });  
    });

    jQuery('.subscribe-form').on('submit', function(e){
        e.preventDefault();
        url   = "email/subscription-email-send.php";
        data  = $(this).serialize();
        if(data == '')
        {
            return;
        }
        form = $(this);
        $(form).find('button[type=submit]').prop('disabled', true);
        jQuery('.subscription-wait').html('&nbsp;&nbsp;Please wait....');
        jQuery.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(res) 
            {
                if(res.success)
                {
                    form.find('button[type=submit]').prop('disabled', false);
                    jQuery('.subscription-wait').html('');
                    Swal.fire(
                        'Success!', res.message, 'success'
                    );
                    form.trigger('reset');
                }
                else
                {
                    form.find('button[type=submit]').prop('disabled', false); 
                    Swal.fire(
                        'OOPS!', res.message, 'error'
                    );
                    jQuery('.subscription-wait').html('');
                    form.trigger('reset');
                }
            },
            error: function()
            {
                form.find('button[type=submit]').prop('disabled', false);
                Swal.fire(
                    'OOPS!', 'Some Error Ocurred. Please Try Again.', 'error'
                );
                jQuery('.subscription-wait').html('');
                form.trigger('reset');
            }
        });  
    });
});

window.onscroll = function () 
{
    // show or hide the back-top-top button
    const backToTo = document.querySelector(".scroll-top");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTo.style.display = "flex";
    } else {
      backToTo.style.display = "none";
    }
};