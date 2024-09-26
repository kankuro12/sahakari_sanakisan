<script src="{{asset('calender/nepali.datepicker.v3.2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('calender/nepali.datepicker.v3.2.min.css')}}">
<script>
    var currentDate;
    $(".calender").each(function () {
        cc_id=$(this).attr("id");
        const day=NepaliFunctions.GetCurrentBsDay();
        const month=NepaliFunctions.GetCurrentBsMonth();

        currentDate= NepaliFunctions.GetCurrentBsYear() +
        "-" +
        (month < 10 ? "0" + month : month) +
        "-" +
        (day < 10 ? "0" + day : day);

        if((this.value=="" || this.value==undefined) && this.dataset.nodate==undefined){
            $(this).val(
               currentDate
            );
        }

        if($("#" + cc_id).hasClass('nolimit')){
            $("#" + cc_id).nepaliDatePicker();
        }else{
            if($("#" + cc_id).hasClass('before')){
                $("#" + cc_id).nepaliDatePicker({
                    disableBefore: currentDate
                });
            }else{

                $("#" + cc_id).nepaliDatePicker({
                    disableAfter: currentDate
                });
            }
        }

    });
</script>
