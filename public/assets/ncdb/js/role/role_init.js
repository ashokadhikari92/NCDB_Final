/**
 * Created by iTs mE ) on 6/14/2015.
 */

function viewRole(id)
{
    window.location = base_url + '/roles/'+id;
}

function editRole(id)
{
    window.location = base_url + '/roles/'+id+'/edit';
}

function deleteRole(id)
{
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            window.location = '/delete/role/'+id;
        }
    });
}

function assignPermission(id)
{
    window.location = '/assign/permissions/'+id;
}

$(document).ready(function () {

    /*
     Ajax to load the data on the data table.
     */
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/role/getAll',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            {"mData": "id"},
            {"mData": "display_name"},
            {"mData": "description"},
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewRole(' + full['id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editRole(' + full['id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteRole(' + full['id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: assignPermission(' + full['id'] + ')"><i class="glyphicon glyphicon-pencil"></a>';
                }
            }
        ]
    });
});