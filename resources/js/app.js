import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        let isValid = true;

        // Example validation for required field 'frantoio'
        const frantoio = document.getElementById('frantoio').value;
        if (!frantoio) {
            alert('Il campo "Frantoio" è obbligatorio');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});