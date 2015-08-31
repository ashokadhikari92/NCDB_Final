/**
 * Created by Ashok on 8/23/15.
 */

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
     Drop down of Ward Nos inside the selected VDC or Municipality
     */
    $('#vdc').on("change", function () {
        id = $('#vdc option:selected').val();
        console.log(id);
        $.ajax({
            dataType: "json",
            url: base_url + '/location/district/' + id,
            success: function (data) {
                var district = document.getElementById('ward_no');
                var options = null;
                $.each(data, function (key, val) {

                    options += "<option value ='" + val.locn_id + "'>" + val.locn_name + "</option>"

                });
                $("#ward_no").append(options);
            }
        });
    });

});



/*
 Ajax to load the data on the data table.
 */
$('#data_table').dataTable({
    "bProcessing": true,
    "sAjaxSource": base_url + '/',
    "bJQueryUI": true,
    "sPaginationType": "full_numbers",
    "sAjaxDataProp": '',
    "aoColumns": [
        { "mData": "vaccine"},
        { "mData": "total"},
        { "mData": "male" },
        { "mData": "female" },
        { "mData": "other" }
    ]
});