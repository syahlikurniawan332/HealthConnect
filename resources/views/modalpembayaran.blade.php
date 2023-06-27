<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3" id="exampleModalLabel">Pembayaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="fs-5">Metode Pembayaran</h3>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Metode Pembayaran</option>
                    <option class="fw-bold fs-4 mt-5" disabled>Wallet</option>
                    <option value="1">Paypal</option>
                    <option value="2">Gopay</option>
                    <option value="3">Ovo</option>
                    <option value="4">E-Wallet</option>
                    <option class="fw-bold fs-4 mt-5" disabled>Virtual Account</option>
                    <option value="5">BSI</option>
                    <option value="6">BRI</option>
                    <option value="7">BCA</option>
                </select>
                <div class="border border-secondary mt-2"></div>
                <h3 class="fs-5 my-3">Ringkasan Pemesanan</h3>
                <div>
                    <table class="table">
                        <tr>
                            <td>Total Pesanan</td>
                            <td>Harga</td>
                        </tr>
                        <tr>
                            <td>promo</td>
                            <td>Potongan Harga</td>
                        </tr>
                        <tr>
                            <td>Biaya Layanan</td>
                            <td>Harga</td>
                        </tr>
                    </table>
                </div>
                <div class="border border-secondary"></div>
                <table class="table">
                    <tr>
                        <td class="fw-bold fs-5">Total Pembayaran</td>
                        <td>Harga</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Bayar Sekarang</button>
            </div>
        </div>
    </div>
</div>
<!-- end -->