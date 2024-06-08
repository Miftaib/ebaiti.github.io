<form action="/tempat/update" method="POST" id="frmtempatEdit">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                        <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                        <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M5 11h1v2h-1z"></path>
                        <path d="M10 11l0 2"></path>
                        <path d="M14 11h1v2h-1z"></path>
                        <path d="M19 11l0 2"></path>
                    </svg>
                </span>
                <input type="text" value="{{ $tempat->kode_tempat }}" readonly id="kode_tempat" class="form-control" placeholder="Kode Tempat" name="kode_tempat">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                </span>
                <input type="text" id="nama_tempat" value="{{ $tempat->nama_tempat }}" class="form-control" name="nama_tempat" placeholder="Nama Tempat">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        <path d="M11.87 21.48a1.992 1.992 0 0 1 -1.283 -.58l-4.244 -4.243a8 8 0 1 1 13.355 -3.474"></path>
                        <path d="M15 19l2 2l4 -4"></path>
                    </svg>
                </span>
                <input type="text" id="lokasi_tempat" value="{{ $tempat->lokasi_tempat }}" class="form-control" name="lokasi_tempat" placeholder="Lokasi Tempat">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radar-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M15.51 15.56a5 5 0 1 0 -3.51 1.44"></path>
                        <path d="M18.832 17.86a9 9 0 1 0 -6.832 3.14"></path>
                        <path d="M12 12v9"></path>
                    </svg>
                </span>
                <input type="text" id="radius_tempat" value="{{ $tempat->radius_tempat }}" class="form-control" name="radius_tempat" placeholder="Radius Tempat">
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 14l11 -11"></path>
                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</form>
<script>
    $(function() {
        $("#frmtempatEdit").submit(function() {
            var kode_tempat = $("#frmtempatEdit").find("#kode_tempat").val();
            var nama_tempat = $("#frmtempatEdit").find("#nama_tempat").val();
            var lokasi_tempat = $("#frmtempatEdit").find("#lokasi_tempat").val();
            var radius_tempat = $("#frmtempatEdit").find("#radius_tempat").val();

            if (kode_tempat == "") {
                // alert('Nik Harus Diisi');
                Swal.fire({
                    title: 'Warning!'
                    , text: 'Kode tempat Harus Diisi !'
                    , icon: 'warning'
                    , confirmButtonText: 'Ok'
                }).then((result) => {
                    $("#kode_tempat").focus();
                });

                return false;
            } else if (nama_tempat == "") {
                // alert('Nik Harus Diisi');
                Swal.fire({
                    title: 'Warning!'
                    , text: 'Nama tempat Harus Diisi !'
                    , icon: 'warning'
                    , confirmButtonText: 'Ok'
                }).then((result) => {
                    $("#nama_tempat").focus();
                });

                return false;
            } else if (lokasi_tempat == "") {
                // alert('Nik Harus Diisi');
                Swal.fire({
                    title: 'Warning!'
                    , text: 'Lokasi tempat Harus Diisi !'
                    , icon: 'warning'
                    , confirmButtonText: 'Ok'
                }).then((result) => {
                    $("#lokasi_tempat").focus();
                });

                return false;
            } else if (radius_tempat == "") {
                // alert('Nik Harus Diisi');
                Swal.fire({
                    title: 'Warning!'
                    , text: 'Radius tempat Harus Diisi !'
                    , icon: 'warning'
                    , confirmButtonText: 'Ok'
                }).then((result) => {
                    $("#radius_tempat").focus();
                });

                return false;
            }
        });
    });

</script>
