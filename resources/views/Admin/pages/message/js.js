
const apply = document.getElementById('apply');
const forAll = document.getElementById('forAll');

apply.addEventListener('click',function(){
    const val = this.value;
    const table = document.getElementById('table');
   const list =  table.getElementsByTagName('textarea');
   Array.prototype.forEach.call(list,(item)=>{
    item.value = val;
   });
    
})