<figure>
   <blockquote class="blockquote">
      <p>
      Diketahui sebuah string dengan alphabet kecil dengan data yang terduplikat, tugas anda adalah buatlah sebuah fungsi untuk menghilangkan  alphabet yang terduplikat tersebut dan hanya menyisakan 1 data pada setiap alphabet tersebut. Example :
      </p>
   </blockquote>
   <b>Input :</b>alagcgcdodol<br />
   <b>Output :</b>algcdo
</figure>

<div class="form-floating mb-3">
   <input type="text" class="form-control" id="alphabet" placeholder="alphabet">
   <label for="alphabet">String</label>
</div>

<button class="btn btn-dark mb-3" onclick="removeDuplicate()">Remove Duplicate</button>

<div class="mb-2">
   <label for="exampleFormControlTextarea1" class="form-label">Output</label>
   <hr/>
   <h4 id="display"></h4>
</div>

<script>
const removeDuplicate = () => {
   let data = document.getElementById("alphabet").value.split('').sort();
   let results = [];

   for (let i = 0; i < data.length - 1; i++) {
    if (data[i + 1] == data[i]) {
      results.push(data[i]);
    }
  }
  document.getElementById("display").innerHTML = `
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         ${results}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
}
</script>