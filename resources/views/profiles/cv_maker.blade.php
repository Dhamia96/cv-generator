<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />   
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
    <!-- Font Awesome CSS (اختر أحد الإصدارات) -->
    <!-- النسخة الأحدث من Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- أو يمكنك استخدام الإصدار الأقدم إذا كانت الأيقونات متوافقة -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- ملفات CSS الخاصة بك -->
    <link rel="stylesheet" href="{{ asset('assets/css/cv_maker.css') }}" />
   
    <title>انشاء سيرة ذاتية</title>
</head>

<body>
    <nav>
        <div class="nav-bar bg-dark text-white d-flex  justify-content-between align-items-center p-3">
            <div class="btn-home border p-2 rounded mb-2 mb-md-0">
                <a href="./welcomeCv.html"><i class="fa fa-forward ml-2 text-white "></i></a>


                <span class="d-none d-lg-inline hover:text-decoration-none"><a href="{{ route('profiles.welcomeCv') }}"
                        class="text-white ">الصفحة الرئيسية</a>
                </span>
            </div>
            <div class="cv-name d-flex align-items-center mb-2 mb-md-0">
                <div class="me-1">
                    <div class="relative">
                        <input type="text"
                            class="form-control border-0 border-bottom rounded-0 bg-transparent text-start text-white placeholder-opacity-1 placeholder-white focus:placeholder-gray focus:border-brand hover:border-gray"
                            alt=" " placeholder="السيرة الذاتية  " maxlength="1000" السيرة الذاتية
                            style="width: 172px; outline: none; font-family: inherit; font-weight: inherit; font-size: inherit;">
                    </div>
                </div>
                <span class="ms-2 text-white">
                    <i class="fa fa-face"></i>
                </span>
            </div>

            <div class="icons d-flex align-items-center ">

                <div class="d-lg-flex align-items-center d-none">

                    <button type="button" class="btn btn-brand d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="h-6 w-6">
                            <path fill="currentColor" d="..."></path>
                        </svg>
                        <span class="ms-2">تحميل السيرة الذاتية</span>
                    </button>
                </div>
                <div class="d-flex d-lg-none ms-auto align-items-start">

                    <div>
                        <button class="btn btn-primary pb-3 p-2 d-flex align-items-center justify-content-center mr-2"
                            type="button">
                            <i class="fa fa-download ml-1 pt-1"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <div class="w-75 mx-auto  text-center ">
        <div class="row mx-auto">
            <!-- right section -->
            <!-- Column for Buttons -->
            <div class="col-lg-6 pt-5">
                <div class="btns d-flex flex-column flex-md-row justify-content-around md:align-items-center">
                    <!-- Button 1 -->
                    <button id="uploadButton" type="button"
                        class="btn btn-light d-flex  flex-md-column align-items-center md:justify-content-center  p-2 py-md-3 px-md-1 text-start text-md-center">
                        <span class="ml-3 flex align-items-center text-center pt-2">
                            <i class="fa fa-upload mb-2  rounded-sm"></i>
                        </span>
                        <div class="truncate">تحميل سيرة ذاتية موجودة</div>
                    </button>
                    <input type="file" id="fileInput" style="display: none;" />


                    <!-- Button 2 -->
                    <a href="./Login.html">
                        <button role="radio" type="button"
                            class="btn btn-light d-flex  flex-md-column align-items-center md:justify-content-center  p-2 py-md px-md-1 text-start text-md-center">
                            <span class="pt-md-3 ml-3 flex align-items-center text-center pt-2">
                                <img class="logo mb-2 rounded-sm" src="{{ asset('assets/images/logoblack.png') }}" alt="">
                            </span>
                            <div class="truncate ">إضافة حساب فائدة</div>
                        </button></a>

                </div>
                <form id="cvForm">
                <div class="border-bottom border-secondary mb-3 ">
                
                    <!-- التفاصيل الشخصية -->
                    <div class="d-flex align-items-center justify-content-between py-2 w-100">
                        <div class="flex-grow-1 d-flex py-3 pe-3 text-start overflow-hidden rounded">
                            <div
                                class="position-relative d-flex align-items-center fw-bold overflow-hidden fs-4 text-secondary">
                                <span class="position-absolute visually-hidden">التفاصيل الشخصية</span>
                                <input type="text"
                                    class="form-control-plaintext w-100 border-bottom-0 rounded-0 bg-transparent p-0"
                                    placeholder="التفاصيل الشخصية" maxlength="1000"  style=" direction: rtl;">
                            </div>
                        </div>
                        <div class="py-3 d-flex align-items-start">

                            <button id="arrowUp1" type="button" class=" btn btn-outline-secondary d-flex align-items-center justify-content-center
                                        rounded p-2">
                                <i id="arrow1" class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                    aria-hidden="true"></i>

                            </button>

                        </div>
                    </div>


                    <div id="card1" class="d-none w-100 mb-4 p-3">
                        <div class="row">
                            <div class="col-sm-4 ">
                                <div class="img d-flex flex-column py-2">
                                    <div class="d-flex align-items-center mb-1">
                                        <label class="flex-grow-1 fw-medium text-secondary text-sm">صورة</label>
                                    </div>
                                    <button id="uploadImageButton" type="button"
                                        class="btn btn-light border-secondary bg-light text-center w-100 h-100 p-3 rounded">
                                        <div class="visually-hidden">اضافة</div>
                                        <i class="w-25 fa fa-upload text-black-50"></i>
                                    </button>
                                    <input type="file" id="imageInput" style="display: none;" accept="image/*" />
                                    <img id="imagePreview" src="" alt="صورة"
                                        style="display:none; margin-top: 10px; width: 100%;" />
                                       
                                </div>

                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6  ">
                                        <div class="form-group py-2 text-right">
                                            <label for="focus-id-name-givenName"
                                                class="form-label text-secondary text-end">الاسم
                                                الأول</label>
                                            <input id="focus-id-name-givenName" type="text" class="form-control" esraa">
                                            <span id="errorGivenName" class="text-danger"></span>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="form-group py-2 text-right">
                                            <label for="focus-id-name-familyName" class="form-label text-secondary">اسم
                                                العائلة</label>
                                            <input id="focus-id-name-familyName" type="text" class="form-control" اشرف">
                                            <span id="errorFamilyName" class="text-danger"></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group py-2 text-right">
                                    <label for="emailVal" class="form-label text-secondary">عنوان البريد
                                        الإلكتروني</label>
                                    <input id="emailVal" type="email" class="form-control">
                                    <span id="errorEmail" class="text-danger"></span>

                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="form-group py-2 text-right">
                                    <label for="focus-id-name-mainAddress" class="form-label text-secondary">العنوان
                                        الرئيسي</label>
                                    <input id="focus-id-name-mainAddress" type="text" class="form-control">
                                    <span id="errorMainAddress" class="text-danger"></span>

                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-group py-2 text-right">
                                    <label for="focus-id-name-address" class="form-label text-secondary">
                                        العنوان</label>
                                    <input id="focus-id-name-address" type="text" class="form-control">
                                    <span id="errorZipcode" class="text-danger"></span>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 mb-2">
                                <div class="form-group text-right">
                                    <label for="focus-id-address-city" class="form-label text-muted ">المدينة</label>
                                    <input id="focus-id-address-city" data-s="المدينة" type="text"
                                        autocomple="address-level2" maxlength="1000" class="form-control">
                                    <span id="errorCity" class="text-danger"></span>

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb-2">
                                <div class="form-group text-right">
                                    <label for="focus-id-address-city" class="form-label text-muted ">رخصة
                                        القيادة</label>
                                    <div class="license  d-flex justify-content-around align-items-center ">
                                        <div>
                                            <label for="">نعم امتلك</label>
                                            <input name="license" id="focus-id-address-city" data-s="رخصة القيادة"
                                                type="radio" autocomplete="address-level2" maxlength="1000"
                                                class="form-check">
                                        </div>
                                        <div>
                                            <label for="">لا امتلك</label>
                                            <input name="license" id="focus-id-address-city" data-s="رخصة القيادة"
                                                type="radio" autocomplete="address-level2" maxlength="1000"
                                                class="form-check">
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div id="input-container" class="col-12 pt-4">
                                <!-- New inputs will be appended here -->
                            </div>
                            <div class="row">
                                <div class="col-12 pt-5 pb-3 d-flex flex-wrap">
                                    <!-- Button 1 -->
                                    <div class="col-12 col-md-4  p-2">
                                        <button
                                            class="add-input-btn btn btn-outline-secondary d-flex align-items-center w-100"
                                            type="button" data-field-name="تاريخ-الميلاد">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                                class="me-2" height="24" width="24">
                                                <path fill="currentColor"
                                                    d="M450.001-450.001h-200q-12.75 0-21.375-8.628t-8.625-21.384 8.625-21.371 21.375-8.615h200v-200q0-12.75 8.628-21.375t21.384-8.625 21.371 8.625 8.615 21.375v200h200q12.75 0 21.375 8.628t8.625 21.384-8.625 21.371-21.375 8.615h-200v200q0 12.75-8.628 21.375t-21.384 8.625-21.371-8.625-8.615-21.375z">
                                                </path>
                                            </svg>
                                            تاريخ الميلاد
                                        </button>
                                    </div>





                                    <!-- Button 5 -->
                                    <div class="col-12 col-md-4  p-2">
                                        <button
                                            class="add-input-btn btn btn-outline-secondary d-flex align-items-center w-100"
                                            type="button" data-field-name="الجنسية">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                                class="me-2" height="24" width="24">
                                                <path fill="currentColor"
                                                    d="M450.001-450.001h-200q-12.75 0-21.375-8.628t-8.625-21.384 8.625-21.371 21.375-8.615h200v-200q0-12.75 8.628-21.375t21.384-8.625 21.371 8.625 8.615 21.375v200h200q12.75 0 21.375 8.628t8.625 21.384-8.625 21.371-21.375 8.615h-200v200q0 12.75-8.628 21.375t-21.384 8.625-21.371-8.625-8.615-21.375z">
                                                </path>
                                            </svg>
                                            الجنسية
                                        </button>
                                    </div>

                                    <!-- Button 6 -->
                                    <div class="col-12 col-md-4  p-2">
                                        <button
                                            class="add-input-btn btn btn-outline-secondary d-flex align-items-center w-100"
                                            type="button" data-field-name="الحالة-الاجتماعية">
                                            <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                                class="me-2" height="24" width="24">
                                                <path fill="currentColor"
                                                    d="M450.001-450.001h-200q-12.75 0-21.375-8.628t-8.625-21.384 8.625-21.371 21.375-8.615h200v-200q0-12.75 8.628-21.375t21.384-8.625 21.371 8.625 8.615 21.375v200h200q12.75 0 21.375 8.628t8.625 21.384-8.625 21.371-21.375 8.615h-200v200q0 12.75-8.628 21.375t-21.384 8.625-21.371-8.625-8.615-21.375z">
                                                </path>
                                            </svg>
                                            الحالة الاجتماعية
                                        </button>
                                    </div>

                                </div>
                            </div>





                        </div>
                    </div>

                    <!-- المؤهلات الدراسية -->
                    <div class="col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">
                            <!-- <input type="text" placeholder="المؤهلات الدراسية"
                                class="card-input form-control-plaintext w-100 border-bottom-0 rounded-0 bg-transparent p-0 ">
                                 -->
                            <input type="text" placeholder="المؤهلات الدراسية"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp2" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                rounded p-2">
                                    <i id="arrow2"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card2" class="d-none w-100 mb-4 p-7">
                        <div class="row">

                            <div class="card-det col-11  mx-auto ">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <div class="form-floating ">
                                            <label for="floatingInput" class="d-flex label ">المؤهلات الدراسية</label>

                                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="col-12 p-0">

                                            <label for="floatingInput" class="d-flex label"> المؤسسة
                                                التعليمية</label>
                                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div
                                            class="form-floating d-flex flex-column flex-sm-row align-items-center justify-content-around my-4">

                                            <div class="col-12 col-md-6 pr-0">
                                                <div class="form-floating my-4">
                                                    <label for="country-select" class="d-flex label">اختر دولة:</label>
                                                    <select id="country-select"
                                                        class="js-example-placeholder-single js-states form-control">

                                                        <option value="" disabled selected>اختر الدولة</option>
                                                        <option value="AF">أفغانستان</option>
                                                        <option value="AL">ألبانيا</option>
                                                        <option value="DZ">الجزائر</option>
                                                        <option value="AD">أندورا</option>
                                                        <option value="AO">أنغولا</option>
                                                        <option value="AG">أنتيغوا وبربودا</option>
                                                        <option value="AR">الأرجنتين</option>
                                                        <option value="AM">أرمينيا</option>
                                                        <option value="AU">أستراليا</option>
                                                        <option value="AT">النمسا</option>
                                                        <option value="AZ">أذربيجان</option>
                                                        <option value="BS">الباهاما</option>
                                                        <option value="BH">البحرين</option>
                                                        <option value="BD">بنغلاديش</option>
                                                        <option value="BB">بربادوس</option>
                                                        <option value="BY">بيلاروس</option>
                                                        <option value="BE">بلجيكا</option>
                                                        <option value="BZ">بليز</option>
                                                        <option value="BJ">بنين</option>
                                                        <option value="BT">بوتان</option>
                                                        <option value="BO">بوليفيا</option>
                                                        <option value="BA">البوسنة والهرسك</option>
                                                        <option value="BW">بوتسوانا</option>
                                                        <option value="BR">البرازيل</option>
                                                        <option value="BN">بروناي</option>
                                                        <option value="BG">بلغاريا</option>
                                                        <option value="BF">بوركينا فاسو</option>
                                                        <option value="BI">بوروندي</option>
                                                        <option value="KH">كمبوديا</option>
                                                        <option value="CM">الكاميرون</option>
                                                        <option value="CA">كندا</option>
                                                        <option value="CV">الرأس الأخضر</option>
                                                        <option value="CF">جمهورية أفريقيا الوسطى</option>
                                                        <option value="TD">تشاد</option>
                                                        <option value="CL">تشيلي</option>
                                                        <option value="CN">الصين</option>
                                                        <option value="CO">كولومبيا</option>
                                                        <option value="KM">جزر القمر</option>
                                                        <option value="CG">الكونغو</option>
                                                        <option value="CD">الكونغو (جمهورية الديمقراطية)</option>
                                                        <option value="CR">كوستاريكا</option>
                                                        <option value="CI">ساحل العاج</option>
                                                        <option value="HR">كرواتيا</option>
                                                        <option value="CU">كوبا</option>
                                                        <option value="CY">قبرص</option>
                                                        <option value="CZ">التشيك</option>
                                                        <option value="DK">الدنمارك</option>
                                                        <option value="DJ">جيبوتي</option>
                                                        <option value="DM">دومينيكا</option>
                                                        <option value="DO">جمهورية الدومينيكان</option>
                                                        <option value="EC">الإكوادور</option>
                                                        <option value="EG">مصر</option>
                                                        <option value="SV">السلفادور</option>
                                                        <option value="GQ">غينيا الاستوائية</option>
                                                        <option value="ER">إريتريا</option>
                                                        <option value="EE">إستونيا</option>
                                                        <option value="ET">إثيوبيا</option>
                                                        <option value="FJ">فيجي</option>
                                                        <option value="FI">فنلندا</option>
                                                        <option value="FR">فرنسا</option>
                                                        <option value="GA">الغابون</option>
                                                        <option value="GM">غامبيا</option>
                                                        <option value="GE">جورجيا</option>
                                                        <option value="DE">ألمانيا</option>
                                                        <option value="GH">غانا</option>
                                                        <option value="GR">اليونان</option>
                                                        <option value="GD">غرينادا</option>
                                                        <option value="GT">غواتيمالا</option>
                                                        <option value="GN">غينيا</option>
                                                        <option value="GW">غينيا بيساو</option>
                                                        <option value="GY">غيانا</option>
                                                        <option value="HT">هايتي</option>
                                                        <option value="HN">هندوراس</option>
                                                        <option value="HU">هنغاريا</option>
                                                        <option value="IS">أيسلندا</option>
                                                        <option value="IN">الهند</option>
                                                        <option value="ID">إندونيسيا</option>
                                                        <option value="IR">إيران</option>
                                                        <option value="IQ">العراق</option>
                                                        <option value="IE">أيرلندا</option>
                                                        <option value="IT">إيطاليا</option>
                                                        <option value="JM">جامايكا</option>
                                                        <option value="JP">اليابان</option>
                                                        <option value="JO">الأردن</option>
                                                        <option value="KZ">كازاخستان</option>
                                                        <option value="KE">كينيا</option>
                                                        <option value="KI">كيريباس</option>
                                                        <option value="KP">كوريا الشمالية</option>
                                                        <option value="KR">كوريا الجنوبية</option>
                                                        <option value="KW">الكويت</option>
                                                        <option value="KG">قيرغيزستان</option>
                                                        <option value="LA">لاوس</option>
                                                        <option value="LV">لاتفيا</option>
                                                        <option value="LB">لبنان</option>
                                                        <option value="LS">ليسوتو</option>
                                                        <option value="LR">ليبيريا</option>
                                                        <option value="LY">ليبيا</option>
                                                        <option value="LI">ليختنشتاين</option>
                                                        <option value="LT">ليتوانيا</option>
                                                        <option value="LU">لوكسمبورغ</option>
                                                        <option value="MG">مدغشقر</option>
                                                        <option value="MW">مالاوي</option>
                                                        <option value="MY">ماليزيا</option>
                                                        <option value="MV">المالديف</option>
                                                        <option value="ML">مالي</option>
                                                        <option value="MT">مالطا</option>
                                                        <option value="MH">جزر مارشال</option>
                                                        <option value="MR">موريتانيا</option>
                                                        <option value="MU">موريشيوس</option>
                                                        <option value="MX">المكسيك</option>
                                                        <option value="FM">ميكرونيسيا</option>
                                                        <option value="MD">مولدوفا</option>
                                                        <option value="MC">موناكو</option>
                                                        <option value="MN">منغوليا</option>
                                                        <option value="ME">الجبل الأسود</option>
                                                        <option value="MA">المغرب</option>
                                                        <option value="MZ">موزمبيق</option>
                                                        <option value="MM">ميانمار</option>
                                                        <option value="NA">ناميبيا</option>
                                                        <option value="NR">ناورو</option>
                                                        <option value="NP">نيبال</option>
                                                        <option value="NL">هولندا</option>
                                                        <option value="NZ">نيوزيلندا</option>
                                                        <option value="NI">نيكاراغوا</option>
                                                        <option value="NE">النيجر</option>
                                                        <option value="NG">نيجيريا</option>
                                                        <option value="NO">النرويج</option>
                                                        <option value="OM">عمان</option>
                                                        <option value="PK">باكستان</option>
                                                        <option value="PW">بالاو</option>
                                                        <option value="PS">فلسطين</option>
                                                        <option value="PA">بنما</option>
                                                        <option value="PG">بابوا غينيا الجديدة</option>
                                                        <option value="PY">باراغواي</option>
                                                        <option value="PE">بيرو</option>
                                                        <option value="PH">الفلبين</option>
                                                        <option value="PL">بولندا</option>
                                                        <option value="PT">البرتغال</option>
                                                        <option value="QA">قطر</option>
                                                        <option value="RO">رومانيا</option>
                                                        <option value="RU">روسيا</option>
                                                        <option value="RW">رواندا</option>
                                                        <option value="KN">سانت كيتس ونيفيس</option>
                                                        <option value="LC">سانت لوسيا</option>
                                                        <option value="VC">سانت فنسنت والغرينادين</option>
                                                        <option value="WS">ساموا</option>
                                                        <option value="SM">سان مارينو</option>
                                                        <option value="ST">ساو تومي وبرينسيبي</option>
                                                        <option value="SA">السعودية</option>
                                                        <option value="SN">السنغال</option>
                                                        <option value="RS">صربيا</option>
                                                        <option value="SC">سيشل</option>
                                                        <option value="SL">سيراليون</option>
                                                        <option value="SG">سنغافورة</option>
                                                        <option value="SK">سلوفاكيا</option>
                                                        <option value="SI">سلوفينيا</option>
                                                        <option value="SB">جزر سليمان</option>
                                                        <option value="SO">الصومال</option>
                                                        <option value="ZA">جنوب أفريقيا</option>
                                                        <option value="SS">جنوب السودان</option>
                                                        <option value="ES">إسبانيا</option>
                                                        <option value="LK">سريلانكا</option>
                                                        <option value="SD">السودان</option>
                                                        <option value="SR">سورينام</option>
                                                        <option value="SE">السويد</option>
                                                        <option value="CH">سويسرا</option>
                                                        <option value="SY">سوريا</option>
                                                        <option value="TJ">طاجيكستان</option>
                                                        <option value="TZ">تنزانيا</option>
                                                        <option value="TH">تايلاند</option>
                                                        <option value="TL">تيمور الشرقية</option>
                                                        <option value="TG">توغو</option>
                                                        <option value="TO">تونغا</option>
                                                        <option value="TT">ترينيداد وتوباغو</option>
                                                        <option value="TN">تونس</option>
                                                        <option value="TR">تركيا</option>
                                                        <option value="TM">تركمانستان</option>
                                                        <option value="TV">توفالو</option>
                                                        <option value="UG">أوغندا</option>
                                                        <option value="UA">أوكرانيا</option>
                                                        <option value="AE">الإمارات العربية المتحدة</option>
                                                        <option value="GB">المملكة المتحدة</option>
                                                        <option value="US">الولايات المتحدة</option>
                                                        <option value="UY">أوروغواي</option>
                                                        <option value="UZ">أوزبكستان</option>
                                                        <option value="VU">فانواتو</option>
                                                        <option value="VA">مدينة الفاتيكان</option>
                                                        <option value="VE">فنزويلا</option>
                                                        <option value="VN">فيتنام</option>
                                                        <option value="YE">اليمن</option>
                                                        <option value="ZM">زامبيا</option>
                                                        <option value="ZW">زيمبابوي</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 pr-0">
                                                <div class="form-floating my-4">
                                                    <label for="city-select" class="d-flex label">اختر مدينة:</label>
                                                    <select id="city-select"
                                                        class="js-example-placeholder-single js-states form-control">
                                                        <option value="">اختر المدينة</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div
                                        class="col-12 mb-4 d-flex p-0 align-items-center flex-column flex-sm-row  justify-content-between">
                                        <div class="col-md-6  ">
                                            <label for="birthday" class="d-flex label">تاريخ البدء :</label>
                                            <input type="date" class="form-control" id="birthday" name="birthday">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="birthday" class="d-flex label">تاريخ الإنتهاء :</label>
                                            <input type="date" class="form-control" id="birthday" name="birthday">
                                        </div>

                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for='editor' class="d-flex label">الوصف :</label>

                                        <div class="editor-container w-100  py-3">
                                            <div class="toolbar border-top pt-2">
                                                <button class="format-btn" data-action="bold"><i
                                                        class="fas fa-bold"></i></button>
                                                <button class="format-btn" data-action="italic"><em><i
                                                            class="fas fa-italic"></i></em></button>
                                                <button class="format-btn" data-action="underline"><i
                                                        class="fas fa-underline"></i></button>

                                                <button class="format-btn" data-action="left-align"><i
                                                        class="fas fa-align-left"></i></button>
                                                <button class="format-btn" data-action="center-align"><i
                                                        class="fas fa-align-center"></i></button>
                                                <button class="format-btn" data-action="right-align"><i
                                                        class="fas fa-align-right"></i></button>
                                                <button class="format-btn" data-action="increase-size"><i
                                                        class="fas fa-plus"></i>
                                                </button>
                                                <button class="format-btn" data-action="decrease-size"><i
                                                        class="fas fa-minus"></i>
                                                </button>
                                                <button class="format-btn" data-action="ordered-list"><i
                                                        class="fas fa-list-ol"></i>
                                                </button>
                                                <button class="format-btn" data-action="unordered-list">
                                                    <i class="fas fa-list-ul"></i></button>
                                            </div>
                                            <div id="editor" contenteditable="true" class="editor">

                                            </div>
                                        </div>


                                        <button type="button" class="btn btn-info d-flex align-items-center ">إضافة <i
                                                class='fas fa-check pr-2'></i> </button>

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- الخبرة العملية -->
                    <div class="col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="الخبرة العملية"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp3" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                    rounded p-2">
                                    <i id="arrow3"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card3" class="d-none w-100 mb-4 p-7">
                        <div class="row">

                            <div class="card-det col-11  mx-auto ">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <div class="form-floating ">
                                            <label for="floatingInput" class="d-flex label "> المركز الوظيفي</label>

                                            <input type="text" class="form-control" id="floatingInput" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4 d-flex flex-column flex-sm-row my-0 p-0 my-lg-3">
                                        <div class="col-md-6 ">
                                            <div class="form-floating ">
                                                <label for="floatingInput" class="d-flex label ">
                                                    المسمى الوظيفي</label>

                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class=" col-md-6 ">
                                            <div class="form-floating ">
                                                <label for="floatingInput" class="d-flex label "> المدينة</label>

                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                    <div
                                        class="col-12 mb-4 d-flex flex-column flex-sm-row  p-0 align-items-center justify-content-between">
                                        <div class="col-md-6  ">
                                            <label for="birthday" class="d-flex label">تاريخ البدء :</label>
                                            <input type="date" class="form-control" id="birthday" name="birthday">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="birthday" class="d-flex label">تاريخ الإنتهاء :</label>
                                            <input type="date" class="form-control" id="birthday" name="birthday">
                                        </div>

                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for='editor' class="d-flex label">المهام الوظيفية :</label>

                                        <div class="editor-container w-100  py-3">
                                            <div class="toolbar border-top pt-2">
                                                <button class="format-btn" data-action="bold"><i
                                                        class="fas fa-bold"></i></button>
                                                <button class="format-btn" data-action="italic"><em><i
                                                            class="fas fa-italic"></i></em></button>
                                                <button class="format-btn" data-action="underline"><i
                                                        class="fas fa-underline"></i></button>

                                                <button class="format-btn" data-action="left-align"><i
                                                        class="fas fa-align-left"></i></button>
                                                <button class="format-btn" data-action="center-align"><i
                                                        class="fas fa-align-center"></i></button>
                                                <button class="format-btn" data-action="right-align"><i
                                                        class="fas fa-align-right"></i></button>

                                                <button class="format-btn" data-action="ordered-list"><i
                                                        class="fas fa-list-ol"></i>
                                                </button>
                                                <button class="format-btn" data-action="unordered-list">
                                                    <i class="fas fa-list-ul"></i></button>
                                            </div>
                                            <div id="editor" contenteditable="true" class="editor">

                                            </div>
                                        </div>


                                        <button type="button" class="btn btn-info d-flex align-items-center ">إضافة <i
                                                class='fas fa-check pr-2'></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- المهارات  -->
                    <div class="col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder=" المهارات التخصصية"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp4" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                        rounded p-2">
                                    <i id="arrow4"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card4" class="d-none w-100 mb-4 p-2">
                        <div id="skillsContainer">
                            <div class="skill-card" id="card-1">
                                <div class="header d-flex justify-content-between align-items-center">
                                    <span>المهارة [1]</span>
                                    <button class="btn btn-outline-secondary edit-btn d-none" id="editCard1">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                                <div class="card-body" id="card-body">
                                    <div class="form-group">
                                        <label for="skill1">المهارة</label>
                                        <input type="text" class="form-control" id="skill1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="level1">المستوى</label>
                                        <select class="form-control" id="level1">
                                            <option value="">اختر مستوى</option>
                                            <option value="1">مبتدأ</option>
                                            <option value="2">متوسط</option>
                                            <option value="3">جيد</option>
                                            <option value="4">قوي</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-check"></i> تم بنجاح
                                        </button>
                                        <button class="btn btn-outline-secondary delete-btn">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" id="addSkillBtn">إضافة مهارة</button>
                    </div>

                    <!-- الانجازات -->
                    <div id="achev" class="col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="الإنجازات"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp9" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                                                                    rounded p-2">
                                    <i id="arrow9"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card9" class="d-none w-100 mb-4 p-2">
                        <div class="col-12 mb-4">
                            <label for='editor' class="d-flex label">اضافةإنجاز</label>
                            <div class="editor-container w-100 py-3">
                                <div class="toolbar border-top pt-2">
                                    <div class="toolbar border-top pt-2">
                                        <button class="format-btn" data-action="bold"><i
                                                class="fas fa-bold"></i></button>
                                        <button class="format-btn" data-action="italic"><em><i
                                                    class="fas fa-italic"></i></em></button>
                                        <button class="format-btn" data-action="underline"><i
                                                class="fas fa-underline"></i></button>

                                        <button class="format-btn" data-action="left-align"><i
                                                class="fas fa-align-left"></i></button>
                                        <button class="format-btn" data-action="center-align"><i
                                                class="fas fa-align-center"></i></button>
                                        <button class="format-btn" data-action="right-align"><i
                                                class="fas fa-align-right"></i></button>

                                        <button class="format-btn" data-action="ordered-list"><i
                                                class="fas fa-list-ol"></i>
                                        </button>
                                        <button class="format-btn" data-action="unordered-list">
                                            <i class="fas fa-list-ul"></i></button>
                                    </div>
                                </div>
                                <div id="editor" contenteditable="true" class="editor"></div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">اضافه</button>
                    </div>

                    <!-- الهوايات -->
                    <div id="hop" class="d-none col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="الهوايات"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp6" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                                                                rounded p-2">
                                    <i id="arrow6"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card6" class="d-none w-100 mb-4 p-2">
                        <div id="skillsContainerHop">
                            <div class="skill-card" id="cardHop-1">
                                <div class="header d-flex justify-content-between align-items-center">
                                    <span>الهوايات [1]</span>
                                    <button class="btn btn-outline-secondary edit-btn d-none" id="editCard3">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                                <div class="card-body" id="Hop-card-body">
                                    <div class="form-group">
                                        <label for="skill1">الهوايات</label>
                                        <input type="text" class="form-control" id="skill1" placeholder="">
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-check"></i> تم بنجاح
                                        </button>
                                        <button class="btn btn-outline-secondary delete-btn">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" id="addSkillBtnHop">اضافة هواية</button>
                    </div>
                    <!-- اللغات -->
                    <div class="col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="اللغات"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp5" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                                                rounded p-2">
                                    <i id="arrow5"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card5" class="d-none w-100 mb-4 p-2">
                        <div id="skillsContainerLang">
                            <div class="skill-card" id="cardLang-1">
                                <div class="header d-flex justify-content-between align-items-center">
                                    <span>اللغة [1]</span>
                                    <button class="btn btn-outline-secondary edit-btn d-none" id="editCard2">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                                <div class="card-body" id="Lang-card-body">
                                    <div class="form-group">
                                        <label for="skill1">اللغة</label>
                                        <input type="text" class="form-control" id="skill1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="level1">المستوى</label>
                                        <select class="form-control" id="level1">
                                            <option value="">اختر مستوى</option>
                                            <option value="1">مبتدأ</option>
                                            <option value="2">متوسط</option>
                                            <option value="3">جيد</option>
                                            <option value="4">قوي</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-check"></i> تم بنجاح
                                        </button>
                                        <button class="btn btn-outline-secondary delete-btn">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" id="addSkillBtnLang">إضافة لغة</button>
                    </div>
                    <!-- الدورات التدريبية -->

                    <div id="train" class="d-none col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="الدورات التدريبية"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp7" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                    rounded p-2">
                                    <i id="arrow7"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card7" class="d-none  mb-4 p-7">
                        <div id="cards-container">
                            <div id="cardc1" class="card w-100 mb-4 p-7">
                                <div class="row">
                                    <div class="card-det col-11 mx-auto">
                                        <div class="row">
                                            <div class="col-12 pt-4">
                                                <div class="form-floating">
                                                    <label for="floatingInput" class="d-flex label">الدورات
                                                        التدريبية</label>
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 mb-4 d-flex p-0 flex-column flex-sm-row  align-items-center justify-content-between">
                                                <div class="col-md-6">
                                                    <label for="start-date" class="d-flex label">تاريخ البدء :</label>
                                                    <input type="date" class="form-control" id="start-date"
                                                        name="start-date">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="end-date" class="d-flex label">تاريخ الإنتهاء :</label>
                                                    <input type="date" class="form-control" id="end-date"
                                                        name="end-date">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <label for='editor' class="d-flex label">الوصف :</label>
                                                <div class="editor-container w-100 py-3">
                                                    <div class="toolbar border-top pt-2">
                                                        <div class="toolbar border-top pt-2">
                                                            <button class="format-btn" data-action="bold"><i
                                                                    class="fas fa-bold"></i></button>
                                                            <button class="format-btn" data-action="italic"><em><i
                                                                        class="fas fa-italic"></i></em></button>
                                                            <button class="format-btn" data-action="underline"><i
                                                                    class="fas fa-underline"></i></button>

                                                            <button class="format-btn" data-action="left-align"><i
                                                                    class="fas fa-align-left"></i></button>
                                                            <button class="format-btn" data-action="center-align"><i
                                                                    class="fas fa-align-center"></i></button>
                                                            <button class="format-btn" data-action="right-align"><i
                                                                    class="fas fa-align-right"></i></button>

                                                            <button class="format-btn" data-action="ordered-list"><i
                                                                    class="fas fa-list-ol"></i>
                                                            </button>
                                                            <button class="format-btn" data-action="unordered-list">
                                                                <i class="fas fa-list-ul"></i></button>
                                                        </div>
                                                    </div>
                                                    <div id="editor" contenteditable="true" class="editor"></div>
                                                </div>
                                            </div>
                                            <div class="d-flex p-3">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i> تم بنجاح
                                                </button>
                                                <button class="btn btn-outline-secondary delete-btn">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>

                                        </div>

                                        <button type="button" class="edit-btn btn btn-secondary d-none"><i
                                                class="fas fa-pencil-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- زر إضافة دورة جديدة -->
                        <button id="add-training-btn" type="button" class="btn btn-info">إضافة دورة تدريبية
                            جديدة</button>


                    </div>
                    <!-- الشهادات -->
                    <div id="cert" class="d-none col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="الشهادات"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp8" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                        rounded p-2">
                                    <i id="arrow8"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>
                    <div id="card8" class="d-none mb-4 p-7">
                        <div id="card-container">
                            <div id="cardca1" class="card w-100 mb-4 p-7">
                                <div class="row">
                                    <div class="card-det col-11 mx-auto">
                                        <div class="row">
                                            <div class="col-12 pt-4">
                                                <div class="form-floating">
                                                    <label for="floatingInput" class="d-flex label">
                                                        الشهادات</label>
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 mb-4 d-flex p-0 flex-column flex-sm-row  align-items-center justify-content-between">
                                                <div class="col-md-6">
                                                    <label for="start-date" class="d-flex label">تاريخ البدء :</label>
                                                    <input type="date" class="form-control" id="start-date"
                                                        name="start-date">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="end-date" class="d-flex label">تاريخ الإنتهاء :</label>
                                                    <input type="date" class="form-control" id="end-date"
                                                        name="end-date">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <label for='editor' class="d-flex label">الوصف :</label>
                                                <div class="editor-container w-100 py-3">
                                                    <div class="toolbar border-top pt-2">
                                                        <div class="toolbar border-top pt-2">
                                                            <button class="format-btn" data-action="bold"><i
                                                                    class="fas fa-bold"></i></button>
                                                            <button class="format-btn" data-action="italic"><em><i
                                                                        class="fas fa-italic"></i></em></button>
                                                            <button class="format-btn" data-action="underline"><i
                                                                    class="fas fa-underline"></i></button>

                                                            <button class="format-btn" data-action="left-align"><i
                                                                    class="fas fa-align-left"></i></button>
                                                            <button class="format-btn" data-action="center-align"><i
                                                                    class="fas fa-align-center"></i></button>
                                                            <button class="format-btn" data-action="right-align"><i
                                                                    class="fas fa-align-right"></i></button>

                                                            <button class="format-btn" data-action="ordered-list"><i
                                                                    class="fas fa-list-ol"></i>
                                                            </button>
                                                            <button class="format-btn" data-action="unordered-list">
                                                                <i class="fas fa-list-ul"></i></button>
                                                        </div>
                                                    </div>
                                                    <div id="editor" contenteditable="true" class="editor"></div>
                                                </div>
                                            </div>
                                            <div class="d-flex p-3">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i> تم بنجاح
                                                </button>
                                                <button class="btn btn-outline-secondary delete-btnn">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>

                                        </div>

                                        <button type="button" class="edit-btn btn btn-secondary d-none"><i
                                                class="fas fa-pencil-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button id="add-certificate-btn" type="button" class="btn btn-info">إضافة شهادة
                        </button>


                    </div>

                    <!-- web sites -->

                    <div id="website" class="d-none col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="المواقع الالكترونية"
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">
                                <div class="ml-2">

                                </div>
                                <button id="arrowUp10" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                        rounded p-2">
                                    <i id="arrow10"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>

                    <div id="card10" class="d-none w-100 mb-4 p-2">
                        <div id="websiteContainer">
                            <div class="webSite-card" id="card-1">
                                <div class="header d-flex justify-content-between align-items-center">
                                    <span>الموقع [1]</span>
                                    <button class="btn btn-outline-secondary edit-btn d-none" id="editCard1">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                                <div class="card-body" id="card-body">
                                    <div class="form-group">
                                        <label for="websiteName">اسم الموقع</label>
                                        <input type="text" class="form-control" id="websiteName" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="websiteUrl">رابط الموقع </label>
                                        <input type="text" class="form-control" id="websiteUrl" placeholder="">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-check"></i> تم بنجاح
                                        </button>
                                        <button class="btn btn-outline-secondary delete-btn">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" id="addWebSite">إضافة موقع</button>
                    </div>

                    <!-- parcode -->

                    <div id="parcode" class=" col-12 p-0 mb-4">
                        <div
                            class="header position-relative d-flex align-items-center justify-content-between border-top mt-4">

                            <input type="text" placeholder="الباركود الخاص بك "
                                class="card-input form-control-plaintext w-100 border-bottom-0 bg-transparent p-0">
                            <span class="underline"></span>

                            <div class="py-3 d-flex align-items-start">

                                <button id="arrowUp11" type="button"
                                    class="btn btn-outline-secondary d-flex align-items-center justify-content-center
                                                                                                                                                                                        rounded p-2">
                                    <i id="arrow11"
                                        class="fa fa-arrow-down pointer-events-none flex-shrink-0 box-content "
                                        aria-hidden="true"></i>

                                </button>

                            </div>
                        </div>
                    </div>

                    <div id="card11" class="d-none w-100 mb-4 p-2">
                        <div id="parcodeContainer">
                            <div class="parcode-card" id="card-1">
                                <div class="header d-flex justify-content-between align-items-center">
                                    <span> الباركود</span>

                                </div>
                                <div class="card-body w-100 " id="card-body">
                                    <label for="upload">رفع الباركود الخاص بك</label>
                                    <input class="w-75 w-md-100" type="file" id="upload" accept="image/*" />
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-check"></i> تم بنجاح
                                    </button>
                                    <button class="btn btn-outline-secondary delete-btn delete-bar">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="allbtns mb-3">

                        <div id="hopps" class="btn1"><a class="btn-plus">
                                <i class="fas fa-plus"></i>
                                المهارات الشخصية </a></div>
                        <div class="btn2"><a id="training" class="btn-plus">
                                <i class="fas fa-plus"></i>
                                الدورات تدريبية </a></div>
                        <div class="btn3"><a id="certificate" class="btn-plus">
                                <i class="fas fa-plus"></i>
                                الشهادات </a></div>
                        <div class="btn4"><a id="ًwebsites" class="btn-plus">
                                <i class="fas fa-plus"></i>
                                إضافة مواقع الكترونية </a></div>


                    </div>


                </div>
                <div id="submitForm" class="d-flex">
                    <button class="add px-4 py-3 btn"><span class="mx-1"><i class="fa fa-plus"></i></span>
                        إضافة البيانات</button>
                </div>
                </form>
                
                

            </div>
            <!-- left section -->
            <div class="col-lg-6 pt-5 left mt-5 mt-md-0">
                <div class="row d-flex flex-column align-items-center justify-content-between">
                    <div class="col-12">
                        <h1>اختر القالب المناسب لانشاء سيرتك الذاتية</h1>
                    </div>
                    <div id="imgs" class="imgs mt-5">

                        <div class="row">
                            <div class=" col-md-4 col-sm-6">
                                <div class="cv-img">
                                <a href="{{ url('cvImg-2.html') }}">
    <img src="{{ asset('assets/images/blue Minimalist CV Resume.jpg') }}" alt="">
</a>
                                </div>
                            </div>
                            <!-- <div class=" col-md-4 col-sm-6">
                                <div class="cv-img">
                                    <a href="./cvImg-3.html"> <img
                                            src="../static/images/blue Minimalist CV Resume (1).jpg" alt=""></a>
                                </div>
                            </div>
                            <div class=" col-md-4 col-sm-6">
                                <div class="cv-img">
                                    <a href="./cvImg-1.html"> <img
                                            src="../static/images/blue Minimalist CV Resume (2).jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class=" col-md-4 col-sm-6">
                                <div class="cv-img">
                                    <img src="../static/images/blue Minimalist CV Resume (3).jpg" alt="">
                                </div>
                            </div>
                            <div class=" col-md-4 col-sm-6">
                                <div class="cv-img">
                                    <img src="../static/images/Purple and White Clean and Professional Resume (1).jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class=" col-md-4 col-sm-6">
                                <div class="cv-img">
                                    <img src="../static/images/Purple and White Clean and Professional Resume.jpg"
                                        alt="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-12 mt-3 mt-md-1 border-top pt-4">
                        <span>
                            <p>"مع <strong>فائدة</strong>
                                نؤمن بأن السيرة الذاتية ليست مجرد ورقة، بل هي جواز عبورك نحو فرص المستقبل.
                                ابدأ الآن وامنح مهاراتك الفرصة
                                للتألق!"</p>
                        </span>
                    </div>
                </div>

            </div>


        </div>
    </div>









    <script src= "{{ asset('assets/js/jquery.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/select2.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/bootstrap.bundle.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/react.production.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/react-dom.production.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/slick.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/react-slick.min.js') }}"> </script>
    <script src= "{{ asset('assets/js/cv.js') }}"> </script>




</body>

</html>