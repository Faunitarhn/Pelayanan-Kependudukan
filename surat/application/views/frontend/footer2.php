
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left" style="color:white">Copyright © Kecamatan Bandung kidul <?= date('Y')?> | Repost by <a href='https://multisite.bandung.go.id/kecamatan-bandung-kidul/' title='https://www.bandung.go.id' target='_blank'>bandung.go.id</a>
					</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/@bandungkidul4366"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/bdgkidul/?hl=id"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Contact</a>
                        <a href="https://multisite.bandung.go.id/">Other</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url()?>assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?= base_url()?>assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url()?>assets/js/scripts2.js"></script>
        <script src="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#nik').autocomplete({
                    source: "<?php echo site_url('Penduduk/get_autocomplete');?>",

                    select: function (event, ui) {
                    console.log(ui.item)
                            $('[name="nik"]').val(ui.item.label);
                            $('[name="nama"]').val(ui.item.nama);
                            $('[name="no_hp"]').val(ui.item.no_hp);
                    },
                    response: function(event, ui){
                        if(ui.content.length === 0){
                            console.log('No results loaded!');
                        }else{
                            console.log('success!');
                        }
                    },
                });

            });
        </script>

        <script>
            $('#jenis').change(function(){
                var e = document.getElementById("jenis");
                var jenisSurat =  e.value;
                // console.log(jenisSurat)

                const spktpbw = ['FC KK','Telah berusia 17 Tahun','Surat Pengantar/Keterangan RT & RW', 'Surat Pengantar/Keterangan Kelurahan','Mengisi F-102']
                const spktpp = ['SKP (jika terjadi pindah datang)','KTP-el lama dan surat keterangan bukti perubahan peristiwa kependudukan dan peristiwa penting (jika terjadi perubahan data)','Surat Pengantar/Keterangan RT & RW', 'Surat Pengantar/Keterangan Kelurahan','Mengisi F-102']
                const spktprh = ['KTP-el rusak (jika KTP-el Rusak','Surat Kehilangan dari Kepolisian (jika KTP-el hilang)','Surat Pengantar/Keterangan RT & RW', 'Surat Pengantar/Keterangan Kelurahan','Mengisi F-102']
                const spktpoa = ['FC KK','Telah berusia 17 Tahun','Surat Pengantar/Keterangan RT & RW', 'Surat Pengantar/Keterangan Kelurahan','Fotocopy Dokumen Perjalanan','Mengisi F-102']
                const spktppoa = ['FC KK','Telah berusia 17 Tahun','Surat Pengantar/Keterangan RT & RW', 'Surat Pengantar/Keterangan Kelurahan','SKP (jika terjadi pindah datang)','Mengisi F-102']
                const spktprhoa = ['FC KK','Telah berusia 17 Tahun','Surat Pengantar/Keterangan RT & RW', 'Surat Pengantar/Keterangan Kelurahan','Fotocopy Dokumen Perjalanan','Mengisi F-102']
                const spkk = ['KK Lama (Asli & FC)', 'KTP / Jika ada', 'Surat Pindah dari daerah asal', 'FC Buku Nikah / Jika ada', 'Surat Pengantar/Keterangan RT & RW']
                const spkkpk = ['Fotocopi akta kematian','Fotocopi KK lama','mengisi F-1.02']
                const spkkpkk = [' Fotokopi KK lama','Berumur sekurang kurangnya 17 (tujuh belas ) tahun atau sudah kawin atau pernah kawin yang dibuktikan dengan kepemilikan KTP-el','mengisi F-1.02']
                const spkkpd = ['KK lama',' Fotokopi surat keterangan /bukti perubahan peristiwa kependudukan (cnth: Paspor, SKPWNI) dan peristiwa penting','mengisi F-1.02']
                const spkkhr = ['Surat keterangan hilang dari kepolisian atau KK yang rusak',' Fotokopi KTP','Fotokopi kartu ijin tinggal tetap (untuk OA)','mengisi F-1.02']


                const showList = (surat) => {
                    surat.forEach(item => {
                        $('#syarat').append(
                            `
                            <ul>
                                <li>${item}</li>
                            </ul>
                            `
                        )
                    });
                }

               if(jenisSurat == 'SPKTPBW'){
                    $('#syarat').html('')
                    showList(spktpbw)
                }else if(jenisSurat == 'SPKTPP'){
                    $('#syarat').html('')
                    showList(spktpp)
                }else if(jenisSurat == 'SPKTPRH'){
                    $('#syarat').html('')
                    showList(spktprh)
                }else if(jenisSurat == 'SPKTPOA'){
                    $('#syarat').html('')
                    showList(spktpoa)
                }else if(jenisSurat == 'SPKTPPOA'){
                    $('#syarat').html('')
                    showList(spktppoa)
                }else if(jenisSurat == 'SPKTPRHOA'){
                    $('#syarat').html('')
                    showList(spktprhoa)
                }else if (jenisSurat == 'SPKK') {
                    $('#syarat').html('')
                    showList(spkk)
                }else if (jenisSurat == 'SPKKPK') {
                    $('#syarat').html('')
                    showList(spkkpk)
                }else if (jenisSurat == 'SPKKPKK') {
                    $('#syarat').html('')
                    showList(spkkpkk)
                }else if (jenisSurat == 'SPKKPD') {
                    $('#syarat').html('')
                    showList(spkkpd)
                }else if (jenisSurat == 'SPKKHR') {
                    $('#syarat').html('')
                    showList(spkkhr)
                }else{
                    console.log('Nothing')
                }
            })
        </script>
    </body>
</html>
