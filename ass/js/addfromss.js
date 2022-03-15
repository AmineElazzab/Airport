form = document.querySelector("#passager");

document.querySelector("#nbr_passager").addEventListener('input', function() {
    var nbr = document.querySelector("#nbr_passager").value;
    // var clientx = document.querySelector("#id_client").value;

    //delete div childs #passager 

    for (i = 0; i < nbr; i++) {
        //console.log(nbr);
        var div = document.createElement("div");
        div.className = "form-control mb-4";
        var nom = "nom" + i; //concatenation
        var prenom = "prenom" + i;
        var date_naissance = "date_naissance" + i;
        // var client = "client" + i;
        div.innerHTML = `<div class="mb-3">

                            <label for="${nom}" class="mb-2">Nom </label>
                            <input type="text" name="${nom}" id="${nom}" class="form-control">
                            <label for="${prenom}" class="mb-2">Prénom </label>
                            <input type="text" name="${prenom}" id="${prenom}" class="form-control">
                            <label for="${date_naissance}" class="mb-2">Date de naissance </label>
                            <input type="date" name="${date_naissance}" id="${date_naissance}" class="form-control">

                        </div>`

        form.appendChild(div);
    }

});