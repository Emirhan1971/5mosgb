<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5M OSGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWaiqCMGRTbydf5N1Lpq6zi1rB+H/znGp+Xs/xBUX4FYwXr9ErLqlrxO4HqjI5L5" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
</head>

<body>


<?php
include "navbar.php";
?>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin: 0;">
        <div class="carousel-inner">
            <?php
            function fetchGoogleNewsRSS()
            {
                $currentDate = new DateTime();
                $date30DaysAgo = new DateTime();
                $date30DaysAgo->modify("-30 days");

                $rssUrl = "https://news.google.com/rss/search?q=iş sağlığı güvenliği&hl=tr&gl=TR&ceid=TR:tr";
                $rss = simplexml_load_file($rssUrl);

                if ($rss) {
                    $isFirstSlide = true; // İlk haber için aktif sınıfını sadece bir kere eklemek amacıyla kontrol
                    foreach ($rss->channel->item as $item) {
                        $random = rand(1, 4);

                        $pubDate = new DateTime((string) $item->pubDate);
                        if ($pubDate >= $date30DaysAgo) {
                            $activeClass = $isFirstSlide ? ' active' : ''; // İlk eleman için "active" sınıfını ekle
                            echo "<div class='carousel-item{$activeClass}'>
                                <img src='is" . $random . ".jpg'/700x300' style='background-color: rgba(255,255,255,0.5);' class='d-block w-100 ' alt='Haber' style='display: block;'>
                                <div class='carousel-caption'>
                                    <h3>" . htmlspecialchars($item->title) . "</h3>
                                    <a href='" . htmlspecialchars($item->link) . "' target='_blank' class='btn btn-primary'>Habere Git</a>
                                    <p>Yayınlanma Tarihi: " . $pubDate->format('d-m-Y H:i:s') . "</p>
                                </div>
                              </div>";
                            $isFirstSlide = false; // İlk eleman sonrası aktif sınıfını kullanma
                        }
                    }

                } else {
                    echo "<p>RSS beslemesi yüklenemedi.</p>";
                }
            }

            fetchGoogleNewsRSS();
            ?>
        </div>
        <!-- Slider kontrol butonları -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Önceki</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sonraki</span>
        </button>
    </div>
    <div class="contents">
    <p>
        Ankara merkezli **5M OSGB Eğitim Danışmanlık Mühendislik** şirketi, sektörün deneyimli iki ortağı tarafından kurulmuştur. 
        Ortaklar, şirketi kurmadan önce alanlarında kapsamlı bilgi ve tecrübeye sahiptiler. Bu bilgi birikimini, 
        bize güvenen iş ortaklarımızla paylaşarak sektörü bir adım ileri taşımayı, fark yaratmayı ve mevcut sistemlerin 
        yapılandırılıp iyileştirilmesini sağlamayı hedefliyoruz.
    </p><br>

    <p>
        **5M OSGB**, Ankara ve çevre illerinde geniş bir yelpazede hizmet sunmaktadır. 
        Bu hizmetler arasında OSGB (Ortak Sağlık Güvenlik Birimi) faaliyetleri, iş sağlığı ve güvenliği eğitimleri, 
        işe giriş sağlık muayeneleri ve tetkikleri, mobil araç hizmetleri ile güvenlik file imalatı yer almaktadır. 
        Merkezimiz Ankara olmakla birlikte, Eskişehir, Bolu, Çankırı, Karabük, Kırıkkale, Konya, Aksaray ve Kırşehir gibi 
        çevre illere de hizmet sağlamaktayız.
    </p><br>

    <p>
        İş sağlığı ve güvenliği, ülkemizde **6331 sayılı İş Sağlığı ve Güvenliği Kanunu** ile 30 Haziran 2012 tarihinde Resmi Gazete'de 
        yayımlanarak yasal bir çerçeve kazanmıştır. Henüz yeni ve gelişmekte olan bu sektör, çalışma alanlarındaki tehlike ve riskleri 
        belirleyip çözüm önerileri sunarak çalışanlara daha sağlıklı ve güvenli bir çalışma ortamı hazırlamayı amaçlamaktadır. 
        Bu yaklaşım, bireylerin yaşam ve çalışma standartlarını yükseltmekte ve sektörü diğerlerinden ayıran en önemli özelliği oluşturmaktadır.
    </p><br>

    <p>
        Teknolojinin ve dünyanın sürekli değişimi, iş sektörlerini doğrudan etkilemektedir. Bu değişime uyum sağlamak için 
        sürekli araştırma yapmak, yenilikler katmak ve iş sağlığı ile güvenliği alanındaki yapılandırma ve iyileştirme süreçlerine öncülük etmek önceliklerimizdir. 
        Bu süreçte, hem kurumsal hem de bireysel sorumlulukları ortaya çıkarmayı ve çözüm odaklı yaklaşımlar geliştirmeyi hedefliyoruz.
    </p>
    <hr>

    <strong>MİSYONUMUZ</strong>
    <p>
        İş sağlığı ve güvenliği alanındaki bilgi ve birikimimizi, hem teorik hem de pratik olarak iş ortaklarımıza aktarmak;
        iş dünyasında karşılaşılan tehlike ve riskleri önlemek ve ortadan kaldırmak en temel amacımızdır.
    </p>
    <hr>

    <strong>VİZYONUMUZ</strong>
    <p>
        İş sağlığı ve güvenliği alanında ulusal ve uluslararası düzeyde sürekli gelişime katkı sağlamak, 
        sektöre yenilikçi ve sürdürülebilir bakış açıları kazandırmayı hedeflemekteyiz.
    </p>
</div>


    <a href="https://wa.me/+905307641040" target="_blank"><img class="wp"  src="whatsapp_logo.png"></a>
    <a href="tel:+905307641040" target="_blank"><img class="tel"  src="telefon_logo.png"></a>
   
    <script src="java.js"></script>

</body>
</html>