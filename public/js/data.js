$(document).ready(function(){
    var table = $('#product_table').DataTable();
    $('.loader_container').addClass('display-none');
    $('.product_delete').click(function(e){
        e.preventDefault();
        console.log('ok')
        swal({
            title: "Warning",
            text: "Are you sure ?",
            icon: "warning",
            buttons: {
                cancel: "Cancel",                
                default: 'Ok',
            },
        }).then((value)=>{
            switch(value) {
                    case "default" :
                        location.href = ($(this).attr('href'));
                        break;
                    case "cancel" :
                        break;
            }
        });
    })

    $('#core_search').click(function(){
        let info = $('#search_col').val();
        let keyword = $('#search_keyword').val();
        if(info == 4){
            switch (keyword) {
                case 'yes':
                    keyword = 'on';
                    break;
                case 'no':
                    keyword = 'off';
            }
        }
        let data = {info:info,keyword:keyword};
        $.ajax({
            url:'core_search',
            data:data,
            type:'get',
            beforeSend:function (){$('.loader_container').removeClass('display-none');},
            success:function(data){
                console.log(data)
                $('#product_table tbody').empty();
                var html = ``;
                var sold = '';
                if(data.length > 0){
                    let i = 0;
                    data.forEach(ele => {
                        switch (ele.sold) {
                            case 'on':
                                sold = 'Yes';
                                break;
                            case 'off':
                                sold = 'No'
                        }
                        i++;
                        html += `<tr>
                                    <td>${i}</td>
                                    <td>${ele.product_id}</td>
                                    <td>${ele.product_name}</td>
                                    <td>${ele.category.name}</td>
                                    <td>${ele.vendor}</td>
                                    <td>${ele.description}</td>
                                    <td>${ele.price}</td>
                                    <td>${sold}</td>
                                    <td>${ele.created_at}</td>
                                </tr>`;
                    });
                    $('#product_table tbody').append(html)
                }else{

                }
                
            }
        }).done(function (){
            $('.loader_container').addClass('display-none');
        })
    })


    $('#select_admin').change(function(){
        $('#admin_id').val($(this).val());
        $('#search_form').submit();
    })

    $('#select_category').change(function(){
        $('#category_id').val($(this).val());
        $('#category_search_form').submit();
    })
})

