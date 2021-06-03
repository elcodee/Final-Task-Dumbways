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
   let arrayNumber = [];
   
   for(let a = 1; a <= num; a++) {
       arrayNumber[a] = new Array();
       for(let b = 1; b <= a; b++) {
           if(b == 1 || b == a) {
               arrayNumber[a][b] = 1;
           } else {
               arrayNumber[a][b] = arrayNumber[a-1][b-1] + arrayNumber[a-1][b];
           }
       }
   }
   for (let i = 1; i <= num + 1; i++) {
       for(j = 1; j <= i; j++) {
           document.getElementById("display").innerHTML += arrayNumber[i][j] + '';
       }
       document.getElementById("display").innerHTML += '<br />';
   }
}
</script>
