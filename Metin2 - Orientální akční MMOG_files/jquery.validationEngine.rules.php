
(function($) {
    $.fn.validationEngineLanguage = function() {};
    $.validationEngineLanguage = {
        newLang: function() {
            $.validationEngineLanguage.allRules =     {
                    "required":{                // Add your regex rules here, you can take telephone as an example
                        "regex":"none",
                        "alertText":"* Toto pole musí být vyplněno.",
                        "alertTextCheckboxMultiple":"* Treff eine Entscheidung",
                        "alertTextCheckboxe":"* Nepotvrdil jsi souhlas s VOP."},
                    "length":{
                        "regex":"none",
                        "alertText":"* mezi ",
                        "alertText2":" a ",
                        "alertText3":" znaků."},
                    "maxCheckbox":{
                        "regex":"none",
                        "alertText":"* Checks allowed Exceeded"},
                    "minCheckbox":{
                        "regex":"none",
                        "alertText":"* Bitte wähle ",
                        "alertText2":" Optionen"},
                    "confirm":{
                        "regex":"none",
                        "alertText":"* Pole se neshodují."},
                    "telephone":{
                        "regex":"/^[0-9\-\(\)\ ]+$/",
                        "alertText":"* Unzulässige Telefonnummer"},
                    "email":{
                        //"regex":"/^[a-zA-Z0-9_\\.\\-]+\\@([a-zA-Z0-9\\-]+\\.)+[a-zA-Z0-9]{2,4}$/",
                        // Do not allow double hyphens
                        "regex":"/^(?!^.*--.*$)^\\w[a-zA-Z0-9_\\-\\.]+@([a-zA-Z0-9\\-]+\\.)+[a-zA-Z]{2,6}$/",
                        "alertText":"* Tvoje emailová adresa je zřejmě neplatná."},
                    "date":{
                         "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                         "alertText":"* Invalid date, must be in YYYY-MM-DD format"},
                    "onlyNumber":{
                        "regex":"/^[0-9\ ]+$/",
                        "alertText":"* Bitte nur Nummern"},
                    "noSpecialCharacters":{
                        "regex":"/^[0-9a-zA-Z]*$/",
                        "alertText":"* Nejsou povoleny speciální znaky"},
                    "onlyValidPasswordCharacters":{
                        "regex":"/^[a-zA-Z0-9 @!#$%&(){}*+,\-./:;<>=?[\\]\^_|~]*$/",
                        "alertText":"* Nejsou povoleny speciální znaky"},
                    "ajaxUser":{
                        "file":"../validateUser.php",
                        "alertTextOk":"* Dieser Benutzername ist verfügbar",
                        "alertTextLoad":"* Bitte warten es wird geladen.",
                        "alertText":"* Dieser Benutzername ist nicht mehr verfügbar"},
                    "ajaxName":{
                        "file":"../validateUser.php",
                        "alertText":"* Dieser Benutzername ist nicht mehr verfügbar",
                        "alertTextOk":"* Dieser Benutzername ist verfügbar",
                        "alertTextLoad":"* Bitte warten es wird geladen."},
                    "onlyLetter":{
                        "regex":"/^[a-zA-Z\ \']+$/",
                        "alertText":"* Nur Zeichen verwenden."}
                    }
        }
    }
})(jQuery);

$(document).ready(function() {
    $.validationEngineLanguage.newLang()
});