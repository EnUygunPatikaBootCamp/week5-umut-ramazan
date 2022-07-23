#  PHP PDO nedir? Hangi amaçla kullanılır?

 - PDO, PHP Data Object (PHP Veri Nesneleri) kısaltmasıdır.

PDO, desteklediği veritabanları için ortak metot ve özellikleri barındıran bir OOP sınıfıdır.


 - PHP 5 ile birlikte gelen OOP desteğiyle, OOP ile uygulama geliştirmenin kolaylığı ve esnekliği PHP’ye de gelmiştir.
 - PDO, PHP’nin OOP desteği sayesinde, PHP geliştiricileri tarafından yazılmış veritabanı işlemleri için ortak bir yapı sunar.

PDO öncesinde her bir veritabanı için farklı bir fonksiyon veya eklenti kullanılıyordu (MySQL için mysql_, ODBC için odbc_, Oracle için oci_ vb.).
 - PDO içerisinde bulunan ön hazırlık sorgu yapısı sayesinde SQL Injection gibi istemeyen durumlar içinde çözüm sunar.

 - PDO yapısını öğrenerek desteklediği tüm veritabanı sistemleri üzerinde işlem yapabilirsiniz. Ayrıca PDO bir OOP sınıfı olduğundan kalıtım alınarak genişletilebilir.



 # DB Index nedir? Avantajları ve dezavantajları nelerdir?

- SQL içerisinde kullanılan İndex kelimesini gösterge, işaret, içindekiler olarak çevirebiliriz.

- İndex veri tabanı sorgularını hızlandırmak için kullanılır.

- Oluşturulan index tablo veya diğer veri tabanı nesneleri gibi görünmez sadece sorguları hızlandırmak için kullanılır.
 
 - Her bir tablodaki az sayıda indeks makul. Bunlar, tipik sorgu yükü göz önünde bulundurularak tasarlanmalıdır. Her tablodaki her sütunu dizine eklerseniz, veri değişiklikleri yavaşlar. Verileriniz statik ise, o zaman bu bir sorun değildir. Ancak, tüm hafızayı indekslerle birlikte tüketmek bir sorun olabilir.







