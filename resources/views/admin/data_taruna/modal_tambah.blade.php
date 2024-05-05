    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Taruna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data_taruna.store') }}" method="post">
                        @csrf
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="1" class="form-label">NIT</label>
                                <input type="number" value="{{ old('nit') }}" name="nit" id="1"
                                    class="form-control" placeholder="Masukan NIT" />
                            </div>
                            <div class="col mb-0">
                                <label for="2" class="form-label">NISN</label>
                                <input type="number" value="{{ old('nisn') }}" name="nisn" id="2"
                                    class="form-control" placeholder="Masukan NISN" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="3" class="form-label">Nama</label>
                                <input type="text" value="{{ old('nama') }}" name="nama" id="3"
                                    class="form-control" placeholder="Masukan Nama" />
                            </div>
                            <div class="col mb-0">
                                <label for="4" class="form-label">Kelas</label>
                                <select name="kelas" id="defaultSelect" class="form-select">
                                    <option selected disabled>== Pilih Kelas ==</option>
                                   <option value="XII APAT">XII APAT</option>
                                   <option value="XII APHP">XII APHP</option>
                                   <option value="XII ATPH A">XII ATPH A</option>
                                   <option value="XII ATPH B">XII ATPH B</option>
                                   <option value="XII ATU">XII ATU</option>
                                   <option value="XII NKN A">XII NKN A</option>
                                   <option value="XII NKN B">XII NKN B</option>
                                   <option value="XII NKPI">XII NKPI</option>
                                   <option value="XII RPL">XII RPL</option>
                                   <option value="XII TAB A">XII TAB A</option>
                                   <option value="XII TAB B">XII TAB B</option>
                                   <option value="XII TABOG">XII TABOG</option>
                                   <option value="XII TABUS">XII TABUS</option>
                                   <option value="XII TBSM A">XII TBSM A</option>
                                   <option value="XII TBSM B">XII TBSM B</option>
                                   <option value="XII TITL">XII TITL</option>
                                   <option value="XII TKN">XII TKN</option>
                                   <option value="XII TLOG A">XII TLOG A</option>
                                   <option value="XII TLOG B">XII TLOG B</option>
                                   <option value="XII TPM A">XII TPM A</option>
                                   <option value="XII TPM B">XII TPM B</option>
                                   <option value="XII TPM C">XII TPM C</option>
                                   <option value="XII UPW">XII UPW</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="defaultSelect" class="form-label">Kompetensi Keahlian</label>
                                <select name="kompetensi_keahlian" id="defaultSelect" class="form-select">
                                    <option selected disabled>== Pilih Kompetensi Keahlian ==</option>
                                    <option value="ATPH">ATPH</option>
                                    <option value="APHP">APHP</option>
                                    <option value="APAT">APAT</option>
                                    <option value="ATU">ATU</option>
                                    <option value="NKN">NKN</option>
                                    <option value="TKN">TKN</option>
                                    <option value="NKPI">NKPI</option>
                                    <option value="TBSM">TBSM</option>
                                    <option value="TPM">TPM</option>
                                    <option value="TAB">TAB</option>
                                    <option value="TLOG">TLOG</option>
                                    <option value="TITL">TITL</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TABOG">TABOG</option>
                                    <option value="UPW">UPW</option>
                                    <option value="TABUS">TABUS</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="defaultSelect" class="form-label">Keterangan</label>
                                <select name="keterangan" id="defaultSelect" class="form-select">
                                    <option selected disabled>== Pilih Keterangan Taruna ==</option>
                                    <option value="lulus">lulus</option>
                                    <option value="tidak lulus">tidak lulus</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
