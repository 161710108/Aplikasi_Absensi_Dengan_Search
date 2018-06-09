  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="/assets/admin/profile.html"><img src="/assets/admin/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{ Auth::user()->name }}</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="{{ url('/home') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                   <li class="mt">
                      <a href="{{ route('kelas.index') }}">
                          <i class="fa fa-desktop"></i>
                          <span>Kelas</span>
                      </a>
                  </li>

                   <li class="mt">
                      <a href="{{ route('siswa.index') }}">
                          <i class="fa fa-cogs"></i>
                          <span>Siswa</span>
                      </a>
                  </li>
                   <li class="mt">
                      <a href="{{ route('absensi.index') }}">
                          <i class="fa fa-book"></i>
                          <span>Absensi</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>