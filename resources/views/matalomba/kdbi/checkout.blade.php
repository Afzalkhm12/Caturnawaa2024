
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

      <!--=============== SWIPER CSS ===============-->
      

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/navmenulomba.css">
      <link rel="stylesheet" href="../../css/cekout.css">
      <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>

      <title>@lang('messages.daftar')</title>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <style>
        #loadingDiv {
   width: 100%;
   height: 100%;
   z-index: 99999;
   position: fixed;
   display: flex;
   align-items: center;
   justify-content: center;
   background-color: white;
}
 
#loadingDiv {
   width: 100%;
   height: 100%;
   z-index: 999999;
   position: fixed;
   display: flex;
   align-items: center;
   justify-content: center;
   background-color: white;
 }
 
 .loader {
   width: 9.5rem;
   height: 9.5rem;
   background: center / contain no-repeat url(../../img/loader.gif);
 }
     </style>
   </head>
   <body>
    <div id="loadingDiv">
        <div class="loader"></div>
      </div>
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
        <nav class="nav container">
        <img src="../../img/logokdbi.jpeg" width="145" class="nav_logo"><a href="{{url('matalomba/kdbi') }}" class="nav__logo" ></a>
        <div class="nav__menu" id="nav-menu">
       <ul class="nav__list">
       <div style="margin-right: 21rem" class="nav__item">
                       <li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
                       <li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
                   </div>
                  <li class="nav__item">
                     <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                  </li>

                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.peserta')</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.round')</a>
                  </li>
                  
                  <li class="nav__item">
                     <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.juri')</a>
                  </li>
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
               
            </div>
         </nav>
      </header>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L120,186.7C240,149,480,75,720,80C960,85,1200,171,1320,213.3L1440,256L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
      <section>
        <div class="konten">
            <header>@lang('messages.pendaftaran')</header>
                @csrf
                <table>
                <div class="form first">
                <div class="details personal">
                        <span class="title">Debater 1</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.Name')</label>
                                <input disabled placeholder="{{$orderkdbi->nama_1}}">
                            </div>
                            <div class="input-field">
                                <label >Email</label>
                                <input disabled placeholder="{{$orderkdbi->email_1}}">
                            </div>
                            <div class="input-field">
                                <label  >@lang('messages.fakultas')</label>
                                <input disabled placeholder="{{$orderkdbi->fakultas_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.prodi')</label>
                                <input disabled placeholder="{{$orderkdbi->prodi_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.npm')</label>
                                <input disabled placeholder="{{$orderkdbi->npm_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.gender')</label>
                                <select disabled>
                                    <option selected>{{$orderkdbi->jeniskelamin_1}}</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.alamat')</label>
                                <input disabled placeholder="{{$orderkdbi->alamatlengkap_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.Nomor')p</label>
                                <input disabled placeholder="{{$orderkdbi->nomorhp_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.ktm')</label>
                                <input disabled placeholder="{{$orderkdbi->ktm_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.foto')</label>
                                <input disabled placeholder="{{$orderkdbi->foto_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.krs')</label>
                                <input disabled placeholder="{{$orderkdbi->krs_1}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bukti')</label>
                                <input disabled placeholder="{{$orderkdbi->buktifollow_1}}">
                            </div>
                            <div class="input-field">
                                <label>Upload Twibbon *png,jpeg,jpg maks 5mb</label>
                                <input disabled placeholder="{{$orderkdbi->twibbon}}">
                            </div>
                        </div>
                    </div>
                    <div class="details ">
                        <span class="title">Debater 2</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.Name')</label>
                                <input disabled placeholder="{{$orderkdbi->nama_2}}">
                            </div>
                            <div class="input-field">
                                <label >Email</label>
                                <input disabled placeholder="{{$orderkdbi->email_2}}">
                            </div>
                            <div class="input-field">
                                <label  >@lang('messages.fakultas')</label>
                                <input disabled placeholder="{{$orderkdbi->fakultas_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.prodi')</label>
                                <input disabled placeholder="{{$orderkdbi->prodi_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.npm')</label>
                                <input disabled placeholder="{{$orderkdbi->npm_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.gender')</label>
                                <select disabled>
                                    <option selected>{{$orderkdbi->jeniskelamin_2}}</option>
                                    <option>@lang('messages.pria')</option>
                                    <option>@lang('messages.wanita')</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.alamat')</label>
                                <input disabled placeholder="{{$orderkdbi->alamatlengkap_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.Nomor')p</label>
                                <input disabled placeholder="{{$orderkdbi->nomorhp_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.ktm')</label>
                                <input disabled placeholder="{{$orderkdbi->ktm_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.foto')</label>
                                <input disabled placeholder="{{$orderkdbi->foto_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.krs')i</label>
                                <input disabled placeholder="{{$orderkdbi->krs_2}}">
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.bukti')</label>
                                <input disabled placeholder="{{$orderkdbi->buktifollow_2}}">
                            </div>
                            <div class="input-field">
                                <label>Upload Twibbon *png,jpeg,jpg maks 5mb</label>
                                <input disabled placeholder="{{$orderkdbi->twibbon2}}">
                            </div>
                        </div>
                    </div>
                    <div class="details ID">
                        <span class="title">@lang('messages.team')</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>@lang('messages.instansi')</label>
                                <input disabled placeholder="{{$orderkdbi->instansi}}" required>
                            </div>
                            <div class="input-field">
                                <label>@lang('messages.surat')</label>
                                <input disabled placeholder="{{$orderkdbi->surat_delegasi}}">
                            </div>
                            <div class="input-field">
                                <label>Price</label>
                                <input disabled placeholder="IDR{{$orderkdbi->price}}">
                            </div>
                        </div>
                        <button type="submit" class="nextBtn" id="pay-button">
                            <span class="btnText">@lang('messages.bayar')</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        <button type="submit" class="nextBtn" id="pay-button">
                            <a href="{{url('matalomba/daftarKDBI') }}" class="btnText">@lang('messages.kembali')</a>
                        </button>
                    </div> 
                </div>
                </table>

</section>


        
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function removeLoader() {
    $("#loadingDiv").fadeOut(200, () => {
      $("#loadingDiv").remove();
    });
  }
  
  $(window).on("load", () => {
    setTimeout(removeLoader, 2000);
  
    $("body").css(
      "overflow-y",
      "hidden",
      setTimeout(() => {
        $("body").css("overflow-y", "visible");
      }, 2000)
    );
  });
    </script>
      <script src="../../js/nav.js"></script>
      <script src="../../js/daftarlomba.js"></script>
    </body>
      <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
            Swal.fire({
    icon: 'success',
    title: 'Payment Succes!',
    text: 'Anda akan diarahkan ke halaman Lomba.',
    showConfirmButton: false, 
    timer: 2000,
  }).then(() => {
    window.location.href = '/homekdbi/{{$orderkdbi->id}}'; 
    console.log(result); 
  });
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
            Swal.fire({
    icon: 'info',
    title: 'Waiting Payment',
    text: 'Mohon tunggu sebentar, pembayaran Anda sedang diproses.',
    showConfirmButton: false, // Tidak menampilkan tombol OK
    allowOutsideClick: false, // Mencegah pengguna menutup dengan klik di luar
    didOpen: () => {
      Swal.showLoading(); // Menampilkan animasi loading
    },
  });
  console.log(result); 
          
        },
        onClose: function(){
            Swal.fire({
    icon: 'warning',
    title: 'Payment Canceled',
    text: 'Anda telah menutup jendela pembayaran sebelum menyelesaikan proses.',
  });
        }
      })
    });
      </script>
</html>