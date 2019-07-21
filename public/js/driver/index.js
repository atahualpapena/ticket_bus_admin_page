    $(document).ready(function(){
        getAllDriver();
    });


    var page_current = 1;
    var last_page = 1;

    function getAllDriver()
    {
        $.ajax({
            url: BASE_URL+'driver/all',
            dataType:'json',
            method:'get',
            data:{
                search:$('#search_driver').val(),
                page:page_current
            }
        }).done(function(result){
                var html=''; 
                $(result.data).each(function(){  
                    html += '<tr onclick="showModal('+this.iddriver+')">'; 
                    html += '<td>';
                    html +=  this.firstname;
                    html += '</td>';
                    html += '<td>';
                    html +=  this.lastname;
                    html += '</td>';
                    html += '<td>';
                    html +=  this.drivernumber;
                    html += '</td>';   
                    html += '<td>';
                    html +=  this.score;
                    html += '</td>';   
                    html += '<tr>'; 
                });
                $('#driver_table tbody').html(html);
                last_page = result.last_page;
                page_current = result.current_page;
                $('#info_pag_driver').html('Mostrando pagina '+result.current_page+' de '+result.last_page+', de '+result.total+' registros');
        }).error(function(){

        });
    }

    
    
    $('#Driver_prev').on('click',function(){
        if(page_current > 1)
        {
            page_current= page_current - 1;
            getAllDrivere();
        }
    });
    
    $('#Driver_next').on('click',function(){
        if(page_current < last_page)
        {
            page_current= page_current + 1;
            getAllDrivere();
        }
    });
        
    function showModal(id)
    {
         $.ajax({
                url: BASE_URL+'driver/profile',
                dataType:'json',
                method:'get',
                data:{
                    id:id
                }
            }).done(function(result){
                $('#delete_driver').attr('disabled',false);
                $('.modal-title-driver').html('Driver '+result.licenseplate);
                $('#firstname').val(result.firstname);
                $('#lastname').val(result.lastname);
                $('#drivernumber').val(result.drivernumber);
                $('#sex').val(result.sex);
                $('#birthdate').val(result.birthdate);
                $('#iddriver').val(result.iddriver); 
                $('#modalDriver').modal('show');
            });
    }
      
    function saveDriver()
    {
         $.ajax({
                url: BASE_URL+'driver',
                dataType:'json',
                method:'post',
                data:{
                    _token:$('input[name=_token]').val(),
                    birthdate:$('#birthdate').val(),
                    iddriver:$('#iddriver').val(),
                    firstname:$('#firstname').val(),
                    lastname:$('#lastname').val(),
                    drivernumber:$('#drivernumber').val(),
                    sex:$('#sex').val()                    
                }
            }).done(function(result){
                if(result.status > 0)
                {
                    alert('Operacion exitosa'); 
                    $('#modalDriver').modal('hide');
                    getAllDriver();
                }
            });
    }

    function searchDriver(e){
        if(event.which == 13){
            page_current = 1;
            getAllDriver();
        }
    } 
    
    function adddriver()
    {
        $('.modal-title-driver').html('Nuevo Conductor');
        $("input[type=text]").val('');
        $('#delete_driver').attr('disabled',true);
        $("textarea").val('');
        $('#iddriver').val(0);
        $('#modalDriver').modal('show');
    }

    function deleteDriver()
    {
        $.ajax({
            url: BASE_URL+'driver',
            dataType:'json',
            method:'delete',
            data:{
                _token:$('input[name=_token]').val(),
                iddriver:$('#iddriver').val()                    
            }
        }).done(function(result){
            if(result.status > 0)
            {
                alert('Operacion exitosa'); 
                $('#modalDriver').modal('hide');
                getAllDriver();
            }
        });
    }