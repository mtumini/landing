<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p style="text-transform: uppercase;"><?php echo $user['usuario']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

<?php
if($user['id_docente']){
?>
<!-- Menu profesor -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Notas</span>
          <span class="pull-right-container">
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="/landing/admin/administrador/alumnos/index.php"><i class="fa fa-circle-o"></i> Cargar notas alumnos</a></li>
        </ul>
      </li>
    </ul>

    <?php
  }else {
  ?>
  <!-- Menu administrador -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Alumnos</span>
        <span class="pull-right-container">
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="/landing/admin/administrador/alumnos/index.php"><i class="fa fa-circle-o"></i> Ver alumnos</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Materias</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/landing/admin/administrador/materias/ver_materias.php"><i class="fa fa-circle-o"></i> Ver materias</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Profesores</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/landing/admin/administrador/profesores/ver_profesores.php"><i class="fa fa-circle-o"></i> Ver profesores</a></li>
      </ul>
    </li>
  </ul>
<?php } ?>
  </section>
  <!-- /.sidebar -->
</aside>
