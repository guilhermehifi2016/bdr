function inserir_registo()
{

    //dados a enviar, vai buscar os valores dos campos que queremos enviar para a BD
    var dadosajax = {
        'titulo': $("#titulo").val(),
        'descricao': $("#descricao").val()

    };

    pageurl = './model/mdl_tarefa.php';
    //para consultar mais opcoes possiveis numa chamada ajax
    //http://api.jquery.com/jQuery.ajax/
    $.ajax({
        //url da pagina
        url: pageurl,
        //parametros a passar
        data: dadosajax,
        //tipo: POST ou GET
        type: 'POST',
        cache: false,
        //se ocorrer um erro na chamada ajax, retorna este alerta
        //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
        error: function () {

            toastr.options = {
                'positionClass': 'toast-center-center',
                'closeButton': true
            };
            toastr.error('Erro no cadastro', 'Erro!');
        },
        //retorna o resultado da pagina para onde enviamos os dados
        success: function (result)
        {

            //se foi inserido com sucesso
            if ($.trim(result) == '1')
            {
                toastr.options = {
                    'positionClass': 'toast-center-center',
                    'closeButton': true
                };
                toastr.success('Tarefa Cadastrada com Sucesso', 'Sucesso!');
            }
            //se foi um erro
            else
            {
                toastr.options = {
                    'positionClass': 'toast-center-center',
                    'closeButton': true
                };
                toastr.error('Erro no cadastro', 'Erro!');
            }

        }
    });
}


function retornar_registo()
{

    $('#sortable').empty(); //Limpando a tabela
    $.ajax({
        type: 'post', //Definimos o método HTTP usado
        data: '',
        dataType: 'json', //Definimos o tipo de retorno
        url: './model/mdl_retorno.php', //Definindo o arquivo onde serão buscados os dados
        success: function (dados) {

            if (dados == 1 || dados.length < 1) {

                $('#sortable').append('<tr><td ></td><td></td><td align="center"><h4 align-"center">Nenhum Registro Encontrado</h4></td> <td></td><td></td></tr>');
            } else {
                for (var i = 0; dados.length > i; i++) {

                    //Adicionando registros retornados na tabela
                    $('#sortable').append('  <li class="list-group-item" id="' + dados[i].id + '"><span class="span9" ></span><h5>ID:' + dados[i].id + ' ---- ' + dados[i].title +
                         '<small> : ' + dados[i].description + '</small></h5><a role="button" data-toggle="modal" data-target="#editModal" class="table-icon" \n\
                                data-id='+dados[i].id+' data-title="'+dados[i].title+'" data-desc="'+dados[i].description+'" >\n\
                                    <i  aria-hidden="true"   data-toggle="tooltip" title="Editar">Editar</i></a> </li> ');

                                    //'<a role="button" data-toggle="modal" data-target="#editModal" class="table-icon" data-id='+dados[i].id+' data-title="'+dados[i].title+'" data-desc="'+dados[i].description+'" ><i class="fa fa-pencil-square-o" aria-hidden="true"   data-toggle="tooltip" title="Editar"></i></a>' 
                }
            }


        }
    });

}
;
