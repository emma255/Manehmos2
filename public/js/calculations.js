
function miscariage(){
    var pregcount = document.getElementsByName("mimba_ngapi")[0].value;
    var delivcount = document.getElementsByName("amezaa_mara_ngapi")[0].value;
            var miscariage = pregcount - delivcount;

    document.forms[0].mimba_zilizoharibika.value  = miscariage;
}
