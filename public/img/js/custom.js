function chooseRole() {

    var roles, matric, institution, code, pass;

    matric = $('#matric');
    institution = $('#institution');
    code = $('#code');
    roles = $('#role').val();
    pass = document.querySelector('#pass');

    switch (roles) {
        case '1':
            // admin
            institution.hide('slow');
            matric.hide('slow');
            code.hide('slow');
            // pass.setAttribute("class", "form-group col-sm-12");
            break;

        case '2':
            // student
            institution.show('slow');
            matric.show('slow');
            code.show('slow');
            // pass.style.width = '50%';
            break;

        default:
            institution.hide('slow');
            matric.hide('slow');
            code.hide('slow');
            break;
    }
}
