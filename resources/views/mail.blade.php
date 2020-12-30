@include('front.includes.header')

<div class="container mt-5">
    <div class="row">

        <div class="col-lg-4 col-sm-4 col-md-4 mx-auto text-center">
           <h5 style="padding-top:120px;"> <span style="font-family:Kantipur; padding-top: 120px;">kmf/d btf{ g+</span><span>:{{$form->id}}</span></h5>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 mx-auto text-center">
            <img src="{{asset('front/images/logo.jpg')}}" height="60" class="mx-auto d-block">
            <h4 class="text-center">बोन्ड अफ नेपाल डिभेलपमेन्ट</h4>
            <h5 style="font-size:15px;">करर्पोट कार्यालय लालबन्दिशाख सर्लाही</h5>
            <h5 style="font-size:15px;">संपर्क नं. ०४६–५०११७३</h5>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 mx-auto text-center">

        </div>


    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 text-center" >
            <h5  ><span style="font-size:15px;">सिम्बोल न. </span><span>{{$form->symbol}}</span></h5>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4">
            <h3 class="text-center" style="font-size:15px;">प्रवेश पत्र</h3>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4">
            <img src="{{asset('uploads/'.$form->profile)}}"  class="rounded mx-auto d-block" height="100">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <td scope="col" style="font-size:15px;">उम्मेदवारको नाम</td>
                    <td scope="col" >{{$form->fname}} {{$form->mname}} {{$form->lname}}</th>
                    <td scope="col" style="font-size:15px;">उम्मेदवारको स्थयि ठेगाना</td>
                    <td scope="col" >{{$form->village}},{{$form->zilla}}</td>
                </tr>
                <tr>
                    <td scope="col" style="font-size:15px;">उम्मेदवारको पद</td>
                    <td scope="col" >{{$form->designation}}</td>
                    <td scope="col" style="font-size:15px;">आवेदनदिएको जिल्लाा </td>
                    <td scope="col" >{{$form->zilla}}</td>
                </tr>
                <tr>
                    <td scope="col" style="font-size:15px;">विज्ञापन  नं. </td>
                    <td scope="col" >{{$form->bigyapan_no }}</td>
                    <td scope="col" style="font-size:15px;">स्थानियनिकाय </td>
                    <td scope="col" >{{$form->sthaniyanikay}}</td>
                </tr>
                <tr>
                    <td scope="col" style="font-size:15px;">आवेदनमिति </td>
                    <td scope="col" >{{$form->aabedanmiti}}</td>
                    <td scope="col" style="font-size:15px;">सम्पर्क नं.</td>
                    <td scope="col">{{$form->moblie}}</td>
                </tr>
                </thead>

            </table>
        </div>
        <div class='col'>
            <img src="{{asset('uploads/'.$form->signature)}}"  style="height:100px; width:120px;"><br>
            <h4 style="font-size:15px;">उम्मेदवारको हस्ताक्षार</h4>
        </div>
    </div>

    <h5 style="font-size:15px;" class="text-center mt-5"><b>उम्मेदवारले पालनगर्नपर्ने नियमहरु</b></h5>
    <div class="row">
        <div class="col">
            <li style="font-size:15px;">
                परीक्षादिनआउँदाअनिवार्य रुपमाप्रवेश प्रत्रल्याउन पर्नेछ । प्रवेशप्रत्रविना परीक्षामा बस्न पाइने  छैन। 
            </li>
            <li style="font-size:15px;">
                परीक्षा हलमा मोबाइल फोन, अन्य कागजप्रत्र, चिटपेपर, क्यालकुलेटर, भोइस रेकर्डर आदि ल्याउन पाइने छैन।
            </li>
            <li style="font-size:15px;">
               लिखित परीक्षाको नतिजा प्रकाशन भएपछि प्रयोगात्मक परीक्षा तथा अन्र्तवार्ता हुने दिनमा पनि प्रवेशप्रत्र ल्याउनु पर्ने अनिवार्य छ ।
            </li>
            <li style="font-size:15px;">
                विभागले सूचना द्धारा निर्धारित समय अनुसार लिखित परीक्षा, सीप परीक्षा र अन्र्तवार्ता सञ्चालन हुनेछ ।
            </li>
            <li style="font-family:Kantipur">
                उम्मेदवारलाई लिखित,सीप परीक्षा र अन्र्तवार्ता क्रममा कुनै विषयमा अस्पष्टा भएमा केन्द्रमा खटिएका कर्मचारी लाई सोध्नु पर्नेछ ।
            </li>
            <li style="font-size:15px;">
                परीक्षा हलको आवेदन फारम कुनैकारण बस अस्वीकृत भएमा प्रवेश प्रत्र स्वत रद्ध गरिनेछ ।
            </li>
            <li style="font-size:15px;">
                नियम अनुसार सिट प्लान गरिएको स्थानमा बसि परीक्षार्थीले परीक्षा दिनुपर्नेछ । परीक्षा सुरु गर्नुभन्दा अघि ३० मिनेट भन्दा ढिलो गरि आउने विधार्थी लाई परीक्षा भवनमा प्रवेश गर्न दिइने छैन ।
            </li>
            <li style="font-size:15px;">
                विरामी भएको उम्मेदवारले लिखित परीक्षा, सीप परीक्षा तथा अन्र्तवार्ता  परीक्षा केन्द्रमा प्रवेश गरि परीक्षा दिने क्रममा निजलाई केहि भएमा जिम्मेवार जवाफदेही हुने छैन । 
            </li>
            <li style="font-size:15px;">
                लिखित, सीप तथा अन्र्तवार्ता परीक्षा केन्द्रमा उम्मेदवारले परीक्षाको मर्यादा विपरित कुनै काम काज गरेमा केन्द्रध्यक्षले परीक्षा हलबाट निष्काशन गरि तुरुन्तै कानून बमोजिमको कारवाही गर्नेछ । र त्यसरी निष्काशन गरीएको उम्मेदवारको सो विज्ञापनको परीक्षा स्वत रद्ध भएको मानिने छ ।
            </li>
            <li style="font-size:15px;">
                सीप परीक्षा र अन्र्तवार्ता दिन आउँदा प्रवेश प्रत्रको साथमा नागरीकता प्रमाण प्रत्र, शैक्षिक योग्यताको प्रमाण प्रत्र तथा आवेदन दिदाँ पेश गरिएका अन्य कागजातहरु सकल प्रति अनिवार्य रुपमा ल्याउनु पर्नेछ ।
            </li>
        </div>
    </div>
</div>
<h3>Please Collect Your Admit Card From here:- <a href=""> E-admitcard</a></h3>

@include('front.includes.js')