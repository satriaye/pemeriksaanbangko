<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>" style="background-color: #000080">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Pemeriksaan 333</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        MENU UTAMA
      </div>

      <li class="nav-item" style="background-color:	#ffe6f3">
        <a class="nav-link" href="<?= base_url('logbookkerja') ?>"><i class="fas fa-fw fa-table" ></i>
          <span >Logbook Kerja</span>
        </a>
      </li>

      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#admpemeriksaanfpp" aria-expanded="true"
          aria-controls="admpemeriksaanfpp" style="background-color:#e6e6ff">
          <i class="fab fa-fw fa-windows"></i>
          <span>Adm. Pemeriksaan FPP</span>
        </a>
        <div id="admpemeriksaanfpp" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"  style="background-color:	#e6e6ff">Adm. Pemeriksaan FPP</h6>
            <a class="collapse-item" href="<?= base_url('datapemrikfpp') ?>">Data Pemeriksaan</a>
            <a class="collapse-item" href="<?= base_url('sp2fpp') ?>">SP2 FPP</a>
            <a class="collapse-item" href="<?= base_url('monitoringlhpfpp') ?>" style="font-size: 13px">Monitoring LHP Selesai FPP</a>
            <a class="collapse-item" href="<?= base_url('skpfpp') ?>" style="font-size: 13px">SKPKB-SKPLB FPP</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#admpemeriksaanp3" aria-expanded="true"
          aria-controls="admpemeriksaanp3" style="background-color:#e6ffff">
          <i class="fab fa-fw fa-apple"></i>
          <span>Adm. Pemeriksaan P3</span>
        </a>
        <div id="admpemeriksaanp3" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="background-color:#e6ffff">Adm. Pemeriksaan P3</h6>
            <a class="collapse-item" href="<?= base_url('datapemrikp3') ?>">Data Pemeriksaan</a>
            <a class="collapse-item" href="<?= base_url('sp2p3') ?>">SP2 P3</a>
            <a class="collapse-item" href="<?= base_url('monitoringlhpp3') ?>">Monitoring LHP Selesai P3</a>
          </div>
        </div>
      </li>


      
     <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap" style="background-color:#e6ffe6">
          <i class="fab fa-fw fa-xbox"></i>
          <span>Monitoring LB</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="background-color:#e6ffe6">Monitoring LB</h6>
            <a class="collapse-item" href="<?= base_url('lbpphop') ?>">LB PPh OP</a>
            <a class="collapse-item" href="<?= base_url('lbpphbadan') ?>">LB PPh Badan</a>
            <a class="collapse-item" href="<?= base_url('lbmasappn') ?>">LB Masa PPN</a>-->



            
            <!--<a class="collapse-item" href="buttons.html">Progress Lap. Bulanan</a>
            <a class="collapse-item" href="buttons.html">Progress DSPP-Strategis</a>
            <a class="collapse-item" href="buttons.html"><font size=2>Progress DSPP-Kewilayahan</font></a>
            <a class="collapse-item" href="buttons.html">Progress IDLP</a>
            <a class="collapse-item" href="buttons.html">Progress Lap. Lainnya</a>-->
            <!--<a class="collapse-item" href="dropdowns.html">Dropdowns</a>-->
            <!--<a class="collapse-item" href="modals.html">Modals</a>-->
            <!--<a class="collapse-item" href="popovers.html">Popovers</a>-->
           <!-- <a class="collapse-item" href="progress-bar.html">Progress Bars</a>-->



         <!-- </div>
        </div>
      </li>-->


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBahanPaparan" aria-expanded="true"
          aria-controls="collapseBahanPaparan" style="background-color:#fff3e6">
          <i class="fas fa-fw fa-palette"></i>
          <span>Contekan</span>
        </a>
        <div id="collapseBahanPaparan" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="background-color:#fff3e6">Contekan</h6>
            <a class="collapse-item" href="<?= base_url('targetrealisasi') ?>">Target-Realisasi</a>
            <a class="collapse-item" href="<?= base_url('kodepemeriksaan') ?>">Kode Pemeriksaan</a>
          </div>
        </div>
      </li>






      <!--<li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-book"></i>
          <span>Berkas LHP</span>
        </a>
      </li>-->	
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Lainnya
      </div>

     <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <span>Permohonan dari Pelayanan</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <span>Kinerja Fungsional</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>-->
      
      <li class="nav-item" >
        <a class="nav-link" href="<?= base_url('berkaspemeriksaan') ?>"style="background-color:#f3ffe6">
        <i class="fas fa-fw fa-book"></i><span>Berkas Pemeriksaan</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>


