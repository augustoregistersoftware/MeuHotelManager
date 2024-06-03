<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Fundo claro */
            color: #333; /* Cor do texto */
        }
        .dashboard {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 80px; /* Ajuste conforme necessário */
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            color: #333;
        }
        .card h3 {
            margin-bottom: 15px;
            color: #333;
        }
        .card p {
            font-size: 24px;
            color: #27ae60;
        }
        .credit-card {
            background: linear-gradient(135deg, #1E5799 0%, #2989D8 50%, #207cca 100%);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 200px;
            position: relative;
        }
        .credit-card .card-logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
        }
        .credit-card .card-chip {
            position: absolute;
            top: 60px;
            left: 20px;
            width: 40px;
            height: 30px;
            background: #f2c94c;
            border-radius: 5px;
        }
        .credit-card .card-details {
            position: absolute;
            bottom: 20px;
            left: 20px;
        }
        .credit-card .card-details .card-number {
            font-size: 18px;
            letter-spacing: 2px;
        }
        .credit-card .card-details .card-holder {
            font-size: 14px;
            margin-top: 5px;
        }
        .credit-card .card-details .expiration-date {
            font-size: 14px;
            margin-top: 5px;
        }
        .credit-card .mastercard-logo {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
        }

        .table-container {
            width: 100%;
            max-width: 1200px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table-container h4 {
            margin-bottom: 15px;
            color: #333;
        }
        .table-responsive {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f9f9f9;
            color: #333;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <div class="dashboard">
        <div class="card">
            <h3>Lucro Hoje</h3>
            <p>15%</p>
        </div>

        <div class="card">
            <h3>Diferença <br>Hoje X Ontem</h3>
            <p>20%</p>
        </div>
        <div class="card">
            <h3>Lucro Ontem</h3>
            <p>25%</p>
        </div>
        <div class="card credit-card">
            <div class="card-logo">Lucro Diario De Checkin</div>
            <div class="card-chip"></div>
            <div class="card-details">
                <div class="card-number">**** **** **** 1234</div>
                <div class="card-holder">Meu Hotel</div>
                <div class="expiration-date"><?php echo $data_formatada ?></div>
            </div>
            <img class="mastercard-logo" src="/meuHotel/imagens/logo.png" alt="Mastercard Logo">
        </div>
    </div>

    <div class="table-container">
        <h4>Checkins Cadastrados</h4>
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Quarto</th>
                        <th>Cliente</th>
                        <th>CPF Do Cliente</th>
                        <th>Telefone Do Cliente</th>
                        <th>Data Registro</th>
                        <th>Data De Entrada</th>
                        <th>Data De Saida</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($checkin as $checkin) : ?>
                    <tr>
                        <td><?= $checkin['id_checkin']?></td>
                        <td><?= $checkin['nome_quarto']?></td>
                        <th><?= $checkin['nome_cliente']?></th>
                        <td><?= $checkin['cpf']?></td>
                        <td><?= $checkin['telefone']?></td>
                        <td><?= $checkin['data_marcado']?></td>
                        <?php if($checkin['data_entrada']  == date('d/m/Y')) : ?>
                            <td style="color: green;"><?= $checkin['data_entrada']?> - Hoje</td>
                        <?php else : ?>
                            <td><?= $checkin['data_entrada']?></td>
                        <?php endif; ?>    
                        <?php if($checkin['data_saida']  == date('d/m/Y')) : ?>
                            <td style="color: green;"><?= $checkin['data_saida']?> - Hoje</td>
                        <?php else : ?>
                            <td><?= $checkin['data_saida']?></td>
                        <?php endif; ?> 
                        <?php if($checkin['status'] == 'Checkout') : ?>
                            <td><span class="badge badge-pill pull-right" style="background-color: #03ab14; color: #fff; padding: 8px 10px; margin-top: 5px;">Checkout</span></td>
                        <?php elseif($checkin['status'] == 'Reservado') : ?>
                            <td><span class="badge badge-pill pull-right" style="background-color: #4b0082; color: #fff; padding: 8px 10px; margin-top: 5px;">Reservado</span></td>
                            <?php elseif($checkin['status'] == 'Ocupado') : ?>
                            <td><span class="badge badge-pill pull-right" style="background-color: #fffff0; color: #fff; padding: 8px 10px; margin-top: 5px;">Ocupado</span></td>
                        <?php else :?>
                            <td><span class="badge badge-pill pull-right" style="background-color: #ff0500; color: #fff; padding: 8px 10px; margin-top: 5px;">Cancelado</span></td>
                        <?php endif ; ?>
                        <td><?= $checkin['total_final']?></td>
                        <td> 
                        <a title="Editar Checkin" href="javascript:goEdit(<?= $checkin['id_checkin']?>)" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-pencil"></i></a>
                        <?php if($checkin['status'] == 'TT') : ?>
                            <a title="Cancelar Reserva" href="javascript:goInativa(<?= $checkin['id_checkin']?>)" class="btn btn-warning btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></a>
                            <a title="Confirmar Reserva" href="javascript:goInativa(<?= $checkin['id_checkin']?>)" class="btn btn-warning btn-sm btn-success"><i class="fa-solid fa-check"></i></a>
                        <?php else :?>
                            <a title="Ativar Quarto" href="javascript:goAtiva(<?= $checkin['id_checkin']?>)" class="btn btn-info btn-sm btn-sucess"><i class="fa-solid fa-check"></i></a>
                        <?php endif ;?>    
                        <a title="Config Avançada Quarto" href="javascript:goConfig(<?= $checkin['id_checkin']?>)" class="btn btn-warning btn-sm btn-info"><i class="fa-solid fa-gear"></i></a>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url('public/assets/js/app.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/datatables.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('public/assets/bundles/datatables/export-tables/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('public/assets/js/page/datatables.js');?>"></script>
    <script src="<?php echo base_url('public/assets/js/scripts.js');?>"></script>
    <script src="<?php echo base_url('public/assets/js/custom.js');?>"></script>
</body>
</html>
