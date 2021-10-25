@extends('layout.layout')



@section('content')
   
    <header>
        <nav class="nav">
            <div class="nav__logo">
                <img src="{{asset('img/logo.png')}}" >
                <span class="work">papiza</span>
            </div>
            <input type="checkbox" class="nav__toggle" id="navi-toggle">
            <label  class="nav__toggle__button">
                <span class="nav__toggle__icon">&nbsp;</span>
            </label>
            <div class="nav__toggle__background">&nbsp;</div>
            <ul class="nav__lists">
                <li class="nav__items"><a href="#" class="nav__links">Order now</a></li>
                <li class="nav__items"><a href="#" class="nav__links">About Us</a></li>
                <li class="nav__items"><a href="#" class="nav__links">Home</a></li>
                <li class="nav__items"><a href="#" class="nav__links">Branches</a></li>
                <li class="nav__items"><a href="#" class="nav__links">Home</a></li>
            </ul>
        </nav>
        <div class="welcome work">
            <h1 >Papiza now serves authentic <span>Detroit pizza </span>
            in myanmar.</h1>
            <h3>please enjoy dine-in experience in our <a href="#">Branches</a> and also 
                you can order thought our website
            </h3>
            <a href="#" class="btn btn-buy">Order now</a>
        </div>
    </header>
    <section class="about">
        <div class="about__con">
            <img src="{{asset('img/logo-v2.png')}}" class="about__logo">
            <p class="about__text" 
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                We have been serving our customer since <span>1902.</span>
                We passed the traditional recipe throught fourth 
                generation. Special hand-made dough with <span>3 toppings</span> 
                that we put our soul and love into it.
            </p>
        </div>
    </section>
    <section class="sign">
        <h2 class="sec-head">Signature menu</h2>
        <div class="flex-sec mt-lg sign-sec">
            <div class="dish" data-aos="fade-right" data-aos-delay="200"     data-aos-duration="2000"
            >
                <div  class="dish__img dish__img-1">
                </div>
                <h3 class="dish__head">
                    Paparoni
                </h3>
                <p class="dish__detail">
                    we mix the <span>local sausage</span> with finest cheese we 
                    can get on earth
                </p>
            </div>
            <div class="dish" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                <div  class="dish__img dish__img-2">
                </div>
                <h3 class="dish__head">
                    Asiago
                </h3>
                <p class="dish__detail">
                    This is such <span> a classic</span> for people who love pizza
                </p>
            </div>  
             <div class="dish" data-aos="fade-left" data-aos-delay="200" data-aos-duration="2000">
                <div  class="dish__img dish__img-3">
                </div>
                <h3 class="dish__head">
                    Chicken
                </h3>
                <p class="dish__detail">
                    Local <span>tender chicken</span> plus <span>japanese mushroom</span>? this is
                    just supreme
                </p>
            </div>
     
        </div>
    </section>
    <section class="side">
        <div class="side-dishes">
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/1.jpg')}}" alt="">
                    <p class="name">kimbap</p>
                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/2.jpg')}}" alt="">
                    <p class="name">Bite Size</p>
                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/3.jpg')}}" alt="">
                    <p class="name">Roasted chicken</p>
                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/4.jpg')}}" alt="">
                    <p class="name">Bean soup</p>
                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/5.jpg')}}" alt="">
                    <p class="name">Steak</p>

                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/6.jpg')}}" alt="">
                    <p class="name">French Sandwich</p> 
                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/7.jpg')}}" alt="">
                    <p class="name">Burgar</p>

                </figure>
            </div>
            <div class="side-dish">
                <figure>
                    <img src="{{asset('img/sidedish/8.jpg')}}" alt="">
                    <p class="name">Desserts</p>
                </figure>
            </div>
           
          
         
        </div>
    </section>
    <section class="branches">
        <h2 class="sec-head">Branches</h2>
        <div class="flex-sec branch-sec">
            <div class="branch" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                <img src="{{asset('img/branch-ichi.jpg')}}" alt="" class="branch__img">
                <div class="branch__address">
                    <svg class="branch__address-icon">
                            <use xlink:href="img/sprite.svg#icon-location2">
                    </svg>
                    <p class="branch__address-text">No.23 , SeSone street , Yangon</p>
                </div>
            </div>
            <div class="branch" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                <img src="{{asset('img/branch-ni.jpg')}}" alt="" class="branch__img">
                <div class="branch__address">
                    <svg class="branch__address-icon">
                            <use xlink:href="img/sprite.svg#icon-location2">
                    </svg>
                    <p class="branch__address-text">No.18 , Thiri street , Yangon</p>
                </div>
            </div>
            <div class="branch" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                <img src="{{asset('img/branch-san.jpg')}}" alt="" class="branch__img">
                <div class="branch__address">
                    <svg class="branch__address-icon">
                            <use xlink:href="img/sprite.svg#icon-location2">
                    </svg>
                    <p class="branch__address-text">No.82 , Bogyoke street , Yangon</p>
                </div>
            </div>
        </div>
    </section>
    <section class="covid">
        <h2 data-aos="fade" data-aos-delay="300" data-aos-duration="2000">Covid situation in myanmar </h2> 
            <h5>(last updated  - <span id="dateDisplay"></span>)</h5>
        <div class="flex-sec covid-sec">
            <div class="covid__card">
                <h3>New Confirmed Globally</h3>
                <p id="totalCofirmGlobal" class="display" data-target="0">0</p>
            </div>
            <div class="covid__card">
                <h3>Total Confirmed</h3>
                <p id="totalConfirm" class="display" data-target="0">0</p>
            </div>
            <div class="covid__card">
                <h3>Total Deaths</h3>
                <p id="totalDeath" class="display" data-target="0">0</p>
            </div>
        </div>
        <p class="pre">Here is some preventive measure to keep your self safe during covid
            <br> &darr;</p>
    </section>
    <section class="prevent">
        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/cold.png')}}" alt="">
                <p>When coughing and sneezing cover mouth and nose with
                    flexed elbow or tissue.
                </p>
            </div>
        </div>
        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/cooking.png')}}" alt="">
                <p>Eat only well-cooked food</p>
            </div>
        </div>
        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/fever.png')}}" alt="">
                <p>Avoid close contact with animals that are sick</p>
            </div>
        </div>
        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/vaccine.png')}}" alt="">
                <p>Please get vaccinated at nearby vaccine center</p>
            </div>
        </div> 

        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/medical-mask.png')}}" alt="">
                <p>If you are coughing or sneezing ,
                    wear a mask and must know how to use it 
                    and dispose of it properly.
                </p>
            </div>
        </div> 
        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/washing-hand.png')}}" alt="">
                <p>Wash hands with soap and water after touching animals and animal products</p>
            </div>
        </div> 
      
        <div class="prevent__box">
            <div class="prevent__box__content">
                <img src="{{asset('img/pizza/flight.png')}}" alt="">
                <p>Avoid travel and stay at home as much as 
                    you can
                </p>
            </div>
        </div>
    </section>
    <section class="contactus">
        <h2 class="sec-head">Contact Us</h2>
        <div class="flex-sec-1">
            <div class="feedback">
                <img src="{{asset('img/feedback-1.png')}}" alt="" class="feedback__img "
                data-aos="slide-up" data-aos-delay="200" data-aos-duration="2000">
                <p class="feedback__text">We would like to hear what do think about our
                    pizza and how can we improve in the future.
                    <span>We would like to use your email to notify about 
                        our future update and discount
                    </span>
                </p>
            </div>
            <form action="#" class="contact">
                <div class="contact__item contact__firstname">
                    <label for="firstname">First Name</label>
                    <input type="text" autocomplete="off">
                    <div class="underline"></div>
                </div>
                <div class=" contact__item contact__lastname">
                    <label for="lastname">Last Name</label>
                    <input type="text">
                    <div class="underline"></div>

                </div>
                <div class="contact__item  contact__email">
                    <label for="email">email</label>
                    <input type="email">
                    <div class="underline"></div>

                </div>
                <div class="contact__item  contact__content">
                    <label for="content">Contents :</label>
                    <textarea ></textarea>
                </div>
                <button type="submit" class="contact__btn">Send</button>
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-sec">
            <div class="footer__logo">
                <img src="{{asset('img/logo-v2.png')}}" >  
            </div>
            <div class="footer__social">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-telegram"></i></a>

            </div>
            <ul class="footer__nav">
                <li>
                    <i class="fa fa-mobile"></i> 094521398 , 09761186758
                </li>
                <li><a href="#">Intern ship Program</a></li>
                <li><a href="#">Job for university student</a></li>
                <li><a href="#">for stuff</a></li>
            </ul>
        </div>
        <p class="legal">
            This page is desgined and developed by <a href="#">lin kaday</a>
        </p>
    </footer>

@endsection