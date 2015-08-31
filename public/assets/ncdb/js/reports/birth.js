/**
 * Created by Ashok on 8/23/15.
 */

var table;
$(document).ready(function () {

    /*
     Ajax for drop down of zone
     */
    $.ajax({
        dataType: "json",
        url: base_url + '/location/zone',
        success: function (data) {

            var options;
            $.each(data, function (key, val) {

                options += "<option value ='" + val.locn_id + "'>" + val.locn_name + "</option>"

            });
            $("#zone").append(options);
        }
    });

    /*
     Ajax for drop down of district
     */
    $('#zone').on("change", function () {
        id = $('#zone option:selected').val();
        $.ajax({
            dataType: "json",
            url: base_url + '/location/district/' + id,
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
    $('#district').on("change", function () {
        id = $('#district option:selected').val();
        $.ajax({
            dataType: "json",
            url: base_url + '/location/district/' + id,
            success: function (data) {
                var options = null;
                $.each(data, function (key, val) {

                    options += "<option value ='" + val.locn_id + "'>" + val.locn_name + "</option>"

                });
                $("#vdc").append(options);
            }
        });
    });


    /*
     Ajax to load the data on the data table.
     */
    table = $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/birth/main/report?vdc=&district=&zone=&from=&to=',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "location"},
            { "mData": "total"},
            { "mData": "male" },
            { "mData": "female" },
            { "mData": "other" }
        ]
    });

    $('.child-filter').on('change',function(e)
    {
        e.preventDefault();
        var vdc = $( "select#vdc option:selected").val();
        var district = $( "select#district option:selected").val();
        var zone = $( "select#zone option:selected").val();
        var from = null;
        var to   = null;
        var url = '/birth/main/report?vdc='+vdc+'&district='+district+'&zone='+zone+'&from='+from+'&to='+to;

        table.ajax.url(url).load();
        //table.destroy();


    });
});


