$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});


/* muestra el formulario categorias para ingresar mas categorias */
$("#targetCategories").on( "click", function() { 
    $('#target').toggle();
});



$(document).on('click', '.pagination a', function(e) {
    e.preventDefault();

    var page = $(this).attr('href').split('page=')[1];
    /*alert(page);*/
    var route = "http://localhost:8000/admin/categories";

    $.ajax({
        url: route,
        data:{page:page},
        type:'GET',
        dataType: 'json',
        success: function(data) {
            $('.categoriesContainer').html(data);
        }
    });           
});


/* cuando envia el formulario con los datos refresca los datos de la tabla con los
nuevos datos introducidos de las nuevas categorias */
$('#form-insert-categories').on('submit', function(e) {
    e.preventDefault();

    var data = $(this).serialize();
    var url = $(this).attr('action');
    var post = $(this).attr('method');
    alert(url);
    $.ajax({
        type: post,
        url: url,
        dataType: 'json',
        data: data,
        success:function(data) {
            /*console.log(data);*/
            $('#message').html(data.msg);
            $('#message').fadeIn(300).delay(3000).fadeOut(300);
            $('.categoriesContainer').html(data.view);
        }
    });          
});


/* Edit Categories modal */
$(document).ready(function(){
    $("body").on("click",".edit-modal",function(){
        var id = $(this).attr('data-id'); //obtenemos el valor de atributo data-id
        var name = $(this).attr('data-name');
        $.ajax({
            type: 'post',
            route: 'categories'+'/'+id+'/edit',
            data: {id:id},

            success : function(data) {
                alert(data);
                var frmupdate = $('#edit-form');
                frmupdate.find('#name').val(data.name);
                $('#editCategoryModal').modal('show');
            }
        });
    });
});