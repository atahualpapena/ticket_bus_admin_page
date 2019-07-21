$(document).ready(function(){
    getAllroute();
});


var page_current = 1;
var last_page = 1;

function getAllroute()
{
    $.ajax({
        url: BASE_URL+'route/all',
        dataType:'json',
        method:'get',
        data:{
            search:$('#search_route').val(),
            page:page_current
        }
    }).done(function(result){
            var html=''; 
            $(result.data).each(function(){  
                html += '<tr onclick="showModal('+this.idroute+')">'; 
                html += '<td>';
                html +=  this.firstname;
                html += '</td>';
                html += '<td>';
                html +=  this.lastname;
                html += '</td>';
                html += '<td>';
                html +=  this.routenumber;
                html += '</td>';   
                html += '<td>';
                html +=  this.score;
                html += '</td>';   
                html += '<tr>'; 
            });
            $('#route_table tbody').html(html);
            last_page = result.last_page;
            page_current = result.current_page;
            $('#info_pag_route').html('Mostrando pagina '+result.current_page+' de '+result.last_page+', de '+result.total+' registros');
    }).error(function(){

    });
}



$('#route_prev').on('click',function(){
    if(page_current > 1)
    {
        page_current= page_current - 1;
        getAllroutee();
    }
});

$('#route_next').on('click',function(){
    if(page_current < last_page)
    {
        page_current= page_current + 1;
        getAllroutee();
    }
});
    
function showModal(id)
{
     $.ajax({
            url: BASE_URL+'route/profile',
            dataType:'json',
            method:'get',
            data:{
                id:id
            }
        }).done(function(result){
            $('#delete_route').attr('disabled',false);
            $('.modal-title-route').html('route '+result.licenseplate);
            $('#firstname').val(result.firstname);
            $('#lastname').val(result.lastname);
            $('#routenumber').val(result.routenumber);
            $('#sex').val(result.sex);
            $('#birthdate').val(result.birthdate);
            $('#idroute').val(result.idroute); 
            $('#modalroute').modal('show');
        });
}
  
function saveroute()
{
     $.ajax({
            url: BASE_URL+'route',
            dataType:'json',
            method:'post',
            data:{
                _token:$('input[name=_token]').val(),
                birthdate:$('#birthdate').val(),
                idroute:$('#idroute').val(),
                firstname:$('#firstname').val(),
                lastname:$('#lastname').val(),
                routenumber:$('#routenumber').val(),
                sex:$('#sex').val()                    
            }
        }).done(function(result){
            if(result.status > 0)
            {
                alert('Operacion exitosa'); 
                $('#modalroute').modal('hide');
                getAllroute();
            }
        });
}

function searchroute(e){
    if(event.which == 13){
        page_current = 1;
        getAllroute();
    }
} 

function addroute()
{
    $('.modal-title-route').html('Nueva Ruta');
    $("input[type=text]").val('');
    $('#delete_route').attr('disabled',true);
    $("textarea").val('');
    $('#modalRoute').modal('show');
}

function deleteroute()
{
    $.ajax({
        url: BASE_URL+'route',
        dataType:'json',
        method:'delete',
        data:{
            _token:$('input[name=_token]').val(),
            idroute:$('#idroute').val()                    
        }
    }).done(function(result){
        if(result.status > 0)
        {
            alert('Operacion exitosa'); 
            $('#modalroute').modal('hide');
            getAllroute();
        }
    });
}