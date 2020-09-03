<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\laragon\www\OctoberLaravelOffical\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/main-menyu.htm */
class __TwigTemplate_a3039743b9a4437c4bc48eb53279360f1ac160c24c0492949b34755e41a4e2a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>

    #menyu-suruluvchi{
        margin-top: 47px;
    }
</style>
    <!-- site-header-menu -->
    <div id=\"site-header-menu\" class=\"site-header-menu ttm-bgcolor-white\">
        <div class=\"site-header-menu-inner ttm-stickable-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <!--site-navigation -->
                        <div class=\"site-navigation d-flex flex-row\">
                            <!-- site-branding -->
                            <div class=\"site-branding mr-auto\">
                                <a class=\"home-link\" href=\"index.html\" title=\"Uniaro\" rel=\"home\">
                                    <img id=\"logo-img\" class=\"img-center lazyload\" data-src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ist_logo.png");
        echo "\" alt=\"logo-img\" style=\"max-height: 70px;\">
                                </a>
                            </div><!-- site-branding end -->
                            <div class=\"btn-show-menu-mobile menubar menubar--squeeze\">
                                <span class=\"menubar-box\">
                                    <span class=\"menubar-inner\"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class=\"main-menu menu-mobile\" id=\"menu\">
                                <ul class=\"menu\">
                                    <li class=\"mega-menu-item active\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Yangilik</a>
                                        <ul class=\"mega-submenu\">

                                            <li class=\"mega-menu-item\">
                                                <a href=\"home-3.html#\" class=\"mega-menu-link\">OTM yangiliklari</a>
                                                <ul class=\"mega-submenu\">
                                                    
    
                                                    <li><a href=\"/barcha-yangiliklar/ommaviy-tadbirlar\">Ommaviy tadbirlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yangiliklar\">Yangiliklar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yigilishlar\">Yig'ilishlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/uchrashuvlar\">Uchrashuvlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/matbuot-konfrensiyalari\">Matbuot konfrensiyalari</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/seminarlar\">Seminarlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/davra-suhbatlari\">Davra suhbatlari</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/rasmiy-tashriflar\">Rasmiy tashriflar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/talabalar-uchun\">Talabalar uchun</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/Sport\">Sport</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/madaniy-va-marifiy-tadbirlar\">Madaniy va ma'rifiy tadbirlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/dolzarb-yangilik\">Dolzarb yangiliklar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/oliy-talim\">Oliy ta'lim muassasi yangiliklari</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yoshlar-itfoqi\">Yoshlar ittifoqi</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/konferentsiya\">Konferentsiya</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yoshlar-bilan-ishlash-manaiyat-va-marifat-yonalishidagi-ishlar\">Yoshlar bilan ishlash, ma'naiyat va ma'rifat yo'nalishidagi ishlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/axborot-makoni\">Axborot makoni</a></li>
                                                </ul>
                                                    
                                                
                                            </li>

                                            <li><a href=\"#\">Ommaviy tadbirlar</a></li>
                                            <li class=\"active\"><a href=\"home-3.html\">Axborot makoni</a></li>
                                          
                                            <li class=\"mega-menu-item\">
                                                <a href=\"home-3.html#\" class=\"mega-menu-link\">E'lonlar</a>
                                                <ul class=\"mega-submenu\" >
                                                    <li><a href=\"index.html\">Institut e'lonlari</a></li>
                                                    <li><a target=\"_blank\" href=\"header-style-02.html\">Boshqa e'lonlar</a></li>
                                                    
                                                </ul>
                                            </li>


                                            <li><a href=\"#\">Tender e'lonlari</a></li>
                                           
                                        </ul>
                                    </li>

                                    <li class=\"mega-menu-item megamenu-fw\">
                                        <a href=\"#\" class=\"mega-menu-link\">Tuzilma</a>
                                        <ul class=\"mega-submenu megamenu-content\" role=\"menu\">
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Rahbariyat</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">OTM Rektori</a></li>
                                                                <li><a href=\"#\">O'quv ishlari bo'yicha prorektor</a></li>
                                                                <li><a href=\"#\">Yoshlar bilan ishlash bo'yicha prorektor</a></li>
                                                                <li><a href=\"#\">Ilmiy ishlar bo'yicha prorektor</a></li>
                                                                <li><a href=\"#\">Moliya-iqtisod ishlari bo'yicha prorektor</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Markaz va bo'limlar </h6> 
                                                        <div class=\"content\">
                                                            <ul>
                                                                <li><a href=\"#\">Barcha markaz va bo'limlar</a></li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"home-3.html#\" class=\"mega-menu-link\">Markazlar</a>
                                                                    <ul class=\"mega-submenu\" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Axborot resurs markazi</a></li>
                                                                        <li><a href=\"#\">Axborot texnologiyalari markazi</a></li>                                                                                                                            
                                                                    </ul>
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"home-3.html#\" class=\"mega-menu-link\">№1: Bo'limlar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Xalqaro hamkorlik bo'limi</a></li>
                                                                        <li><a href=\"#\">Monitoring va ichki nazorat bo'limi</a></li>
                                                                        <li><a href=\"#\">Xodimlar boʻlimi</a></li>
                                                                        <li><a href=\"#\">Marketing boʻlimi</a></li>
                                                                        <li><a href=\"#\">Yoshlar bilan ishlash, ma’naviyat va ma’rifat</a></li>
                                                                        <li><a href=\"#\">Iqtidorli talabalarning ilmiy-tadqiqot faoliyatini tashkil etish bo’limi</a></li>
                                                                        <li><a href=\"#\">Institut Yoshlar yetakchisi</a></li>
                                                                        <li><a href=\"#\">Yuriskonsult</a></li>
                                                                                                                                              
                                                                    </ul>
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"home-3.html#\" class=\"mega-menu-link\">№2: Bo'limlar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Buxgalteriya</a></li>
                                                                        <li><a href=\"#\">Sirtqi bo'lim</a></li>
                                                                        <li><a href=\"#\">Oʻquv-uslubiy boʻlim </a></li>
                                                                        <li><a href=\"#\">Devonxona</a></li>
                                                                        <li><a href=\"#\">Texnik-foydalanish va xо‘jalik bо‘limi</a></li>
                                                                        <li><a href=\"#\">Akademik litsey</a></li>
                                                                        <li><a href=\"#\">Ilmiy-innovatsion ishlanmalarni tijoratlashtirish bo’limi</a></li>
                                                                        <li><a href=\"#\">Ilmiy-tadqiqot, innovatsiyalar va ilmiy-pedagogik kadrlar tayyorlash bo’limi </a></li>
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>

                                                                
                                                            </ul>
                
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    
                                                    
                                                                  <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Kafedralar</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">Barcha kafedralarni ko'rish</a></li>
                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link \">№1: Kafedralar</a>
                                                                    <ul class=\"mega-submenu\" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Matematika kafedrasi</a></li>
                                                                        <li><a href=\"#\">Fizika kafedrasi</a></li>
                                                                        <li><a href=\"#\">Informatika kafedrasi </a></li>
                                                                        <li><a href=\"#\">Kimyo kafedrasi</a></li>
                                                                        <li><a href=\"#\">Biologiya kafedrasi</a></li>
                                                                        
                                                                     
                                                                                                                                              
                                                                    </ul>
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link\">№2: Kafedralar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Geografiya kafedrasi</a></li>
                                                                        <li><a href=\"#\">Tarix kafedrasi</a></li>
                                                                        <li><a href=\"#\">Ijtimoiy fanlar kafedrasi </a></li>
                                                                        <li><a href=\"#\">О‘zbek tili va adabiyoti kafedrasi</a></li>
                                                                        <li><a href=\"#\">Rus tili kafedrasi</a></li>
                                                                        <li><a href=\"#\">Xorijiy tillar kafedrasi</a></li>
                                                                        
                                                                        
                                                                        
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>
                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link\">№3: Kafedralar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Fakultetlararo chet tillar kafedrasi </a></li>
                                                                        <li><a href=\"#\">Pedagogika va menejment kafedrasi </a></li>
                                                                        <li><a href=\"#\">Psixologiya kafedrasi </a></li>
                                                                        <li><a href=\"#\">Musiqa va defektologiya kafedrasi</a></li>
                                                                        <li><a href=\"#\">Maktabgacha ta’lim kafedrasi</a></li>
                                                                       
                                                                       
                                                                       
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link\">№4: Kafedralar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Texnologik ta'lim kafedrasi</a></li>
                                                                        <li><a href=\"#\">Jismoniy madaniyat kafedrasi</a></li>
                                                                        <li><a href=\"#\">Sirtqi bo'lim</a></li>
                                                                        <li><a href=\"#\">Fakultetlararo jismoniy tarbiya kafedrasi </a></li>
                                                                        <li><a href=\"#\">Boshlang'ich ta'lim kafedrasi</a></li> 
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>  
                                                    
                                                    
                                                 
                                                </div><!-- end row -->

                                                <!-- Ikkinchi qator boshlandi -->
                                                <div class=\"row\">
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Kengashlar</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">Vasiylik kengashi</a></li>
                                                                <li><a href=\"#\">OTM kengashi</a></li>
                                                                <li><a href=\"#\">Ilmiy uslubiy kengash</a></li>
                                                                <li><a href=\"#\">Ilmiy kengash</a></li>
                                                                <li><a href=\"#\">Yosh olimlar kengashi</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Faoliyat</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"instructors.html\">Institut nizomi</a></li>
                                                                <li><a href=\"instructor-profile.html\">Ta'lim sifati nazorati</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                      
                                                        <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Fakultetlar</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">Aniq fanlar fakulteti</a></li>
                                                                <li><a href=\"#\">Tabiiy fanlar fakulteti</a></li>
                                                                <li><a href=\"#\">Tarix va tillar fakulteti</a></li>
                                                                <li><a href=\"#\">Pedagogika fakulteti</a></li>
                                                                <li><a href=\"#\">Maktabgacha va boshlang’ich ta’lim fakulteti</a></li>
                                                                <li><a href=\"#\">Sport va chaqiriqqacha xarbiy ta'lim fakulteti</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>    
                                        
                                                </div><!-- end row -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Faoliyat</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a target=\"_blank\" href=\"#\">E-hujjat</a></li>
                                            <li><a href=\"#\">OTM reytingi</a></li>                                       
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Ilmiy faoliyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Doktorantlar maktabi</a></li>
                                                    <li><a href=\"#\">Ilmiy tadqiqot faoliyati</a></li>
                                                    <li><a href=\"#\">Desertatsiya</a></li>
                                                    <li><a href=\"#\">Aftoreferat</a></li>
                                                    <li><a href=\"#\">Konfrensiyalar</a></li> 
                                                    <li><a href=\"#\">Doktorantura va mustaqil tadqiqotchilar</a></li> 
                                                    <li><a href=\"#\">Ilmiy-tadqiqot foliyatga oid meʼyoriy-huquqiy xujjatlar</a></li> 
                                                    <li><a href=\"#\">Mening innovatsion g'oyam</a></li> 
                                              
                                                                                                                          
                                                </ul>                                                                   
                                            </li>
                                            <li><a href=\"#\">Xalqaro a'loqalar</a></li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Moliyaviy faoliyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Muassasa byujeti</a></li>
                                                    <li><a href=\"#\">Ish xaqini xisoblash va mukofotlarni taqsimlash qoidalari</a></li>
                                                    <li><a href=\"#\">Davlat xaridlariga oid tuzilgan shartnomalar</a></li>
                                                    
                                              
                                                                                                                          
                                                </ul>                                                                   
                                            </li>
                                            <li><a href=\"#\">5 tashabbus markazi</a></li>
                                            <li><a href=\"#\">OTM tarixi</a></li>
                                            <li><a href=\"#\">Madaniy-ma`rifiy faoliy</a></li>
                                            <li><a href=\"#\">Ekologiya va atrof-muhitni muhofaza qilish</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Abiturient</a>
                                        <ul class=\"mega-submenu\">
                                
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Bakalavriyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Abituriyentlardan tushgan arizalar soni</a></li>
                                                    <li><a href=\"#\">Tasviriy sa'nat va muhandislik grafikasi fanlaridan baholanish mezonlari </a></li>
                                                    <li><a href=\"#\">Qabul kvotalari 2019</a></li>
                                                    <li><a href=\"#\">Abituriyentlarga eslatma</a></li>
                                                    <li><a href=\"#\">Hujjatlarni rasmiylashtirish</a></li>
                                                    <li><a href=\"#\">Qabulga oid hujjatlar</a></li>
                                                    <li><a href=\"#\">Qabul nizomi</a></li>
                                                    <li><a href=\"#\">Imtihon fanlari ro'yxati</a></li>
                                                    <li><a href=\"#\">Qabul ko'rsatgichi</a></li>
                                                    <li><a href=\"#\">O'tish ballari</a></li>        
                                                </ul>                                                                   
                                            </li>

                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Magistratura</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Magistratura uchun qabul rejasi</a></li>
                                                    <li><a href=\"#\">Oliy ta'lim muassasalariga o'qishga qabul qilishda milliy xamda halqaro baxolash tizimlari sertifikatlarini tatbiq qilish chora-tadbirlari tog'risida </a></li>
                                                    <li><a href=\"#\">2019-2020 o‘quv yili uchun magistraturaga kirish sinov dasturlari va baholash mezonlari</a></li>                                                        
                                                </ul>                                                                   
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"shop.html\" class=\"mega-menu-link\">Talabalar</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a href=\"#\" target=\"_blank\">Elektron ta'lim tizimi</a></li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Bakalavriyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Kunduzgi ta'lim</a></li>
                                                    <li><a href=\"#\">Sirtqi ta'lim</a></li>
                                                    <li><a href=\"#\">Kechki ta'lim</a></li>                                                        
                                                </ul>                                                                   
                                            </li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Magistratura</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Yo'riqnoma</a></li>
                                                    <li><a href=\"#\">Dars jadvali</a></li>
                                                    <li><a href=\"#\">O'zlashtirish</a></li>                                                        
                                                    <li><a href=\"#\">Davomat</a></li>                                                        
                                                    <li><a href=\"#\">Iqtidorli talabalar</a></li>                                                        
                                                    <li><a href=\"#\">Talabalar turar joylari</a></li>                                                        
                                                    <li><a href=\"#\">Davlat imtihonlari</a></li>                                                        
                                                    <li><a href=\"#\">Magisterlik disertatsiyasi himoyasi</a></li>                                                        
                                                                                                      
                                                </ul>                                                                   
                                            </li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Xorijiy talabalar uchun</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Xorijiy talabalar tо'g'risida ma'lumot</a></li>
                                                    <li><a href=\"#\">Xorijiy talabalar uchun to‘lov kontrakt miqdori</a></li>
                                                    <li><a href=\"#\">Chet el fuqarolari uchun qabul jarayoni</a></li>                                                        
                                                    <li><a href=\"#\">Amaliy о‘quv kurslari</a></li>                                                        
                                                                                                        
                                                                                                      
                                                </ul>                                                                   
                                            </li>
                                            <li><a href=\"#\" target=\"_blank\">\"Mening fikrim\" - jamoaviy murojaatlar portali </a></li>
                                         
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Hujjatlar</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a href=\"#\">Prezident qaror va farmonlari</a></li>
                                            <li><a href=\"#\">Vazirlik buyruqlari va kollegiya qarorlari</a></li>
                                            <li><a href=\"#\">Hukumat qaror va dasturlari</a></li>
                                            <li><a href=\"#\">OTM normativ xujjatlari</a></li>
                                            
                                        </ul>
                                    </li>

                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Bog'lanish</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a href=\"#\">Aloqa</a></li>
                                            <li><a href=\"#\">Virtual Qabulxona</a></li>
                                            <li><a href=\"#\">Mening fikrim</a></li>
                                            <li><a href=\"#\">Telefon raqamlar</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"header_extra d-flex flex-row align-items-center justify-content-end\">
                                <div class=\"header_search\">
                                    <a href=\"home-3.html#\" class=\"btn-default search_btn\"><i class=\"ti ti-search\"></i></a>
                                    <div class=\"header_search_content\">
                                        <form id=\"searchbox\" method=\"get\" action=\"home-3.html#\">
                                            <input class=\"search_query\" type=\"text\" id=\"search_query_top\" name=\"s\" placeholder=\"Enter Keyword\" value=\"#\">
                                            <button type=\"submit\" class=\"btn close-search\"><i class=\"fa fa-search\"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"header_cart\">
                                    <a href=\"home-3.html#\" class=\"button-cart\">
                                        <div class=\"cart_icon\"><i class=\"fa fa-shopping-cart\"></i></div>
                                        <div class=\"cart_count\">0</div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!--header end-->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/main-menyu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

    #menyu-suruluvchi{
        margin-top: 47px;
    }
</style>
    <!-- site-header-menu -->
    <div id=\"site-header-menu\" class=\"site-header-menu ttm-bgcolor-white\">
        <div class=\"site-header-menu-inner ttm-stickable-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <!--site-navigation -->
                        <div class=\"site-navigation d-flex flex-row\">
                            <!-- site-branding -->
                            <div class=\"site-branding mr-auto\">
                                <a class=\"home-link\" href=\"index.html\" title=\"Uniaro\" rel=\"home\">
                                    <img id=\"logo-img\" class=\"img-center lazyload\" data-src=\"{{ 'assets/images/ist_logo.png'|theme }}\" alt=\"logo-img\" style=\"max-height: 70px;\">
                                </a>
                            </div><!-- site-branding end -->
                            <div class=\"btn-show-menu-mobile menubar menubar--squeeze\">
                                <span class=\"menubar-box\">
                                    <span class=\"menubar-inner\"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class=\"main-menu menu-mobile\" id=\"menu\">
                                <ul class=\"menu\">
                                    <li class=\"mega-menu-item active\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Yangilik</a>
                                        <ul class=\"mega-submenu\">

                                            <li class=\"mega-menu-item\">
                                                <a href=\"home-3.html#\" class=\"mega-menu-link\">OTM yangiliklari</a>
                                                <ul class=\"mega-submenu\">
                                                    
    
                                                    <li><a href=\"/barcha-yangiliklar/ommaviy-tadbirlar\">Ommaviy tadbirlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yangiliklar\">Yangiliklar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yigilishlar\">Yig'ilishlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/uchrashuvlar\">Uchrashuvlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/matbuot-konfrensiyalari\">Matbuot konfrensiyalari</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/seminarlar\">Seminarlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/davra-suhbatlari\">Davra suhbatlari</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/rasmiy-tashriflar\">Rasmiy tashriflar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/talabalar-uchun\">Talabalar uchun</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/Sport\">Sport</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/madaniy-va-marifiy-tadbirlar\">Madaniy va ma'rifiy tadbirlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/dolzarb-yangilik\">Dolzarb yangiliklar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/oliy-talim\">Oliy ta'lim muassasi yangiliklari</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yoshlar-itfoqi\">Yoshlar ittifoqi</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/konferentsiya\">Konferentsiya</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/yoshlar-bilan-ishlash-manaiyat-va-marifat-yonalishidagi-ishlar\">Yoshlar bilan ishlash, ma'naiyat va ma'rifat yo'nalishidagi ishlar</a></li>
                                                    
                                                
                                                    
                                                    <li><a href=\"/barcha-yangiliklar/axborot-makoni\">Axborot makoni</a></li>
                                                </ul>
                                                    
                                                
                                            </li>

                                            <li><a href=\"#\">Ommaviy tadbirlar</a></li>
                                            <li class=\"active\"><a href=\"home-3.html\">Axborot makoni</a></li>
                                          
                                            <li class=\"mega-menu-item\">
                                                <a href=\"home-3.html#\" class=\"mega-menu-link\">E'lonlar</a>
                                                <ul class=\"mega-submenu\" >
                                                    <li><a href=\"index.html\">Institut e'lonlari</a></li>
                                                    <li><a target=\"_blank\" href=\"header-style-02.html\">Boshqa e'lonlar</a></li>
                                                    
                                                </ul>
                                            </li>


                                            <li><a href=\"#\">Tender e'lonlari</a></li>
                                           
                                        </ul>
                                    </li>

                                    <li class=\"mega-menu-item megamenu-fw\">
                                        <a href=\"#\" class=\"mega-menu-link\">Tuzilma</a>
                                        <ul class=\"mega-submenu megamenu-content\" role=\"menu\">
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Rahbariyat</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">OTM Rektori</a></li>
                                                                <li><a href=\"#\">O'quv ishlari bo'yicha prorektor</a></li>
                                                                <li><a href=\"#\">Yoshlar bilan ishlash bo'yicha prorektor</a></li>
                                                                <li><a href=\"#\">Ilmiy ishlar bo'yicha prorektor</a></li>
                                                                <li><a href=\"#\">Moliya-iqtisod ishlari bo'yicha prorektor</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Markaz va bo'limlar </h6> 
                                                        <div class=\"content\">
                                                            <ul>
                                                                <li><a href=\"#\">Barcha markaz va bo'limlar</a></li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"home-3.html#\" class=\"mega-menu-link\">Markazlar</a>
                                                                    <ul class=\"mega-submenu\" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Axborot resurs markazi</a></li>
                                                                        <li><a href=\"#\">Axborot texnologiyalari markazi</a></li>                                                                                                                            
                                                                    </ul>
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"home-3.html#\" class=\"mega-menu-link\">№1: Bo'limlar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Xalqaro hamkorlik bo'limi</a></li>
                                                                        <li><a href=\"#\">Monitoring va ichki nazorat bo'limi</a></li>
                                                                        <li><a href=\"#\">Xodimlar boʻlimi</a></li>
                                                                        <li><a href=\"#\">Marketing boʻlimi</a></li>
                                                                        <li><a href=\"#\">Yoshlar bilan ishlash, ma’naviyat va ma’rifat</a></li>
                                                                        <li><a href=\"#\">Iqtidorli talabalarning ilmiy-tadqiqot faoliyatini tashkil etish bo’limi</a></li>
                                                                        <li><a href=\"#\">Institut Yoshlar yetakchisi</a></li>
                                                                        <li><a href=\"#\">Yuriskonsult</a></li>
                                                                                                                                              
                                                                    </ul>
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"home-3.html#\" class=\"mega-menu-link\">№2: Bo'limlar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Buxgalteriya</a></li>
                                                                        <li><a href=\"#\">Sirtqi bo'lim</a></li>
                                                                        <li><a href=\"#\">Oʻquv-uslubiy boʻlim </a></li>
                                                                        <li><a href=\"#\">Devonxona</a></li>
                                                                        <li><a href=\"#\">Texnik-foydalanish va xо‘jalik bо‘limi</a></li>
                                                                        <li><a href=\"#\">Akademik litsey</a></li>
                                                                        <li><a href=\"#\">Ilmiy-innovatsion ishlanmalarni tijoratlashtirish bo’limi</a></li>
                                                                        <li><a href=\"#\">Ilmiy-tadqiqot, innovatsiyalar va ilmiy-pedagogik kadrlar tayyorlash bo’limi </a></li>
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>

                                                                
                                                            </ul>
                
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    
                                                    
                                                                  <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Kafedralar</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">Barcha kafedralarni ko'rish</a></li>
                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link \">№1: Kafedralar</a>
                                                                    <ul class=\"mega-submenu\" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Matematika kafedrasi</a></li>
                                                                        <li><a href=\"#\">Fizika kafedrasi</a></li>
                                                                        <li><a href=\"#\">Informatika kafedrasi </a></li>
                                                                        <li><a href=\"#\">Kimyo kafedrasi</a></li>
                                                                        <li><a href=\"#\">Biologiya kafedrasi</a></li>
                                                                        
                                                                     
                                                                                                                                              
                                                                    </ul>
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link\">№2: Kafedralar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Geografiya kafedrasi</a></li>
                                                                        <li><a href=\"#\">Tarix kafedrasi</a></li>
                                                                        <li><a href=\"#\">Ijtimoiy fanlar kafedrasi </a></li>
                                                                        <li><a href=\"#\">О‘zbek tili va adabiyoti kafedrasi</a></li>
                                                                        <li><a href=\"#\">Rus tili kafedrasi</a></li>
                                                                        <li><a href=\"#\">Xorijiy tillar kafedrasi</a></li>
                                                                        
                                                                        
                                                                        
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>
                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link\">№3: Kafedralar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Fakultetlararo chet tillar kafedrasi </a></li>
                                                                        <li><a href=\"#\">Pedagogika va menejment kafedrasi </a></li>
                                                                        <li><a href=\"#\">Psixologiya kafedrasi </a></li>
                                                                        <li><a href=\"#\">Musiqa va defektologiya kafedrasi</a></li>
                                                                        <li><a href=\"#\">Maktabgacha ta’lim kafedrasi</a></li>
                                                                       
                                                                       
                                                                       
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>

                                                                <li class=\"mega-menu-item  \">
                                                                    <a href=\"#\" class=\"mega-menu-link\">№4: Kafedralar</a>
                                                                    <ul class=\"mega-submenu \" id=\"menyu-suruluvchi\">
                                                                        <li><a href=\"#\">Texnologik ta'lim kafedrasi</a></li>
                                                                        <li><a href=\"#\">Jismoniy madaniyat kafedrasi</a></li>
                                                                        <li><a href=\"#\">Sirtqi bo'lim</a></li>
                                                                        <li><a href=\"#\">Fakultetlararo jismoniy tarbiya kafedrasi </a></li>
                                                                        <li><a href=\"#\">Boshlang'ich ta'lim kafedrasi</a></li> 
                                                                                                                                              
                                                                    </ul>                                                                   
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>  
                                                    
                                                    
                                                 
                                                </div><!-- end row -->

                                                <!-- Ikkinchi qator boshlandi -->
                                                <div class=\"row\">
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Kengashlar</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">Vasiylik kengashi</a></li>
                                                                <li><a href=\"#\">OTM kengashi</a></li>
                                                                <li><a href=\"#\">Ilmiy uslubiy kengash</a></li>
                                                                <li><a href=\"#\">Ilmiy kengash</a></li>
                                                                <li><a href=\"#\">Yosh olimlar kengashi</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Faoliyat</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"instructors.html\">Institut nizomi</a></li>
                                                                <li><a href=\"instructor-profile.html\">Ta'lim sifati nazorati</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                      
                                                        <div class=\"col-menu col-md-4\">
                                                        <h6 class=\"title\">Fakultetlar</h6>
                                                        <div class=\"content\">
                                                            <ul class=\"menu-col\">
                                                                <li><a href=\"#\">Aniq fanlar fakulteti</a></li>
                                                                <li><a href=\"#\">Tabiiy fanlar fakulteti</a></li>
                                                                <li><a href=\"#\">Tarix va tillar fakulteti</a></li>
                                                                <li><a href=\"#\">Pedagogika fakulteti</a></li>
                                                                <li><a href=\"#\">Maktabgacha va boshlang’ich ta’lim fakulteti</a></li>
                                                                <li><a href=\"#\">Sport va chaqiriqqacha xarbiy ta'lim fakulteti</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>    
                                        
                                                </div><!-- end row -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Faoliyat</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a target=\"_blank\" href=\"#\">E-hujjat</a></li>
                                            <li><a href=\"#\">OTM reytingi</a></li>                                       
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Ilmiy faoliyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Doktorantlar maktabi</a></li>
                                                    <li><a href=\"#\">Ilmiy tadqiqot faoliyati</a></li>
                                                    <li><a href=\"#\">Desertatsiya</a></li>
                                                    <li><a href=\"#\">Aftoreferat</a></li>
                                                    <li><a href=\"#\">Konfrensiyalar</a></li> 
                                                    <li><a href=\"#\">Doktorantura va mustaqil tadqiqotchilar</a></li> 
                                                    <li><a href=\"#\">Ilmiy-tadqiqot foliyatga oid meʼyoriy-huquqiy xujjatlar</a></li> 
                                                    <li><a href=\"#\">Mening innovatsion g'oyam</a></li> 
                                              
                                                                                                                          
                                                </ul>                                                                   
                                            </li>
                                            <li><a href=\"#\">Xalqaro a'loqalar</a></li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Moliyaviy faoliyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Muassasa byujeti</a></li>
                                                    <li><a href=\"#\">Ish xaqini xisoblash va mukofotlarni taqsimlash qoidalari</a></li>
                                                    <li><a href=\"#\">Davlat xaridlariga oid tuzilgan shartnomalar</a></li>
                                                    
                                              
                                                                                                                          
                                                </ul>                                                                   
                                            </li>
                                            <li><a href=\"#\">5 tashabbus markazi</a></li>
                                            <li><a href=\"#\">OTM tarixi</a></li>
                                            <li><a href=\"#\">Madaniy-ma`rifiy faoliy</a></li>
                                            <li><a href=\"#\">Ekologiya va atrof-muhitni muhofaza qilish</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Abiturient</a>
                                        <ul class=\"mega-submenu\">
                                
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Bakalavriyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Abituriyentlardan tushgan arizalar soni</a></li>
                                                    <li><a href=\"#\">Tasviriy sa'nat va muhandislik grafikasi fanlaridan baholanish mezonlari </a></li>
                                                    <li><a href=\"#\">Qabul kvotalari 2019</a></li>
                                                    <li><a href=\"#\">Abituriyentlarga eslatma</a></li>
                                                    <li><a href=\"#\">Hujjatlarni rasmiylashtirish</a></li>
                                                    <li><a href=\"#\">Qabulga oid hujjatlar</a></li>
                                                    <li><a href=\"#\">Qabul nizomi</a></li>
                                                    <li><a href=\"#\">Imtihon fanlari ro'yxati</a></li>
                                                    <li><a href=\"#\">Qabul ko'rsatgichi</a></li>
                                                    <li><a href=\"#\">O'tish ballari</a></li>        
                                                </ul>                                                                   
                                            </li>

                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Magistratura</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Magistratura uchun qabul rejasi</a></li>
                                                    <li><a href=\"#\">Oliy ta'lim muassasalariga o'qishga qabul qilishda milliy xamda halqaro baxolash tizimlari sertifikatlarini tatbiq qilish chora-tadbirlari tog'risida </a></li>
                                                    <li><a href=\"#\">2019-2020 o‘quv yili uchun magistraturaga kirish sinov dasturlari va baholash mezonlari</a></li>                                                        
                                                </ul>                                                                   
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"shop.html\" class=\"mega-menu-link\">Talabalar</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a href=\"#\" target=\"_blank\">Elektron ta'lim tizimi</a></li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Bakalavriyat</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Kunduzgi ta'lim</a></li>
                                                    <li><a href=\"#\">Sirtqi ta'lim</a></li>
                                                    <li><a href=\"#\">Kechki ta'lim</a></li>                                                        
                                                </ul>                                                                   
                                            </li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Magistratura</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Yo'riqnoma</a></li>
                                                    <li><a href=\"#\">Dars jadvali</a></li>
                                                    <li><a href=\"#\">O'zlashtirish</a></li>                                                        
                                                    <li><a href=\"#\">Davomat</a></li>                                                        
                                                    <li><a href=\"#\">Iqtidorli talabalar</a></li>                                                        
                                                    <li><a href=\"#\">Talabalar turar joylari</a></li>                                                        
                                                    <li><a href=\"#\">Davlat imtihonlari</a></li>                                                        
                                                    <li><a href=\"#\">Magisterlik disertatsiyasi himoyasi</a></li>                                                        
                                                                                                      
                                                </ul>                                                                   
                                            </li>
                                            <li class=\"mega-menu-item  \">
                                                <a href=\"#\" class=\"mega-menu-link\">Xorijiy talabalar uchun</a>
                                                <ul class=\"mega-submenu \">
                                                    <li><a href=\"#\">Xorijiy talabalar tо'g'risida ma'lumot</a></li>
                                                    <li><a href=\"#\">Xorijiy talabalar uchun to‘lov kontrakt miqdori</a></li>
                                                    <li><a href=\"#\">Chet el fuqarolari uchun qabul jarayoni</a></li>                                                        
                                                    <li><a href=\"#\">Amaliy о‘quv kurslari</a></li>                                                        
                                                                                                        
                                                                                                      
                                                </ul>                                                                   
                                            </li>
                                            <li><a href=\"#\" target=\"_blank\">\"Mening fikrim\" - jamoaviy murojaatlar portali </a></li>
                                         
                                        </ul>
                                    </li>
                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Hujjatlar</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a href=\"#\">Prezident qaror va farmonlari</a></li>
                                            <li><a href=\"#\">Vazirlik buyruqlari va kollegiya qarorlari</a></li>
                                            <li><a href=\"#\">Hukumat qaror va dasturlari</a></li>
                                            <li><a href=\"#\">OTM normativ xujjatlari</a></li>
                                            
                                        </ul>
                                    </li>

                                    <li class=\"mega-menu-item\">
                                        <a href=\"home-3.html#\" class=\"mega-menu-link\">Bog'lanish</a>
                                        <ul class=\"mega-submenu\">
                                            <li><a href=\"#\">Aloqa</a></li>
                                            <li><a href=\"#\">Virtual Qabulxona</a></li>
                                            <li><a href=\"#\">Mening fikrim</a></li>
                                            <li><a href=\"#\">Telefon raqamlar</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class=\"header_extra d-flex flex-row align-items-center justify-content-end\">
                                <div class=\"header_search\">
                                    <a href=\"home-3.html#\" class=\"btn-default search_btn\"><i class=\"ti ti-search\"></i></a>
                                    <div class=\"header_search_content\">
                                        <form id=\"searchbox\" method=\"get\" action=\"home-3.html#\">
                                            <input class=\"search_query\" type=\"text\" id=\"search_query_top\" name=\"s\" placeholder=\"Enter Keyword\" value=\"#\">
                                            <button type=\"submit\" class=\"btn close-search\"><i class=\"fa fa-search\"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"header_cart\">
                                    <a href=\"home-3.html#\" class=\"button-cart\">
                                        <div class=\"cart_icon\"><i class=\"fa fa-shopping-cart\"></i></div>
                                        <div class=\"cart_count\">0</div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!--header end-->", "C:\\laragon\\www\\OctoberLaravelOffical\\Octoberv5OfficalInstitute/themes/vue-institute/partials/pages/main-menyu.htm", "");
    }
}