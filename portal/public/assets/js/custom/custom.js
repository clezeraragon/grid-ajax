
$(function() {
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {
        "placeholder": "dd/mm/yyyy"
    });

    $("[data-mask]").inputmask();

    $(document).ready(function() {

        //$("[fone-mask]").inputmask();
        //$("[phone-codes]").inputmask('99-9999[9]-9999');  //static mask
        $("#phone-codes").inputmask({mask:'(99) 9999[9]-9999',greedy:true});  //static mask
        $("#phone-codes2").inputmask({mask:'(99) 9999[9]-9999',greedy:true});  //static mask
        $("#cep").inputmask({mask:'99999-999',greedy:true});  //static mask
        $("#cnpj").inputmask({mask:'99.999.999/9999-99'});  //static mask



    });

    //$('#email').inputmask({
    //    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
    //    greedy: false,
    //    onBeforePaste: function (pastedValue, opts) {
    //        pastedValue = pastedValue.toLowerCase();
    //        return pastedValue.replace("mailto:", "");
    //    },
    //    definitions: {
    //        '*': {
    //            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
    //            cardinality: 1,
    //            casing: "lower"
    //        }
    //    }
    //    });



});

