/**
 * Created by nOt bIG dEaL on 5/22/2015.
 */

function viewChildVaccine(id)
{
    window.location = base_url + '/child_vaccines/'+id;
}

function editBirthRegistration(id)
{
    window.location = base_url + '/child_vaccines/'+id+'/edit';
}

function deleteBirthRegistration(id)
{
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            window.location = '/delete/child/vaccine/'+id;
        }
    });
}

$(document).ready(function () {
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/child/vaccines/details',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "chld_vcin_registration_id"},
            { "mData": "child_full_name"},
            { "mData": "child_address" },
            { "mData": "vaccine_name" },
            { "mData": "chld_vcin_dose_no" },
            { "mData": "chld_vcin_date" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewBirthRegistration(' + full['chld_vcin_id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editBirthRegistration(' + full['chld_vcin_id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            }
        ]
    });

    $('#bth_find_child').on('click',function()
    {
        var child_reg_id = $('#registration_id').val();

        window.location = base_url + '/load/child/detail/'+child_reg_id;
    });
});