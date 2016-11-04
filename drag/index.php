<?php

//include('model/config.php');
include('controller/ctrl_items.php');
retorna();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Drag and Drop using jQuery and Ajax</title>
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
       <script src=" https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>

    <body onload="retornar_registo()">
        
        
        
        <div id="content" class="container-fluid row-offcanvas">
            <section class="box fix-height">
        <div class="col-md-12 col-sm-12 col-xs-12">
            
            
            <div class="row">
                 <div class="container">
                     <h2 align="center"> Digite a Tarefa</h2>
                     <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-label col-md-12 col-xs-12 text-center both">
                                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" maxlength="20" required>
                              <br>
                              </div>
                      
                              <div class="form-label col-md-12 col-xs-12 text-center both">
                                  <textarea  class="form-control" name="descricao" id="descricao" placeholder="Descricao"  required></textarea>
                             <br>
                              </div>
                       
                            
                              <div class="both"></div>
                              <div class="form-label col-md-12 col-xs-12 text-center">
                                  
						<button  class="btn btn-primary"  type="submit" onclick="inserir_registo();retornar_registo()"> Gravar</button>
                        
						 </div>
                         
 </div>
                     
                          </div>
            <div class="row"><br><br></div>
            
            
        <div class="container">
            <div class="header">

            </div><!-- header -->
            <h1 class="main_title">Lista de Tarefas</h1>
            <div class="content">
                 <div class="both"></div>
               <ul class="list-group"  id="sortable">
               </ul>
           </div>
            </div>
            </div>
            </div>
                </section>
            <div class="footer">
               
            </div><!-- footer -->
       </div>
        <script src="js/inserir_tarefa.js" charset="utf-8"></script>
        
    </body>
</html>
