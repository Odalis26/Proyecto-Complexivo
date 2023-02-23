<div style="width:200px;background-color:#000000;position:relative; top:-1800px;left:800px;">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
<i class="bi bi-printer" style="position:relative; left:800px;color:white"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color:white; position:relative; left:90px;" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg>
<input style="width:50px;color: white;background-color:#000000;border-color:black;border:none" type="button" value="" class="printbutton">

</div>
<script>
    document.querySelectorAll('.printbutton').forEach(function(element) {
      element.addEventListener('click', function() {
        print();
      });
    });
  </script>