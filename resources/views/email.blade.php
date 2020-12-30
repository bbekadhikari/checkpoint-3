@include('front.includes.header')

<div class="container mt-5">
    <div class="row">

        <div class="col-lg-4 col-sm-4 col-md-4 mx-auto text-center">
            <img src="{{asset('front/images/logo.jpg')}}" height="50" class="mx-auto d-block">
            <!-- local language used here -->
            <h4 class="text-center">बोन्ड अफ नेपाल डिभेलपमेन्ट</h4> 
            <h5 style="font-family:Kantipur">s/kf]{6 sfof{no nfnaGbL zfvf ;nf{xL</h5>
            <h5 style="font-family:Kantipur">;Dk{s g+= )$^–%)!!&#</h5>
        </div>


    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 text-center" >
            <h5  style="font-family:Kantipur">l;Daf]n g+= M @%$%^&&**</h5>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4">
            <h3 class="text-center" style="font-family:Kantipur">k|j]z k|q</h3>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4">
            <img src="{{asset('uploads/'.$data['profile'])}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th scope="col" style="font-family: Kantipur">pDd]bjf/sf] gfd</th>
                    <th scope="col" >{{$data['fname']}} {{$data['mname']}} {{$data['lname']}}</th>
                    <th scope="col" style="font-family: Kantipur">pDd]bjf/sf] :yflo 7]ufgf</th>
                    <th scope="col" >{{$data['village']}},{{$data['zilla']}}</th>
                </tr>
                <tr>
                    <th scope="col" style="font-family: Kantipur">cfa]bg lbPsf] kb</th>
                    <th scope="col" >{{$data['designation']}}</th>
                    <th scope="col" style="font-family: Kantipur">cfj]bg lbPsf] lhNnf </th>
                    <th scope="col" >{{$data['zilla']}}</th>
                </tr>
                <tr>
                    <th scope="col" style="font-family: Kantipur">lj1fkg  g+= </th>
                    <th scope="col" >{{$data['bigyapan']}}</th>
                    <th scope="col" style="font-family: Kantipur">:yflgo lgsfo </th>
                    <th scope="col" ></th>
                </tr>
                <tr>
                    <th scope="col" style="font-family: Kantipur">cfj]bg ldlt </th>
                    <th scope="col" >{{$data['abadenmiti']}}</th>
                    <th scope="col" style="font-family: Kantipur">;Dk{s g+= </th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>

            </table>
        </div>
        <div class='col'>
            <img src="" class="float-right"><br>
            <h4 style="font-family: Kantipur" class="float-right">pDd]bjf/sf] x:tfIff/ </h4>
        </div>
    </div>

    <h5 style="font-family:Kantipur" class="text-center"><b>pDd]bjf/n] kfng ug{kg]{ lgodx?M</b></h5>
    <div class="row">
        <div class="col">
            <li style="font-family:Kantipur">
                k/LIff lbg cfpFbf clgjfo{ ?kdf k|j]z k|q Nofpg kg{]5 . k|j]z k|q ljgf k/LIffdf a:g kfOg] 5F}g .
            </li>
            <li style="font-family:Kantipur">
                k/LIff xndf df]afOn kmf]g, cGo sfuhk|q, lr6k]k/, Sofns'n]6/, ef]O; /]s8{/ cflb Nofpg kfOg] 5}g .
            </li>
            <li style="font-family:Kantipur">
                lnlvt k/LIffsf] glthf k|sfzg ePkl5 k|of]ufTds k/LIff tyf cGt{jftf{ x'g] lbgdf klg k|j]zk|q Nofpg'
                kg]{ clgjfo{ 5 .
            </li>
            <li style="font-family:Kantipur">
                ljEffun] ;"rgf 4f/f lgwf{l/t ;do cg';f/ lnlvt k/LIff, ;Lk k/LIff / cGt{jft{f ;~rfng x'g]5 .
            </li>
            <li style="font-family:Kantipur">
                pDd]bjf/nfO{ lnlvt,;Lk k/LIff / cGt{jft{f s|ddf s'g} ljifodf c:ki6f ePdf s]Gb|df vl6Psf sd{rf/L
                nfO{ ;f]Wg' kg]{5 .
            </li>
            <li style="font-family:Kantipur">
                k/LIff xnsf] cfj]bg kmf/d s'g}sf/0f a; c:jLs[t ePDff k|j]z k|q :jt M /4 ul/g]5 .
            </li>
            <li style="font-family:Kantipur">
                lgod cg';f/ l;6 Knfg ul/Psf] :yfgdf al; k/LIffyL{n] k/LIff lbg 'kg]{5 . k/LIff ;'? ug'{eGbf cl3 #)
                ldg]6 eGbf l9nf] ul/ cfpg] ljwfyL{ nfO{ k/LIff ejgdf k|j]z ug{ lbOg] 5}g .
            </li>
            <li style="font-family:Kantipur">
                lj/fdL ePsf] pDd]bjf/n] lnlvt k/LIff, ;Lk k/LIff tyf cGt{jft{f  k/LIff s]Gb|df k|j]z ul/ k/LIff lbg]
                s|ddf lghnfO{ s]lx ePdf lhDd]jf/ hjfkmb]xL x'g] 5}g . .
            </li>
            <li style="font-family:Kantipur">
                lnlvt, ;Lk tyf cGt{jft{f k/LIff s]Gb|df pDd]bjf/n] k/LIffsf] dof{bf ljkl/t s'g} sfd sfh u/]df
                s]Gb|WoIfn] k/LIff xnaf6 lgisfzg ul/ t'?Gt} sfg"g adf]lhdsf] sf/jfxL ug]{5 . / To;/L lgisfzg
                u/LPsf] pDd]bjf/sf] ;f] lj1fkgsf] k/LIff :jt /4 ePsf] dflgg] 5 .
            </li>
            <li style="font-family:Kantipur">
                =;Lk k/LIff / cGt{jftf{ lbg cfpFbf k|j]z k|qsf] ;fydf gfu/Lstf k|df0f k|q, z}lIfs of]Uotfsf] k|df0f k|q
                tyf cfj]bg lbbfF k]z ul/Psf cGo sfuhftx? ;sn k|lt clgjfo{ ?kdf Nofpg' kg]{5 .
            </li>
        </div>
    </div>
</div>
<h3>Please Collect Your Admit Card From here:- <a href="http://bondofnepal.com/admitcard/{{$data['form']}}"> E-admitcard</a></h3>

@include('front.includes.js')