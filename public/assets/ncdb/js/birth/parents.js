/**
 * Created by Ashok on 5/18/2015.
 */
function viewParent(id)
{
    window.location = base_url + '/birth_details/'+id;
}

function editParent(id)
{
    window.location = base_url + '/birth_details/'+id+'/edit';
}



$(document).ready(function () {


    /*
     Ajax to load the data on the data table.
     */
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/parent/details',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "prnt_citizenship_no"},
            { "mData": "prnt_first_name"},
            { "mData": "prnt_occupation" },
            { "mData": "prnt_gender" },
            { "mData": "prnt_education_level" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewParent(' + full['prnt_id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editParent(' + full['prnt_id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            }
        ]
    });


});