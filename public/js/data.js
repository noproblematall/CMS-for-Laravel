$(document).ready(function (){
    $('.toast_container').html('');
    $('.loader_container').addClass('display-none');
    $('#data_submit').click(function(){
        var time = 500;
        $('.toast_container').html('');
        $('.my_toast .toast').attr('data-delay',1000);
        var form_elements = $('.form_container form');
        for(var i=0;i<form_elements.length;i++){
            if($(form_elements[i]).attr('id') != 'search_form'){
                console.log($(form_elements[i]).attr('action'));
                var post_data = $(form_elements[i]).serialize();
                var current_url =  $(form_elements[i]).attr('action');
                $.ajax({
                    url:current_url,
                    data:post_data,
                    type:'post',
                    beforeSend:function (){$('.loader_container').removeClass('display-none');},
                    success:function(data){
                        if(data !== ''){
                            console.log(data);
                            $('.my_toast .toast-body').text(data);
                            var current = $('.my_toast .toast').attr('data-delay');
                            current = Number(current) + time;
                            $('.my_toast .toast').attr('data-delay',current);
                            // let clone = $('.my_toast .toast').clone();
                            $('.toast_container').append($('.my_toast .toast').clone());
                            $('.toast_container .toast').toast('show');
                        }
                    },
                    
                }).done(function (){
                    $('.loader_container').addClass('display-none');
                })
            }
        }
    })

    $('#select_admin').change(function(){
        if($(this).val()){
            $('#admin_id').val($(this).val());
            $('#search_form').submit();
        }
    })
   
})