/**
 * Created by iTs mE ) on 6/21/2015.
 */


$(document).ready(function () {
    $('#data_table').dataTable();

    $('#vaccine_list').on('click',function()
    {
        var id = $('#child_id').val();

        window.location = base_url + '/vaccination/program/vaccine/list/'+id;

    });

    $('#bth_find_child').on('click',function()
    {
        var child_reg_id = $('#registration_id').val();

        window.location = base_url + 'load/child/detail/'+child_reg_id;
    });
});