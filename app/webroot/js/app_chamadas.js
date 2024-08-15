function getPost() {
    $.ajax({
        method: 'GET',
        url: 'posts/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}
function editar(id) {
   
    $.ajax({
        method: "POST",
        url: 'posts/edit/' + id,
        success: function (data) {
            $('#postModal').modal('toggle');
            $("#postModalContent").html(data);
            
        },
        error: function (error) {
            console.log(error)
        }
    });
}
function salvaredit(id) {
    var formDataEdit = $("#PostAdForm").serialize()

    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'posts/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#postModal').modal('toggle');
            getPost()
        },
        error: function(error){
            console.log(error)
        }
    })
}
function adicionarPostNaTabela() {
    var formData = $('#PostAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'posts/add/',
        data: formData,
        success: function () {
            $('#postModal').modal('toggle')
            getPost()
        }

    })
}
function pegarformularioejogarnomodal() {
    $.ajax({
        method: "GET",
        url: "posts/add/",
        success: function (data) {
            $('#postModal').modal('toggle');
            $("#postModalContent").html(data);
            getPost()
        }
    })
}


function excluir(id) {
    $.ajax({
        method: "DELETE",
        url: 'posts/delete/' + id,

        success: function (response) {
            getPost()
        }


    })
}




function getTipo() {
    $.ajax({
        method: 'GET',
        url: 'tipos/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}

function editartipo(id) {
   
    $.ajax({
        method: "POST",
        url: 'tipos/edit/' + id,
        success: function (data) {
            $('#tipoModal').modal('toggle');
            $("#tipoModalContent").html(data);
            
        },
        error: function (error) {
            console.log(error)
        }
    });
}
function salvareditpost(id) {
    var formDataEdit = $("#TipoAdForm").serialize()
    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'tipos/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#tipoModal').modal('toggle');
            getTipo()
        },
        error: function(error){
            console.log(error)
        }
    })
}
function pegarformularioejogarnomodaltipos(){
    $.ajax({
        method: "GET",
        url: 'tipos/add/',
        success: function (data){
            $('#tipoModal').modal('toggle');
            $('#tipoModalContent').html(data);
        }
    })
}
function adicionarTipoNaTabela() {
    var formData = $('#TipoAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'tipos/add/',
        data: formData,
        success: function () {
            $('#tipoModal').modal('toggle')
            getTipo()
        }

    })
}
function excluirtipo(id){
    $.ajax({
        method:'DELETE',
        url: 'tipos/delete/' + id,
        success: function (response){
            getTipo()
        }
    })
}




function getPacientes() {
    $.ajax({
        method: 'GET',
        url: 'pacientes/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}
function pegarformularioejogarnomodalPacientes(){
    $.ajax({
        method: "GET",
        url: 'pacientes/add/',
        success: function (data){
            $('#pacienteModal').modal('toggle');
            $('#pacienteModalContent').html(data);
        }
    })
}
function adicionarPacientesNaTabela() {
    var formData = $('#PacienteAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'pacientes/add/',
        data: formData,
        success: function () {
            $('#pacienteModal').modal('toggle')
            getPacientes()
        }

    })
}
function editarPacientes(id) {
    $.ajax({
        method: "POST",
        url: 'pacientes/edit/' + id,
        success: function (data) {
            $('#pacienteModal').modal('toggle');
            $("#pacienteModalContent").html(data);
            
        },
        
    });
}

function salvarPacientes(id) {
    var formDataEdit = $("#PacienteEditForm").serialize()
    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'pacientes/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#pacienteModal').modal('toggle');
            getPacientes()
        },
        error: function(error){
            console.log(error)
        }
    })
}
function excluirPacientes(id){
    $.ajax({
        method:'DELETE',
        url: 'pacientes/delete/' + id,
        success: function (response){
            getPacientes()
        }
    })
}



function getMedicos() {
    $.ajax({
        method: 'GET',
        url: 'medicos/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}
function pegarformularioejogarnomodalMedicos(){
    $.ajax({
        method: "GET",
        url: 'medicos/add/',
        success: function (data){
            $('#medicoModal').modal('toggle');
            $('#medicoModalContent').html(data);
        }
    })
}

function adicionarMedicosNaTabela() {
    var formData = $('#MedicoAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'medicos/add/',
        data: formData,
        success: function () {
            $('#medicoModal').modal('toggle')
            getMedicos()
        }

    })
}
function editarMedicos(id) {
    $.ajax({
        method: "POST",
        url: 'medicos/edit/' + id,
        success: function (data) {
            $('#medicoModal').modal('toggle');
            $("#medicoModalContent").html(data);
            
        },
        
    });
}

function salvarMedicos(id) {
    var formDataEdit = $("#MedicoEditForm").serialize()
    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'medicos/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#medicoModal').modal('toggle');
            getMedicos()
        },
        error: function(error){
            console.log(error)
        }
    })
}
function excluirMedicos(id){
    $.ajax({
        method:'DELETE',
        url: 'medicos/delete/' + id,
        success: function (response){
            getMedicos()
        }
    })
}


function getConvenios() {
    $.ajax({
        method: 'GET',
        url: 'convenios/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}
function pegarformularioejogarnomodalConvenios(){
    $.ajax({
        method: "GET",
        url: 'convenios/add/',
        success: function (data){
            $('#convenioModal').modal('toggle');
            $('#convenioModalContent').html(data);
        }
    })
}
function adicionarConveniosNaTabela() {
    var formData = $('#ConvenioAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'convenios/add/',
        data: formData,
        success: function () {
            $('#convenioModal').modal('toggle')
            getConvenios()
        }

    })
}
function editarConvenios(id) {
    $.ajax({
        method: "POST",
        url: 'convenios/edit/' + id,
        success: function (data) {
            $('#convenioModal').modal('toggle');
            $("#convenioModalContent").html(data);
            
        },
        
    });
}
function salvarConvenios(id) {
    var formDataEdit = $("#ConvenioEditForm").serialize()
    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'convenios/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#convenioModal').modal('toggle');
            getConvenios()
        },
        error: function(error){
            console.log(error)
        }
    })
}
function excluirConvenios(id){
    $.ajax({
        method:'DELETE',
        url: 'convenios/delete/' + id,
        success: function (response){
            getConvenios()
        }
    })
}


function getAtendimentos() {
    $.ajax({
        method: 'GET',
        url: 'atendimentos/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}
function pegarformularioejogarnomodalAtendimentos(){
    $.ajax({
        method: "GET",
        url: 'atendimentos/add/',
        success: function (data){
            $('#atendimentoModal').modal('toggle');
            $('#atendimentoModalContent').html(data);
        }
    })
}
function adicionarAtendimentosNaTabela() {
    var formData = $('#AtendimentoAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'atendimentos/add/',
        data: formData,
        success: function () {
            $('#atendimentoModal').modal('toggle')
            getAtendimentos()
        }

    })
}
function editarAtendimentos(id) {
    $.ajax({
        method: "POST",
        url: 'atendimentos/edit/' + id,
        success: function (data) {
            $('#atendimentoModal').modal('toggle');
            $("#atendimentoModalContent").html(data);
            
        },
        
    });
}
function salvarAtendimentos(id) {
    var formDataEdit = $("#AtendimentoEditForm").serialize()
    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'atendimentos/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#atendimentoModal').modal('toggle');
            getAtendimentos()
        },
        error: function(error){
            console.log(error)
        }
    })
}
function excluirAtendimentos(id){
    $.ajax({
        method:'DELETE',
        url: 'atendimentos/delete/' + id,
        success: function (response){
            getAtendimentos()
        }
    })
}

function getConsultas() {
    $.ajax({
        method: 'GET',
        url: 'consultas/index',
        success: function (data) {
            $('#contentNovo').html(data);
        }
    })
}

function pegarformularioejogarnomodalConsultas(){
    $.ajax({
        method: "GET",
        url: 'consultas/add/',
        success: function (data){
            $('#consultaModal').modal('toggle');
            $('#consultaModalContent').html(data);
        }
    })
}

function adicionarConsultasNaTabela() {
    var formData = $('#ConsultaAdForm').serialize()
    $.ajax({
        method: "POST",
        url: 'consultas/add/',
        data: formData,
        success: function () {
            $('#consultaModal').modal('toggle')
            getConsultas()
        }

    })
}
function editarConsultas(id) {
    $.ajax({
        method: "POST",
        url: 'consultas/edit/' + id,
        success: function (data) {
            $('#consultaModal').modal('toggle');
            $("#consultaModalContent").html(data);
            
        },
        
    });
}

function salvarConsultas(id) {
    var formDataEdit = $("#ConsultaAdForm").serialize()
    console.log(formDataEdit);
    $.ajax({
        method: "PUT",
        url: 'consultas/save/' + id,
        data: formDataEdit,
        success: function (data) {
            $('#consultaModal').modal('toggle');
            getConsultas()
        },
        error: function(error){
            console.log(error)
        }
    })
}

function desmarcarConsultas(id){
    $.ajax({
        method:'PUT',
        url: 'consultas/save/' + id,
        success: function (response){
            getConsultas()
        }
    })
}