  <nav  class="site-header sticky-top py-1" style="margin-bottom:0px;">
      <div id="navBar" class="d-flex flex-column flex-md-row justify-content-between" style="max-width: 1200px;width: 85%;padding-left: 15%;">

        <a class="py-2 d-none d-md-inline-block" href="../">Kezdőlap</a>
        <a class="py-2 d-none d-md-inline-block" href="../events">Rendezvények</a>
          <a class="py-2 d-none d-md-inline-block" href="../library">Könyvtár</a>
          <a class="py-2 d-none d-md-inline-block" href="../pevents/">Állandó Eseményeink</a>
          <a class="py-2 d-none d-md-inline-block" href="../how2">Hogyan lehetek tag?</a>
          @if (session()->has('usrnm'))
            <a class="py-2 d-none d-md-inline-block" href="../profile">Profil</a>
          @endif
           <a href="javascript:void(0);" class="icon" onclick="dropDown()">
                Menü
          </a>
      </div>
    </nav>