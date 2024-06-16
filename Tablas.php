<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TABLAS</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">Interfaz</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Insertar Datos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">T_Administrador</a>
                                <a class="nav-link" href="layout-sidenav-light.html">T_Contador</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Modificar Datos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                <a class="nav-link" href="layout-static.html">T_Administrador</a>

                                <a class="nav-link" href="layout-sidenav-light.html">T_Contador</a>

                            </nav>
                        </div>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">TABLAS</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">TABLAS</li>
                    </ol>
                    <div class="card mb-4">
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            T_Administrador
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th scope="col">nColegiado</th>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = $Conexion->query("SELECT * FROM administrador;");
                                    $Fila = $sql->fetch_all(MYSQLI_ASSOC);

                                    foreach ($Fila as $dato) {
                                    ?>
                                        <tr>
                                            <td><?php echo $dato['nColegiado'] ?> </td>
                                            <td><?php echo $dato['DNI'] ?> </td>
                                            <td><?php echo $dato['Nombre'] ?> </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            T_ComunidadVecinos
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="datatablesSimple1">
                                <thead>
                                    <tr>
                                        <th scope="col">N Colegiado</th>
                                        <th scope="col">Poblacion</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Calle</th>
                                        <th scope="col">CodigoPostal</th>
                                        <th scope="col">nColegiado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = $Conexion->query("SELECT * FROM ComunidadVecinos;");
                                    $Fila = $sql->fetch_all(MYSQLI_ASSOC);

                                    foreach ($Fila as $dato) {
                                    ?>
                                        <tr>
                                            <td><?php echo $dato['nColegiado'] ?> </td>
                                            <td><?php echo $dato['poblacion'] ?> </td>
                                            <td><?php echo $dato['nombre'] ?> </td>
                                            <td><?php echo $dato['calle'] ?> </td>
                                            <td><?php echo $dato['codigoPostal'] ?> </td>
                                            <td><?php echo $dato['nColegiado'] ?> </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            T_Compañia
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="datatablesSimple">
                                <thead>
                                <tr>
                        <th scope="col">CIF</th>
                        <th scope="col">Persona Contacto</th>
                        <th scope="col">Telefono Contacto </th>
                        <th scope="col">Sector</th>
                        <th scope="col">Sector</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = $Conexion->query("SELECT * FROM Compania;");
                                    $Fila = $sql->fetch_all(MYSQLI_ASSOC);

                                    foreach ($Fila as $dato) {
                                    ?>
                                        <tr>
                                            <td><?php echo $dato['CIF'] ?> </td>
                                            <td><?php echo $dato['personaContacto'] ?> </td>
                                            <td><?php echo $dato['telefonoContacto'] ?> </td>
                                            <td><?php echo $dato['sector'] ?> </td>
                                            <td><?php echo $dato['direccion'] ?> </td>
                                            <td><?php echo $dato['nombre'] ?> </td>
                                            <td><?php echo $dato['telefono'] ?> </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-4">
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            T_Contrata
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="datatablesSimple">
                                <thead>
                                <tr>
                        <th scope="col">N.Contrato </th>
                        <th scope="col">CIF</th>
                        <th scope="col">ColegioID </th>
                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = $Conexion->query("SELECT * FROM Contrata;");
                                    $Fila = $sql->fetch_all(MYSQLI_ASSOC);

                                    foreach ($Fila as $dato) {
                                    ?>
                                        <tr>
                                            <td><?php echo $dato['nContrato'] ?> </td>
                                            <td><?php echo $dato['CIF'] ?> </td>
                                            <td><?php echo $dato['colegioID'] ?> </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src=//cdn.datatables.net/2.0.8/js/dataTables.min.js></script>
    <script>
        $document.ready(function() {
            $('#datatablesSimple').DataTable();
            $('#datatablesSimple1').DataTable();

        });
    </script>
</body>



</html>