/**
 * Created by Ashok on 3/28/2015.
 */
$(document).ready(function() {

        //
        $.ajax({
            dataType: "json",
            url: "",
            success: function (data) {
                var departmentList = document
                    .getElementById('departmentList');
                var opt = document.createElement('option');
                opt.innerHTML = "Choose Department";
                opt.value = "";

                departmentList.appendChild(opt);
                $.each(data.department, function (key, val) {
                    var opt = document
                        .createElement('option');
                    opt.innerHTML = val.dept_name;
                    opt.value = val.dept_id;
                    if (department) {
                        if (department == opt.innerHTML) {
                            opt.selected = true;
                        }
                    }
                    else {
                        opt.selected = false;
                    }
                    departmentList.appendChild(opt);
                });

            }
        });
    });