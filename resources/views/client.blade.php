
  <html>
      <head>
          <title>Polígonos</title>
          <link  href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" rel="stylesheet">
      </head>

      <body>
          <div class="container" >
              <h1><b><center>Polígonos</center></b></h1>
              <hr>
              <br>
              <table class="table table-hover">
                  <thead class="thead-dark">
                      <tr>
                          <th class="text-center">Nome</th>
                          <th class="text-center">Lados</th>
                          <th class="text-center">Angulos</th>
                      </tr>
                  </thead>

                  <tbody>
                      <tr>
                          <td>{{$nome}}</td>
                          <td> {{$lados}}</td>
                          <td>{{$angulo}}</td>
                      </tr>
                     
                      

                  </tbody>
              </table>
          </div>
      </body>
  </html>