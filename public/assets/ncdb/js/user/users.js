/**
 * Created by Ashok on 8/16/2015.
 */

function viewUser(id)
{
    window.location = base_url + '/users/'+id;
}

function assignLocation(id)
{
    window.locaton = base_url + '/assign/user/location/'+id;
}

$(document).ready(function () {


    /*
     Ajax to load the data on the data table.
     */
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/user/details',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "user_name"},
            { "mData": "email"},
            { "mData": "user_role" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: assignLocation(' + full['id'] + ')"><i class="glyphicon glyphicon-pencil"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewUser(' + full['id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            }
        ]
    });


    /*
     Ajax for drop down of zone
     */
    $.ajax({
        dataType : "json",
        url : base_url + '/location/zone',
        success : function(data) {

            var options;
            $.each(data, function(key, val) {

                options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

            });
            $("#zone").append(options);
        }
    });

    /*
     Ajax for drop down of district
     */
    $('#zone').on("change",function() {
        var id = $('#zone option:selected').val();
        $.ajax({
            dataType: "json",
            url: base_url + '/location/district/'+id,
            success: function (data) {
                var options;
                $.each(data, function (key, val) {

                    options += "<option value ='" + val.locn_id + "'>" + val.locn_name + "</option>"

                });
                $("#district").append(options);
            }
        });
    });

    /*
     Drop down of VDCs inside the selected District
     */
    $('#district').on("change",function(){
        var id = $('#district option:selected').val();
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#vdc").append(options);
            }
        });
    });

    /*
     Drop down of Ward Nos inside the selected VDC or Municipality
     */
    $('#vdc').on("change",function(){
        var id = $('#vdc option:selected').val();
        console.log(id);
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#ward_no").append(options);
            }
        });
    });

});