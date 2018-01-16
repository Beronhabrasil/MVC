<html>
    <head>
        <meta charset="UTF-8">
        <title>middle</title>
        
       
              
            <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css"/>
         <link rel="stylesheet" type="text/css" href="../public/css/root.css"/>
        <script src="../public/js/jquery.js"></script>
      
        
      <script src="../public/js/bootstrap.min.js"></script>
    
    </head>
    <body>
        <div class="wrapper">
    <div class="container-fluid">
        <div class="row-fluid">
            
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Formular</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Start</a></li>
                        <li><a href="#">Info</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Hilfe</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            
            
            
            
        </div>
        <br>
  <div class="row-fluid">  
   
        
      <table class="table table-sm table-inverse ">
          <thead>
    <tr>
    
      <th>ID</th>
       <th>name</th>
      <th>Tranks</th>
      <th>video</th>
   
    </tr>
  </thead>
  <tbody>
  
    
      
 
  
     <?php
     
     


    include_once 'application/controller/Home.php';
  
   
     $getdata = new Home();
  $data =   $getdata->getQuery();
     
     foreach ($data as $row) :?>
     
        
     
        <td>  <?php echo $row['id'];?> </td>
      <td>  <?php echo $row['artist'];?> </td>
        <td>  <?php echo $row['track'];?> </td>
<td><img src="../public/img/me.gif" width="20" height="20"type="button"data-toggle="modal" 
data-target="#<?php echo $row['id'] ?>"></td>
      
    </tr>
                      
                       <div class="modal fade" id="<?php echo $row['id'] ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Video Player</h4>
                                </div>
                                <div class="modal-body">
                                   <?php $link =  $row['link'] ;?>  
                                    <a class="myview" href="<?php echo $link ?>">click me!</a>  
                                    <h4>Click for watch the video</h4>
                                    <div class="row-fluid">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $link; ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>     
                   
                     
     <?php endforeach    ?>
  
   
  </tbody>
</table>
       
  </div>   
         </div> 
             </div> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>  $(document).ready(function(){
    var myview = $(".myview");
                        myview.click(function()
                        {
                            window.open(this.href);
                             return false;
                        });
});
        
       
       
      </script> 
    </body>
</html>
