<div class="content">
    <div class="container-fluid">

 
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">mark_email_read</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Pengajuan</p>
                        <h3 class="card-title"><?= $this->db->get('pengajuan_surat')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-primary">info</i>
                            <a href="#">Jumlah Surat Pengajuan</a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">mark_email_unread</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Keluar</p>
                        <h3 class="card-title"><?= $this->db->get('surat_keluar')->num_rows(); ?></h3>

                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Surat Keluar
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">mail</i>
                    </div>
                    <!--<div class="card-content">
                        <p class="category">Surat Keterangan</p>
                        <h3 class="card-title"><?= $this->db->get('surat_keterangan')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Surat Keterangan
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-user"></i>
                    </div>-->
                    <div class="card-content">
                        <p class="category">User</p>
                        <h3 class="card-title"><?= $this->db->get('user')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah User
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <canvas id="chart1" width="400" height="400"></canvas>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <canvas id="chart2" width="400" height="400"></canvas>
        </div>
    </div>

    </div>
    <!-- <script>
   document.addEventListener("DOMContentLoaded", function () {
       var suratKeluar = <?= $this->db->get('surat_keluar')->num_rows(); ?>;
       var pengajuanSurat = <?= $this->db->get('pengajuan_surat')->num_rows(); ?>;
    
    console.log("Jumlah surat keluar: " + suratKeluar); // Tambahkan baris ini untuk debug
    console.log("Jumlah surat keluar: " + pengajuanSurat); // Tambahkan baris ini untuk debug

    var ctx = document.getElementById('suratChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pengajuan Surat', 'Surat Keluar'],
            datasets: [{
                label: 'Jumlah Surat',
                data: [pengajuanSurat, suratKeluar],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});

</script> -->
<script>
// Data untuk Surat Pertama
        var dataSuratPengajuan = <?= $this->db->get('pengajuan_surat')->num_rows(); ?>;

        // Data untuk Surat Kedua
        var dataSuratKeluar = <?= $this->db->get('surat_keluar')->num_rows(); ?>;

        // Membuat grafik untuk Surat Pertama
        var ctx1 = document.getElementById('chart1').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Surat Pengajuan'],
                datasets: [{
                    label: 'Jumlah Surat',
                    data: [dataSuratPengajuan],
                    backgroundColor: 'orange'
                }]
            }
        });

        // Membuat grafik untuk Surat Kedua
        var ctx2 = document.getElementById('chart2').getContext('2d');
        var chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Surat Keluar'],
                datasets: [{
                    label: 'Jumlah Surat',
                    data: [dataSuratKeluar],
                    backgroundColor: 'pink'
                }]
            }
        });
    </script>
</div>