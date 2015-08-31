/**
 * Created by nOt bIG dEaL on 5/24/2015.
 */

$(document).ready(function () {

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
        id = $('#zone option:selected').val();
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
        id = $('#district option:selected').val();
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
        id = $('#vdc option:selected').val();
        console.log(id);
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var district = document.getElementById('ward_no');
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#ward_no").append(options);
            }
        });
    });


   /* -----------------------------------------------Father Address----------------------------------------------------------*/

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
            $("#father_zone").append(options);
        }
    });

    /*
     Ajax for drop down of district
     */
    $('#father_zone').on("change",function() {
        id = $('#father_zone option:selected').val();
        $.ajax({
            dataType: "json",
            url: base_url + '/location/district/'+id,
            success: function (data) {
                var options;
                $.each(data, function (key, val) {

                    options += "<option value ='" + val.locn_id + "'>" + val.locn_name + "</option>"

                });
                $("#father_district").append(options);
            }
        });
    });

    /*
     Drop down of VDCs inside the selected District
     */
    $('#father_district').on("change",function(){
        id = $('#father_district option:selected').val();
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#father_vdc").append(options);
            }
        });
    });

    /*
     Drop down of Ward Nos inside the selected VDC or Municipality
     */
    $('#father_vdc').on("change",function(){
        id = $('#father_vdc option:selected').val();
        console.log(id);
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#father_ward_no").append(options);
            }
        });
    });

    /* -----------------------------------------------Mother Address----------------------------------------------------------*/

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
            $("#mother_zone").append(options);
        }
    });

    /*
     Ajax for drop down of district
     */
    $('#mother_zone').on("change",function() {
        id = $('#mother_zone option:selected').val();
        $.ajax({
            dataType: "json",
            url: base_url + '/location/district/'+id,
            success: function (data) {
                var options;
                $.each(data, function (key, val) {

                    options += "<option value ='" + val.locn_id + "'>" + val.locn_name + "</option>"

                });
                $("#mother_district").append(options);
            }
        });
    });

    /*
     Drop down of VDCs inside the selected District
     */
    $('#mother_district').on("change",function(){
        id = $('#mother_district option:selected').val();
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#mother_vdc").append(options);
            }
        });
    });

    /*
     Drop down of Ward Nos inside the selected VDC or Municipality
     */
    $('#mother_vdc').on("change",function(){
        id = $('#father_vdc option:selected').val();
        console.log(id);
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#mother_ward_no").append(options);
            }
        });
    });
});


