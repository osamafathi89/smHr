@extends("aya.layeout")
        <!-- END: Pre Loader-->

        <!-- START: Header-->


        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">بيانات الموظفين </h4></div>


                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <h4 class="card-title">بيانات الموظفين </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>الكود</th>
                                                <th>الاسم</th>
                                                <th>المهنة</th>
                                                <th> حالة العمل</th>
                                                <th>تاريخ الاضافة</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                           @foreach ($employers as $employer)
                                           <tr>
                                            <td>{{$employer->id}}</td>
                                            <td> {{$employer->name}}</td>
                                            <td>{{$employer->grade}}</td>
                                            <td
                                            @if ($employer->married=="داخل العمل")
                                            style="background-color: #C06B50; color: #fff;"
                                            @else
                                            style="background-color: #4CC977; color: #fff;"
                                            @endif
                                            style="background-color: #C06B50; color: #fff;">{{$employer->married}}</td>
                                            <td>{{ $employer->created_at }}</td>
                                        </tr>
                                           @endforeach
                                            {{-- <tr>
                                                <td>210</td>
                                                <td>وفاء حسين سليم</td>
                                                <td> محلل برمجى </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>4/11/2022</td>
                                            </tr>
                                            <tr>
                                                <td>215</td>
                                                <td>هناء رضا الاحمدى</td>
                                                <td>جرافيك ديزين </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>5/5/2022</td>
                                            </tr>                                            <tr>
                                                <td>220</td>
                                                <td>مصطفي امين عبدالحميد</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>6/7/2022</td>
                                            </tr>
                                            <tr>
                                                <td>225</td>
                                                <td>امنية محمود مصطفى </td>
                                                <td>مطور ويب </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>9/8/2022</td>
                                            </tr>
                                             <tr>
                                                <td>230</td>
                                                <td>هاجر عبدالعليم توفيق</td>
                                                <td>مهندس دعم</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>8/2/2022</td>
                                            </tr>
                                            <tr>
                                                <td>233</td>
                                                <td>محمد مصطفي ابراهيم</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>3/2/2022</td>
                                            </tr>                                            <tr>
                                                <td>235</td>
                                                <td>احمد محمد العشماوى</td>
                                                <td>جرافيك ديزين </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>10/12/2022</td>
                                            </tr>
                                            <tr>
                                                <td>240</td>
                                                <td>عبدالله محمود الشربينى</td>
                                                <td>مهندس دعم</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>9/11/2022</td>
                                            </tr>                                            <tr>
                                                <td>245</td>
                                                <td>زينب ياسر البربرى</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>21/2/2022</td>
                                            </tr>
                                            <tr>
                                                <td>248</td>
                                                <td>منى مشرف احمد</td>
                                                <td>مطور ويب </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>5/12/2022</td>
                                            </tr>                                            <tr>
                                                <td>250</td>
                                                <td>منى جودة الشربينى</td>
                                                <td>محلل دعم </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>11/12/2022</td>
                                            </tr>
                                            <tr>
                                                <td>252</td>
                                                <td>ياسمين لطفى الحداد</td>
                                                <td>مهندس مستودعات البيانات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>9/11/2022</td>
                                            </tr>                                            <tr>
                                                <td>255</td>
                                                <td>صهيب محمد سليم</td>
                                                <td>مهندس دعم</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>22/2/2022</td>
                                            </tr>
                                            <tr>
                                                <td>260</td>
                                                <td>محمود صبرى رجب</td>
                                                <td>موظف امن </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>31/12/2022</td>
                                            </tr>                                            <tr>
                                                <td>263</td>
                                                <td>خالد حاتم ماجد</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>4/11/2022</td>
                                            </tr>
                                            <tr>
                                                <td>265</td>
                                                <td>اية محمد السعيد</td>
                                                <td>مطور ويب </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>3/12/2022</td>
                                            </tr>                                            <tr>
                                                <td>266</td>
                                                <td>رهف السيد احمد</td>
                                                <td>جرافيك ديزين </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>8/11/2022</td>
                                            </tr>
                                            <tr>
                                                <td>270</td>
                                                <td>روهيدا محمد السيد</td>
                                                <td>مهندس امن شبكات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>7/7/2022</td>
                                            </tr>                                            <tr>
                                                <td>274</td>
                                                <td>عمر توفيق عبده</td>
                                                <td>مهندس دعم </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>10/12/2022</td>
                                            </tr>
                                            <tr>
                                                <td>275</td>
                                                <td>حازم محمد طه</td>
                                                <td>محلل برمجى </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>4/10/2022</td>
                                            </tr>                                            <tr>
                                                <td>277</td>
                                                <td>ياسين محمد حسين</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>9/9/2022</td>
                                            </tr>

                                            <tr>
                                                <td>278</td>
                                                <td>زياد وائل السعيد</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>2/1/2022</td>
                                            </tr>                                            <tr>
                                                <td>279</td>
                                                <td>رامز محمد ابراهيم </td>
                                                <td>محلل برمجى </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>19/2/2022</td>
                                            </tr>
                                            <tr>
                                                <td>280</td>
                                                <td>سارة محمداحمد</td>
                                                <td>موظف امن </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>30/2/2022</td>
                                            </tr>                                            <tr>
                                                <td>281</td>
                                                <td>ملك صابرابراهيم</td>
                                                <td>موظف امن </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>20/8/2022</td>
                                            </tr>
                                            <tr>
                                                <td>283</td>
                                                <td>احمد سمير حسن</td>
                                                <td>محلل برمجى </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>16/2/2022</td>
                                            </tr>
                                            <tr>
                                                <td>284</td>
                                                <td>محمد مصطفي ابراهيم</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>3/2/2022</td>
                                            </tr>                                            <tr>
                                                <td>285</td>
                                                <td>رضا عبدالسلام طاهر</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>15/9/2022</td>
                                            </tr>
                                            <tr>
                                                <td>288</td>
                                                <td>محمد احمد ابراهيم</td>
                                                <td>مطور ويب </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>9/6/2022</td>
                                            </tr>                                            <tr>
                                                <td>290</td>
                                                <td>ياسر سليم ابراهيم</td>
                                                <td>جرافيك ديزين </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>11/2/2022</td>
                                            </tr>
                                            <tr>
                                                <td>293</td>
                                                <td>مجدى طاهر عبده</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>20/2/2022</td>
                                            </tr>                                            <tr>
                                                <td>295</td>
                                                <td>سليمان محمود جابر</td>
                                                <td>مهندس امن شبكات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>12/10/2022</td>
                                            </tr>
                                            <tr>
                                                <td>297</td>
                                                <td>امانى محمود السعيد</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>12/9/2022</td>
                                            </tr>                                            <tr>
                                                <td>305</td>
                                                <td>رغدة ياسر جمال</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>6/6/2022</td>
                                            </tr>
                                            <tr>
                                                <td>310</td>
                                                <td>مصطفى حسن ابراهيم</td>
                                                <td>مطور ويب </td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>5/5/2022</td>
                                            </tr>                                            <tr>
                                                <td>312</td>
                                                <td>هبه طارق حليم</td>
                                                <td>جرافيك ديزين </td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>25/6/2022</td>
                                            </tr>
                                            <tr>
                                                <td>315</td>
                                                <td>محمد رجب خليل</td>
                                                <td>مهندس دعم</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>6/2/2022</td>
                                            </tr>                                            <tr>
                                                <td>320</td>
                                                <td>حسن جمال السيد</td>
                                                <td>مهندس برمجيات</td>
                                                <td style="background-color: #4CC977; color: #fff;">قائم بالعمل</td>
                                                <td>5/1/2022</td>
                                            </tr>
                                            <tr>
                                                <td>330</td>
                                                <td>سليم يوسف عبدالغنى</td>
                                                <td>موظف امن</td>
                                                <td style="background-color: #C06B50; color: #fff;">خارج العمل</td>
                                                <td>25/2/2022</td>
                                            </tr> --}}
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->



        <!-- START: Footer-->
        <footer class="site-footer">
            2020 © PICK
        </footer>
        <!-- END: Footer-->


        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center">
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->
