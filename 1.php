<figure>
   <blockquote class="blockquote">
      <p>
      Zilong seorang programmer handal ia diberikan tugas untuk membuat sebuah function yang dimana function tersebut berfungsi untuk membuat sebuah segitiga pascal.
      </p>
   </blockquote>
   <b>Input :</b> pascal_function(4) <br />
</figure>

   <button class="btn btn-dark mb-2" onClick="pascal_function(4)" >Create Pattern</button>

<div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">Output</label>
   <hr/>
   <h4 id="display"></h4>
</div>

<script>


const pascal_function = (num) => {
   let data = [];
   for (let i = 1; i <= num + 1; i++) {
      data.push(i)
      for(let j = 1; j <= num + 1; j++){
         data.push(j)
         document.getElementById("display").innerHTML += i + '&nbsp;' + j + '<br />'
      }
   }
}
</script>