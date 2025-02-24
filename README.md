# Proje Adı

Bu proje, bir araç kiralama (rent) sistemi, blog ekleme sayfası, “Hakkımızda” bölümü ve kullanıcı giriş/kayıt alanları gibi modüllerden oluşan çok dosyalı bir web projesidir. Proje PHP, CSS ve JavaScript dosyalarından oluşmaktadır. Aşağıda proje yapısı, kurulum talimatları ve dosya açıklamalarını bulabilirsiniz.

---

## İçindekiler

1. [Genel Bakış](#genel-bakış)  
2. [Özellikler](#özellikler)  
3. [Kurulum](#kurulum)  
4. [Dosya ve Klasör Yapısı](#dosya-ve-klasör-yapısı)  
5. [Kullanım](#kullanım)  

---

## Genel Bakış

Proje, bir araç kiralama web sitesi senaryosunu örnek alarak geliştirilmiş; içinde blog ekleme, hakkımızda sayfası, giriş/kayıt formları gibi farklı modüller barındıran bir yapı sunmaktadır. CSS dosyaları ile özelleştirilmiş tasarımlar, JavaScript dosyaları ile sayfa etkileşimleri ve PHP dosyaları ile sunucu tarafı işlemler yönetilir.

Bu projeyi istediğiniz bir PHP sunucusunda (örn. XAMPP, Laragon vb.) çalıştırabilir, tasarımı genişletebilir veya kendi ihtiyaçlarınıza uyarlayabilirsiniz.

---

## Özellikler

- **Kullanıcı Girişi ve Kaydı**: `login.php` ile gelen formların tasarımı ve `app.js` ile formlar arası geçiş animasyonu.
- **Araç Kiralama (Rent) Sayfası**: `rent.css` ile stil verilen kiralama formu veya takvim, ödeme gibi alanlar.
- **Blog Ekleme**: `new_blog.php` ve `new_blog.css` dosyaları ile oluşturulan blog ekleme formu.
- **Hakkımızda (About) Sayfası**: `about.php` ve `about.css` ile stil verilmiş bir tanıtım sayfası.
- **Veritabanı Bağlantısı**: `database.php` gibi dosyalarla veritabanına bağlantı (muhtemelen MySQL) örneği.
- **Ortak Stil Kılavuzu**: `style-guide.md` ve `bsx.css` gibi dosyalarda bulunan renk, font ve diğer tasarım bileşenleri.
- **Ana Sayfa & Menü**: `index.txt` içeriği ile oluşturulan konsept anasayfa yerleşimi, `script.js` üzerinden navbar hareketleri.

---

## Kurulum

1. **Ortam Hazırlığı**  
   - Bir PHP çalıştırma ortamı edinin (örn. XAMPP, WAMP, MAMP, Laragon vb.).
   - Proje dosyalarını, sunucu dizininize (örn. `htdocs` veya `www`) yerleştirin.

2. **Veritabanı Ayarları**  
   - Eğer veritabanı kullanacaksanız, `database.php` içindeki ayarları (sunucu adı, kullanıcı adı, şifre, veritabanı adı) kendi sisteminize göre güncelleyin.
   - Projenin gerektirdiği tabloları oluşturmak için gerekliyse kendi SQL komutlarınızı veya proje içinde varsa .sql dosyalarını kullanın.

3. **Bağımlılıklar**  
   - Proje CSS/JS kaynaklarını internet üzerinden (CDN) kullanıyor olabilir. Eğer yerel olarak kullanmak isterseniz, gerekli kütüphaneleri indirip uygun `<link>` ve `<script>` etiketlerini düzenleyin.
   - Google Fonts ve Ionicons gibi harici servisleri kullanmak için `style-guide.md` ve benzeri dosyalarda belirtilen `<link>` ve `<script>` etiketlerini `head` bölümünde eklediğinizden emin olun.

4. **Çalıştırma**  
   - Sunucunuzu (XAMPP vs.) başlatın ve tarayıcınızda şu şekilde projenize gidin:  
     ```
     http://localhost/projeniz-adi/
     ```
   - Hangi sayfayı ana sayfa yapacağınıza göre bir yönlendirme ya da index dosyası ayarlayabilirsiniz.

---

## Dosya ve Klasör Yapısı

Proje içinde yer alan başlıca dosya ve klasörler:

├── about.php # Hakkımızda sayfası (PHP) 
├── about.css # Hakkımızda sayfasının stil dosyası 
├── app.js # Giriş/Kayıt form animasyonları (JS) 
├── bsx.php # Ek PHP dosyası (detaylı işlevsellik için) 
├── bsx.css # Global stil, renk ve tipografi ayarları 
├── database.php # Veritabanı bağlantı ayarları (PHP) 
├── index.txt # Ana sayfa içerik düzeni ve referans metni 
├── login.php # Kullanıcı giriş ve kayıt sayfası (PHP) 
├── new_blog.php # Blog gönderisi ekleme sayfası (PHP) 
├── new_blog.css # Blog ekleme formu stil dosyası 
├── rent.php # Araç kiralama sayfası (PHP) 
├── rent.css # Araç kiralama sayfası stil dosyası 
├── save_post.php # Blog gönderisi kaydetme işlemleri (PHP) 
├── script.js # Navbar ve scroll animasyonları (JS) 
├── style.css # Genel stil ve responsive tasarım (CSS) 
├── style-guide.md # Tasarım rehberi (renkler, fontlar, vs.) 
└── ... # Diğer destekleyici dosyalar



---

## Kullanım

- **Ana Sayfa:**  
  `index.txt`'de yer alan içerik referans alınarak, kullanıcılar araç kiralama, blog ve diğer bilgilere erişebilir.

- **Giriş/Kayıt İşlemleri:**  
  `login.php` üzerinden kullanıcılar giriş yapabilir veya kayıt olabilir. `app.js` dosyası form geçişlerini animasyonlarla destekler.

- **Araç Kiralama:**  
  `rent.php` ve `rent.css` dosyaları, araç seçimi, ödeme ve takvim gibi işlevleri sunar.

- **Blog Yönetimi:**  
  `new_blog.php` ile blog gönderileri eklenebilir ve `save_post.php` üzerinden sunucuya kaydedilir.

- **Hakkımızda:**  
  `about.php` ve `about.css` dosyaları, şirket ve proje hakkında detaylı bilgi verir.







