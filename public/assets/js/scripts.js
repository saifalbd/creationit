/*!
    * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");

    });
})(jQuery);


let menuIcon = document.getElementById('sidebarToggle');
let iconActive = document.querySelector('.sidebar-btn');
menuIcon.addEventListener('click', function(){
    iconActive.classList.toggle('active');
});




function showList(start,end){
    const table = document.getElementById('table');
    const rows = table.getElementsByTagName('tr');
    Array.prototype.forEach.call(rows,(row,i)=>{
      const tds =  row.getElementsByClassName('table-col');
      Array.prototype.forEach.call(tds,(td,index)=>{
        let s = start-1;
        let e = end-1;
        if(index>=s && index<=e){
            td.style.display = '';
        }else{
            td.style.display = 'none'; 
           
        }
      })

    })
}