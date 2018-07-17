function calculateDifference() {
    "use strict";
    var mimba_ngapi = document.getElementsByName("mimba_ngapi")[0].value;
    var amezaa_mara_ngapi = document.getElementsByName("amezaa_mara_ngapi")[0].value;
    var mimba_zilizoharibika = document.getElementsByName("mimba_zilizoharibika")[0].value;

    var zilizoharibika = mimba_ngapi - amezaa_mara_ngapi;

    document.forms[0].mimba_zilizoharibika.value = zilizoharibika;
}