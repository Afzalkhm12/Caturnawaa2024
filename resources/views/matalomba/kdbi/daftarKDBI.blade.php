
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
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
      <!--=============== SWIPER CSS ===============-->
      

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../css/navmenu.css">
      <link rel="stylesheet" href="../../css/pendaftaran.css">

      <title>@lang('messages.daftar')</title>
   </head>
   <body>
      
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav container">
         <img src="../../img/logokdbi.jpeg" width="145" class="nav_logo"><a href="{{url('matalomba/kdbi') }}" class="nav__logo" ></a>
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div style="margin-right: 13rem" class="nav__item">
						<li><a href="../locale/ind" height="20"><img src="../../img/ind.png"  /></a></li>
						<li><a href="../locale/en" height="20"><img src="../../img/eng.png" /></a></li>
					</div>
                    <li class="nav__item">
                        <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="{{url('matalomba/kdbi') }}" class="nav__link">@lang('messages.peserta')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="{{url('matalomba/scoreKDBI') }}" class="nav__link">@lang('messages.score')</a>
                     </li>
   
                     <li class="nav__item">
                        <a href="{{url('matalomba/kdbi') }}" class="nav__link">@lang('messages.round')</a>
                     </li>
                     
                     <li class="nav__item">
                        <a href="{{url('matalomba/kdbi') }}" class="nav__link">@lang('messages.juri')</a>
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
        <form action="/kdbi/checkout" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">Debater 1</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_1">@lang('messages.Name')</label>
                            <input type="text" name="nama_1" id="nama_1" placeholder="@lang('messages.place') @lang('messages.Name')" required>
                        </div>
                        <div class="input-field">
                            <label for="email_1">Email</label>
                            <input type="email" name="email_1" id="email_1" placeholder="@lang('messages.place') Email " required>
                        </div>
                        <div class="input-field">
                            <label for="fakultas_1" >@lang('messages.fakultas')</label>
                            <input type="text" name="fakultas_1" id="fakultas_1" placeholder="@lang('messages.place') @lang('messages.fakultas') " required>
                        </div>
                        <div class="input-field">
                            <label for="prodi_1">@lang('messages.prodi')</label>
                            <input type="text" name="prodi_1" id="prodi_1" placeholder="@lang('messages.place') @lang('messages.prodi')" required>
                        </div>
                        <div class="input-field">
                            <label for="npm_1">NPM</label>
                            <input type="text" name="npm_1" id="npm_1" placeholder="@lang('messages.place') NPM" required>
                        </div>
                        <div class="input-field">
                            <label for="jeniskelamin_1">@lang('messages.gender')</label>
                            <select name="jeniskelamin_1" id="jeniskelamin_1" required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="alamatlengkap_1">@lang('messages.alamat')</label>
                            <input  name="alamatlengkap_1" id="alamatlengkap_1" type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label for="nomorhp_1">@lang('messages.Nomor')</label>
                            <input  name="nomorhp_1" id="nomorhp_1" type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label for="ktm_1">@lang('messages.ktm')</label>
                            <input name="ktm_1" id="ktm_1" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="foto_1">@lang('messages.foto')</label>
                            <input name="foto_1" id="foto_1" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="krs_1">@lang('messages.krs')i</label>
                            <input name="krs_1" id="krs_1" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="buktifollow_1">@lang('messages.bukti')</label>
                            <input name="buktifollow_1" id="buktifollow_1" type="file" accept="image/*" required>
                        </div>
                    </div>
                </div>
                <div class="details ">
                    <span class="title">Debater 2</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nama_2">@lang('messages.Name')</label>
                            <input type="text" name="nama_2" id="nama_2" placeholder="@lang('messages.place') @lang('messages.Name')" required>
                        </div>
                        <div class="input-field">
                            <label for="email_2">Email</label>
                            <input type="email" name="email_2" id="email_2" placeholder="@lang('messages.place') Email " required>
                        </div>
                        <div class="input-field">
                            <label for="fakultas_2" >@lang('messages.fakultas')</label>
                            <input type="text" name="fakultas_2" id="fakultas_2" placeholder="@lang('messages.place') @lang('messages.fakultas') " required>
                        </div>
                        <div class="input-field">
                            <label for="prodi_2">@lang('messages.prodi')</label>
                            <input type="text" name="prodi_2" id="prodi_2" placeholder="@lang('messages.place') @lang('messages.prodi')" required>
                        </div>
                        <div class="input-field">
                            <label for="npm_2">NPM</label>
                            <input type="text" name="npm_2" id="npm_2" placeholder="@lang('messages.place') NPM" required>
                        </div>
                        <div class="input-field">
                            <label for="jeniskelamin_2">@lang('messages.gender')</label>
                            <select name="jeniskelamin_2" id="jeniskelamin_2" required>
                                <option selected>@lang('messages.pilih')</option>
                                <option>@lang('messages.pria')</option>
                                <option>@lang('messages.wanita')</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="alamatlengkap_2">@lang('messages.alamat')</label>
                            <input  name="alamatlengkap_2" id="alamatlengkap_2" type="area" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="input-field">
                            <label for="nomorhp_2">@lang('messages.Nomor')p</label>
                            <input  name="nomorhp_2" id="nomorhp_2" type="Number" placeholder="Masukkan No Whatssapp" required>
                        </div>
                        <div class="input-field">
                            <label for="ktm_2">@lang('messages.ktm')</label>
                            <input name="ktm_2" id="ktm_2" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="foto_2">@lang('messages.foto')</label>
                            <input name="foto_2" id="foto_2" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="krs_2">@lang('messages.krs')i</label>
                            <input name="krs_2" id="krs_2" type="file" accept="image/*" required>
                        </div>
                        <div class="input-field">
                            <label for="buktifollow_2">@lang('messages.bukti')</label>
                            <input name="buktifollow_2" id="buktifollow_2" type="file" accept="image/*" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">@lang('messages.team')</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="instansi">@lang('messages.instansi')</label>
                            <input type="text" name="instansi" id="instansi" placeholder="Masukkan Asal Instansi" required>
                        </div>
                        <div class="input-field">
                            <label for="surat_delegasi">@lang('messages.surat')</label>
                            <input type="file" name="surat_delegasi" id="surat_delegasi" accept="pdf/*" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="nextBtn">
                        <span class="btnText">Checkout</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
        </form>
    </div>

</section>

        
    </body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- JavaScript -->
</html>
      <script src="../../js/nav.js"></script>
      <script src="../../js/daftarlomba.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript">
                $(function() {
                    $(this).bind("contextmenu", function(e) {
                        e.preventDefault();
                    });
                }); 
                </script>
                <script type="text/JavaScript"> 
                    function killCopy(e){ return false } 
                    function reEnable(){ return true } 
                    document.onselectstart=new Function ("return false"); 
                    if (window.sidebar)
                    { 
                        document.onmousedown=killCopy; 
                        document.onclick=reEnable; 
                    } 
                </script>
                <script type="text/Javascript">
                $(document).keydown(function(event){
              if(event.keyCode==123){
                  return false;
              }
              else if (event.ctrlKey && event.shiftKey && event.keyCode==73){        
                       return false;
              }
          });
              </script>