<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5M OSGB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="icon" href="logo.png">
    <style>
        .contents-hizmetlerimiz {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .card_hizmetlerimiz {
            flex: 1 1 calc(33.333% - 20px);
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .baslik {
            font-size: 18px;
            font-weight: bold;
            color: #ff6600;
        }

        .hizmetlerimiz {
            margin: 20px auto;
            max-width: 1200px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?><br><br>
    <div class="hizmetlerimiz">
        <h2 style="color:black; text-align:center;">HİZMETLERİMİZ</h2>
        <hr>
        <div class="contents-hizmetlerimiz">
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">İş Sağlığı ve Güvenliği Danışmanlığı</strong>
                    <br>
                    <hr>
                    İş yerinizin daha güvenli ve sağlıklı bir ortam sunabilmesi için profesyonel danışmanlık hizmetleri
                    sağlıyoruz. Çalışanlarınızın iş kazalarından korunmasını ve iş süreçlerinin mevzuata uygun şekilde
                    ilerlemesini garanti altına alıyoruz.
                </p>
            </div>
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">İşyeri Hekimliği Hizmetleri</strong>
                    <br>
                    <hr>
                    İşyeri hekimliği kapsamında, çalışanlarınızın düzenli sağlık kontrollerini gerçekleştiriyor ve iş
                    sağlığına yönelik eğitimler sunuyoruz. Sağlık raporları, periyodik kontroller ve ilk yardım destekleri
                    ile yanınızdayız.
                </p>
            </div>
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">Risk Değerlendirmesi</strong>
                    <br>
                    <hr>
                    İş yerinizde oluşabilecek tüm riskleri tespit ediyor, bu riskleri en aza indirmek için gerekli önlemleri
                    belirliyoruz. Risk analizi raporları ile işletmenizin daha güvenli bir yer olmasını sağlıyoruz.
                </p>
            </div>
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">Acil Durum Planlaması</strong>
                    <br>
                    <hr>
                    Olası acil durumlara karşı hazırlıklı olmak için kapsamlı bir acil durum planı hazırlıyoruz. Yangın,
                    deprem ve diğer beklenmedik durumlar için işletmenize özel çözümler sunuyoruz.
                </p>
            </div>
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">Çalışan Eğitimi</strong>
                    <br>
                    <hr>
                    Çalışanlarınızın iş sağlığı ve güvenliği bilincini artırmak için eğitim programları düzenliyoruz. Eğitim
                    içeriklerimiz, hem teorik hem de pratik bilgilerle desteklenerek çalışanların iş yerinde daha bilinçli
                    hareket etmesini sağlar.
                </p>
            </div>
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">Ortam Ölçümleri</strong>
                    <br>
                    <hr>
                    İş yerinizdeki ortam koşullarını ölçerek, çalışan sağlığını etkileyebilecek faktörleri tespit ediyoruz.
                    Gürültü, toz, aydınlatma gibi ölçümlerle çalışma ortamını iyileştirmenize yardımcı oluyoruz.
                </p>
            </div>
            <div class="card_hizmetlerimiz">
                <p><strong class="baslik">Periyodik Kontroller</strong>
                    <br>
                    <hr>
                    İş ekipmanlarının düzenli kontrolü, çalışan güvenliği açısından büyük önem taşır. Kaldırma makineleri,
                    basınçlı kaplar ve elektrik tesisatının düzenli periyodik kontrollerini gerçekleştiriyoruz.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
