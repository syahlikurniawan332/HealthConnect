<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Masuk ke Health Connect</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title">Masukkan nomor telepon untuk mulai memakai layanan Health Connect</h5>
                <!-- Add your login form here -->
                <form action="">
                    <div class="mb-3 row">
                        <div class="col mt-3 mb-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <img src="{{ asset('assets/img/flag.webp') }}" alt="Flag" class="img-thumbnail"
                                        style="max-width: 30px;">
                                </span>
                                <input type="number" class="form-control no-spin" id="phone" placeholder="62" min="0"
                                    pattern="[0-9]{1,13}" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-info" style="width: 100%;">Masuk</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- end modal -->