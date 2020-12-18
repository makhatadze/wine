@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 - cabinet -->
    <section id="cabinet-section">
        <div class="container">

            <!--fixed cabinet nav-->
            <aside class="cabinet-nav">

                <div class="cabinet__user">
                    <div class="cabinet__user-img">
                        <img class="img-cover" src="{{asset('../img/user.png')}}" alt="">
                    </div>
                    <div class="cabinet__user-name">
                        <h2>რატი მგალობლიშვილი</h2>
                        <p>ID - 217923</p>
                    </div>

                </div>

                <div class="cabinet__navigation">
                    <a class="active" href="./cabinet-orders.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.909" height="18.182" viewBox="0 0 15.909 18.182">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V18.182H15.909V9.091H6.818V0ZM9.091,0V6.818h6.818ZM2.273,4.546H4.546V6.818H2.273Zm0,4.546H4.546v2.273H2.273Zm0,4.546h9.091v2.273H2.273Z"></path>
                          </svg>
                          ჩემი შეკვეთები
                    </a>

                    <a class="" href="./cabinet-info.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.909" height="18.182" viewBox="0 0 15.909 18.182">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V18.182H15.909V9.091H6.818V0ZM9.091,0V6.818h6.818ZM2.273,4.546H4.546V6.818H2.273Zm0,4.546H4.546v2.273H2.273Zm0,4.546h9.091v2.273H2.273Z"></path>
                          </svg>
                          ჩემი მონაცემები
                    </a>


                    <a href="" class="cabinet__exit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.327" height="13.149" viewBox="0 0 12.327 13.149">
                            <path id="Icon_metro-exit" data-name="Icon metro-exit" d="M12.432,10.146V8.5H8.323V6.859h4.109V5.215L14.9,7.681Zm-.822-.822v3.287H7.5v2.465L2.571,12.611V1.928h9.04V6.037h-.822V2.75H4.214L7.5,4.393v7.4h3.287V9.324Z" transform="translate(-2.571 -1.928)"></path>
                        </svg>
                        გასვლა
                    </a>
                </div>
            
            </aside>
          

            <div class="cabinet-content">
                <h1 class="cabinet-content__title">ჩემი შეკვეთები</h1>

                <!--cabinet page content -  orders-->
                <div class="table-scroll-y">

                    <div class="ordered-accordion open">
                        <div class="ordered__top ">
                            <div class="ordered-col">
                                <h3>შეკვეთის ნომერი</h3>
                                <p>#2020100109341365</p>
                            </div>
                            <div class="ordered-col">
                                <h3>თარიღი </h3>
                                <p>01 ოქტ,2020</p>
                            </div>
                            <div class="ordered-col">
                                <h3>შეკვეთის ჯამი</h3>
                                <p>479₾</p>
                            </div>
                            <div class="ordered-col">
                                <h3>გადახდის მეთოდი</h3>
                                <p>კურიერთან გადახდა</p>
                            </div>
                            <div class="ordered-col">
                                <h3>სტატუსი</h3>
                                <p class="ordered-status">დასრულებული</p>
                            </div>
                        </div>

                        <div class="ordered-accordion-content">
                            <div class="ordered__user-info">
                                <div class="ordered-col">
                                    <h3>დამკვეთის სახელი</h3>
                                    <p>რატი მგალობლიშვილი</p>
                                </div>
                                <div class="ordered-col">
                                    <h3>ელ-ფოსტა</h3>
                                    <p>mgaloblishvilige@gmail.com</p>
                                </div>
                                <div class="ordered-col">
                                    <h3>ტელ.ნომერი:</h3>
                                    <p>579031950</p>
                                </div>
                                <div class="ordered-col">
                                    <button class="invoice-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.969" height="14.259" viewBox="0 0 10.969 14.259">
                                            <g id="Icon_ionic-ios-download" data-name="Icon ionic-ios-download" transform="translate(-6.75 -3.375)">
                                              <path id="Path_60" data-name="Path 60" d="M16.348,10.125H12.68v6.166l1.642-1.618a.446.446,0,1,1,.627.634l-2.4,2.365a.453.453,0,0,1-.312.127.425.425,0,0,1-.171-.034.476.476,0,0,1-.141-.093h0l-2.4-2.365a.446.446,0,1,1,.627-.634L11.8,16.291V10.125H8.121A1.375,1.375,0,0,0,6.75,11.5v8.227a1.375,1.375,0,0,0,1.371,1.371h8.227a1.375,1.375,0,0,0,1.371-1.371V11.5A1.375,1.375,0,0,0,16.348,10.125Z" transform="translate(0 -3.459)"></path>
                                              <path id="Path_61" data-name="Path 61" d="M17.977,3.821a.446.446,0,0,0-.891,0V6.666h.891Z" transform="translate(-5.297)"></path>
                                            </g>
                                          </svg>
                                          ინვოისი</button>
                                </div>
                            </div>

                            <div class="ordered__card">
                                <div class="ordered__card-img">
                                    <img class="img-cover" src="{{asset('../img/product-4.png')}}" alt="">
                                </div>
                                <h2 class="ordered__card-name">
                                    შატო ზვანიძე დასახელება მშრალი 0.75ლ
                                </h2>

                                <div class="ordered__card-qty">რაოდენობა: 1</div>

                                <div class="ordered__card-price">
                                    ფასი: <span>2,699₾</span>
                                </div>
                                <div class="ordered__card-total">
                                    ჯამი: <span>2,699₾</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ordered-accordion">
                        <div class="ordered__top ">
                            <div class="ordered-col">
                                <h3>შეკვეთის ნომერი</h3>
                                <p>#2020100109341365</p>
                            </div>
                            <div class="ordered-col">
                                <h3>თარიღი </h3>
                                <p>01 ოქტ,2020</p>
                            </div>
                            <div class="ordered-col">
                                <h3>შეკვეთის ჯამი</h3>
                                <p>479₾</p>
                            </div>
                            <div class="ordered-col">
                                <h3>გადახდის მეთოდი</h3>
                                <p>კურიერთან გადახდა</p>
                            </div>
                            <div class="ordered-col">
                                <h3>სტატუსი</h3>
                                <p class="ordered-status">დასრულებული</p>
                            </div>
                        </div>

                        <div class="ordered-accordion-content">
                            <div class="ordered__user-info">
                                <div class="ordered-col">
                                    <h3>დამკვეთის სახელი</h3>
                                    <p>რატი მგალობლიშვილი</p>
                                </div>
                                <div class="ordered-col">
                                    <h3>ელ-ფოსტა</h3>
                                    <p>mgaloblishvilige@gmail.com</p>
                                </div>
                                <div class="ordered-col">
                                    <h3>ტელ.ნომერი:</h3>
                                    <p>579031950</p>
                                </div>
                                <div class="ordered-col">
                                    <button class="invoice-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.969" height="14.259" viewBox="0 0 10.969 14.259">
                                            <g id="Icon_ionic-ios-download" data-name="Icon ionic-ios-download" transform="translate(-6.75 -3.375)">
                                              <path id="Path_60" data-name="Path 60" d="M16.348,10.125H12.68v6.166l1.642-1.618a.446.446,0,1,1,.627.634l-2.4,2.365a.453.453,0,0,1-.312.127.425.425,0,0,1-.171-.034.476.476,0,0,1-.141-.093h0l-2.4-2.365a.446.446,0,1,1,.627-.634L11.8,16.291V10.125H8.121A1.375,1.375,0,0,0,6.75,11.5v8.227a1.375,1.375,0,0,0,1.371,1.371h8.227a1.375,1.375,0,0,0,1.371-1.371V11.5A1.375,1.375,0,0,0,16.348,10.125Z" transform="translate(0 -3.459)"></path>
                                              <path id="Path_61" data-name="Path 61" d="M17.977,3.821a.446.446,0,0,0-.891,0V6.666h.891Z" transform="translate(-5.297)"></path>
                                            </g>
                                          </svg>
                                          ინვოისი</button>
                                </div>
                            </div>

                            <div class="ordered__card">
                                <div class="ordered__card-img">
                                    <img class="img-cover" src="{{asset('../img/product-2.png')}}" alt="">
                                </div>
                                <h2 class="ordered__card-name">
                                    შატო ზვანიძე დასახელება მშრალი 0.75ლ
                                </h2>

                                <div class="ordered__card-qty">რაოდენობა: 1</div>

                                <div class="ordered__card-price">
                                    ფასი: <span>2,699₾</span>
                                </div>
                                <div class="ordered__card-total">
                                    ჯამი: <span>2,699₾</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ordered-accordion">
                        <div class="ordered__top ">
                            <div class="ordered-col">
                                <h3>შეკვეთის ნომერი</h3>
                                <p>#2020100109341365</p>
                            </div>
                            <div class="ordered-col">
                                <h3>თარიღი </h3>
                                <p>01 ოქტ,2020</p>
                            </div>
                            <div class="ordered-col">
                                <h3>შეკვეთის ჯამი</h3>
                                <p>479₾</p>
                            </div>
                            <div class="ordered-col">
                                <h3>გადახდის მეთოდი</h3>
                                <p>კურიერთან გადახდა</p>
                            </div>
                            <div class="ordered-col">
                                <h3>სტატუსი</h3>
                                <p class="ordered-status">დასრულებული</p>
                            </div>
                        </div>

                        <div class="ordered-accordion-content">
                            <div class="ordered__user-info">
                                <div class="ordered-col">
                                    <h3>დამკვეთის სახელი</h3>
                                    <p>რატი მგალობლიშვილი</p>
                                </div>
                                <div class="ordered-col">
                                    <h3>ელ-ფოსტა</h3>
                                    <p>mgaloblishvilige@gmail.com</p>
                                </div>
                                <div class="ordered-col">
                                    <h3>ტელ.ნომერი:</h3>
                                    <p>579031950</p>
                                </div>
                                <div class="ordered-col">
                                    <button class="invoice-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.969" height="14.259" viewBox="0 0 10.969 14.259">
                                            <g id="Icon_ionic-ios-download" data-name="Icon ionic-ios-download" transform="translate(-6.75 -3.375)">
                                              <path id="Path_60" data-name="Path 60" d="M16.348,10.125H12.68v6.166l1.642-1.618a.446.446,0,1,1,.627.634l-2.4,2.365a.453.453,0,0,1-.312.127.425.425,0,0,1-.171-.034.476.476,0,0,1-.141-.093h0l-2.4-2.365a.446.446,0,1,1,.627-.634L11.8,16.291V10.125H8.121A1.375,1.375,0,0,0,6.75,11.5v8.227a1.375,1.375,0,0,0,1.371,1.371h8.227a1.375,1.375,0,0,0,1.371-1.371V11.5A1.375,1.375,0,0,0,16.348,10.125Z" transform="translate(0 -3.459)"></path>
                                              <path id="Path_61" data-name="Path 61" d="M17.977,3.821a.446.446,0,0,0-.891,0V6.666h.891Z" transform="translate(-5.297)"></path>
                                            </g>
                                          </svg>
                                          ინვოისი</button>
                                </div>
                            </div>

                            <div class="ordered__card">
                                <div class="ordered__card-img">
                                    <img class="img-cover" src="{{asset('../img/product-2.png')}}" alt="">
                                </div>
                                <h2 class="ordered__card-name">
                                    შატო ზვანიძე დასახელება მშრალი 0.75ლ
                                </h2>

                                <div class="ordered__card-qty">რაოდენობა: 1</div>

                                <div class="ordered__card-price">
                                    ფასი: <span>2,699₾</span>
                                </div>
                                <div class="ordered__card-total">
                                    ჯამი: <span>2,699₾</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
           
            
        </div>
    </section>

</main>
@endsection