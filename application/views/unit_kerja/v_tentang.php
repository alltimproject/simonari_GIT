<div class="rightcolumn">
    <div class="card">
    
    <div class="contentTutorial">
       <legend>Tutorial Aplikasi SIMONARI</legend>
       <center>
           <img src="<?= base_url('images/Flowchart SIMONARI_ok.png') ?>" class="img img-responsive" width="800">
       </center>
        
    </div>
    
   <div class="contentPedoman">
      <legend>Pedoman Manajemen Risiko</legend>
       <div class="container" style="padding-top:20px;">
            <embed width="1200" height="1150" src="<?= base_url('file/a.pdf') ?>" type="application/pdf">
        </div>
   </div>
    
    </div>
</div>

   
<script type="text/javascript">
    $(document).ready(function(){
        $('#Tutorial').removeClass('w3-teal').addClass('activenav');
        $('.contentPedoman').hide();
        
        $('#Pedoman').click(function(){
            $('.contentPedoman').fadeIn();
            $('.contentTutorial').hide();
            $('#Pedoman').removeClass('w3-teal').addClass('activenav');
            $('#Tutorial').removeClass('activenav').addClass('w3-teal');
        });
        
        $('#Tutorial').click(function(){
            $('.contentPedoman').hide();
            $('.contentTutorial').fadeIn();
            $('#Tutorial').removeClass('w3-teal').addClass('activenav');
            $('#Pedoman').removeClass('activenav').addClass('w3-teal');
        });
    });



</script>   

