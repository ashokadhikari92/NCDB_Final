/**
 * Created by iTs mE ) on 6/16/2015.
 */

$(document).ready(function(){

    $("#role_id").on('change',function(){
        var id = $('#role_id option:selected').val();
        $.ajax({
            dataType : 'json',
            url : '/getPermissions/'+id,
            success : function(data){
                var permission_data = null;
                $.each(data,function(key,val){
                    permission_data +=
                        "<tr>"+
                        "<td>"
                        +"<input type='checkbox' name='"+ val.name+"' value='"+val.id +"'>"
                        +"<label class='label-default' >"+ val.display_name+"</label>"
                        +"</td>"
                        +"</tr>"
                });
                $("#permission_table").append(permission_data);
            }
        });

    });
});