jQuery(document).ready(function ($) {
//tech post change ajax
$('#change-post-type').change(function () { 
let el=$(this);
let option_find=el.find('option:selected');
let option_value=option_find.val()
$.ajax({
    type: "post",
    url: ajax.ajaxurl,
    data: {
        action:option_value,
        nonce:ajax._nonce,
    },
    dataType: "json",
    beforeSend:function () { 
        $('#ajax-load-content').css('opacity',0.3)
        $('.loading-ajax').show();
    },
    success: function (response) {
        
        if (response.success) {
            if(response.content!==null){
                
                $('#ajax-load-content').html(response.content);
            }else{
                
                $('#ajax-load-content').html('<div class="alert alert-info"'+"style='width:100%'"+' >مطلبی یافت نشد!!!</div>');
            }
        }
    },
    error:function (error) {
    },
    complete:function(){
        $('#ajax-load-content').css('opacity',1)
        $('.loading-ajax').hide();

    }
});   
});
    
});