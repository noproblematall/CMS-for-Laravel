$(document).ready(function (){
    $('.toast_container').html('');
    $('.loader_container').addClass('display-none');
    $('#data_submit').click(function(){
        var time = 500;
        $('.toast_container').html('');
        $('.my_toast .toast').attr('data-delay',1000);
        var form_elements = $('.form_container form');
        for(var i=0;i<form_elements.length;i++){            
            // var input_ele = $(form_elements[i]).find('input');
            // for(let j=1;j<input_ele.length;j++){
            //     if($(input_ele[j]).val() != ''){
                    
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
            //     }
            // }

            
        }
    })
   
})