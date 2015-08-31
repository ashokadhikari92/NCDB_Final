/**
 * Created by Ashok on 5/18/2015.
 */
function viewDoseInterval(id)
{
    window.location = base_url + '/vaccines/dose/interval/'+id;
}
function editVaccine(id)
{
    window.location = base_url + '/vaccines/'+id+'/edit';
}

function deleteVaccine(id)
{
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            window.location = '/delete/vaccine/'+id;
        }
    });
}

$(document).ready(function () {

    /*
     Ajax to load the data on the data table.
     */
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/getAll/vaccines',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "vcin_name"},
            { "mData": "vcin_dose"},
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewDoseInterval(' + full['vcin_id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editVaccine(' + full['vcin_id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteVaccine(' + full['vcin_id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
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