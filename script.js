domainesSelect.addEventListener('change', function () {
    // Supprimer les anciens champs de téléchargement
    cvFieldsContainer.innerHTML = '';

    // Fonction pour créer un champ de téléchargement de CV
    function createCVField(nom_domaine, i) {
        const cvField = document.createElement('div');
        cvField.className = 'col-lg-6 p-t-20 cv-upload-field';
        cvField.innerHTML = `
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                <span>Charger le CV ${i} pour le domaine ${nom_domaine}</span>
                <input type="file" class="form-control" name="cv_consultant_${i}_${nom_domaine}" id="cv_consultant_${i}_${nom_domaine}">
            </div>
        `;
        return cvField;
    }

    // Ajouter de nouveaux champs de téléchargement en fonction des domaines sélectionnés
    Array.from(domainesSelect.selectedOptions).forEach(function (option) {
        const nom_domaine = option.text;
        // Créer un champ de téléchargement de CV pour chaque domaine
        for (let i = 1; i <= 3; i++) {
            const cvField = createCVField(nom_domaine, i);
            cvFieldsContainer.appendChild(cvField);
        }
    });
});
