    $(document).ready(function(){
        getAllBuses();
    });


    var page_current = 1;
    var last_page = 1;

    function getAllBuses()
    {
        $.ajax({
            url: BASE_URL+'bus/all',
            dataType:'json',
            method:'get',
            data:{
                search:$('#search_bus').val(),
                page:page_current
            }
        }).done(function(result){
                var html=''; 
                $(result.data).each(function(){  
                    html += '<tr onclick="showModal('+this.idbus+')">'; 
                    html += '<td>';
                    html +=  this.brand;
                    html += '</td>';
                    html += '<td>';
                    html +=  this.year;
                    html += '</td>';
                    html += '<td>';
                    html +=  this.capacity;
                    html += '</td>';   
                    html += '<td>';
                    html +=  this.licenseplate;
                    html += '</td>';   
                    html += '<tr>'; 
                });
                $('#bus_table tbody').html(html);
                last_page = result.last_page;
                page_current = result.current_page;
                $('#info_pag_bus').html('Mostrando pagina '+result.current_page+' de '+result.last_page+', de '+result.total+' registros');
        }).error(function(){

        });
    }

    
    
    $('#bus_prev').on('click',function(){
        if(page_current > 1)
        {
            page_current= page_current - 1;
            getAllBuse();
        }
    });
    
    $('#bus_next').on('click',function(){
        if(page_current < last_page)
        {
            page_current= page_current + 1;
            getAllBuse();
        }
    });
        
    function showModal(id)
    {
         $.ajax({
                url: BASE_URL+'bus/profile',
                dataType:'json',
                method:'get',
                data:{
                    id:id
                }
            }).done(function(result){
                $('.modal-title-bus').html('Bus '+result.licenseplate);
                $('#idBus').val(result.idbus);
                $('#idplate').val(result.licenseplate);
                $('#yearBus').val(result.year);
                $('#capacityBus').val(result.capacity);
                $('#brandBus').val(result.brand);
                $('#notesBus').val(result.notes); 
                $('#modalBus').modal('show');
            });
    }
      
    function saveBus()
    {
         $.ajax({
                url: BASE_URL+'bus',
                dataType:'json',
                method:'post',
                data:{
                    _token:$('input[name=_token]').val(),
                    idplate:$('#idplate').val(),
                    idbus:$('#idBus').val(),
                    yearBus:$('#yearBus').val(),
                    capacityBus:$('#capacityBus').val(),
                    brandBus:$('#brandBus').val(),
                    notesBus:$('#notesBus').val()                    
                }
            }).done(function(result){
                if(result.status > 0)
                {
                    alert('Operacion exitosa'); 
                    $('#modalBus').modal('hide');
                    getAllBuses();
                }
            });
    }

    function searchBus(e){
        if(event.which == 13){
            page_current = 1;
            getAllBuses();
        }
    } 
    
    function addBus()
    {
        $('.modal-title-bus').html('Nuevo Bus');
        $("input[type=text]").val('');
        $("textarea").val('');
        $('#idBus').val(0);
        $('#modalBus').modal('show');
    }

    function deleteBus()
    {
        $.ajax({
            url: BASE_URL+'bus',
            dataType:'json',
            method:'delete',
            data:{
                _token:$('input[name=_token]').val(),
                idbus:$('#idBus').val()                    
            }
        }).done(function(result){
            if(result.status > 0)
            {
                alert('Operacion exitosa'); 
                $('#modalBus').modal('hide');
                getAllBuses();
            }
        });
    }