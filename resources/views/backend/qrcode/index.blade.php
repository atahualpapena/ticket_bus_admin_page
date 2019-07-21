@include('backend.template.header') 
@include('backend.template.menu')
<div class="main-content">
			 
			<div class="main"> 
            <video id="preview"></video>
				</div>  
</div> 

<style>
td:hover
{
	cursor:pointer;
}
</style>
@include('backend.template.footer')
@include('backend.modals.driver')
 <script src="{{asset('js/qrcode/instascan.min.js')}}"></script>


 <script>
       
     $(document).ready(function(){
        camera();
     });
     function camera(){
	 	 let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    }
</script>