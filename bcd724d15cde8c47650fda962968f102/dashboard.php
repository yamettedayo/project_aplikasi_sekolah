<?php
include "sambungkan.php";
if(empty($_GET['page'])) header("Location: ../index.php");

$query = mysqli_query($conn, "SELECT * FROM t_menu where role='".$_SESSION['role']."' ");

while ($row = mysqli_fetch_array($query)) {
  ?>
  <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Menu Siswa </div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Detil</a>
                          <div class="dropdown-menu dropdown-menu-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 18px);" data-popper-placement="bottom-end">
                            <a class="dropdown-item" href="index.php?page=datamapel&kelas=<?php echo $_SESSION["kelas"];?>">Lihat</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="h1 mb-3"><?php echo $row['keterangan'];?>  </div>
                    <div class="d-flex mb-2">
                      <div><a href="index.php?page=datamapel&kelas=<?php echo $_SESSION["kelas"];?>">Lihat </a></div>

                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
		<?php } ?>
              
          