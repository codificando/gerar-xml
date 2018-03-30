
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exportando dados com PHP</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    </head>
    <body>

    <div class="container">
        <div class="row">
            <h1>Noticias</h1>
        </div>
        <div class="row">
            <form action="exportar.php" method="POST">
                <input type="hidden" name="export" value="xml">
                <input type="hidden" name="fileName" value="noticiaCategoriaSubcategoria">
                <button type="submit" class="dropdown-button btn right" >Exportar</button>
            </form>
        </div>
        <div class="row">
            <table class="bordered highlight">
                <thead>
                    <tr>
                        <th>cd_noticia</th>
                        <th>dt_noticia</th>
                        <th>nm_noticia</th>
                        <th>ds_chamada_noticia</th>
                        <th>ds_noticia</th>
                    </tr>
                </thead>
                <tbody>
                   <?php //foreach($data as $row): ?>
                        <tr>
                            <td><?php //echo $row['cd_noticia'];  ?></td>
                            <td><?php// echo $row['dt_noticia'];  ?></td>
                            <td><?php //echo $row['nm_noticia'];  ?></td>
                            <td><?php //echo $row['ds_chamada_noticia'];  ?></td>
                            <td><?php //echo $row['ds_noticia'];  ?></td>
                        </tr>
                    <?php //endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </body>
</html>
