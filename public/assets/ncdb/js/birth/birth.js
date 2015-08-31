/**
 * Created by Ashok on 5/18/2015.
 */
function viewBirthRegistration(id)
{
    window.location = base_url + '/birth_details/'+id;
}

function editBirthRegistration(id)
{
    window.location = base_url + '/birth_details/'+id+'/edit';
}

function deleteBirthRegistration(id)
{
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            window.location = '/delete/birth_details/'+id;
        }
    });
}

$(document).ready(function () {


    /*
    Ajax to load the data on the data table.
     */
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/birth/details',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "brth_registration_id"},
            { "mData": "full_name"},
            { "mData": "brth_birth_date_bs" },
            { "mData": "brth_gender" },
            { "mData": "brth_father" },
            { "mData": "brth_mother" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewBirthRegistration(' + full['brth_id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteBirthRegistration(' + full['brth_id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
                }
            }
        ]
    });


    /*
    Ajax for drop down of district
     */
    $.ajax({
        dataType : "json",
        url : base_url + '/location/district/1',
        success : function(data) {
            var district = document.getElementById('district');

            var options;
            $.each(data.district, function(key, val) {

                options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

            });
            $("#district").append(options);
        }
    });
});