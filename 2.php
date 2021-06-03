<figure>
   <blockquote class="blockquote">
      <p>
      Buatlah sebuah function sederhana untuk menghitung potongan harga, biaya yang harus dibayar, dan total kembalian pada sistem voucher DumbWays Klontong , ketentuan <br /><br/>
      <br> Voucher : </br> <br />
      <b>a.</b> DumbWaysJos, potongan 21,1%, minimal uang belanja 50000, Maksimal diskon 20000 <br />
      <b>b.</b> DumbWaysMantap, potongan 30%, minimal uang belanja 80000, maksimal diskon 40000
      </p>
   </blockquote>
   <b>Input :</b> hitungVoucher(DumbWaysJos, nominal) <br />
</figure>

<div class="form-floating mb-3">
   <input type="number" class="form-control" id="mustPay" placeholder="mustPay">
   <label for="mustPay">Must Pay</label>
</div>

<div class="form-floating mb-3">
   <input type="number" class="form-control" id="nominal" placeholder="nominal">
   <label for="nominal">Nominal</label>
</div>

<div class="form-floating mb-3">
   <input type="text" class="form-control" id="codevoucher" oninput="checkVoc(event.target.value)" placeholder="CodeVoucher">
   <label for="codevoucher">Code Voucher</label>
</div>

<div id="check"></div>

<div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">Output</label>
   <hr/>
   <h4 id="display"></h4>
</div>


<!-- LOGIC -->
<script>
// Check Voc Is Availabe ?
const vocA = "DumbWaysJos";
const vocB = "DumbWaysMantap";
let codeVoc = "";

const hitungVoucher = () => {
   const nominal = parseInt(document.getElementById("nominal").value);
   const mustPay = parseInt(document.getElementById("mustPay").value);

   switch (codeVoc) {
      case vocA:
         if(mustPay >= 50000) {
            let disc = (mustPay / 100) * 21.1;
            let price = mustPay - disc;

            if(disc >= 20000) {
               document.getElementById("display").innerHTML = `
               <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Vouchcer Terpasang</strong> <hr /> 
               Harus Dibayar : Rp ${mustPay} <br/> Diskon : Rp ${20000} <br/> Kembalian : Rp ${nominal - (mustPay - 20000)}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>`;
            } else {
               document.getElementById("display").innerHTML = `
               <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Vouchcer Terpasang</strong> <hr /> 
               Harus Dibayar : Rp ${mustPay} <br/> Diskon : Rp ${disc} <br/> Kembalian : Rp ${nominal - price}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>`;
            }
         } else {
            let price = nominal - mustPay;

            document.getElementById("display").innerHTML = `
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Vouchcer Tidak Terpasang, Min Belanja Rp 50000</strong> <hr /> 
            Harus Dibayar : Rp ${mustPay} <br/> Kembalian : Rp ${price}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
         }
      break;
      case vocB:
         if(mustPay >= 80000) {
            let disc = (mustPay / 100) * 30;
            let price = mustPay - disc;

            if(disc >= 40000) {
               document.getElementById("display").innerHTML = `
               <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Vouchcer Terpasang</strong> <hr /> 
               Harus Dibayar : Rp ${mustPay} <br/> Diskon : Rp ${80000} <br/> Kembalian : Rp ${nominal - (mustPay - 80000)}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>`;
            } else {
               document.getElementById("display").innerHTML = `
               <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Vouchcer Terpasang</strong> <hr /> 
               Harus Dibayar : Rp ${mustPay} <br/> Diskon : Rp ${disc} <br/> Kembalian : Rp ${nominal - price}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>`;
            }
         } else {
            let price = nominal - mustPay;

            document.getElementById("display").innerHTML = `
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Vouchcer Tidak Terpasang, Min Belanja Rp 50000</strong> <hr /> 
            Harus Dibayar : Rp ${mustPay} <br/> Kembalian : Rp ${price}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
         }
      break;
   }
}

const checkVoc = (code) => {
   if(code !== vocA){
      document.getElementById("check").innerHTML = `
      <span class="badge bg-danger">Voucher Tidak Tersedia</span>`;
   } 
   if(code !== vocB){
      document.getElementById("check").innerHTML = `
      <span class="badge bg-danger">Voucher Tidak Tersedia</span>`;
   }
   if(code === ''){
      document.getElementById("check").innerHTML = '';
   }
   if(code === vocA) {
      codeVoc = code
      document.getElementById("check").innerHTML = `
      <button class="btn btn-success my-2" onClick="hitungVoucher()">Use Voucher</button>`;
   }
   if(code === vocB) {
      codeVoc = code
      document.getElementById("check").innerHTML = `
      <button class="btn btn-success my-2" onClick="hitungVoucher()">Use Voucher</button>`;
   }
}

</script>