    <!-- Modal -->
    <div class="modal fade" id="modal_import" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Import Data Taruna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data_taruna.import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <span class="alert-inner--icon"><i class="fas fa-info-circle"></i></span>
                                    <span class="alert-inner--text"><strong>Catatan!</strong><br> sistem akan mereplace
                                        data jika menginputkan kode yang sama dengan data yang sudah tersimpan di
                                        aplikasi.</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-4">
                                        <label class="form-label mg-b-0">Format Import </label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <a href="{{ asset('assets/contoh_import.xlsx') }}"
                                            class="btn btn-sm btn-secondary" download><i
                                                class="fa fa-download me-2"></i> Download Format Excel Import</a>
                                    </div>
                                </div>
                                <div class="row row-xs align-items-top mt-3 mg-b-20">
                                    <div class="col-md-4">
                                        <label class="form-label mg-b-0">Upload Excel <span
                                                class="tx-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input class="form-control mb-1" type="file" name="file"
                                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                            required>
                                        <small class="text-muted">format .csv .xls .xlsx</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Import Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
